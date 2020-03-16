'use strict'
var CONFIG = require("../configs");
var { ChangeToSlug } = require("../helpers");
var { isSlug } = require("./../helpers/validate.js");
module.exports = (sequelize, DataTypes) => {
    const TAG = sequelize.define('TAG', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        name: {
            type: DataTypes.STRING(100),
            required: true
        },
        slug: { 
            type: DataTypes.STRING(100),
            validate: {
                isUnique: async function (slug, next) {
                    var tag_exist_slug = await TAG.findOne({where: {slug}})
                    if( tag_exist_slug ){
                        next("Slug Tag exist!");
                    }
                    next();
                }
            }
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "tag"
    });
    TAG.insert = async function( tag ){
        var { name } = tag;
        var slug = ChangeToSlug( name );
        var tag = {
            name : name.toUpperCase(), 
            slug
        }
        if( typeof name != 'string' ){
            throw new Error('invalid name is not string');
        }
        if( !slug.toString().match( isSlug ) ){
            throw new Error('invalid name is not a slug');
        }
        // insert
        return TAG.build( tag ).save()
        .then( tag_new => {
            if( tag_new ){
                cache.del(CONFIG.CACHE.ALL_TAG);
                return tag_new.getObjectTag();
            }
            throw new Error('insert tag error!');
        })
        .catch( error => {
            var result_catch = null;
            if( error.hasOwnProperty("name") && error.name == 'SequelizeValidationError' ){
                result_catch = error.errors[0].message;
            }
            throw (result_catch ? new Error(result_catch) : new Error(error.message));
        });
    }
    TAG.getAllTag = async function(offset, limit){
        var all = await TAG.findAll({ offset, limit });
        if( all && all.length ){
            var all_tag = all.map( item => {
                return item.getObjectTag()
            });
            cache.put(CONFIG.CACHE.ALL_TAG, all_tag );
            return all_tag;
        }
        throw new Error('error in get all tag model');
    }
    TAG.prototype.getObjectTag = function () {
        return {
            id: this.id,
            name: this.name,
            slug : this.slug
        };
    };
    return TAG;
};