const mysql = require('mysql')
var connection = mysql.createConnection({
  // host: 'donkeycargo.cmc4nhmz7bua.us-east-1.rds.amazonaws.com',
  // user: 'donkey',
  // password: 'donkey123',
  // database: 'donkeycargo',
  // multipleStatements: true

  host: 'alpha.clz0hdmbr4yu.us-east-1.rds.amazonaws.com',
  user: 'alpha',
  password: 'Alpha123',
  database: 'alpha',
  multipleStatements: true
  
  // host: 'localhost',
  // user: 'root',
  // password: '',
  // database: 'alphanet'
})

module.exports = connection
