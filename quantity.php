<?php
session_start();
error_reporting(0);	
include("dbconfig.php");
//include "wfcart.php";
//$cart =& $_SESSION['wfcart']; // point $cart to session cart.
//if(!is_object($cart)) $cart = new wfCart(); // if $cart ( $_SESSION['cart'] ) isn't an object, make a new cart
//  echo '<td> <a href="viewCart.php?remove=yy">Remove from cart</a>';
?>
<?php
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
background:url(images/neon1.jpg);
background-repeat:both;
border:clear;
height:1100px;
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
/*	if ($_SESSION['loggedin'] !== TRUE) 
	{
	echo'
	<p align="center">You must log in first<br/><a href="index.php"> log in</p>
	</div>';



exit();
	
}*/
?>
<?php
/*include 'viewCart.php';
if ( isset($_GET['add'])) 
	{ 
		display();
		unset($_GET['add']);
	}	
	elseif (isset($_GET['show']))
	{ 
       		echo "Your Shopping Cart has the following items so far:<br/>"; 
		show_cart();
		unset($_GET['show']);
	}
*/?>
<?php
	set_time_limit(0);
	$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
	mysql_select_db($dbname,$connect) or die(mysql_error());

	
	$query = 'select * from `order`';
	$result = mysql_query($query, $connect) or die(mysql_error());
	for($i=0;$i<mysql_num_rows($result);$i++)
	{
	$available1 += mysql_result($result, $i, "quantity_avail");
	}
	if($available1 >0)
	{
	
	echo '<div class="tabla" align="center">
				<table id="table1" width = "70%" border = "0">
					<center>
					 <tr ><th></th> <th align="center">Index</th><th align="center"> Product</th> <th align="center"> Product Description</th> <th align="center"> Left </th><th align="center"> Quantity </th><th align="center"> Price</th><th align="center"> Buy </th>  ';	
	for($i=0;$i<mysql_num_rows($result);$i++)
		{
			$quantity = mysql_result($result, $i, "quantity_ordered");
			$available = mysql_result($result, $i, "quantity_avail");
					$index = mysql_result($result, $i, "order_index");
					$product = mysql_result($result, $i, "product");
					$price = mysql_result($result, $i, "price");
					
			if($available > 0 )
				{
					echo '
					  <tr height="140">
					  <form method="post" action="view.php">
					  <td><input type="hidden" name="id" value="'.$index.'"/></td>
					  <td align="center">'.$index.'</td>
					  <td align="center" width = "20%"> <img style="width:120px;height:120px;"src="images/'.$index.'.jpg"/></td>
       				<td width = "30%" align="center"> <b class="desc">'.$product.'</b></td>
       				<td align="center">'.$available.'</td>
       				<td align="center"><input type="text" name="quant" size = "2" value="1"></input></td>
				    <td align="center"> '.$price.'</td>
				    <td align="center"><input type="submit" value="Add to cart" name="add"/></td></form>
				    </tr>';
												
				}
				else
				{
				echo '	<tr height="140">
					  <td><input type="hidden" name="id" value="'.$index.'"/></td>
					  <td align="center">'.$index.'</td>
					  <td align="center" width = "20%"> <img style="width:60px;height:60px;"src="images/'.$index.'.jpg"/></td>
       				<td width = "30%" align="center"><b class="desc">'.$product.'</b></td>
       				<td align="center">'.$available.'</td>
       				<td align="center">0<br/></td>
				    <td align="center"> '.$price.'</td>
				    <td align="center">Will be<br/>Available Soon</td>
				    </tr>';

		}
		
		
		}
	echo '</center></table></div>';  
		}
	
?>


<?php
	$query132 = 'select * from `orders_placed`';
	$result132 = mysql_query($query132, $connect) or die(mysql_error());
	if(mysql_num_rows($result132) > 0)
	{
	
	for($i=0;$i<mysql_num_rows($result132);$i++)
		{
			$fprice132 += mysql_result($result132,$i,'price');
		}	
	echo '<br/><br/>

	<div id="buttons1">
		<table>
		<tr>
			<td>	
				<form action="view.php" method="POST">
					<input type="submit" value="View Cart" name="viewcart"/>
				</form>
			</td>
			<td>
				<form action="check.php" method="POST">
					<input type="hidden" name="ctotal" value="'.$fprice132.'"/>
					<input type="hidden" name="qid" value="'.$item['id'].'"/>				
					<input type="submit" value="Proceed to Check Out" name="checkout"/>
				</form>
			</td>
		</tr>
	</div>
</div>	
</body>
</html>';
	}
?>

































