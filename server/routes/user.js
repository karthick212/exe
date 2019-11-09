"use strict";
const express = require('express')
const router = express.Router()
const Request = require('request')
const { parse } = require('querystring')
var multer = require('multer')
var FormData = require('form-data')
var form = new FormData()
const userActivity = require('../controller/user-Controller')
const common = require('../controller/common-Controller')
const jwt = require('jsonwebtoken')
var dbconfig = require('../config/db')
const path = require('path');
var nodemailer = require('nodemailer');
var EmailTemplate = require('email-templates');
var ejs = require("ejs");
var fs = require("fs");

//Forget Password - Send Mail
router.post('/resetmail', (request, response) => {  
  var res=request.body;
  let arr=[res.tomail]
  let qry='select id,Username,Password from tbluser where isActive<>0 and Email=?';
  var dtt =dbconfig.query(qry,arr,(err,results) => {
    if(results.length>0)
    {
      res.Port = "465";
      res.Service = "Gmail";
      res.Host = "smtp.gmail.com";
      res.Username = "alphanetbus@gmail.com";
      res.Password = "Alph@n3t2019";
      res.From = "Alphanet<alphanetbus@gmail.com>";
      res.To= res.tomail;
      res.Subject= "Reset Password [Alphanet]";
      res.Text= "Test";
  //var res=request.body;
  ejs.renderFile(__dirname + "/resetpasswordHTML.ejs", { username: results[0].Username,password: results[0].Password }, function (err, data) {
    if (err) {
      console.log(err);
    } else {
      common.SendMail(res,data,(rows)=>{
        let ResMsg = {}
        ResMsg.status = 'success'
        ResMsg.message = 'success'
        ResMsg.data=rows
        response.json(ResMsg);
      })
    }
  })
}    
else
{
  let ResMsg = {}
  ResMsg.status = 'failed'
  ResMsg.message = 'Invalid Email ID'
  response.json(ResMsg);
} 
})  
})

// Add User
router.post('/adduser', (request, response) => {  
  let ResMsg = {}  
  userActivity.AddUser(request.body, (err, rows) => {
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
router.post('/updateuser', (request, response) => {  
  let ResMsg = {}  
  userActivity.UpdateUser(request.body, (err, rows) => {
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
router.post('/deleteuser', (request, response) => {  
  let ResMsg = {}  
  userActivity.DeleteUser(request.body, (err, rows) => {
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
router.get('/viewUser', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  userActivity.getUserValue(res, (err, rows) => {
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

// Add Conductor
router.post('/addconductor', (request, response) => {  
  let ResMsg = {}  
  userActivity.AddConductor(request.body, (err, rows) => {
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
router.post('/updateconductor', (request, response) => {  
  let ResMsg = {}  
  userActivity.UpdateConductor(request.body, (err, rows) => {
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
router.post('/deleteconductor', (request, response) => {  
  let ResMsg = {}  
  userActivity.DeleteConductor(request.body, (err, rows) => {
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
router.get('/viewconductor', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  userActivity.getConductor(res, (err, rows) => {
    if (err) throw err
      if (rows) {      
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

// View User
router.get('/loadconductormapping', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  userActivity.loadConductorMapping(res, (err, rows) => {
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

// View User
router.get('/conductor/Auto', (request, response) => {  
  let ResMsg = {}
  userActivity.ConductorId((rows) => {
    if (rows) {      
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

module.exports = router
