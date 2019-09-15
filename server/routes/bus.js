"use strict";
const express = require('express')
const router = express.Router()
const Request = require('request')
const { parse } = require('querystring')
var multer = require('multer')
var FormData = require('form-data')
var form = new FormData()
const busActivity = require('../controller/bus-Controller')
const jwt = require('jsonwebtoken')
var dbconfig = require('../config/db')
const path = require('path');

// Add User
router.post('/addstop', (request, response) => {  
  let ResMsg = {}  
  console.log(request.body)
  busActivity.AddStop(request.body, (err, rows) => {

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
router.post('/updatestop', (request, response) => {  
  let ResMsg = {}  
  busActivity.UpdateStop(request.body, (err, rows) => {
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
router.post('/deletestop', (request, response) => {  
  let ResMsg = {}  
  busActivity.DeleteStop(request.body, (err, rows) => {
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
router.get('/viewstop', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  busActivity.getStop(res, (err, rows) => {
    if (err) throw err
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of stop'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There are no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})

//Bus Routes
router.post('/addroute', (request, response) => {  
  let ResMsg = {}  
  busActivity.AddRoute(request.body, (err, rows) => {

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
router.post('/updateroute', (request, response) => {  
  let ResMsg = {}  
  busActivity.UpdateRoute(request.body, (err, rows) => {
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
router.post('/deleteroute', (request, response) => {  
  let ResMsg = {}  
  busActivity.DeleteRoute(request.body, (err, rows) => {
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
router.get('/viewstation', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  busActivity.getRoute(res, (err, rows) => {
    if (err) throw err
      console.log(rows);
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of routes'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There are no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})


// View User
router.get('/viewroute', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  busActivity.getRoute(res, (err, rows) => {
    if (err) throw err
      console.log(rows);
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of routes'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There are no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})

// View User
router.get('/viewroutedetails', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var id=res.id;
  busActivity.getRouteDetails(res, (err, rows) => {
    if (err) throw err
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of routes'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There are no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})

// Add Bus
router.post('/addbus', (request, response) => {  
  let ResMsg = {}  
  console.log(request.body)
  busActivity.AddBus(request.body, (err, rows) => {

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
router.post('/updatebus', (request, response) => {  
  let ResMsg = {}  
  busActivity.UpdateBus(request.body, (err, rows) => {
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
router.post('/deletebus', (request, response) => {  
  let ResMsg = {}  
  busActivity.DeleteBus(request.body, (err, rows) => {
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
router.get('/viewbus', (request, response) => {  
  let ResMsg = {}
  let res=request.query
  var mobno=res.mobno;
  var id=res.id;
  busActivity.getBus(res, (err, rows) => {
    if (err) throw err
      if (rows.length>0) {      
      ResMsg.status = 'success'
      ResMsg.message = 'list of stop'
      ResMsg.data=rows
    } else {
      ResMsg.message = 'There are no records found'
      ResMsg.status = 'failed'
    }
    response.json(ResMsg)
//response.send(JSON.stringify(ResMsg))
})
})

module.exports = router
