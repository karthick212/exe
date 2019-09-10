const dbconfig = require('../config/db')
const Request = require("request");
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
			if(results.affectedRows>0)
				return 'success'
			else
				return 'failed'
		})
	}  

}
module.exports = CommonController;

