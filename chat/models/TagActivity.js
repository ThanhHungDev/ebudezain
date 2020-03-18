'use strict'
var CONFIG = require("../configs");
var { ChangeToSlug } = require("../helpers");
var { isSlug } = require("./../helpers/validate.js");
module.exports = (sequelize, DataTypes) => {
    const TAG_ACTIVITY = sequelize.define('TAG_ACTIVITY', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        post_id: { 
            type: DataTypes.BIGINT 
        },
        tag_id: { 
            type: DataTypes.BIGINT 
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "tag_activity"
    });
    TAG_ACTIVITY.insertMulti = async function( tags ){
        return TAG_ACTIVITY.bulkCreate(tags)
        .then(function() { 
            return true;
        })
        .catch( error => {
            return false;
        })
    }
    TAG_ACTIVITY.prototype.getObjectTagActivity = function () {
        return {
            id: this.id,
            post_id: this.name,
            tag_id : this.tag_id
        };
    };
    return TAG_ACTIVITY;
};