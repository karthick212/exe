const express = require("express");
const router = express.Router();
const courierActivity = require("../controller/courier-Controller");

// OTP-API
router.post("/otp", function(request, response) {
  let otpdata = { mob: request.body.number };

  let ResMsg;
  if (otpdata != null) {
    courierActivity.courierDetails(otpdata, (err, row, fields) => {
      if (err) {
        response.json(err);
      } else {
        debugger;
        console.log(row);
        response.json(row);
      }
    });
  }
});

// Courier Calculation
router.post("/Calc", function(request, response) {
let ResMsg={};
  //if (otpdata != null) 
 // var flat=request.param('flat');
 // var flong=request.param('flong');
 // var fs=request.param('fromstate');
 // var ts=request.param('tostate');
 // var ctype=request.param('couriertype');
 // var cname=request.param('couriername');
 // var DL1=request.param('DL1');
 // var DB1=request.param('DB1');
 // var DL2=request.param('DL2');
 // var DB2=request.param('DB2');
 // var BL1=request.param('BL1');
 // var BB1=request.param('BB1');
 // var BH1=request.param('BH1');
 // var BL2=request.param('BL2');
 // var BB2=request.param('BB2');
 // var BH2=request.param('BH2'); 
 
 let reqq=request.body;
 //let reqq=request.query;

//courierActivity.AmountCalc(flat,flong,fs,ts,ctype,cname,DL1,DB1,DL2,DB2,BL1,BB1,BH1,BL2,BB2,BH2,request.param('tlat'),request.param('tlong'), (err, res) =>{
courierActivity.AmountCalc(reqq, (err, res) =>{
    
  if (err) {
        response.json(err);
      } else {
//        debugger;
        //console.log(row);        
let ress=[]

let doc='Document(1)';
let docamt=res.DAmt1+res.DAmt2;
if(res.DAmt1==0&&res.DAmt2==0)  doc='Document'; else if(res.DAmt1!=0&&res.DAmt2!=0) doc='Document(2)';
let box='Box(1)';
let boxamt=res.BAmt1+res.BAmt2;
if(res.BAmt1==0&&res.BAmt2==0)  box='Box'; else if(res.BAmt1!=0&&res.BAmt2!=0) box='Box(2)';

let gross=res.DAmt1+res.DAmt2+res.BAmt1+res.BAmt2;
let Total1=res.DAmt1+res.DAmt2+res.BAmt1+res.BAmt2+res.SAmt;

let disc=0;
let offerHeader='';
if(res.CouponAmt>0)
{
  res.SplDisc=0;
  disc=res.CouponAmt;
  offerHeader='Flat Rs.'+disc+' Offer'
}
else if(res.SplDisc>0)
{
  disc=Math.round(Total1*res.SplDisc/100,0);
  offerHeader='Flat '+res.SplDisc+'% Offer'
}

let Total=Total1-disc;
ress[0] = {'damt1':res.DAmt1,'damt2':res.DAmt2,'bamt1':res.BAmt1,'bamt2':res.BAmt2,'samt':res.SAmt,'Total':Total,'gross':gross,'bwgt1':res.BWgt1,'bwgt2':res.BWgt2,'localdist':res.localdist,'splDisc':res.SplDisc,'CouponAmt':res.CouponAmt,'docHeader':doc,'boxHeader':box,'docamt':docamt,'boxamt':boxamt,'disc':disc,'offerHeader':offerHeader,'clatitude':res.tolat,'clongitude':res.tolong}  
ResMsg.data=ress;
response.json(ResMsg);
      }
    });
  //}
});

// Courier Booking
router.post('/AddBooking', (request, response)=> {
  let ResMsg;
  let RetVal={};
  //if (otpdata != null) 
  {
    courierActivity.BillNoGen((results)=>{
      request.body.bserial=results[0].cnt;
      request.body.bid='C'+FormatNumberLength(request.body.bserial,5);
      //console.log(results);
    courierActivity.AddBooking(request.body, (err, res) => {
      if (err) {
        response.json(err);
      } else {
        debugger;
        //console.log(row);        
        //res.Total=res.BAmt1+res.BAmt2+res.DAmt1+res.DAmt2;
        response.json(res);
      }
    })
  })
  }
});
function FormatNumberLength(num, length) {
    var r = "" + num;
    while (r.length < length) {
        r = "0" + r;
    }
    return r;
}

router.get("/test", (request, response) => {
  let a = courierActivity.test();
  response.json(a);
});

// function intervalFunc() {
//   console.log('Cant stop me now!');
// }

// setInterval(intervalFunc, 3000);

module.exports = router;


// var ary = [];
// function pushToAry(name, val) {
//    var obj = {};
//    obj[name] = val;
//    ary.push(obj);
// }
// pushToAry(doc, docamt);
// pushToAry(box, boxamt);
