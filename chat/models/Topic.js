'use strict'
var { ChangeToSlug } = require("../helpers");
var { isSlug } = require("./../helpers/validate.js");
var CONFIG = require("../configs");
module.exports = (sequelize, DataTypes) => {
    const TOPIC = sequelize.define('TOPIC', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        name: { 
            type: DataTypes.STRING(100)
        },
        slug: { 
            type: DataTypes.STRING(100),
            validate: {
                isUnique: async function (slug, next) {
                    var topic_exist_slug = await TOPIC.findOne({where: {slug}})
                    if( topic_exist_slug ){
                        next("Slug Topic exist!");
                    }
                    next();
                }
            }
        },
        parent_id: { 
            type: DataTypes.INTEGER, defaultValue: null 
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "topic"
    });
    TOPIC.insert = async function( topic ){
        var { name, parent_id } = topic;
        var slug = ChangeToSlug( name );
        var topic = {
            name: name.toUpperCase(), slug, parent_id
        }
        if( typeof name != 'string' ){
            throw new Error('invalid name not is string');
        }
        if( !slug.toString().match( isSlug ) ){
            throw new Error('invalid name not a slug');
        }
        if( parent_id != null && typeof parent_id != 'number'){
            throw new Error('invalid parent id is fail');
        }
        // insert
        return TOPIC.build(topic).save()
        .then( topic_new => {
            if( topic_new ){
                cache.del(CONFIG.CACHE.ALL_TOPIC);
                return topic_new.getObjectTopic();
            }
            throw new Error('insert topic error!');
        })
        .catch( error => {
            var result_catch = null;
            if( error.hasOwnProperty("name") && error.name == 'SequelizeValidationError' ){
                result_catch = error.errors[0].message;
            }
            throw (result_catch ? new Error(result_catch) : new Error(error.message));
        });
    }
    TOPIC.getAllTopic = async function(offset, limit){
        var all = await TOPIC.findAll({ offset, limit });
        if( all && all.length ){
            var all_topic = all.map( item => {
                return item.getObjectTopic()
            });
            cache.put(CONFIG.CACHE.ALL_TOPIC, all_topic );
            return all_topic;
        }
        throw new Error('error in get all topic model');
    }
    TOPIC.prototype.getObjectTopic = function() {
        return {
            id : this.id,
            name: this.name,
            slug : this.slug,
            parent_id : this.parent_id
        };
    };
    return TOPIC;
};