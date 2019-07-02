const express = require("express");
const router = express.Router();
const parcelActivity = require("../controller/parcel-Controller");

// Parcel Calculation
router.post("/Calc", function(request, response) {
  let ResMsg={};

  //let param=request.query;
  let param=request.body;
  let str=param.passcodes;
  // var arr=str.split(",");
  // let sd;
  // arr = arr.map(function (val) { 
  //   console.log(val);
  //   });

  parcelActivity.AmountCalc(param, (err, res) =>{
    if (err) {
      response.json(err);
    }
    else {
//console.log(res)
var parceltype=param.parceltype;
var small1=param.small;
var medium1=param.medium;
var large1=param.large;
var xl1=param.xl;

var small=small1.substring(1,small1.length);
var medium=medium1.substring(1,medium1.length);
var large=large1.substring(1,large1.length);
var xl=xl1.substring(2,xl1.length);
var ress=[];

//SharePass Calculation
var arrSize=res.chkSize==","?"":res.chkSize.split(",");
var arrBal=res.chkBal==","?"":res.chkBal.split(",");
var ss=small,sm=medium,sl=large,sxl=xl;
if(arrSize.length>1)
{
  for(let dr in arrSize)
  {
    if(arrSize[dr]=="S-Small")
    {
      ss = small - arrBal[dr] 
    }
    else if(arrSize[dr]=="M-Medium")
    {
      sm = medium - arrBal[dr] 
    }
    else if(arrSize[dr]=="L-Large")
    {
      sl = large - arrBal[dr] 
    }
    else if(arrSize[dr]=="XL-ExtraLarge")
    {
      sxl = xl - arrBal[dr] 
    }
  }
}
ss=Math.sign(ss)==-1?0:ss;
sm=Math.sign(sm)==-1?0:sm;
sl=Math.sign(sl)==-1?0:sl;
sxl=Math.sign(sxl)==-1?0:sxl;
if(parceltype.indexOf('loc')>=0)
{
  res.LSAmt*=ss;
  res.LMAmt*=sm;
  res.LLAmt*=sl;
  res.LXAmt*=sxl;
}
else if(parceltype.indexOf('loc')!=0)
{
  res.DSAmt*=ss;
  res.DMAmt*=sm;
  res.DLAmt*=sl;
  res.DXAmt*=sxl;
}

let Total=res.LSAmt+res.LMAmt+res.LLAmt+res.LXAmt+res.DSAmt+res.DMAmt+res.DLAmt+res.DXAmt+res.HAmt;
//ResMsg = res
//ResMsg.Total=Total
let disc=0;
let offerHeader='';
if(res.CouponAmt>0)
{
  res.SplDisc=0;
  disc=res.CouponAmt;
  offerHeader='Flat Rs.'+disc+' Offer'
}
else if(arrSize.length>1)
{
  offerHeader='SharePass Applied'
}
else if(res.SplDisc>0)
{
  disc=Math.round(Total*res.SplDisc/100,0);
  offerHeader='Flat '+res.SplDisc+'% Offer'
}

ress[0] = {'LSAmt':res.LSAmt,'LMAmt':res.LMAmt,'LLAmt':res.LLAmt,'DSAmt':res.DSAmt,'DMAmt':res.DMAmt,'DLAmt':res.DLAmt,'SAmt':res.HAmt,'Total':Total,'dist':res.dist,'disc':disc,'offerHeader':offerHeader}
ResMsg.data=ress;
//response.json(ResMsg);

response.json(ResMsg);
}
});
});

router.post('/AddBooking', (request, response)=> {
  let ResMsg;
  let RetVal={};
  //console.log(request);
  //if (otpdata != null)
  {
    parcelActivity.BillNoGen((results)=>{
      request.body.bserial=results[0].cnt;
      request.body.bid='P'+FormatNumberLength(request.body.bserial,5);
      //console.log(results);
      parcelActivity.AddBooking(request.body, (err, res) => {
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
  let a = parcelActivity.test();
  response.json(a);
});
module.exports = router;

