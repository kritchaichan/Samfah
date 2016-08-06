<?php
require('fpdf/fpdf.php');


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
		$this->Text( 54 , 20 , "No.2132132");
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
	
	function ProductsDetails()
	{   
		$this->SetLineWidth(1);
		$this->SetDrawColor(153,153,153); //Set color
		$this->RoundedRect(28, 32, 155, 115, 5, 'D'); // Draw RoundRect
		
		$this->Image('../../pic_door_classic/CSP002.jpg',38,43,0,90,'jpg');
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
		$this->Cell( 10, 0 , "210 CM",0,0,'L'); //add value height
		
		$this->SetXY(62,136);
		$this->Cell( 10, 0 , "80 CM",0,0,'L'); //add value width
		
		$this->SetXY(92,130);
		$this->Cell( 10, 0 , "Thickness: 3.5 inch",0,0,'L'); //add value thickness
		
		$this->SetXY(120,50);
		$this->Cell( 10, 0 , "Quantity",0,0,'L');
		$this->SetXY(120,57.5);
		$this->Cell( 20, 0 , "10 Pcs",0,0,'C');//add value qty
		$this->SetXY(120,65);
		$this->Cell( 10, 0 , "Wood for Door:",0,0,'L');
		$this->SetXY(120,72.5);
		$this->Cell( 20, 0 , "Teak",0,0,'C'); //add value wood
		$this->SetXY(120,80);
		$this->Cell( 10, 0 , "Accessories",0,0,'L');
		$this->SetXY(120,87.5);
		$this->Cell( 20, 0 , "+ Framing",0,0,'L'); //add value frame
		$this->SetXY(120,95);
		$this->Cell( 20, 0 , "+ Glass Work",0,0,'L');//add value frame
		$this->SetXY(120,105);
		$this->Cell( 10, 0 , "Wood for framing:",0,0,'L');
		$this->SetXY(120,112.5);
		$this->Cell( 20, 0 , "Teak",0,0,'C');
	}

	
	function CustomerDetails()
	{
		$dot2 = "........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................";
		$this->SetFont('PTsansnarrow','',18);
		$this->SetY(157);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,'Customer\'s Information'),0,0,'C');
		$this->SetFont('PTsansnarrow','',14);
		$this->SetXY(28.5,166);
		$this->Cell(22,0,iconv( 'UTF-8','cp874' ,"Firstname: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,"Akkaraasdasdasdasdas"),0,0,''); // add value firstname
		$this->Cell(20,0,iconv( 'UTF-8','cp874' ,"Surname: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,"Teranaonot"),0,0,''); // add value surnamename
		$this->SetXY(28.5,175);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,"Delivered Address: "),0,0,'');
		$this->SetXY(28.5,180);
		$this->MultiCell( 155,5,$dot2);
		$this->SetXY(28.5,205);
		$this->Cell(35,0,iconv( 'UTF-8','cp874' ,"Mobile phone NO: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,"0817142992"),0,0,''); // add value Mobile
		$this->Cell(30,0,iconv( 'UTF-8','cp874' ,"Telephone NO: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,"027016769"),0,0,''); // add value Telephone
		$this->SetXY(28.5,213);
		$this->Cell(16,0,iconv( 'UTF-8','cp874' ,"Email@: "),0,0,'');
		$this->Cell(75,0,iconv( 'UTF-8','cp874' ,"akkara.terananont@windowslive.com"),0,0,''); // add value Email
		$this->Cell(15,0,iconv( 'UTF-8','cp874' ,"Line ID: "),0,0,'');
		$this->Cell(50,0,iconv( 'UTF-8','cp874' ,"akkara.terananont"),0,0,''); // add value LineID
		$this->SetXY(28.5,221);
		$this->Cell(30,0,iconv( 'UTF-8','cp874' ,"Facebook name: "),0,0,'');
		$this->Cell(155,0,iconv( 'UTF-8','cp874' ,"Akkara JoeStar Terananont"),0,0,''); // add value FBName
		$this->SetY(235);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,'Your expected delivery date: 06/08/2559'),0,0,'C'); // add value delivery date
		$this->SetFont('PTsansnarrow','',12);
		$this->SetY(245);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,"Please confirm your purchase order by clicking \"confirm\".We will contact you back in 24 hrs."),0,0,'C');
		$this->SetFont('PTsansnarrow','',18);
		$this->SetY(255);
		$this->Cell(0,0,iconv( 'UTF-8','cp874' ,'Thank you for your order.'),0,0,'C');

	}
	
	function PrintChapter()
	{
		$this->AddPage();
		$this->ProductsDetails();
		$this->CustomerDetails();
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
$pdf->PrintChapter();
$pdf->PrintChapter();
$pdf->PrintChapter();
$pdf->Output();
?>
