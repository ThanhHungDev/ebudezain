'use strict'
var bcrypt = require('bcrypt');
var salt = 5;
module.exports = (sequelize, DataTypes) => {
    const TOKEN_REFESH = sequelize.define('TOKEN_REFESH', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        user_id: { 
            type: DataTypes.BIGINT, 
            allowNull: false
        },
        token_refesh: { 
            type: DataTypes.STRING(255), 
            allowNull: false 
        },
        client : { 
            type: DataTypes.STRING(1024) 
        },
        create_at: { 
            type: DataTypes.DATE, 
            defaultValue: DataTypes.NOW 
        }
    }, {
        timestamps: false,
        tableName: "token_refesh",
    });
    TOKEN_REFESH.getRefeshDataByToken = async token_refesh => {
        if( !token_refesh ){
            return false;
        }
        var token = await TOKEN_REFESH.findOne({where : {token_refesh}})
        .catch( error => {
            console.log( "getRefeshDataByToken " + err.message );
            return false;
        });
        return token.getObjectTokenRefesh();
        
    }
    TOKEN_REFESH.saveTokenRefesh = async (user, client) => {
        if( !user ){
            return false;
        }
        var refesh = bcrypt.hashSync( JSON.stringify(user) , salt );
        ///insert db
        var data_create = {
            user_id: user.id,
            token_refesh: refesh,
            client
        }
        var newToken = await TOKEN_REFESH.build( data_create ).save();
        if( newToken ){
            return newToken.getObjectTokenRefesh();
        }
        return false;
    }
    TOKEN_REFESH.getTokenByUserIdWithClient = async function (user_id, client) {
        var token = await TOKEN_REFESH.findOne({ where: { user_id, client }});
        if (token) {
            return token.token_refesh;
        }
        return false;
    }
    TOKEN_REFESH.getOrCreateTokenRefesh = async function (_user, _client) {
        var client = JSON.stringify({..._client});
        /// get token refesh by client and user
        var db_refesh = await TOKEN_REFESH.getTokenByUserIdWithClient(_user.id, client);
        if(db_refesh){
            return db_refesh;
        }
        /// create token if not in db
        var save_refesh = await TOKEN_REFESH.saveTokenRefesh(_user , client);
        if (!save_refesh) {
            return false;
        }
        return save_refesh.token_refesh;
    }
    TOKEN_REFESH.prototype.getObjectTokenRefesh = function () {
        return {
            id: this.id,
            user_id : this.user_id,
            token_refesh: this.token_refesh,
            client: this.client
        };
    };
    return TOKEN_REFESH;
}