<?php
session_start();
echo "<meta charset=\"UTF-8\">";
if (isset($_SESSION['frmAction']) == isset($_POST['frmAction'])) {

    /*
     * include file
     */

	require_once('../../app/config.inc.php');

    /*
     * set var
     */

    // Define $username and $password
    $username = $_POST['username'];
    $password = $_POST['password'];
    // To protect from MySQL injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($objCon,$username);
    $password = mysqli_real_escape_string($objCon,$password);
    $password = sha1($password);

    /*
     * unset var
     */
    unset($_SESSION['frmAction']);

    /*
     * logical programming&Database
     */
    $strsql = "SELECT username,status FROM user_bo WHERE username like '$username' AND password like '$password' AND status like '1'";
    $result = mysqli_query($objCon,$strsql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1){
          $_SESSION['username'] = $row['username'];
          $_SESSION['checkSign'] = 'itoffside';
        echo "เข้าสู่ระบบสำเร็จ";
        echo "<br/>";
        echo "<a href='index.php'>ไปหน้าจัดการข้อมูล</a>";
    } else {
        echo "ไม่สามารถเข้าสู่ระบบได้เนื่องจากรหัสผิดพลาด";
        echo "<br/>";
        echo "<a href='login.php'>กลับไปหน้าเดิม</a>";
    }
} else {
    echo "มีข้อผิดพลาดระหว่าง Session!";
    echo "<br/>";
    echo "<a href='login.php'>กลับไปหน้าเดิม</a>";
}
