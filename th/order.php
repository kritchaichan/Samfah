<?php
ob_start();
session_start();
	
if(!isset($_SESSION["intLine"]))
{
	if(isset($_POST["door"]))
	{
		 $_SESSION["intLine"] = 0;
		 $_SESSION["imgdoor"][0] = $_POST["door"];
		 $_SESSION["strQty"][0] = $_POST["txtQty"];
		 $_SESSION["strQty"][0] = $_POST["txtQty"];
		 $_SESSION["strQty"][0] = $_POST["txtQty"];
		 $_SESSION["strQty"][0] = $_POST["txtQty"];

		 header("location:show.php");
	}
}
else
{
	
	$key = array_search($_POST["txtProductID"], $_SESSION["strProductID"]);
	if((string)$key != "")
	{
		 $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + $_POST["txtQty"];
	}
	else
	{
		
		 $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["strProductID"][$intNewLine] = $_POST["txtProductID"];
		 $_SESSION["strQty"][$intNewLine] = $_POST["txtQty"];
	}
	
	 header("location:form.php");

}
?>

<?php /* This code download from www.ThaiCreate.Com */ ?>