<?php
ob_start();
session_start();

//----- Ajax with JQuery
if(!isset($_SESSION["intLine"]))
{
	if(isset($_POST["data1"]))
	{
		 $_SESSION["intLine"] = 0;
		 $_SESSION["ImgDoor"][0] = $_POST["data1"];
		 $_SESSION["Height"][0] = $_POST["data2"];
		 $_SESSION["Width"][0] = $_POST["data3"];
		 $_SESSION["Thickness"][0] = $_POST["data4"];
		 $_SESSION["Quantity"][0] = $_POST["data5"];
		 $_SESSION["Acsr1"][0] = $_POST['data6'];
		 $_SESSION["Acsr2"][0] = $_POST['data7'];
		 $_SESSION["Acsr3"][0] = $_POST['data8'];
		 $_SESSION["WoodForDoor"][0] = $_POST['data9'];
		 $_SESSION["WoodForFraming"][0] = $_POST['data10'];

		 header("location:order-show.php");
	}
}
else
{
	
	$key = array_search($_POST["data1"], $_SESSION["ImgDoor"]);
	if((string)$key != "")
	{
		 $_SESSION["Quantity"][$key] = $_SESSION["Quantity"][$key] + $_POST["data5"];
	}
	else
	{
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["ImgDoor"][$intNewLine] = $_POST["data1"];
		 $_SESSION["Height"][$intNewLine] = $_POST["data2"];
		 $_SESSION["Width"][$intNewLine] = $_POST["data3"];
		 $_SESSION["Thickness"][$intNewLine] = $_POST["data4"];
		 $_SESSION["Quantity"][$intNewLine] = $_POST["data5"];
		 $_SESSION["Acsr1"][$intNewLine] = $_POST['data6'];
		 $_SESSION["Acsr2"][$intNewLine] = $_POST['data7'];
		 $_SESSION["Acsr3"][$intNewLine] = $_POST['data8'];
		 $_SESSION["WoodForDoor"][$intNewLine] = $_POST['data9'];
		 $_SESSION["WoodForFraming"][$intNewLine] = $_POST['data10'];
	}
	
	 header("location:order-show.php");

}
 
//----- Ajax no JQuery	
/*if(!isset($_SESSION["intLine"]))
{
	if(isset($_POST["door"]))
	{
		 $_SESSION["intLine"] = 0;
		 $_SESSION["ImgDoor"][0] = $_POST["door"];
		 $_SESSION["Height"][0] = $_POST["x"];
		 $_SESSION["Width"][0] = $_POST["y"];
		 $_SESSION["Thickness"][0] = $_POST["z"];
		 $_SESSION["Quantity"][0] = $_POST["quantity"];
		 $_SESSION["Acsr1"][0] = $_POST['Acsr1'];
		 $_SESSION["Acsr2"][0] = $_POST['Acsr2'];
		 $_SESSION["Acsr3"][0] = $_POST['Acsr3'];
		 $_SESSION["WoodForDoor"][0] = $_POST['door_color'];
		 $_SESSION["WoodForFraming"][0] = $_POST['framing_style'];

		 header("location:order-show.php");
	}
}
else
{
	
	$key = array_search($_POST["door"], $_SESSION["ImgDoor"]);
	if((string)$key != "")
	{
		 $_SESSION["Quantity"][$key] = $_SESSION["Quantity"][$key] + $_POST["quantity"];
	}
	else
	{
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["ImgDoor"][$intNewLine] = $_POST["door"];
		 $_SESSION["Height"][$intNewLine] = $_POST["x"];
		 $_SESSION["Width"][$intNewLine] = $_POST["y"];
		 $_SESSION["Thickness"][$intNewLine] = $_POST["z"];
		 $_SESSION["Quantity"][$intNewLine] = $_POST["quantity"];
		 $_SESSION["Acsr1"][$intNewLine] = $_POST['Acsr1'];
		 $_SESSION["Acsr2"][$intNewLine] = $_POST['Acsr2'];
		 $_SESSION["Acsr3"][$intNewLine] = $_POST['Acsr3'];
		 $_SESSION["WoodForDoor"][$intNewLine] = $_POST['door_color'];
		 $_SESSION["WoodForFraming"][$intNewLine] = $_POST['framing_style'];
	}
	
	 header("location:order-show.php");

}*/

?>