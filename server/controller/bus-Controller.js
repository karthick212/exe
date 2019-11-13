var dbconfig = require('../config/db')
const common = require('../controller/common-Controller')
var distance = require('google-distance');
distance.apiKey = 'AIzaSyCZsnc36jrvx7sdu0iHfhAbtGGZXFOJ2nA';

var UserController = {
 // User Registration
 AddStopBulk(user1,callback) {
  var idd=0;
  let todate=common.todaydate();
  user1.forEach(function(user,id){
    var arr1=[user.stopname, user.stoplong, user.stoplat,user.stoptype,'Karnataka',user.loginid,todate]
    let insertQuery = "INSERT INTO `tblbusstop` (`StopName`, `StopLong`, `StopLat`, `StopType`, `Area`, `isActive`, `LoginId`, `SDate`) VALUES (?, ?, ?, ?, ?, 1, ?, ?);"
    return dbconfig.query(insertQuery, arr1, (err, results) => {
      if(err) throw err;
      if (results.affectedRows > 0) {
        //return callback(null, results)
        if(idd==0)
         { common.LogData(user.loginid,'StopCreation',results.insertId,'Save');         
       idd++;
     }
   }
   else {
    return callback(null, "failed")      
  }
})  
  })
  return callback(null,"success");
},
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
      common.LogData(user.loginid,'StopCreation',user.id,'Update');
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
      common.LogData(user.loginid,'StopCreation',user.id,'Delete');
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
  var arrMas=[user.routeno, user.sourceid, user.destinationid, user.platform,user.servicetypecode,user.loginid,todate]
  var arrDet=user.routedetails
  let insertQuery = "INSERT INTO `tblbusroutemaster` (`RouteNo`, `SourceId`, `DestinationId`, `Platform`, `ServiceTypeCode`, `isActive`, `LoginId`, `SDate`) VALUES (?,?,?,?,?,1,?,?)"
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
  var arrMas=[user.routeno, user.sourceid, user.destinationid, user.platform, user.servicetypecode,user.loginid,todate,user.id]
  var arrDet=user.routedetails
  let insertQuery = 'Update `tblbusroutemaster` set RouteNo=?,SourceId=?,DestinationId=?,Platform=?,ServiceTypeCode=?,LoginId=?,SDate=?  where RouteId=? '
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
getStation(user,callback) {
  let cond=""
  var param=[]

  let insertQuery = "select * from tblbusstop where isActive<>'0' and StopType<>'Stop'"
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
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

  let insertQuery = "select DISTINCT routeid,RouteNo,RouteName,LoginId, Platform,ServiceType from vw_busroute where isActive<>'0' "+cond
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
},

 // Add Bus creation
 AddBus(user,callback) {

  let todate=common.todaydate();
  var arrDet=user.bustimings
  var arr1=[user.busno, user.busregno,user.routeid,user.loginid,todate]
  let insertQuery = "INSERT INTO `tblbus` (`BusNo`, `BusRegisterNo`, `RouteId`, `isActive`, `LoginId`, `SDate`) VALUES (?,?,?,1,?,?);"
  return dbconfig.query(insertQuery, arr1, (err, results) => {
    if(err) throw err;
    arrDet.map(m=>{
      let arr1=[results.insertId,m.departure,m.arrival]
      let qry="INSERT INTO `tblbustimings` (`BusId`, `departure`, `arrival`) VALUES (?,?,?)"
      return dbconfig.query(qry,arr1,(err,results1)=>{
        if(err) throw err;
      })
    })
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
},
UpdateBus(user,callback) {
  let todate=common.todaydate();
  var arrDet=user.bustimings    
  var arr1=[user.busno, user.busregno,user.servicetype,user.routeid,user.loginid,todate,user.id]
  let insertQuery = 'Update `tblbus` set BusNo=?,BusRegisterNo=?,RouteId=?,LoginId=?,SDate=?  where BusId=?'
  dbconfig.query(insertQuery,arr1, (err, results) => {
    if(err) throw err;
    dbconfig.query("delete from tblbustimings where BusId=?",user.id,(err,results2)=>{
      arrDet.map(m=>{
        let arr1=[user.id,m.departure,m.arrival]
        let qry="INSERT INTO `tblbusroutedetails` (`BusId`, `departure`, `arrival`) VALUES (?,?,?)"
        return dbconfig.query(qry,arr1,(err,results1)=>{
          if(err) throw err;
        })
      })
    })
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteBus(user,callback) {
  let insertQuery = 'Update `tblbus` set isActive=0  where BusId=?'
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
getBus(user,callback) {
  let cond=""
  var param=[]
  if(user.id!=undefined)
  {
    cond=" and BusId=?";
    param=user.id
  }

  let insertQuery = "select * from vw_bus where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},
getBusTimings(user,callback) {
  let cond=""
  var param=[]
  if(user.id!=undefined)
  {
    cond=" and BusId=?";
    param=user.id
  }
  else if(user.busno!=undefined)
  {
    cond=" and BusNo=?";
    param=user.busno
  }

  let insertQuery = "select * from vw_bustimings where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},
getServiceType(user,callback) {
  let cond=""
  var param=[]
  let insertQuery = "select * from tblservicetype"
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},
getBuses(user,callback) {
  let cond=""
  var param=[]
  if(user.sourcecode!=undefined && user.destinationcode!=undefined&&user.servicetypecode!=undefined)
  {
    //cond=" and SourceId=? and DestinationId=? and ServiceTypeCode=? ";
    param=[user.sourcecode,user.servicetypecode,user.destinationcode,user.servicetypecode]
  }
  else
    return callback(null,[])
  let insertQuery = "SELECT d1.id,d1.RouteId,d1.busid,d1.BusNo,d1.RouteName,d2.ApproxTime-d1.ApproxTime as ATime,d2.Fare-d1.Fare as Fare from(SELECT id,RouteId,busid,BusNo,RouteName,ApproxTime,Fare from vw_busmappingdetails WHERE isActive<>'0' and isDrop<>1 and stopid=? and ServiceTypeCode=?) as d1 "+
  " INNER JOIN  (SELECT id,busid,routeid,ApproxTime,Fare from vw_busmappingdetails WHERE isActive<>'0' and isDrop<>1 and stopid=? and ServiceTypeCode=?) as d2 on "+
  " d1.routeid=d2.routeid and d1.id=d2.id WHERE d2.Fare-d1.fare>0"
  //let insertQuery = "SELECT id,RouteId,busid,BusNo,RouteName FROM `vw_busmapping` where isActive<>'0' and isDrop<>1 "+cond
  //AND date_add(Timing2,INTERVAL 11 day)>=CURRENT_TIMESTAMP()
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},

// Add Bus Pass
AddBusPass(user,callback) {

  let todate=common.todaydate();
  if(user.sourcecode==undefined)
    user.sourcecode=0;
  if(user.destinationcode==undefined)
    user.destinationcode=0;
  if(user.servicetypecode==undefined)
    user.servicetypecode=0;
  var arr1=[user.passtype, user.validity,user.fare,user.sourcecode,user.destinationcode,user.servicetypecode,user.loginid,todate]
  let insertQuery = "INSERT INTO `tblbuspass` (`PassType`, `Validity`, `Fare`, `SouceCode`, `DestinationCode`, `ServiceTypeCode`, `isActive`, `LoginId`, `SDate`) VALUES (?,?,?,?,?,?, 1,?,?);"
  return dbconfig.query(insertQuery, arr1, (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusPassCreation',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
},
UpdateBusPass(user,callback) {
  let todate=common.todaydate();  
  var arr1=[user.passtype, user.validity,user.fare,user.sourcecode,user.destinationcode,user.servicetypecode,user.loginid,todate,user.id]
  let insertQuery = 'Update `tblbuspass` set PassType=?,Validity=?,Fare=?,SouceCode=?,DestinationCode=?,ServiceTypeCode=?,LoginId=?,SDate=?  where id=?'
  dbconfig.query(insertQuery,arr1, (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusPassCreation',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteBusPass(user,callback) {
  let insertQuery = 'Update `tblbuspass` set isActive=0  where id=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'BusPassCreation',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getBusPass(user,callback) {
  let cond=""
  var param=[]
  if(user.id!=undefined)
  {
    cond=" and id=?";
    param=user.id
  }

  let insertQuery = "select * from vw_buspass where isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},

// Add User Permission
AddUserPermission(user,callback) {

  let todate=common.todaydate();
  var arr1=[user.userid, user.permissions,user.loginid,todate]
  let insertQuery = "INSERT INTO `tbluserpermission` (`UserType`, `Permissions`, `isActive`, `LoginId`, `SDate`) VALUES (?,?,1,?,?);"
  return dbconfig.query(insertQuery, arr1, (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'UserPermission',results.insertId,'Save');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })  
},
UpdateUserPermission(user,callback) {
  let todate=common.todaydate();  
  var arr1=[user.userid, user.permissions,user.loginid,todate,user.id]
  let insertQuery = 'Update `tbluserpermission` set UserType=?,Permissions=?,LoginId=?,SDate=?  where id=?'
  dbconfig.query(insertQuery,arr1, (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'UserPermission',user.id,'Update');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
DeleteUserPermission(user,callback) {
  let insertQuery = 'Update `tbluserpermission` set isActive=0  where id=?'
  return dbconfig.query(insertQuery, [user.id,user.loginid], (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) {
      common.LogData(user.loginid,'UserPermission',user.id,'Delete');
      return callback(null, results)
    }
    else {
      return callback(null, results)  
    }
  })
},
getUserPermission(user,callback) {
  let cond=""
  var param=[]
  if(user.id!=undefined)
  {
    cond=" and tbluserpermission.id=?";
    param=user.id
  }

  let insertQuery = "select tbluserpermission.id,tbluserpermission.UserType,tbluserpermission.Permissions,tbluserpermission.isActive,tbluser.Username,tbluser.FullName from tbluserpermission INNER JOIN tbluser on tbluser.Role=tbluserpermission.UserType where tbluserpermission.isActive<>'0' "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},
getMenu(user,callback) {
  let cond=""
  var param=[]
  if(user.id!=undefined)
  {
    cond=" and id in (?)";
    var arr=user.id.split(",");
    param=[arr]
  }
  let insertQuery = "select * from tblmenu where id<>0 "+cond
  return dbconfig.query(insertQuery,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},
NearestStops(user,callback) {
  let cond=""
  var param=[user.latitude,user.longitude,user.latitude]
  let dqry='SELECT Stopid,StopLat,StopLong,StopName, ( 3959 * acos( cos( radians(?) ) * cos( radians( StopLat ) ) * cos( radians( StopLong ) - radians(?) ) + sin( radians(?) ) * sin( radians( StopLat ) ) ) ) AS distance FROM tblbusstop HAVING distance < 2 ORDER BY distance LIMIT 0 , 10'
  return dbconfig.query(dqry,param, (err, results) => {
    if(err){
     return callback(null, err)
   }
   else
     return callback(null, results)
 })
},

// Add general Booking
AddGeneralBooking(user,callback) {
  let qrcode=this.QRCodeGenerator(10)
  let todate=common.todaydate();
  var date = new Date();
  var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
  hours = hours < 10 ? "0" + hours : hours;
  var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
  var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();        
  var time = hours + ":" + minutes + ":" + seconds;

  var arr1=[user.bid,user.bserial,todate,time,user.sourcecode,user.destinationcode,user.servicetype,user.passengertype,user.qty,user.total,user.disc,user.nettotal,user.mappingcode,'',user.userid,user.mobno,qrcode,1,user.userid,todate]
  let insertQuery = "INSERT INTO `tblgeneralbooking` (`BookingId`, `BookingSerial`, `BookingDate`, `BookingTime`, `sourcecode`, `destinationcode`, `ServiceType`, `PassengerType`, `Qty`, `Total`, `Disc`, `NetTotal`, `MappingCode`, `Remarks`, `UserID`, `MobileNo`, `QRCode`, `isActive`, `LoginID`, `SDate`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"
  return dbconfig.query(insertQuery, arr1, (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) 
    {
      let arr2=["General",user.bid,user.userid,user.mobno,0,0,qrcode,user.mappingcode]
      let insertQuery2 = "INSERT INTO `tblbookingstatus` (`BookingType`, `BookingID`, `UserID`, `MobileNo`, `isPickup`, `isDrop`, `QRCode`, `MappingCode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);"
      return dbconfig.query(insertQuery2, arr2, (err, results1) => {
        if (results.affectedRows > 0) 
        {
          common.LogData(user.userid,'GeneralBooking',results.insertId,'Save');
          return callback(null, results)
        }
      })
    }
    else {
      return callback(null, results)  
    }
  })  
},

// Add Pass Booking
AddPassBooking(user,callback) {
  let qrcode=this.QRCodeGenerator(10)
  let todate=common.todaydate();
  var date = new Date();
  var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
  hours = hours < 10 ? "0" + hours : hours;
  var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
  var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();        
  var time = hours + ":" + minutes + ":" + seconds;

  var arr1=[user.bid,user.bserial,todate,time,user.sourcecode,user.destinationcode,user.servicetype,user.total,user.disc,user.nettotal,'',user.userid,user.mobno,qrcode,1,user.userid,todate,user.passtype,user.validity,user.passcode]
  let insertQuery = "INSERT INTO `tblpassbooking` (`BookingId`, `BookingSerial`, `BookingDate`, `BookingTime`, `sourcecode`, `destinationcode`, `ServiceType`, `Total`, `Disc`, `NetTotal`, `Remarks`, `UserID`, `MobileNo`, `QRCode`, `isActive`, `LoginID`, `SDate`, `PassType`, `Validity`, `PassCode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"
  return dbconfig.query(insertQuery, arr1, (err, results) => {
    if(err) throw err;
    if (results.affectedRows > 0) 
    {
      let arr2=["Pass",user.bid,user.userid,user.mobno,0,0,qrcode,user.passcode]
      let insertQuery2 = "INSERT INTO `tblbookingstatus` (`BookingType`, `BookingID`, `UserID`, `MobileNo`, `isPickup`, `isDrop`, `QRCode`, `MappingCode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);"
      return dbconfig.query(insertQuery2, arr2, (err, results1) => {
        if (results.affectedRows > 0) 
        {
          common.LogData(user.userid,'PassBooking',results.insertId,'Save');
          return callback(null, results)
        }
      })
    }
    else {
      return callback(null, results)  
    }
  })  
},

BillNoGen(cb){
  let qry='select ifnull(max(BookingSerial),0)+1 as cnt from tblgeneralbooking';
  return dbconfig.query(qry,(err,results) => {
    if(err) throw err;
    return cb(results[0].cnt);
  })
},
QRCodeGenerator(length) {
 var result           = '';
 var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
 var charactersLength = characters.length;
 for ( var i = 0; i < length; i++ ) {
  result += characters.charAt(Math.floor(Math.random() * charactersLength));
}
return result;
}

}

module.exports = UserController