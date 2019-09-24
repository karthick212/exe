var dbconfig = require("../config/db");
const common = require('../controller/common-Controller')
const Request = require('request')

var adminController = {
  GenOtp(mobno, callback) {    
    let todate = common.todaydate();
    var hours = todate.getHours() > 12 ? todate.getHours() - 12 : todate.getHours();
    hours = hours < 10 ? "0" + hours : hours;
    var minutes = todate.getMinutes() < 10 ? "0" + todate.getMinutes() : todate.getMinutes();
    var seconds = todate.getSeconds() < 10 ? "0" + todate.getSeconds() : todate.getSeconds();
    time = hours + ":" + minutes + ":" + seconds
    let RandomOtp = Math.floor(100000 + Math.random() * 900000)
    let status = 'verified'
    let updateQry = "UPDATE tbluserotp SET otp = '" + RandomOtp + "', date = '" + todate + "', time = '" + time + "' WHERE MobileNo ='" + mobno + "'"
    return dbconfig.query(updateQry, (err, results) => {
     if (err) throw err;
     if (results.affectedRows > 0) {
      return callback(null, results, RandomOtp)
    } else {

      let insertQuery = 'INSERT INTO `tbluserotp` (MobileNo, otp, date, time)VALUES (?,?,?,?)'
      return dbconfig.query(insertQuery, [mobno, RandomOtp, todate, time], callback(null, results, RandomOtp))
    }
  })
  },
  // OTP Check
  checkOtp(userdata, cb) {
    let query = 'SELECT count(*) as cnt FROM tbluserdetails WHERE OTP = ? and MobileNo = ?'
    return dbconfig.query(query, [userdata.otp, userdata.mobno], (err, rows) => {
      if (rows[0].cnt > 0)
      {
        return cb(null,cb)
      }
      else{
        return cb(null,0,"")        
      }
    })
  },
  AddUser(user,callback) {
    let todate=common.todaydate();
    let RandomOtp = Math.floor(100000 + Math.random() * 900000)
    var arr1=[user.name, user.email, user.mobno, user.password,todate,RandomOtp]
    let qry="select count(*) as cnt from tbluserdetails where MobileNo=?"
    dbconfig.query(qry,user.mobno,(err,results1)=>{
      console.log(results1)
      if(results1[0].cnt==0)
      {
        let insertQuery = "INSERT INTO `tbluserdetails` (`Name`, `Email`, `MobileNo`, `Password`, `isActive`, `SDate`, `OTP`) VALUES (?,?,?,?,1,?,?);"
        dbconfig.query(insertQuery, arr1, (err, results) => {
          console.log(results)
          if (results.affectedRows > 0) {
            const smsCont ='Dear Customer, your OTP for SMS notification registration is '+RandomOtp +'. Use this OTP to register.';
            var Otpurl = 'http://msg.spyderinfotech.com/app/smsapi/index.php?key=5befcba7d1a4d&type=text&contacts='+ user.mobno+'&senderid=SPRINF&msg='+smsCont 
        //let tokens = jwt.sign({ data: rows }, SECRET_KEY, { expiresIn: '10s' })
        Request.get(Otpurl)        
        //common.LogData(user.loginid,'UserCreation',results.insertId,'Save');
        return callback(null, results,{'message': 'success','status':'Success' })
      }
    })
      }
      else
        return callback(null,results1, {'message': 'MobileNo Already Exist','status':'Failed' })  
    })  
    //console.log(st)
  },
  UserLoginAuth(data, callback) {
    var username = data.mobno;
    var password = data.password;
    let query = "SELECT count(*) as cnt FROM tbluserdetails WHERE MobileNo = ? AND Password=?";
    dbconfig.query(query, [username, password], callback);
  },  
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
