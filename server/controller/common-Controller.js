const dbconfig = require('../config/db')
const Request = require("request");
var CommonController = {
 MessageTemplate(msgcode,cb){
  let qry='select MessageTemplate from tbl_messagetemplate where MessageCode=?';
  dbconfig.query(qry,[msgcode],(err,results) => {
    return cb(results[0].MessageTemplate)
  })
},
SendSMS(mobno,msg,cb){
     //var Otpurl = 'http://manage.rkadsindia.in/SendSMS/sendmsg.php?uname=DCARGO&pass=123456&send=DCARGO&dest=' + mobno + '&msg=' + msg
     var Otpurl = ''
     var dd = Request.get(Otpurl,(err,results)=>{
       if(results.statusCode=='200'){
        return cb('success')
      }
      else{
        return cb(err)
      }

    })
   },
   NearestDriver(user,booktype,d_id,cb){

    let didCond=" and isMadmoney='Req'";
    if(d_id!='')
      didCond+=" and Driverid not in ('"+d_id+"') "

    let dqry="SELECT id,Driverid,latitude,longitude, ( 3959 * acos( cos( radians(?) ) * cos( radians( Latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( Latitude ) ) ) ) AS distance FROM tbl_driverstatus where id<>0 "+didCond+" ORDER BY distance LIMIT 0 , 1"
      //HAVING distance < 25 
      dbconfig.query(dqry,[user.fromlat,user.fromlong,user.fromlat],(err,rows)=>{
        if(rows.length>0)
        {
          let qry='Insert into tbl_assignbooking(`BookingType`, `BookingId`, `Userid`, `Mobileno`, `DriverId`, `isAccept`, `isReject`) VALUES (?, ?, ?, ?, ?, ?, ?)'
          dbconfig.query(qry,[booktype,user.bid,user.userid,user.mobno,rows[0].Driverid,'0','0'],(err,results)=>{
            if (results.affectedRows > 0) {
              return cb("success");
            }
            else return cb("error");
          })
        }
        else return cb("driver not found");
      });    
    },     
  };
  module.exports = CommonController;

