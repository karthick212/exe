'use strict';
const excelToJson = require('convert-excel-to-json');
const express = require('express')
const router = express.Router()
const Request = require('request')
var fs = require('fs');
 const readXlsxFile = require('read-excel-file/node');

// Add User
router.get('/import', (request, response) => {  
// File path.
readXlsxFile('new.xlsx').then((rows) => {

  rows.forEach(function(val,id){
    console.log(val)
    val.forEach(function(val1,id1){
    console.log(val1)      
    })
  });
  console.log(rows[0])
  console.log(rows[1])
  console.log(rows[0][1])
})

})

 module.exports = router