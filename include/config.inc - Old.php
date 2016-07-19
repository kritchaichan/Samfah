
	                            <?php
								
								$host="localhost";
    							$user="root"; // MySql Username
    							$pass=""; // MySql Password
    							$dbname="sf"; // Database Name
								$conn = mysql_connect($host,$user,$pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
								mysql_select_db($dbname); // เลือกฐานข้อมูล

								?>