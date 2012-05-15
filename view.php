<?php
error_reporting(0);
include "wfcart.php";
session_start();
include("dbconfig.php");
$cart =& $_SESSION['wfcart'];
if(!is_object($cart)) $cart = new wfCart(); // if $cart ( $_SESSION['cart'] ) isn't an object, make a new cart
?>
<?php // point $cart to session cart.
echo <<<HTML
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="jquery-1.6.2.min.js"></script>
<script src="jquery/ui/jquery.ui.core.js"></script>
<script src="jquery/ui/jquery.ui.widget.js"></script>
<script src="jquery/ui/jquery.ui.button.js"></script>
<link rel="stylesheet" href="jquery/development-bundle/demos/demos.css">
<link rel="stylesheet" href="jquery/development-bundle/themes/base/jquery.ui.all.css">
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #7F5A00;
}


a:visited {
	color: #7F5A00;
}

a:hover {
	color: red;
}

a:active {
color: yellow;
}
#usernam{
color:white;
}
#passwor{
color:white;
}
.heading
{
	font-size:35px;
	}
	h1{
text-align: center;
}
th{
font-size: larger;
height:2em;
}
.tabla{

margin-left: auto;
margin-right: auto;
margin-top: 0px;

}
#table1{
border-collapse: collapse;
}
#buttons1{
margin-left:46%;
}
.heading
{
	font-size:35px;
	}
.text1{
color:black;
}
#table12
{
background:white;
margin-left: auto;
margin-right: auto;
width:300px;
}
#regis{
backgroud:black;
border-collapse:collapse;
border:1px solid green;
width:300px
}
#backg{
background:url(images/neon.gif);
background-repeat:both;
border:clear;
height:2100px;
width:100%; 
left:0;
z-index:-1;
margin:0;
}
td{
text-align:center;
}
#text34{
color:#E80C5A;
width:50%;
text-align:justify;
margin-right:30px;
margin-left:auto;
}
input{
background:#91FF00;
}
#submitbox { 
font-famil	y: verdana, arial, sans-serif; 
font-size: 75%; 
color: #000000; 
font-weight: light; 
border: #797979 1px solid; 
background-color: #ffffff; 
}
body{
background:url(images/greenback.png);
}
 .focusField{  
        border:solid 2px #73A6FF;  
        background:#black;  
        color:#000;  
    }  
    .idleField{  
        background:#EEE;  
        color: #6F6FFF;  
        border: solid 2px #DFDFDF;  
    }  
</style>
<!--
<script type="text/javascript" >
$(document).ready(function() {  
    $('input[type="text"]').addClass("idleField");  
    $('input[type="password"]').addClass("idleField");  
    $('input[type="text"]').focus(function() {  
        $(this).removeClass("idleField").addClass("focusField");  
        if (this.value == this.defaultValue){  
            this.value = '';  
        }  
        if(this.value != this.defaultValue){  
            this.select();  
        }  
    });
    $('input[type="password"]').focus(function() {  
        $(this).removeClass("idleField").addClass("focusField");  
        if (this.value == this.defaultValue){  
            this.value = '';  
        }  
        if(this.value != this.defaultValue){  
            this.select();  
        }  
    });  
$(function() {
		$( "input:submit, a, button", ".demo" ).button();
		$( "a", ".demo" ).click(function() { return false; });
	});    
    $('input[type="password"]').blur(function() {  
        $(this).removeClass("focusField").addClass("idleField");  
        if ($.trim(this.value == '')){  
            this.value = (this.defaultValue ? this.defaultValue : '');  
        }  
    });  
   
    $('input[type="text"]').blur(function() {  
        $(this).removeClass("focusField").addClass("idleField");  
        if ($.trim(this.value == '')){  
            this.value = (this.defaultValue ? this.defaultValue : '');  
        }  
    });  
});
</script>
-->
</head>

<body >
<div class="body1">
	<table cellspacing="0" cellpadding="0" height="80"  border="0" bordercolor="#FFFFFF" style="border-bottom-color:#FFFF00; border-bottom-style: dashed; border-bottom-	width:2px; width: 99%; float: none;">
		<tbody>
			<tr height="50">
				<td align="center" width="10%" rowspan=2>
					<img width="100" height="100" src="images/bike.jpg" alt=""/>
				</td>
			
				<td align="center" width="75%">
  				<p align="center" style="text-shadow:3.8px 3.8px 3.8px white	; font-style:sans-serif; color:green; font-size:70px; font-weight: bold;"><b id="heading">ECO CYCLE</b></p>
  				</td>
  			
  				
HTML;
  			/*	$connect1=mysql_connect($dbhost,$dbuser,$dbpass) or die("Couldn't connect");
				mysql_select_db("sdb_iperli") or die("Couldn't find db");
				
				$username = mysql_result(mysql_query('SELECT * FROM users WHERE `logged_in`=1'),0,'username');
			*/	if($_SESSION{'loggedin'} == TRUE)
				{
				echo "<td><h3 align= 'center' style='color:green;'>Welcome ".$_SESSION{'username'}."<br/><a href='logout.php'>Log out</a></h3></td>";		
  				}
  				if($_SESSION{'loggedin'} != TRUE)
				{

echo <<<HTML
<td>
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<td>
&nbsp;&nbsp;<a href="index.php">Sign In</a>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">Sign Up</a>
</td>
</tr>
</table>
<form method="get" action="http://www.google.com/search">
<table cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>
        <img class="search-gif" border="0" src="http://lib.store.yahoo.net/lib/yhst-17013773219467/searchgif.gif" alt=""/>
      </td>
      <td>
        <input class="search-input" type="text" style="width: 114px" size="10" name="query"/>
      </td>
      <td>
        <input class="search-go" type="image" src="http://lib.store.yahoo.net/lib/yhst-17013773219467/go.gif"/>
      </td>
      </tr>
    </tr>
  </tbody>
</table>
</form>
HTML;
}	
echo <<<HTML
  			</tr>
  			<tr>
  			<td>	
				<table border="0" bordercolor="#FFFFFF" width="500" align="center">
					<tbody>
					<tr>
					<td align="center"
>
						<a rel="nofollow" href="final.php" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px ;font-size:24px">Home</b></a>
					</td>
					<td align="center"
>
						<a rel="nofollow" href="quantity.php"><b  style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px" > Products </b></a>
					</td>
					<td align="center"
>
						<a rel="nofollow" href="forum.php?show"><b  style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px">Forum</b></a>
					</td>
					<td align="center"
>
						<a rel="nofollow" href="contact-us.html" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px">Contact us</b></a></td>
					<td align="center"
>
						<a href="game.php" ><b style="color:green;text-shadow:0.8px 0.8px 0.8px #22A6B0 ;font-size:24px">Games</b></a>
					</td>
					<td>
					</td>
			
					</tr>
					</tbody>
				</table>	
			</td>
		
<td width="10%" rowspan=4>
HTML;

echo <<<HTML

</td>
</tr>
</tbody>
</table>
<div id="backg">
<center>
HTML;
function show()
{
		$cart =& $_SESSION['wfcart'];
		include("dbconfig.php");
		if(!is_object($cart)) $cart = new wfCart();
		set_time_limit(0);
		$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
		mysql_select_db($dbname,$connect) or die(mysql_error());

					
		if($cart->itemcount > 0) 
		{
		//		echo "<h2>Items in cart</h2>";
				echo "<h3 align='right'>----------------------------&nbsp;&nbsp;&nbsp;&nbsp;</h3>";
				echo "<h3 align='right'>TOTAL: $".number_format($cart->total,2)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>";
				echo "<h3 align='right'>----------------------------&nbsp;&nbsp;&nbsp;&nbsp;</h3>";
				echo '<center>
				<div class="tabla" align="center" >
				<table id="table1" width = "70%" border = "1">
					
					<tr>
					<th>product</th><th>Available</th><th>Quantity</th><th>Price</th><th>Info</th><th>Subtotal</th><th>Edit</th>
					</tr>
					
					';
			foreach($cart->get_contents() as $item) 
			{
				
				$query76 = 'SELECT * FROM `order` WHERE `order_index`='.$item['id'].'';
				$result76 = mysql_query($query76,$connect) or die(mysql_error());
				$quantity93 = mysql_result($result76,$i, 'quantity_avail');
			
				echo  '<tr height="140">
					 <td align="center" width = "20%"> <img style="width:120px;height:120px;"src="images/'.$item['id'].'.jpg"/></td>';
				echo "<td align='center'>".$quantity93."</td>";
				echo "<td align='center' style='padding-top:1em;'><form method=post><input type='text' size='1' name='updatequant' value='".$item['qty']."'/></td>";
				echo "<td align='center'> $".number_format($item['price'],2)."</td>";
				echo "<td align='center'>".$item['info']."</td>";
				echo "<td align='center'>$".number_format($item['subtotal'],2)."</td>";
				echo "<td id='we' align='center'>
					
					<input type='hidden' name='uqty' value='".$item['qty']."'/>
					<input type='hidden' name='qid' value='".$item['id']."'/>
					<input type='submit' name='update' value='Update Quantity'/>
					</form>
				
					<form method=post><input type='hidden' name='id' value='".$item['id']."'/>
					<input type='submit' name='remove' value='Remove'/>
					</form>
					</td>
				<tr/>";
			}
			
			
			echo '	</table>
				</div>
				';			
			echo "<br/><br/><br/><table><tr><td><h3><a href='quantity.php'><input type='button' value='Continue Shopping'/></a></h3></td>";
			echo '<td><form action="check.php" method="POST">
							<h3 align="center">
							<input type="hidden" name="ctotal" value="'.$cart->total.'"/>
							<input type="hidden" name="qid" value="'.$item['id'].'"/>
							<input type="submit" value="Proceed to Check Out" name="checkout"/></h3>
						</form></td></tr></table></center>';
			
			} else 
		{
			echo "<br/><br/><br/><br/><br/><h2 align='center'>No items in cart</h2>";
			echo "<h3 align='center'><br/><br/><br/><a href='quantity.php'><input type='button' value='Continue Shopping'/></a><br/></h3></center>";
		}
		
		}


//  echo '<td> <a href="viewCart.php?remove=yy">Remove from cart</a>';

?>
<?php
	//<input type="button" value="Update Cart" name="update"/>
?>
<?php

	if ( isset($_POST['viewcart'])) { 
		show();
		unset($_POST['viewcart']);
	
	}	
	
	if ( isset($_POST['checkout'])) { 
		checkout();
		unset($_POST['checkout']);
	}	
	
	if ( isset($_POST['add'])) 
	{ 
		set_time_limit(0);
		include("dbconfig.php");
		$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
		mysql_select_db($dbname,$connect) or die(mysql_error());


		if(@$_POST['add']) 
		{
			$product_no = @($_POST['id']);
			$query1 = "select * from `order` where order_index=".$product_no."";
			$result1 = mysql_query($query1) or die(mysql_error());
			
			$quantity1 = mysql_result($result1,0,"quantity_ordered");
			$quantity_left = mysql_result($result1,0,"quantity_avail");
			$index1 = mysql_result($result1,0, "order_index");
			$product1 = mysql_result($result1,0, "product");
			$price1 = mysql_result($result1,0, "price");
			if($quantity_left > 0)
			{
				$cart->add_item($product_no,$_POST['quant'],$price1,$product1);
				$quant = $_POST['quant'];
				$fprice = $_POST['quant'] * $price1;
				$query41 = 'SELECT * FROM `orders_placed` WHERE `order_index`='.$index1.'';
				$result41 = mysql_query($query41,$connect) or die(mysql_error());
				$number_of_rows41 = mysql_num_rows($result41);//or die(mysql_error()));
				if($number_of_rows41  < 1 && $quant <= $quantity_left)
				{
					$quant_no = $quantity_left - $quant;
					$query19 = 'update `order` set `quantity_avail` = '.$quant_no.',`quantity_ordered` = '.$quant.' where `order_index`='.$product_no.'';
					mysql_query($query19, $connect) or die(mysql_error());
					$query81 = 'SELECT * FROM `order` WHERE `order_index`='.$product_no.'';
					$result81 = mysql_query($query81,$connect) or die(mysql_error());
					$quantity82 = mysql_result($result81, 0, 'quantity_avail');
			
					
					$query12 = 'insert into `orders_placed` values ('.$index1.',"'.$product1.'",'.$quantity82.','.$quant.','.$fprice.') ';
					mysql_query($query12, $connect) or die(mysql_error());
					echo "<h3 align='center'><br/><br/>$product1 is added to the cart</h3>";
//					echo "$product1 is added to the cart";
					show();
					echo '<div style="margin-left:auto; margin-right: auto;">';
			//		echo "<h3 align='center'><br/><br/><br/><a href='quantity.php'><input type='button' value='Continue Shopping'/></a><br/></h3>";
		/*				echo '
						<br/><br/><br/><br/>
						<form action="view.php" method="POST">
						<div style="margin-left:auto;margin-right:auto;width:100%;float:left">
						
							<h3 align="center"><input type="submit" value="View Cart" name="viewcart"/></h3>
							
						</div>
						</form>
						<form action="check.php" method="POST">
							<input type="hidden" name="ctotal" value="'.$cart->total.'"/>
							<input type="hidden" name="qid" value="'.$item['id'].'"/>
		
							<h3 align="center"><input type="submit" value="Proceed to Check Out" name="checkout"/></h3>
						</form>

						</div>';
		*/		}
				elseif($quant <= $quantity_left)
				{
					$quant_no= mysql_result($result41, 0, 'quantity_ordered');
					$fprice += ($quant_no * $price1);
					$quant_no +=$quant;
					
					$quant_avail = $quantity_left - $quant;
					$query19 = 'update `order` set `quantity_avail` = '.$quant_avail.',`quantity_ordered` = '.$quant_no.' where `order_index`='.$product_no.'';
					mysql_query($query19, $connect) or die(mysql_error());
					
					$query15 = 'update `orders_placed` set `quantity_ordered` = '.$quant_no.',`price`= '.$fprice.',`quantity_avail`='.$quant_avail.' where `order_index`='.$index1.'';
					mysql_query($query15, $connect) or die(mysql_error());
					echo '';
					echo "<h3 align='center'><br/><br/>$product1 is updated to the cart</h3>";
					show();
		//			echo "<h3 align='center'><br/><br/><br/><a href='quantity.php'><input type='button' value='Continue Shopping'/></a><br/></h3>";
					
		/*			echo '
						<br/><br/><br/><br/>
						<form action="view.php" method="POST">
						<div style="margin-left:auto;margin-right:auto;width:100%;float:left">
						
							<h3 align="center"><input type="submit" value="View Cart" name="viewcart"/></h3>
							
						</div>
						</form>
						<form action="check.php" method="POST">
							<h3 align="center"><input type="submit" value="Proceed to Check Out" name="checkout"/></h3>
						</form>

					';	
		*/		}else{
					echo "<h3 align='center'><br/><br/>Please select from the available quantity</h3>
					<a href='quantity.php'><input type='button' value='Enter again'/></a><br/></h3>";
					
				}	
				
			}
			else
			{
				echo "<h3 align='center'><br/>Item Not Available<br/></h3>";
				echo "<h3 align='center'><br/><br/><br/><a href='quantity.php'><input type='button' value='Continue Shopping'/></a><br/></h3></center>";
		
			}
			
		
		}
		unset($_POST['add']);
	}
	
	if ( isset($_POST['remove'])) 
	{ 
		if($_POST['remove'])
		{
		include("dbconfig.php");
			$rid = intval($_POST['id']);
			$cart->del_item($rid);
			set_time_limit(0);
			$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
			mysql_select_db($dbname,$connect) or die(mysql_error());
			
			$query61 = 'SELECT * FROM `orders_placed` WHERE `order_index`='.$rid.'';
			$result61 = mysql_query($query61,$connect) or die(mysql_error());
			for($i=0; $i<mysql_num_rows($result61);$i++)
			{
			$quantity12 = mysql_result($result61,$i, 'quantity_ordered');
			$quantity13 = mysql_result($result61,$i, 'quantity_avail');
//			echo $quantity12."is quantity ordered<br/>";
//			echo $quantity13."is quantity available<br/>";
			$fquant = $quantity12 + $quantity13;
//			echo $fquant." is the addition<br/>";	
			}
			$fquant = $quantity12 + $quantity13;
			$query20 = 'update `order` set `quantity_avail` = '.$fquant.',`quantity_ordered` = 0 where `order_index`='.$rid.'';
			mysql_query($query20, $connect) or die(mysql_error());
			
			$query51 = 'DELETE FROM orders_placed WHERE `order_index`='.$rid.'';
			$result51 = mysql_query($query51,$connect) or die(mysql_error());
					
			show();
		}
		unset($_POST['remove']);
	}	


	if ( isset($_POST['update'])) 
	{ 
		if($_POST['update'])
		{
		include("dbconfig.php");
			$rid1 = intval($_POST['qid']);
			$uqty = intval($_POST['updatequant']);
		//	echo "$rid1 is qid and $uqty is uqty<br/>";
			$rid = intval($_POST['id']);
			
			set_time_limit(0);
			$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
			mysql_select_db($dbname,$connect) or die(mysql_error());

			$product_no = @($_POST['qid']);
			
			
			
				$query678 = 'SELECT * FROM `order` WHERE `order_index`='.$rid1.'';
				$result678 = mysql_query($query678,$connect) or die(mysql_error());
				for($i=0;$i<mysql_num_rows($result678);$i++)
					{
						$quantity52 = mysql_result($result678,$i, 'quantity_ordered');
						$quantity53 = mysql_result($result678,$i, 'quantity_avail');
						$index12 = mysql_result($result678,$i, "order_index");
						$product12 = mysql_result($result678,$i, "product");
						$price12 = mysql_result($result678,$i, "price");
			
					//	echo $quantity52."is quantity ordered<br/>";
					//	echo $quantity53."is quantity available<br/>";
						$fquant = $quantity52 + $quantity53;
					//	echo $fquant." is the addition<br/>";	
					}
			if($uqty < $quantity53)
			{
			$cart->del_item($rid1);
			$cart->add_item($product_no,$uqty,$price12,$product12);
			
			$fquant = $fquant - $uqty;
			$fprice1 = $uqty * $price12;
			$query91 = 'update `order` set `quantity_avail` = '.$fquant.',`quantity_ordered` = '.$uqty.' where `order_index`='.$product_no.'';
			$query92 = 'update `orders_placed` set `quantity_avail` = '.$fquant.',`quantity_ordered` = '.$uqty.',`price` = '.$fprice1.' where `order_index`='.$product_no.'';
			
			mysql_query($query91, $connect) or die(mysql_error());
			mysql_query($query92, $connect) or die(mysql_error());
			
			echo "<h3 align='center'><br/><br/>$product12 is updated to the cart</h3>";
			show();
			}
			else
			{
					echo "<h3 align='center'><br/><br/>Please select from the available quantity</h3>";
					show();
			}			
//			echo "<h3 align='center'><br/><br/><br/><a href='quantity.php'><input type='button' value='Continue Shopping'/></a><br/></h3></center>";
/*			echo '
						<br/><br/><br/><br/>
						<form action="view.php" method="POST">
						<div style="margin-left:auto;margin-right:auto;width:100%;float:left">
						
							<h3 align="center"><input type="submit" value="View Cart" name="viewcart"/></h3>
							
						</div>
						</form>
						<form action="check.php" method="POST">
							<h3 align="center"><input type="submit" value="Proceed to Check Out" name="checkout"/></h3>
						</form>

					';	
			 
*/		unset($_POST['update']);
		}
	}
?>

















<?php
	/*<?php
if($_POST['add']) {
	$product_no = $_POST['id'];
	$query1 = "select * from `order` where order_index=".$product_no."";
	$result1 = mysql_query($query1) or die(mysql_error());
	$quantity1 = mysql_result($result1,0,"quantity_ordered");
	$index1 = mysql_result($result1,0, "order_index");
	$product1 = mysql_result($result1,0, "product");
	$price1 = mysql_result($result1,0, "price");
					
	$cart->add_item($product_no,$_POST['quant'],$price1,$product1);
	echo "<p align = 'center'><i>$product1</i> has been added to cart<p>";
}
if($_POST['remove']) {
	$rid = intval($_POST['id']);
	$cart->del_item($rid);

}


?>


<?php
echo "<h2>Items in cart</h2>";

		if($cart->itemcount > 0) 
		{
			foreach($cart->get_contents() as $item) 
			{
				echo "<br />Item:<br/>";
				echo "Code/ID :".$item['id']."<br/>";
				echo "Quantity:".$item['qty']."<br/>";
				echo "Price   :$".number_format($item['price'],2)."<br/>";
				echo "Info    :".$item['info']."<br />";
				echo "Subtotal :$".number_format($item['subtotal'],2)."<br />";
				echo "<form method=post><input type='hidden' name='id' value='".$item['id']."'/><input type='submit' name='remove' value='Remove'/></form>";
			}
			echo "---------------------<br>";
			echo "total: $".number_format($cart->total,2);
		} else 
		{
			echo "No items in cart";
		}
		echo "<br/><a href='quantity.php'>Back To Quantity</a><br/>";
		
?>
*/
?>