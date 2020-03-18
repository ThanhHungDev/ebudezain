'use strict'
module.exports = (sequelize, DataTypes) => {
    const POST = sequelize.define('POST', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        title: {
            type: DataTypes.STRING(100),
            required: true
        },
        slug : {
            type: DataTypes.STRING(100),
            required: true
        },
        content : {
            type: DataTypes.TEXT,
            required: true
        },
        custom : { 
            type: DataTypes.JSON 
        }, 
        topic_id : { 
            type: DataTypes.BIGINT 
        },
        view : { 
            type: DataTypes.BOOLEAN, 
            defaultValue: false 
        },
        create_at: { 
            type: DataTypes.DATE, 
            defaultValue: DataTypes.NOW 
        },
        update_at: { 
            type: DataTypes.DATE, 
            defaultValue: DataTypes.NOW 
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "post"
    });
    POST.checkSlugExist = async function( slug ){
        var post = await POST.findOne({ where: { slug } })
        .catch(err => { console.log(err.message); return false });
        if(post){
            return post.getObjectPost();
        }
        return false;
    }
    POST.prototype.getObjectPost = function () {
        return {
            id: this.id,
            title: this.title,
            slug : this.slug,
            content : this.content,
            custom : this.custom, 
            topic_id : this.topic_id,
            view : this.view,
            create_at: this.create_at,
            update_at: this.update_at
        }
    };
    return POST;
};