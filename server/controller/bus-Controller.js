var dbconfig = require('../config/db')
const common = require('../controller/common-Controller')

var UserController = {
 // User Registration
 AddStop(user,callback) {

  let todate=common.todaydate();
  var arr1=[user.stopname, user.stoplong, user.stoplat,user.stoptype,'Karnataka',user.loginid,todate]
  let insertQuery = "INSERT INTO `tblbusstop` (`StopName`, `StopLong`, `StopLat`, `StopType`, `Area`, `isActive`, `LoginId`, `SDate`) VALUES (?, ?, ?, ?, ?, 1, ?, ?);"
  return dbconfig.query(insertQuery, arr1, (err, results) => {
  if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'StopCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
},
UpdateStop(user,callback) {
  let todate=common.todaydate();  
  var arr1=[user.stopname, user.stoplong, user.stoplat,user.stoptype,'Karnataka',user.loginid,todate,user.id]
  let insertQuery = 'Update `tblbusstop` set StopName=?,StopLong=?,StopLat=?,StopType=?,Area=?,LoginId=?,SDate=?  where StopId=?'
  dbconfig.query(insertQuery,arr1, (err, results) => {
  if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteStop(user,callback) {
  let insertQuery = 'Update `tblbusstop` set isActive=0  where StopId=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
  if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusCreation',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getStop(user,callback) {
  let cond=""
  var param=[]
  console.log(user)
  if(user.id!=undefined)
  {
    cond=" and id=?";
    param=user.id
  }

  let insertQuery = "select * from tblbusstop where isActive<>'0' "+cond
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
