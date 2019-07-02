var dbconfig = require("../config/db");
var adminController = {
  FetchAllDetails(callback) {
    return dbconfig.query("select * from admin", callback);
  },
  LoginAdmin(data, callback) {
    var username = data.email;
    var password = data.password;
    let query = "SELECT count(*) as cnt FROM tbl_register WHERE Email = ? AND Password=?";
    dbconfig.query(query, [username, password], callback);
  },
  mailAuth(data, callback) {
    var username = data.email;
    //var password = data.password;
    let query = "SELECT count(*) as cnt FROM tbl_register WHERE Email = ?";
    dbconfig.query(query, [username], (err,results)=>{
      //console.log(results[0])
      return callback(err,results);
    });
  },
  UserIdGen(cb){
    let qry='select ifnull(max(UserSerial),0)+1 as cnt from tbl_register';
    dbconfig.query(qry,(err,results) => {
      return cb(results)
    })
  },
  RegisterAdmin(admin, callback) {
    //console.log(admin.username);
    console.log(admin)
    let todate = new Date().toISOString().slice(0, 10);
    return dbconfig.query(
      "INSERT INTO tbl_register(`UserId`, `UserSerial`, `Name`,    `Email`,      `Password`,      `MobileNo`,  `State`,     `Language`,    `ServiceType`,      `BusServiceType`,     `isActive`, `SDate`) VALUES (?,?,?,?,?,?,?,?,?,?,'1',?)",
                              [admin.uid, admin.userial, admin.name, admin.email, admin.password, admin.mobno, admin.state, admin.language, admin.servicetype, admin.busservicetype, todate],
      callback
      );
  }
};

module.exports = adminController;
