const express = require("express");
const body_parser = require("body-parser");
const cors = require("cors");
const morgan = require("morgan");
const jwt = require('jsonwebtoken');
const path = require('path');
const app = express(),
config = require('./config/DB'),
adminRoutes = require('./server/routes/admin');
userRoutes = require('./server/routes/user');
busRoutes = require('./server/routes/bus');

config.connect(function(err) {
  
  if (err) throw err
  console.log('You are now connected...')
})
      app.use(function(req,res,next){
        res.header("Access-Control-Allow-Origin","*");
        res.header("Access-Control-Allow-Headers","Origin, X-Requested-With, Content-Type, Accept, Authorization, sid");
        res.header("Access-Control-Allow-Methods","GET, POST, PUT, OPTIONS, DELETE");
        next();
      })
      //app.use(express.bodyParser());
      app.use(express.static('public'));
      //app.use('/static', express.static(path.join(__dirname, 'public')))
      // app.use(body_parser.json());
      // app.use(body_parser.urlencoded({ extended: true }));
      app.use(body_parser.json({limit: '50mb'}));
      app.use(body_parser.urlencoded({limit: '50mb'}));
      app.use(cors());
      app.use('/api/admin', adminRoutes);
      app.use('/api/user', userRoutes);
      app.use('/api/bus', busRoutes);
      app.engine('html', require('ejs').renderFile);
      app.set('view engine', 'html');
      app.set('view engine', 'ejs');
      const port = process.env.PORT || 5000;

      const server = app.listen(port, function(){
        console.log('Listening on port ' + port);
      });
