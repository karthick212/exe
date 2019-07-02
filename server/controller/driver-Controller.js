const dbconfig = require('../config/db')

var driverController = {
  // OTP
DriverOtp(otp, role, imeino, callback) {
    var date = new Date();
    var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
    hours = hours < 10 ? "0" + hours : hours;
    var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
    var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
    time = hours + ":" + minutes + ":" + seconds
    let RandomOtp = Math.floor(100000 + Math.random() * 900000)
    let status = 'verified'
    let todate = new Date().toISOString().slice(0, 10);
    let updateQry = "UPDATE tbl_otplist SET otp = '" + RandomOtp + "', date = '" + todate + "', time = '" + time + "', imeino = '" + imeino + "'  WHERE mobile ='" + otp + "' and role='"+ role +"'"
    return dbconfig.query(updateQry, (err, results) => {
      // if (err) throw err;
      if (results.affectedRows > 0) {
        return callback(null, results, RandomOtp)
      } else {

        let insertQuery = 'INSERT INTO `tbl_otplist` (mobile, otp, date, time, role, imeino)VALUES (?,?,?,?,?,?)'
        return dbconfig.query(insertQuery, [otp, RandomOtp, todate, time, role, imeino], callback(null, results, RandomOtp))
      }
    })
  },
  // OTP Check
  checkOtp(userdata, cb) {
    let query = 'SELECT count(*) as cnt,ifnull((SELECT count(*) FROM tbl_userdetails WHERE isActive<>0 and Mobile=tbl_otplist.mobile),0) as usermob FROM tbl_otplist WHERE otp = ? and mobile = ? and role = ?'
    return dbconfig.query(query, [userdata.otp, userdata.mobno, userdata.roll], (err, rows) => {
console.log(rows)
      if (rows[0].cnt > 0)
       {
        if(rows[0].usermob>0)
          return cb(null,cb,"Exist")
        else
          return cb(null,cb,"New")
       }
       else{
        return cb(null,0,"")        
       }
    })
  },
  // Driver Login
  DriverLogin(data, callback) {
    var username = data.username
    var password = data.password
    let query = 'SELECT * FROM tbl_driver_login WHERE driver_name = ? AND driver_password=?'
    dbconfig.query(query, [username, password], callback)
  },
  // driver List
  FetchAllDetails(callback) {
    return dbconfig.query('select * from driver', callback)
  },
  // Create Driver Profile
  Createprofiledetails(profileData, callback) {
    //let querys = 'INSERT INTO tbl_driver_general_detail SET ?'
    var arr1=[profileData.driverid, profileData.drivermobileno]
    let insertQuery = "INSERT INTO `tbl_driverstatus`(Driverid,Mobileno,isMadmoney, isShare, isHire, isRental,isActive) VALUES(?,?,'Off','Off','Off','Off',1) "
    dbconfig.query(insertQuery, arr1, (err, results) => {
      })

    let querys = 'INSERT INTO `tbl_driver_general_detail` (`driver_id`, `drivertype`,`driver_name`, `driver_email`, `driver_phone`, `driver_lan`,    `driver_address`,        `year_experience`,      `vehicle_width`,          `vehicle_height`,           `vehicle_depth`,           `vehicle_model`,         `vehicle_number`,   `vehicle_type`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)'
    let datas = [profileData.driverid, profileData.drivertype, profileData.drivername, profileData.driveremail, profileData.drivermobileno, profileData.driverlan, profileData.driveraddress, profileData.experience, profileData.vehiclewidth, profileData.vehicleheight, profileData.vehicledepth, profileData.vehiclemodel, profileData.vehiclenumber, profileData.vehicletype]
    return dbconfig.query(querys, datas , callback())
    //return dbconfig.query(querys, profileData , callback())
  },  
  // FIle Uplaod
  CreatprofilImages(ImageData, header, callback) {
    if (ImageData) {
      let updateQry = "UPDATE tbl_driver_general_detail SET driver_image = '" + ImageData[0] + "', driver_full_image = '" + ImageData[1] + "', driver_aadhar = '" + ImageData[2] + "', driver_license = '" + ImageData[3] + "', driver_voterId = '" + ImageData[4] + "', driver_vehicleImage = '" + ImageData[5] + "', driver_ration_gas_book = '" + ImageData[6] + "', driver_owner_proof = '" + ImageData[6] + "'  WHERE driver_id ='" + header + "'";
      return dbconfig.query(updateQry, callback)
    } else {
      return 'no-data'
    }
  }, 
  DriverNoGen(cb){
    let qry='select ifnull(max(id),0)+1 as cnt from tbl_driver_general_detail';
    dbconfig.query(qry,(err,results) => {
      //console.log(results);
      return cb(results)
    })
   }

}

module.exports = driverController