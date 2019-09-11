const express = require("express");
const router = express.Router();
const adminActivity = require("../controller/admin-Controller");
const jwt = require("jsonwebtoken");
var dbconfig = require("../config/db");
SECRET_KEY = "thisismysecretkey";

router.post("/login1", function(req, res, next) {
  adminActivity.LoginAdmin(req.body, (err, rows) => {
    if (err) {
      res.send("Server Error");
    } else {
      if (rows.length > 0) {
        let username;
        let password;
        console.log(rows[0]);
        for (let i = 0; i < rows.length; i++) {
          username = rows[i].username;
          password = rows[i].password;
        }
        var token = jwt.sign({ data: rows }, SECRET_KEY, { expiresIn: "10s" });
        let result = {
          status: true,
          username: username,
          token: token
        };
        res.send(result);
      } else {
        res.send("Please Enter Your Username & Password");
      }
    }
  });
});

router.post("/addAdmin", (req, res, next) => {
  // console.log(req.body)
  adminActivity.UserIdGen((results)=>{
    req.body.userial=results[0].cnt;
    req.body.uid='A'+FormatNumberLength(req.body.userial,5);

    adminActivity.RegisterAdmin(req.body, (err, count) => {
      if (err) {
        res.json(err);
      } else {
        res.json(req.body);
      }
    });
  })  
});

router.post("/mailAuthentication", (req, res, next) => {
  // console.log(req.body)
  let qry=req.body;
  console.log(qry)
  adminActivity.mailAuth(qry,(err,count)=>{
    //console.log(count[0].cnt);
    if(err) res.json(err);
    else 
{
  if(count[0].cnt>0)
  res.json({"status":"success","message":""});
else 
  res.json({"status":"failed","message":"There is no email address found"});
}
  })
});

router.post("/login", function(req, res, next) {
  adminActivity.LoginAdmin(req.body, (err, rows) => {
    if (err) {
      res.send("Server Error");
    } else {
      if(count[0].cnt>0)
  res.json({"status":"success","message":""});
else 
  res.json({"status":"failed","message":"There is no email address found"});
    }
  });
});

router.post('/viewRegister',function(req,res,err){
  let cond="";
  let user=req.body;
  //let user=req.query;
  var arr=[]

  if(user.email!=undefined)
  {
    cond=" and Email = ? AND Password=?";
    arr=[user.email,user.password]
  }
  var itemss=  dbconfig.query("select * from tbl_register where isActive<>'0'"+cond,arr,function(err,result,fields){
    if(err){
      res.json(err);
    }else{
      res.json(result);
    }  
  });  
  console.log(itemss)
});


function FormatNumberLength(num, length) {
  var r = "" + num;
  while (r.length < length) {
    r = "0" + r;
  }
  return r;
}
module.exports = router;
