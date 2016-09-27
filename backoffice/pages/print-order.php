<?php
session_start();
$_SESSION['frmAction'] = md5('itoffside.com' . rand(1,9999));
if ($_SESSION['checkSign'] != 'itoffside') {
    header('Location: login.php');
}

$orderID = $_POST["orderid"];
$customerID = $_POST["customerid"];

if ($orderID == "" || $customerID == "") {
    header('Location: orders.php');
}

require('fpdf/fpdf.php');
require_once('../../app/config.inc.php');
$strsql  = "SELECT * ";
$strsql .= "FROM ";
$strsql .= "orders o JOIN customers c ";
$strsql .= "on o.Customer_ID = c.Customer_ID JOIN orders_details od ";
$strsql .= "on o.Order_ID = od.Order_ID JOIN picture_door p ";
$strsql .= "on od.Picture_Door_ID = p.Picture_Door_Name ";
$strsql .= "WHERE ";
$strsql .= "c.Customer_ID = $customerID AND "; // เลือก ตารางที่เราเก็บข้อมูล
$strsql .= "o.Order_ID = $orderID "; // เลือก ตารางที่เราเก็บข้อมูล
$result = mysqli_query($objCon,$strsql);
if (!$result) {
  printf("Error: %s\n", mysqli_error($objCon));
  exit();
}

//ทำการสืบทอดคลาส FPDF ให้เป็นคลาสใหม่
class PDF extends FPDF
{
	private $dots = "...................";

	//Override คำสั่ง (เมธอด) Header
	function Header()
	{

		$this->SetFont('PTsansnarrow','',24);
		$this->Text( 35 , 24 , "Order");


		$this->SetFont('PTsansnarrow','',9);
		$this->Text( 54 , 20 , "No.000001");
		$date =  date('Y-m-d');
		$this->Text(145,20, "Date.".$date);

		//ทำเส้้น Header
		$this->SetLineWidth(0.6);
		$this->Line(0,22,32,22);
		$this->Line(54,22,230,22);

		//ปัดบรรทัด กำหนดความกว้างของบรรทัด 20 หน่วย
		$this->Ln(20);
	}

	//Override คำสั่ง (เมธอด) Footer
	function Footer()	{

		//นับจากขอบกระดาษด้านล่างขึ้นมา 15 มม.
		$this->SetY(-15);
		$this->SetX(-30);

		//กำหนดใช้ตัวอักษร Arial ตัวเอียง ขนาด 5
		$this->SetFont('PTsansnarrow','',8);

		//พิมพ์ หมายเลขหน้า ตรงมุมขวาล่าง
		$this->Cell(0,10,$this->PageNo().'/{nb}',0,0,'R');

	}

	function ProductsDetails($PicId,$Type,$Height,$Width,$Thickness,$Quantity,$aGlass,$aFrame,$wDoor,$wFrame,$Remark)
	{
		$this->SetLineWidth(1);
		$this->SetDrawColor(153,153,153); //Set color
		$this->RoundedRect(28, 32, 155, 115, 5, 'D'); // Draw RoundRect
		//--SET DIRECTORY IMAGE LOCAL
		switch ($Type) {
			case 'Classic':
				$location = "images/pic_door_classic";
				break;
			case 'Contemporary':
				$location = "images/pic_door_contemporary";
				break;
			case 'Modern':
				$location = "images/pic_door_modern";
				break;
			case 'Showroom':
				$location = "images/showroom";
				break;
			case 'Folios':
				$location = 'images/folios';
				break;
			case 'Process':
				$location = "images/process";
				break;
			case 'Othercrafts':
				$location = "images/pic_door_modern";
				break;
		}
		$this->Image('../../'.$location.'/'.$PicId.'.jpg',38,43,0,90,'jpg');
		$this->SetLineWidth(0.2);
		$this->SetDrawColor(0,0,0); //Set color
		 //set Height Line
		$this->Line(90, 48, 90,128);
		$this->Line(84,48,90,48);
		$this->Line(84,128,90,128);

		//set Width Line
		$this->Line(52,132,84,132);
		$this->Line(52,128, 52,132);
		$this->Line(84, 128, 84,132);

		//set thickness Line
		//$this->Line(92,120,84,136);

		$this->SetFont('PTsansnarrow','',13);

		$this->SetXY(92,85);
		$this->Cell( 10, 0 , $Height." CM",0,0,'L'); //add value height

		$this->SetXY(62,136);
		$this->Cell( 10, 0 , $Width." CM",0,0,'L'); //add value width

		$this->SetXY(120,52);
		$this->Cell( 10, 0 , "Quantity:",0,0,'L');
		$this->SetXY(125,58);
		$this->Cell( 20, 0 , $Quantity." Pcs",0,0,'L');//add value qty
		$this->SetXY(120,64);
		$this->Cell( 10, 0 , "Wood for Door:",0,0,'L');
		$this->SetXY(125,70);
		$this->Cell( 20, 0 , $wDoor,0,0,'L'); //add value wood
		$this->SetXY(120,76);
		$this->Cell( 10, 0 , "Accessories:",0,0,'L');
		$this->SetXY(125,82);
		$this->Cell( 30, 0 , "- ".$aFrame,0,0,'L'); //add value frame
		$this->SetXY(125,88);
		$this->Cell( 30, 0 , "- ".$aGlass,0,0,'L');//add value frame
		$this->SetXY(120,94);
		$this->Cell( 10, 0 , "Wood for framing:",0,0,'L');
		$this->SetXY(125,100);
		$this->Cell( 20, 0 , $wFrame,0,0,'L');
		$this->SetXY(120,106);
		$this->Cell( 10, 0 , "Length: ".$Height." CM",0,0,'L'); //add value thickness
		$this->SetXY(120,113);
		$this->Cell( 10, 0 , "Width: ".$Width." CM",0,0,'L'); //add value thickness
		$this->SetXY(120,119);
		$this->Cell( 10, 0 , "Thickness: ".$Thickness." inch",0,0,'L'); //add value thickness
	}


	function CustomerDetails($firstname,$lastname,$address,$mobile,$phone,$email,$lineid,$fbname,$deliverydate)
	{
		$dot2 = "........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................";
		$this->SetFont('PTsansnarrow','',18);
		$this->SetY(157);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,'Customer\'s Information'),0,0,'C');
		$this->SetFont('PTsansnarrow','',14);
		$this->SetXY(28.5,166);
		$this->Cell(22,0,iconv( 'UTF-8','cp874' ,"Firstname: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,$firstname),0,0,''); // add value firstname
		$this->Cell(20,0,iconv( 'UTF-8','cp874' ,"Surname: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,$lastname),0,0,''); // add value surnamename
		$this->SetXY(28.5,175);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,"Delivered Address: "),0,0,'');
		$this->SetXY(28.5,180);
		$this->MultiCell( 155,5,$address);
		$this->SetXY(28.5,205);
		$this->Cell(35,0,iconv( 'UTF-8','cp874' ,"Mobile phone NO: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,$mobile),0,0,''); // add value Mobile
		$this->Cell(30,0,iconv( 'UTF-8','cp874' ,"Telephone NO: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,$phone),0,0,''); // add value Telephone
		$this->SetXY(28.5,213);
		$this->Cell(16,0,iconv( 'UTF-8','cp874' ,"Email@: "),0,0,'');
		$this->Cell(75,0,iconv( 'UTF-8','cp874' ,$email),0,0,''); // add value Email
		$this->Cell(15,0,iconv( 'UTF-8','cp874' ,"Line ID: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,$lineid),0,0,''); // add value LineID
		$this->SetXY(28.5,221);
		$this->Cell(30,0,iconv( 'UTF-8','cp874' ,"Facebook name: "),0,0,'');
		$this->Cell(155,0,iconv( 'UTF-8','cp874' ,$fbname),0,0,''); // add value FBName
		$this->SetY(235);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,'Your expected delivery date: '.$deliverydate),0,0,'C'); // add value delivery date
		$this->SetFont('PTsansnarrow','',12);
		$this->SetY(245);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,"Please confirm your purchase order by clicking \"confirm\".We will contact you back in 24 hrs."),0,0,'C');
		$this->SetFont('PTsansnarrow','',18);
		$this->SetY(255);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,'Thank you for your order.'),0,0,'C');

	}

	function PrintChapter($PicId,$Type,$Height,$Width,$Thickness,$Quantity,$aGlass,$aFrame,$wDoor,$wFrame,$Remark,$firstname,$lastname,$address,$mobile,$phone,$email,$lineid,$fbname,$deliverydate)
	{
		$this->AddPage();
		$this->ProductsDetails($PicId,$Type,$Height,$Width,$Thickness,$Quantity,$aGlass,$aFrame,$wDoor,$wFrame,$Remark);
		$this->CustomerDetails($firstname,$lastname,$address,$mobile,$phone,$email,$lineid,$fbname,$deliverydate);
	}

//Function Draw RoundRect
function RoundedRect($x, $y, $w, $h, $r, $style = '')
    {
        $k = $this->k;
        $hp = $this->h;
        if($style=='F')
            $op='f';
        elseif($style=='FD' || $style=='DF')
            $op='B';
        else
            $op='S';
        $MyArc = 4/3 * (sqrt(2) - 1);
        $this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));
        $xc = $x+$w-$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));

        $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
        $xc = $x+$w-$r ;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
        $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
        $xc = $x+$r ;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
        $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
        $xc = $x+$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
        $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
        $this->_out($op);
    }

    function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $h = $this->h;
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
            $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
    }

}

$pdf = new PDF( 'P', 'mm', 'A4' );
//Add Font
$pdf->AddFont('kunlatri','','kunlasatri.php');
$pdf->AddFont('kunlatri','B','kunlasatribold.php');
$pdf->AddFont('kunlatri','I','kunlasatriLight.php');
$pdf->AddFont('PTsans','','PTsans.php');
$pdf->AddFont('PTsansnarrow','','PTsansnarrow.php');
$pdf->AddFont('PTsansnarrow','B','PTsansnarrowb.php');
//Cou
$pdf->AliasNbPages();

//Loop add Information
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		//group Header
		$orderID = $row['Order_ID'];
		//group Products
		$PicId = $row['Picture_Door_Name'];
		$Type = $row['Picture_Door_Type'];
		$Height = $row['Orders_Details_Height'];
		$Width = $row['Orders_Details_Width'];
		$Thickness = $row['Orders_Details_Thickness'];
		$Quantity = $row['Orders_Details_Quantity'];
		$aGlass = $row['Orders_Details_Accessories_GlassWork'];
		$aFrame = $row['Orders_Details_Accessories_Framing'];
		$wDoor = $row['Orders_Details_Wood_for_Door'];
		$wFrame = $row['Orders_Details_Wood_for_Framing'];
		$Remark = $row['Orders_Details_Remark'];
		//group Customer
    $firstname = $row['Customer_FirstName'];
    $lastname = $row['Customer_LastName'];
    $address = $row['Customer_Address'];
    $mobile = $row['Customer_Mobile'];
    $phone = $row['Customer_Phone'];
    $email = $row['Customer_Email'];
    $lineid = $row['Customer_LineID'];
    $fbname = $row['Customer_FBName'];
    $deliverydate = $row['Orders_Details_Delivery_Date'];

$pdf->PrintChapter($PicId,$Type,$Height,$Width,$Thickness,$Quantity,$aGlass,$aFrame,$wDoor,$wFrame,$Remark,$firstname,$lastname,$address,$mobile,$phone,$email,$lineid,$fbname,$deliverydate);
}
$pdf->Output();

?>
