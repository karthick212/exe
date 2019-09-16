var dbconfig = require("../config/db");
const common = require('../controller/common-Controller')

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
  },
  // User Suspend
 AddSuspend(user,callback) {

  let todate=common.todaydate();
  var arr1=[user.cid, user.fromdate, user.todate,user.remarks,user.loginid,todate]
  let insertQuery = "INSERT INTO `tblconductorsuspend` (`Cid`, `FromDate`, `ToDate`, `Remarks`, `isActive`, `Loginid`, `SDate`) VALUES (?,?,?,?, 1,?,?);"
  let st= dbconfig.query(insertQuery, arr1, (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'SuspendCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
  console.log(st)
},
UpdateSuspend(user,callback) {
  let todate=common.todaydate();
  var arr1=[user.cid, user.fromdate, user.todate,user.remarks,user.loginid,todate,user.id]
  let insertQuery = 'Update `tblconductorsuspend` set Cid=?,FromDate=?,ToDate=?,Remarks=?,LoginId=?,SDate=?  where id=?'
  return dbconfig.query(insertQuery,arr1, (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'SuspendCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteSuspend(user,callback) {
  let insertQuery = 'Update `tblconductorsuspend` set isActive=0  where id=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'SuspendCreation',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getSuspend(user,callback) {
  let cond=""
  var param=[]
  console.log(user)
  if(user.id!=undefined)
  {
    cond=" and id=?";
    param=user.id
  }

  let insertQuery = "select * from vw_conductorsuspend where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},

// User Suspend
 AddMapping(user,callback) {

  let todate=common.todaydate();
  var arr1=[user.busid, user.cid, user.timing, user.loginid,todate]
  let insertQuery = "INSERT INTO `tblbusmapping` (`busid`, `cid`, `Timing`, `isActive`, `LoginId`, `SDate`) VALUES (?,?,?,1,?,?);"
  let st= dbconfig.query(insertQuery, arr1, (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusMappingCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
  console.log(st)
},
UpdateMapping(user,callback) {
  let todate=common.todaydate();
  var arr1=[user.busid, user.cid, user.timing, user.loginid,todate,user.id]
  let insertQuery = 'Update `tblbusmapping` set busid=?,cid=?,Timing=?,LoginId=?,SDate=?  where id=?'
  return dbconfig.query(insertQuery,arr1, (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusMappingCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteMapping(user,callback) {
  let insertQuery = 'Update `tblbusmapping` set isActive=0  where id=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusMappingCreation',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getMapping(user,callback) {
  let cond=""
  var param=[]
  console.log(user)
  if(user.id!=undefined)
  {
    cond=" and id=?";
    param=user.id
  }

  let insertQuery = "select * from vw_busmapping where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
}

};

module.exports = adminController;
