<?php
ob_start();
session_start();
	
if(!isset($_SESSION["intLine"]))
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

		 header("location:show.php");
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
	
	 header("location:show.php");

}
	//echo "Hello ThaiCreate.Com Kuy";

?>