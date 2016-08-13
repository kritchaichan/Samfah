<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Samfa Craftman</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
		<script type="text/javascript" src="../../js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="https://www.google.com/cse/tools/onthefly?form=searchbox_demo&lang="></script>
		<script type="text/javascript" src="modernizr.custom.79639.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        

		<style type="text/css">
			hr.style-head:after{
					content: 'Check Confirm!';
			}
			#menu4{font-weight:bold;}
		</style>

</head>

<body>
			

				<div id="blog" class="order">

		        	<div id="Detail" style="min-height: 710px;">
					<?php
                    for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
                    { // Loop Order
                    ?>
                        <div id="order2">
                        <div id="box-product">
                        <div id="model-product" style="width:50%;" >
                    <?php
                        $door = $_SESSION["ImgDoor"][$i];
                        $x =  $_SESSION["Height"][$i];
                        $y =  $_SESSION["Width"][$i];
                        $z =  $_SESSION["Thickness"][$i];
                        $quan =  $_SESSION["Quantity"][$i];
                        $acsr1 =  $_SESSION["Acsr1"][$i];
                        $acsr2 =  $_SESSION["Acsr2"][$i];
                        $acsr3 =  $_SESSION["Acsr3"][$i];
                        $wood_c = $_SESSION["WoodForDoor"][$i];
                        $frame_c = $_SESSION["WoodForFraming"][$i];
                    
                        $pic_name = substr($door,0,2);
                        if($pic_name == "CS"){
                        $img_door  = '<img src="../pic_door_classic/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door.'</h5>';
                        echo $img_door;
                        $link = "classic.php";
                        }
                        else if ($pic_name == "CT"){
                        $img_door  = '<img src="../pic_door_contemporary/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door.'</h5>';
                        echo $img_door;
                        $link = "contemporary.php";
                        }
                        else if($pic_name == "MD"){
                        $img_door  = '<img src="../pic_door_modern/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door.'</h5>';
                        echo $img_door;
                        $link = "modern.php";
                        }
                        
						/*if(!empty($door_order)){
                        $img_door  = '<img src="../pic_door_order/'.$door.'.jpg" alt="door" >';
                        $img_door .= '<h5>'.$door_order.'</h5>';
                        echo $img_door;
                        }*/
                    ?>
                    </div>
                    <div id="detail-product" style="width:50%;">
                    <?php 
                    //Ordinal Number
                    $number = $i+1;
                    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
                    if (($number%100) >= 11 && ($number%100) <= 13)
                       $abbreviation = $number. 'th';
                    else
                       $abbreviation = $number. $ends[$number % 10];
                      
                    ?>
                    <h3><?=$abbreviation?></h3>
                        <div class="detail-form">
                        <label>Size</label>
                        <label>Height : <?=$x?> Cm</label>
                        <label>Width : <?=$y?> Cm</label>
                        <label>Thickness : <?=$z?> Inch</label>
                        <label>Quantity : <?=$quan?> Pcs</label>
                        </div>
                                <div class="detail-form">
                                <label>Accessories</label>
                                <?php
                                                                        
                                if($acsr1 != ""){
                                    echo '<label><input type="checkbox" checked id="acsr" name="Acsr1" value="Door/Windows" disabled readonly><span>Door/Windows</span></label>';
                                }
                                else{
                                    echo '<label><input type="checkbox" disabled id="acsr" name="Acsr1" value="Door/Windows" disabled readonly><span>Door/Windows</span></label>';
                                }
                                                                        
                                if($acsr2 != ""){
                                    echo '<label><input type="checkbox" checked id="acsr" name="Acsr2" value="Frame" disabled readonly><span>Frame</span></label>';
                                }
                                else{
                                    echo '<label><input type="checkbox" disabled id="acsr" name="Acsr2" value="Door/Windows" disabled readonly><span>Frame</span></label>';
                                }
                                                                        
                                if ($acsr3 != ""){
                                    echo '<label><input type="checkbox" checked id="acsr" name="Acsr3" value="Glass" disabled readonly><span>Glass work</span></label>';
                                }
                                else{
                                    echo '<label><input type="checkbox" disabled id="acsr" name="Acsr3" value="Door/Windows" disabled readonly><span>Glass work</span></label>';
                                }
                                
                                ?>
                                </div>
                                                                
                                <div class="option-product" onclick="$('#color').show();$('#style').hide();">
                                    <label>Wood</label>
                                    <label><img style="width:77px; border:3px solid black;" src="../wood_color/<?=$wood_c.".jpg"?>" alt="ไม้"></label>
                                    </div>
                                <div class="option-product" onclick="$('#color').hide();$('#style').show();">
                            <label>Framing</label>
                            <label><img style="width:77px; border:3px solid black;" src="../wood_frame/<?=$frame_c.".jpg"?>" alt="ไม้"></label>
                        </div>
                    </div><!--/*end detail-product*/-->
                    </div><!--/*end box-product*/-->
                    </div><!--/*end Detail*/-->
                    <?php
                      } // End Loop Order
                    ?>
					<div id="footer">
						<a href="javascript:history.back(1);">< Back</a>
	                    <a href="form.php">Confirm ></a>
		        	</div>
			  	</div><!--/*end blog*/-->
				
</body>
</html>