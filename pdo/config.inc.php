
	                            <?php
								
								$host="mysql.hostinger.in.th";
    							$user="u982279518_samfa"; // MySql Username
    							$pass="12345678"; // MySql Password
    							$dbname="u982279518_samfa"; // Database Name
								$conn = mysql_connect($host,$user,$pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
								mysql_select_db($dbname); // เลือกฐานข้อมูล

								?>