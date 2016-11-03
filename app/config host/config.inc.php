
	                            <?php
								
								$host="mysql.hostinger.in.th";
    							$user="u982279518_samfa"; // MySql Username
    							$pass="12345678"; // MySql Password
    							$dbname="u982279518_samfa"; // Database Name
								$conn = mysql_connect($host,$user,$pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
								mysql_select_db($dbname); // เลือกฐานข้อมูล
								
								error_reporting(0);
function runSQL($rsql) {
	$hostname ="mysql.hostinger.in.th";
    $username="u982279518_samfa"; // MySql Username
    $password="12345678"; // MySql Password
    $dbname="u982279518_samfa"; // Database Name
	$connect = mysql_connect($hostname,$username,$password) or die ("Error: could not connect to database");
	$db = mysql_select_db($dbname);
	mysql_query("set character set utf8");     
	$result = mysql_query($rsql) or die ('Error: could not query data' . $rsql); 
	return $result;
	mysql_close($connect);
}

function countRec($order,$table,$where) {
	$sql = "SELECT count($order) FROM $table $where";
	$result = runSQL($sql);
	while ($row = mysql_fetch_array($result)) {
		return $row[0];
	}
}
								

								?>