var dbconfig = require('../config/db')
const common = require('../controller/common-Controller')

var UserController = {
 // User Registration
 AddUser(user,callback) {

  let todate=common.todaydate();
  var arr1=[user.role, user.mobno, user.username,user.password,user.fullname,user.gender,user.email,user.telephone,user.address,user.state,user.country,user.pincode,user.specalization,user.status,user.loginid,todate]
  let insertQuery = "INSERT INTO `tbluser`(`Role`, `MobileNo`, `Username`, `Password`, `Fullname`, `Gender`, `Email`, `Telephone`, `Address`, `State`, `Country`, `Pincode`, `Specalization`, `Status`, `isActive`, `LoginId`, `SDate`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1, ?, ?)"
  let st= dbconfig.query(insertQuery, arr1, (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'UserCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
  console.log(st)
},
UpdateUser(user,callback) {
  let todate=common.todaydate();
  var arr1=[user.role, user.mobno, user.username,user.password,user.fullname,user.gender,user.email,user.telephone,user.address,user.state,user.country,user.pincode,user.specalization,user.status,user.loginid,todate,user.id]
  let insertQuery = 'Update `tbluser` set Role=?,MobileNo=?,Username=?,Password=?,Fullname=?,Gender=?,Email=?,Telephone=?,Address=?,State=?,Country=?,Pincode=?,Specalization=?,Status=?,LoginId=?,SDate=?  where id=?'
  return dbconfig.query(insertQuery,arr1, (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'UserCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteUser(user,callback) {
  let insertQuery = 'Update `tbluser` set isActive=0  where id=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'UserCreation',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getUserValue(user,callback) {
  let cond=""
  var param=[]
  console.log(user)
  if(user.mobno!=undefined)
  {
    cond=" and MobileNo=?";
    param=user.mobno
  }
  else if(user.id!=undefined)
  {
    cond=" and id=?";
    param=user.id
  }

  let insertQuery = "select * from tbluser where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
    }
    else
     return callback(null, results)
})
}

}

module.exports = UserController
