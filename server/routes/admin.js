const express = require("express");
const router = express.Router();
const Request = require('request')
const adminActivity = require("../controller/admin-Controller");
const jwt = require("jsonwebtoken");
var dbconfig = require("../config/db");
SECRET_KEY = "thisismysecretkey";

// OTP-API
router.post('/otp', (request, response) => {
  let Mobilenum = request.body.mobno
  let Role = request.body.roll
  let imeino = request.body.imeino
  let ResMsg = {}
  adminActivity.GenOtp(Mobilenum, (err, rows, otp) => {
    if (err) throw err
      console.log(rows)
      if (rows.affectedRows>0) {
        const smsCont =
        'Dear Customer, your OTP for SMS notification registration is ' +
        otp +
        '. Use this OTP to register.';
        var Otpurl = 'http://msg.spyderinfotech.com/app/smsapi/index.php?key=5befcba7d1a4d&type=text&contacts='+ Mobilenum+'&senderid=SPRINF&msg='+smsCont 
        let tokens = jwt.sign({ data: rows }, SECRET_KEY, { expiresIn: '10s' })
        Request.get(Otpurl)
        ResMsg.otp=otp
        ResMsg.status = 'success'
        //ResMsg.token = tokens
      } else {
        ResMsg.message = 'Invalid Mobile Number'
        ResMsg.status = 'failed'
      }
      response.json(ResMsg)
    })
})

// checkotp
router.post('/checkotp', (req, res) => {
  adminActivity.checkOtp(req.body, (err, row) => {
    if (err) throw err
      if (row.length) {
        let result = {'message': 'OTP VERIFIED','status':'success' }
        res.send(result)
      } else {
        let result = {'message': 'Wrong OTP','status':'failed' }
        res.send(result)
      }
    })
})

// Add User
router.post('/adduser', (request, response) => {  
  let ResMsg = {}  
  adminActivity.AddUser(request.body, (err, rows,status) => {
    if (err) throw err
      response.json(status)
    })
})

// checkotp
router.post('/userAuth', (req, res) => {
  adminActivity.UserLoginAuth(req.body, (err, row) => {
    if (err) throw err
      if (row[0].cnt>0) {
        let result = {'message': 'Logged In','status':'success' }
        res.send(result)
      } else {
        let result = {'message': 'Wrong MobileNo & Password','status':'failed' }
        res.send(result)
      }
    })
})

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
      if(rows[0].cnt>0)
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
  var itemss=  dbconfig.query("select * from vw_user where isActive<>'0'"+cond,arr,function(err,result,fields){
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

// Add Suspend
router.post('/addsuspend', (request, response) => {  
  let ResMsg = {}  
  adminActivity.AddSuspend(request.body, (err, rows) => {
    if (err) throw err
      if (rows.affectedRows>0) {      
        ResMsg.status = 'success'
        ResMsg.message = 'Registered Successfully'        
      } else {
        ResMsg.status = 'failed'
        ResMsg.message = 'Failed'
      }
      response.json(ResMsg)
    })
})

// Update User
router.post('/updatesuspend', (request, response) => {  
  let ResMsg = {}  
  adminActivity.UpdateSuspend(request.body, (err, rows) => {
    if (err) throw err
      if (rows.affectedRows>0) {      
        ResMsg.status = 'success'
        ResMsg.message = 'Updated Successfully'        
      } else {
        ResMsg.status = 'failed'
        ResMsg.message = 'Failed'
      }
      response.json(ResMsg)
    })
})

// Update User
router.post('/deletesuspend', (request, response) => {  
  let ResMsg = {}  
  adminActivity.DeleteSuspend(request.body, (err, rows) => {
    if (err) throw err
      if (rows.affectedRows>0) {      
        ResMsg.status = 'success'
        ResMsg.message = 'Deleted Successfully'        
      } else {
        ResMsg.status = 'failed'
        ResMsg.message = 'Failed'
      }
      response.json(ResMsg)
    })
})


// View User
router.get('/viewsuspend', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  adminActivity.getSuspend(res, (err, rows) => {
    if (err) throw err
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of user'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There is no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})


// Add Suspend
router.post('/addbusmapping', (request, response) => {  
  let ResMsg = {}  
  adminActivity.AddMapping(request.body, (err, rows) => {
    if (err) throw err
      if (rows.affectedRows>0) {      
        ResMsg.status = 'success'
        ResMsg.message = 'Registered Successfully'        
      } else {
        ResMsg.status = 'failed'
        ResMsg.message = 'Failed'
      }
      response.json(ResMsg)
    })
})

// Update User
router.post('/updatebusmapping', (request, response) => {  
  let ResMsg = {}  
  adminActivity.UpdateMapping(request.body, (err, rows) => {
    if (err) throw err
      if (rows.affectedRows>0) {      
        ResMsg.status = 'success'
        ResMsg.message = 'Updated Successfully'        
      } else {
        ResMsg.status = 'failed'
        ResMsg.message = 'Failed'
      }
      response.json(ResMsg)
    })
})

// Update User
router.post('/deletebusmapping', (request, response) => {  
  let ResMsg = {}  
  adminActivity.DeleteMapping(request.body, (err, rows) => {
    if (err) throw err
      if (rows.affectedRows>0) {      
        ResMsg.status = 'success'
        ResMsg.message = 'Deleted Successfully'        
      } else {
        ResMsg.status = 'failed'
        ResMsg.message = 'Failed'
      }
      response.json(ResMsg)
    })
})


// View User
router.get('/viewbusmapping', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  adminActivity.getMapping(res, (err, rows) => {
    if (err) throw err
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of user'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There is no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})

module.exports = router;
