const express = require('express')
const router = express.Router()
const Request = require('request')
const { parse } = require('querystring')
var multer = require('multer')
// var upload = multer({ dest: 'upload/driver' })
var FormData = require('form-data')
var form = new FormData()
// var jsonParser = body_parser.urlencoded()
const driverActivity = require('../controller/driver-Controller')
const jwt = require('jsonwebtoken')
var dbconfig = require('../config/db')
const common = require('../controller/common-Controller')

// login
router.post('/login', function (req, res, next) {
  driverActivity.DriverLogin(req.body, (err, rows) => {
    if (err) {
      res.send('Server Error')
    } else {
      if (rows) {
        rows.map(data => {
          console.log(data)
        })
      }
      if (rows.length > 0) {
        let token = jwt.sign({ data: rows }, SECRET_KEY, { expiresIn: '10s' })
        let result = {
          status: true,
          username: rows[0].driver_name,
          token: token
        }
        res.send(result)
      } else {
        let result = {
          'message': 'Please Enter Valid Username & Password'
        }
        res.send(result)
      }
    }
  })
})

// router.get('/FetchAllDetails', function (req, res, next) {
//   driverActivity.FetchAllDetails((err, rows) => {
//     if (err) {
//       res.json(err)
//     } else {
//       res.json(rows)
//     }
//   })
// })

// router.get('/detail', function (req, res, next) {
//   console.log('di')
// })


// OTP-API
router.post('/otp', (request, response) => {
  let Mobilenum = request.body.mobno
  let Role = request.body.roll
  let imeino = request.body.imeino
  let ResMsg = {}
  driverActivity.DriverOtp(Mobilenum, Role, imeino, (err, rows, otp) => {
    if (err) throw err
      if (rows) {
        const smsCont =
        'Dear Customer, your OTP for SMS notification registration is ' +
        otp +
        '. Use this OTP to register.';
        var Otpurl = 'http://manage.rkadsindia.in/SendSMS/sendmsg.php?uname=DCARGO&pass=123456&send=DCARGO&dest=' + Mobilenum + '&msg=' + smsCont
        let tokens = jwt.sign({ data: rows }, SECRET_KEY, { expiresIn: '10s' })
        Request.get(Otpurl)
        ResMsg.otp=otp
        ResMsg.status = 'success'
        ResMsg.token = tokens
      } else {
        ResMsg.message = 'Invalid Mobile Number'
        ResMsg.status = 'fail'
      }
      response.json(ResMsg)
    })
})

// checkotp
router.post('/checkotp', (req, res) => {
  driverActivity.checkOtp(req.body, (err, row, status) => {
    if (err) throw err
      if (row.length) {
        let result = {'message': 'OTP VERIFIED','status':status }
        res.send(result)
      } else {
        let result = {'message': 'Wrong OTP','status':'' }
        res.send(result)
      }
    })
})

// create Profile
router.post('/AddDriver', (req, res) => {
  let type="S";
  if((req.body.drivertype).toLowerCase()=='driver') type="D";
  driverActivity.DriverNoGen((results)=>{
    req.body.driverid = type+(results[0].cnt+10000);
    driverActivity.Createprofiledetails(req.body, (err, count) => {
      console.log(count);
      console.log(err);
      (err) ? res.json(err) : res.json('success1');
    })
  })
})

var storage = multer.diskStorage(
{
  destination: '',
  filename: function (req, file, cb) {
    if(file==undefined)
      cb(null, undefined);
    else
      cb(null,Date.now() + '_' + file.originalname);
  }
}
);
var upload = multer({ storage: storage });

// Profile Image
// var cpUpload = upload.fields([{ name: 'driver_image', maxCount: 1, path }, { name: 'driver_aadhar', maxCount: 1 }])
router.post('/AddDriverImage', upload.any(), (req, res) => {
  //console.log(req.files)
  let did=req.body.driver_id;
  let header;
  if (req.headers['driver_id']) {
    header = req.headers['driver_id']
  }
  let driver = [];
  let driverfield = [];
  req.files.map((res, index) => {
    driver[index] = res.filename;
    driverfield[index] = res.fieldname;
  })
  console.log(driver)
  // return driver
  driverActivity.CreatprofilImages(driver, did, (err, result) => {
    if (err) throw err;
    console.log(result);
    if (result) {
      let result = { 'message': 'success' }
      res.send(result)
    }
  });
})

//Student Duty Status
router.get('/StudentStatus',function(req,res,err){
  var itemss=  dbconfig.query("select isMadmoney from tbl_driverstatus where Driverid=?",[req.query.driverid],function(err,result,fields){
    if(err){
      res.json(err);
    }else{
      res.json(result);
    }  
  });  
});

//Driver Duty Status
router.get('/DriverStatus',function(req,res,err){
  var itemss=  dbconfig.query("select isShare,isHire,isRental from tbl_driverstatus where Driverid=?",[req.query.driverid],function(err,result,fields){
    if(err){
      res.json(err);
    }else{
      res.json(result);
    }  
  });  
});

//Change Duty Status
router.post('/ChangeStatus',function(req,res,err){
  //var resp=req.query;
  var request=req.body;
  var date = new Date();
  let todate = new Date().toISOString().slice(0, 10);
  var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
  hours = hours < 10 ? "0" + hours : hours;
  var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
  var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
  time = hours + ":" + minutes + ":" + seconds;

  request.isMadmoney=request.isMadmoney==undefined?'Off':request.isMadmoney;
  request.isShare=request.isShare==undefined?'Off':request.isShare;
  request.isHire=request.isHire==undefined?'Off':request.isHire;
  request.isRental=request.isRental==undefined?'Off':request.isRental;

  var itemss=  dbconfig.query("update tbl_driverstatus set isMadmoney=?,isShare=?,isHire=?,isRental=?,latitude=?,longitude=? where Driverid=?",[request.isMadmoney,request.isShare,request.isHire,request.isRental,request.lat,request.long,request.driverid],function(err,result,fields){
    let btype="";
    if(request.isMadmoney=='Req')
      btype="Madmoney";
    else if(request.isShare=='Req')
      btype="Share";
    else if(request.isHire=='Req')
      btype="Hire";
    else if(request.isRental=='Req')
      btype="Rental";
    var arr=[request.driverid,todate,time,btype,date];
    qry="Insert into tbl_driverstatuslog(Driverid,Date,Time,BookingType,SDate) values(?,?,?,?,?)";
    if(btype=="")
    {
      qry="update tbl_driverstatus set isMadmoney=?,isShare=?,isHire=?,isRental=? where Driverid=?";
      arr=[request.isMadmoney,request.isShare,request.isHire,request.isRental,request.driverid];
    }
    dbconfig.query(qry,arr,function(err,result1,fields){
      if(err){
        res.json(err);
      }
      else
      {
        if(result1.affectedRows>0)
          res.json("changed");
        else
          res.json(err);
      }
    })      
  });  
});

//Assign Booking
router.get('/AssignBooking',function(req,res,err){
 //let reqq=request.body;
 let reqq=req.query;
 var itemss=  dbconfig.query("select * from vw_assignbookingcourier where Driverid=? and isAccept='0' and isReject='0'",[reqq.driverid],function(err,result,fields){
  if(err){
    res.json(err);
  }else{
    res.json(result);
  }  
});  
});

//Accept/Reject Booking
router.post('/BookingAction',function(req,res,err){
 let reqq=req.body;
 //let reqq=req.query;

 let itemss2=dbconfig.query("select * from vw_assignbookingcourier where id=?",[reqq.id],(err,result2)=>{
  let btype=''
  if(result2.length>0)
  {
    if(result2[0].bookingtype.toLowerCase()=='courier')
      btype="isMadmoney='On'"
    else if(result2[0].bookingtype.toLowerCase()=='share')
      btype="isShare='On'"
    else if(result2[0].bookingtype.toLowerCase()=='hire')
      btype="isHire='On'"
    else if(result2[0].bookingtype.toLowerCase()=='rental')
      btype="isRental='On'"

    let qry="update tbl_assignbooking set isAccept=1,isReject=0 where id=? ";
    if(reqq.action.toLowerCase()!='accept')
      qry="update tbl_assignbooking set isReject=1,isAccept=0 where id=?";
    var itemss=  dbconfig.query(qry,[reqq.id],function(err,result,fields){
      let itemss1=dbconfig.query("update tbl_driverstatus set "+btype+" where Driverid=?",[result2[0].DriverId],(err,result1)=>{
        if(err){
          res.json(err);
        }else{
          res.json(result);
        }
      })    
    });
  }
  else res.json(null);
})
});

//Booking Timeout
router.post('/BookingTimeout',function(req,res,err){
 let reqq=req.body;
 //let reqq=req.query;
 let qry="select * from vw_assignbookingcourier where id=?";
 var itemss=  dbconfig.query(qry,[reqq.id],function(err,result,fields){
  if(result.length>0)
  {
    let user={}
    user.fromlat=result[0].FromLatitude
    user.fromlong=result[0].FromLongitude
    user.bid=result[0].BookingId
    user.userid=result[0].Userid
    user.mobno=result[0].Mobileno
    
    let itemss1=common.NearestDriver(user,result[0].bookingtype,result[0].DriverId,(ress)=>{
      if(ress=='success')
      {
        let itemss1=dbconfig.query("update tbl_assignbooking set isReject=1,isAccept=0 where id=?",[reqq.id],(err,result1)=>{      
          res.json("success");
        })    
      }
      else res.json(ress);
    })      
  }
});  
});

module.exports = router
