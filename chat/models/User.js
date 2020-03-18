'use strict'
var bcrypt = require('bcrypt');
var CONFIG = require("../configs");
module.exports = (sequelize, DataTypes) => {
    const USER = sequelize.define('USER', {
        id: {
            type: DataTypes.INTEGER,
            autoIncrement: true,
            primaryKey: true
        },
        name: {
            type: DataTypes.STRING,
            required: true
        },
        email: {
            type: DataTypes.STRING,
            validate: {
                isEmail:true,
                isUnique: function (value, next) {
                    var self = this;
                    USER.findOne({where: {email: value}})
                        .then(function (user) {
                            // reject if a different user wants to use the same email
                            if (user && self.id !== user.id) {
                                return next('Email already in use!');
                            }
                            return next();
                        })
                        .catch(function (err) {
                            return next(err);
                        });
                }
            },
            unique: { 
                args: true, 
                msg: 'Email address already in use!' 
            }
        },
        password: { 
            type: DataTypes.STRING 
        },
        mobile: { 
            type: DataTypes.STRING 
        },
        avatar: { 
            type: DataTypes.STRING 
        },
        role: {
            type: DataTypes.ENUM,
            values: ['user', 'admin', 'disabled']
        },
        create_at: {
            type: DataTypes.DATE,
            allowNull: false,
            defaultValue: DataTypes.NOW
        },
        update_at:  {
            type: DataTypes.DATE,
            allowNull: false,
            defaultValue: DataTypes.NOW
        }
    }, {
        underscored: true,
        timestamps: false,
        tableName: "user_accounts"
    });
    USER.auth = async function( email, password ){
        var user = await USER.findOne({ where: { email } });
        if (user && bcrypt.compareSync(password, user.password)) {
          return user.getObjectUser();
        }
        return false;
    }
    USER.getUserById = async function( id ){
        var user = await USER.findOne({ where: { id } }).catch(err => false);
        if (user) {
          return user.getObjectUser();
        }
        return false;
    }
    USER.getAllUser = async function(){
        return USER.findAll({where : { role : 'user'}})
        .then(users => {
            if( users && users.length ){
                var listUser = users.map(user => user.getObjectUser());
                cache.put( CONFIG.CACHE.ALL_USER, listUser);
                return listUser;
            }
        })
        .catch(error => {
            throw new Error("can't get all user");
        })
    }
    USER.saveUser = async function(user){
        return USER.build(user).save()
        .then(_user => {
            return _user.getObjectUser();
        })
        .catch(error => {
            console.log(error);
            throw new Error("can't save user");
        })
    }
    USER.checkEmailExist = async function(email){
        var result =  await USER.findOne({ where: { email } }).then(result => result).catch(error => false);
        if( result ){
            return true;
        }
        return false;
    }
    USER.prototype.getObjectUser = function () {
        return {
            id : this.id,
            name: this.name,
            email : this.email,
            mobile : this.mobile,
            avatar :this.avatar,
            role : this.role,
            create_at : this.create_at,
            update_at: this.update_at
        };
    };
    return USER;
};