'use strict'
module.exports = (sequelize, DataTypes) => {
    const COMMENT = sequelize.define('COMMENT', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        content_md : {
            type: DataTypes.TEXT,
            required: true
        },
        content_html : { 
            type: DataTypes.TEXT 
        }, 
        user_account_id : { 
            type: DataTypes.BIGINT 
        }, 
        reply : {
            type: DataTypes.BIGINT
        },
        block_id : {
            type: DataTypes.BIGINT
        },
        index : {
            type: DataTypes.INTEGER
        },
        type_index: {
            type: DataTypes.STRING(100),
            required: true
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "comment"
    });
    COMMENT.save = async function(comment){
        return COMMENT.build(comment).save()
        .then(_comment => {
            return _comment.getObjectComment();
        })
        .catch(error => {
            console.log(error.message);
            return false;
        })
    }
    
    COMMENT.getUserByCommentId = async function( id ){
        var comment = await COMMENT.findOne({ where: { id } }).catch(err => false);
        if (comment) {
          return comment.getObjectComment().user_account_id;
        }
        return 0;
    }
    COMMENT.prototype.getObjectComment = function () {
        return {
            id             : this.id,
            content_md     : this.content_md,
            content_html   : this.content_html,
            user_account_id: this.user_account_id,
            reply          : this.reply,
            block_id       : this.block_id
        }
    };
    return COMMENT;
};