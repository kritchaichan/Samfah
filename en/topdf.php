<?php
require('fpdf.php');

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$address=  $_POST['address'];
		$mobile =  $_POST['mobile'];
		$telephone =  $_POST['telephone'];
		$email =  $_POST['email'];
		$line =  $_POST['line'];
		$fbname =  $_POST['fbname'];
        $date =  $_POST['date'];
		$x =  $_POST['x'];
		$y =  $_POST['y'];
		$quan =  $_POST['quantity'];
		$acsr =  $_POST['Acsr'];
		$door = $_POST['door'];
		$wood_c = $_POST['door_color'];
		$frame_c = $_POST['framing_style'];
		$order_no = $_POST['order_no'];
		$remark = $_POST['remark'];
		
		$door_c = substr($door,0,2);
							
							if($door_c == "CS"){
								$location = "pic_door_classic";
								
							}
							else if ($door_c == "CT"){
								$location = "pic_door_contemporary";
								
							}
							else if($door_c == "MD"){
								$location = "pic_door_modern";
							}
							else {
								$location = "pic_door_order";
							}
		
		
 
//ทำการสืบทอดคลาส FPDF ให้เป็นคลาสใหม่
class PDF extends FPDF
{
	//Override คำสั่ง (เมธอด) Header
	function Header(){
		$date=  date('Y-m-d');
 
		//ใช้ตัวอักษร Arial ตัวเอียง ขนาด 5
		$this->SetFont('Arial','I',8);
 
		//พิมพ์ตัวหนังสือตัวเอียงๆ ที่ตำแหน่งเยื้องขอบกระดาษซ้าย 5หน่วย ขอบกระดาษบน 5หน่วย
		$this->Cell(0,18, "Date.".$date ,0,0,'R');
 
		//ปัดบรรทัด กำหนดความกว้างของบรรทัด 20หน่วย
		$this->Ln(20);
	}
	
	//Override คำสั่ง (เมธอด) Footer
	function Footer()	{
 
		//นับจากขอบกระดาษด้านล่างขึ้นมา 10 มม.
		$this->SetY( -10 );
 
		//กำหนดใช้ตัวอักษร Arial ตัวเอียง ขนาด 5
		$this->SetFont('Arial','I',8);
 
		//พิมพ์ หมายเลขหน้า ตรงมุมขวาล่าง
		$this->Cell(0,10, 'page '.$this->PageNo().' of  tp' ,0,0,'R');
 
	}
 
}
 
//เรียกใช้งาน เราจะเรียกใช้คลาสใหม่ของเราแทน
$pdf = new PDF( 'P', 'mm', 'A4' );
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวธรรมดา กำหนด ชื่อ เป็น angsa
$pdf->AddFont('angsa','','angsa.php');
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsa
$pdf->AddFont('angsa','B','angsab.php');
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsa
$pdf->AddFont('angsa','I','angsai.php');
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsa
$pdf->AddFont('angsa','BI','angsaz.php');

$pdf->AliasNbPages( 'tp' );

$pdf->AddPage();
$pdf->SetFont('angsa','BI',12);
$pdf->Text( 60 , 20 , "No.".$order_no);
$pdf->Line(0,22,32,22);
$pdf->Line(58,22,230,22);
$pdf->SetFont('angsa','BI',36);
//Header
$pdf->Text( 35 , 25 , "Order");

$pdf->SetFont('angsa','B',20);
//Door Information

if($location == "pic_door_order")
$pdf->Image('../'.$location.'/'.$door.'.jpg',40,45,0,35,'jpg');
else
$pdf->Image('../'.$location.'/'.$door.'.jpg',40,45,0,80,'jpg');
$pdf->Text( 90 , 55 , "1st");
$pdf->Text( 90 , 65 , "Size");
$pdf->Text( 90 , 75 , "Height : ".$x." CM");
$pdf->Text( 130 , 75 , "Width : ".$y." CM");
$pdf->Text( 90 , 85 , "Quantity : ".$quan." Pcs");
$pdf->Text( 90 , 95 , "Accessories : ".$acsr);
$pdf->Text( 90 , 105 , "Wood for Door");
$pdf->Image('../wood_color/'.$wood_c.'.jpg',93,110,0,15,'jpg');
$pdf->Text( 130 , 105 , "Wood for Framing");
$pdf->Image('../wood_frame/'.$frame_c.'.jpg',137,110,0,15,'jpg');

/*$pdf->SetFont('angsa','B',16);
//Remark
$pdf->SetXY(50,140);
$pdf->Write( 6 , iconv( 'UTF-8','cp874' , 'Remark : '.$remark ));
$pdf->SetFont('angsa','B',14);
//Note
$pdf->Text( 60 , 165 , "Note!");
$pdf->Text( 60 , 170 , "- We welcome your special requested type of wood.");
$pdf->Text( 60 , 175 , "- The actual color of wood may have minimal change from the pictures.");*/
$pdf->SetFont('angsa','B',14);
//Note
$pdf->Text( 60 , 140 , "Note!");
$pdf->Text( 60 , 145 , "- We welcome your special requested type of wood.");
$pdf->Text( 60 , 150 , "- The actual color of wood may have minimal change from the pictures.");

$pdf->SetFont('angsa','B',20);
//Customer Information
$pdf->Text( 80 , 190 , iconv( 'UTF-8','cp874' , 'Customer\'s information'));
$pdf->Text( 30 , 200 , iconv( 'UTF-8','cp874' , "Firstname : ".$firstname));
$pdf->Text( 110 , 200 , iconv( 'UTF-8','cp874' , "Lastname : ".$lastname));
$pdf->Text( 30 , 210 ,  iconv( 'UTF-8','cp874' , "Address : ".$address ) );
$pdf->Text( 30,  220, iconv( 'UTF-8','cp874' , "Mobile : ".$mobile));
$pdf->Text( 110, 220, iconv( 'UTF-8','cp874' , "Telephone : ".$telephone));
$pdf->Text( 30 , 230 , iconv( 'UTF-8','cp874' , "Email : ".$email));
$pdf->Text( 110 , 230 , iconv( 'UTF-8','cp874' , "Line ID : ".$line));
$pdf->Text( 30, 240 , iconv( 'UTF-8','cp874' , "Facebook Name : ".$fbname));
$pdf->Text( 30 , 250 , iconv( 'UTF-8','cp874' , "Delivery Date : ".$date));
$pdf->Text( 65 , 265 , iconv( 'UTF-8','cp874' , "Your expected delivery date : ".$date));
$pdf->Text( 70 , 275 , iconv( 'UTF-8','cp874' , "We will contact you back in 24 hrs."));
$pdf->Output( 'inv-no.'.$order_no.'.pdf' , 'I' );
?>