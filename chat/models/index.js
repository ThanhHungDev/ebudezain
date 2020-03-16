///connect database
'use strict'
/**
 * import
 */
var Sequelize = require("sequelize");
var CONFIG =  require('../configs');
/**
 * variable
 */
const db = {};
var sequelize = new Sequelize(
    CONFIG.database.database_name, 
    CONFIG.database.username, 
    CONFIG.database.password, 
    {
        host: CONFIG.database.host, 
        dialect: CONFIG.database.dialect,
        logging:  CONFIG.database.logging
    }
);
// sequelize package
db.Sequelize = Sequelize;
// sequelize instance
db.sequelize = sequelize;
/**
 * tables
 */
db.USER         = require('./User.js')(sequelize, Sequelize);
db.COMMENT      = require('./Comment.js')(sequelize, Sequelize);
db.TOPIC        = require('./Topic.js')(sequelize, Sequelize);
db.TAG          = require('./Tag.js')(sequelize, Sequelize);
db.POST         = require("./Post.js")(sequelize, Sequelize);
db.TAG_ACTIVITY = require("./TagActivity.js")(sequelize, Sequelize);
db.TOKEN_REFESH = require("./TokenRefesh.js")(sequelize, Sequelize);
db.NOTIFICATION = require("./Notification.js")(sequelize, Sequelize);
/**
 * Relations
 */
db.POST.hasMany(db.TAG_ACTIVITY, { foreignKey: 'post_id' });
db.TAG_ACTIVITY.belongsTo( db.TAG, { foreignKey: 'tag_id' });
// db.posts.belongsTo(db.users);
// db.users.hasMany(db.posts);
db.isExistSlug =  slug => { 
    var models = [ db.TAG, db.POST , db.TOPIC ];
    return Promise.all(
        models.map( model => { 
            return model.findOne({ where : { slug }})
            .then( record => {
                if( !record ){
                    return false;
                }
                return true;
            })
        })
    ).then(check_lst => {
        return check_lst.filter( check => check).length;
    });
}
module.exports = db;