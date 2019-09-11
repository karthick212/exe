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
    cond=" and StopId=?";
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
},

//Bus Route
AddRoute(user,callback) {

  let todate=common.todaydate();
  var arrMas=[user.routeno, user.routename, user.platform,user.loginid,todate]
  var arrDet=user.routedetails
  let insertQuery = "INSERT INTO `tblbusroutemaster` (`RouteNo`, `RouteName`, `Platform`, `isActive`, `LoginId`, `SDate`) VALUES (?,?,?, 1,?,?)"
  return dbconfig.query(insertQuery, arrMas, (err, results) => {
    if(err) throw err;
    arrDet.map(m=>{
      let arr1=[results.insertId,m.stopid,m.timing,m.fare]
      let qry="INSERT INTO `tblbusroutedetails` (`RouteID`, `StopID`, `Timing`, `Fare`) VALUES (?,?,?,?)"
      return dbconfig.query(qry,arr1,(err,results1)=>{
        if(err) throw err;
      })
    })
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'RouteCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
UpdateRoute(user,callback) {
  let todate=common.todaydate();  
  var arrMas=[user.routeno, user.routename, user.platform,user.loginid,todate,user.id]
  var arrDet=user.routedetails
  let insertQuery = 'Update `tblbusroutemaster` set RouteNo=?,RouteName=?,Platform=?,LoginId=?,SDate=?  where RouteId=? '
  dbconfig.query(insertQuery,arrMas, (err, results) => {
    if(err) throw err;
    dbconfig.query("delete from tblbusroutedetails where RouteId=?",user.id,(err,results2)=>{
      arrDet.map(m=>{
        let arr1=[user.id,m.stopid,m.timing,m.fare]
        let qry="INSERT INTO `tblbusroutedetails` (`RouteID`, `StopID`, `Timing`, `Fare`) VALUES (?,?,?,?)"
        return dbconfig.query(qry,arr1,(err,results1)=>{
          if(err) throw err;
        })
      })
    })
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'RouteCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteRoute(user,callback) {
  let insertQuery = 'Update `tblbusroutemaster` set isActive=0  where RouteId=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'RouteCreation',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getRoute(user,callback) {
  let cond=""
  var param=[]
  console.log(user)
  if(user.id!=undefined)
  {
    cond=" and RouteId=?";
    param=user.id
  }

  let insertQuery = "select * from tblbusroutemaster where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},
getRouteDetails(user,callback) {
  let cond=""
  var param=[]
  console.log(user)
  if(user.id!=undefined)
  {
    cond=" and RouteId=?";
    param=user.id
  }

  let insertQuery = "select * from vw_busroute where isActive<>'0' "+cond
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
