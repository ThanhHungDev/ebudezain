'use strict'
module.exports = (sequelize, DataTypes) => {
    const NOTIFICATION = sequelize.define('NOTIFICATION', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        content: {
            type: DataTypes.STRING(100),
            required: true
        },
        custom : { 
            type: DataTypes.JSON 
        },
        user_account_id : {
            type: DataTypes.BIGINT 
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "notification"
    });
    NOTIFICATION.save = async function(notification){
        return NOTIFICATION.build(notification).save()
        .then(_notification => {
            return _notification.getObjectNotification();
        })
        .catch(error => {
            console.log(error.message);
            return false;
        })
    }
    NOTIFICATION.total = async function(user_id){
        return NOTIFICATION.count({
            where: [{ 'user_account_id' : user_id }],
            col: 'id'
        })
        .then(count => {
            return count;
        })
        .catch(error => {
            console.log(error.message);
            return 0;
        })
    }
    NOTIFICATION.prototype.getObjectNotification = function () {
        return {
            id             : this.id,
            content        : this.content,
            custom         : this.custom,
            user_account_id: this.user_account_id
        }
    };
    return NOTIFICATION;
};