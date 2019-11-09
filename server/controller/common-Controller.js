const dbconfig = require('../config/db')
const Request = require("request");
var nodemailer = require('nodemailer');
var EmailTemplate = require('email-templates');

var CommonController = {
	todaydate() {
		var date = new Date();
		let todate = new Date().toLocaleString("en-US", {timeZone: "Asia/Kolkata"});
		todate = new Date(todate);
		return todate;
	},
	MessageTemplate(msgcode,cb){
		let qry='select MessageTemplate from tbl_messagetemplate where MessageCode=?';
		dbconfig.query(qry,[msgcode],(err,results) => {
			return cb(results[0].MessageTemplate)
		})
	},
	LogData(loginid,formname,primarycode,action,cb){
		let todate=this.todaydate();
		let arr=[loginid,todate,formname,primarycode,action]
		let qry='INSERT INTO `tbllogs` (`LoginId`, `Logdate`, `FormName`, `PrimaryCode`, `Action`) VALUES (?, ?, ?, ?, ?)';
		var dtt =dbconfig.query(qry,arr,(err,results) => {
			if (err) throw err
				if(results.affectedRows>0)
					return 'success'
				else
					return 'failed'
			})
	},
	SendMail(response,text,cb) 
	{
		var res=response;
		var transporter = nodemailer.createTransport({
			service: res.Service,
			host: res.Host,  
			secureConnection: true,
			port: res.Port,
			auth: {
      user: res.Username, // generated ethereal user
      pass: res.Password // generated ethereal password
  }
//     ,
//     tls:{
// secureProtocol: "TLSv1_method"
// }
});

		var mailOptions = {
			from: res.From,
			to: res.To,
			subject: res.Subject,        
			html: text
		};

		transporter.sendMail(mailOptions, function(error, info){
			if (error) {
				console.log("err")
				return cb({"msg": error});
			} else {
				console.log("success")
				return cb({"msg":info.response});
			}
		});

	}

}
module.exports = CommonController;

