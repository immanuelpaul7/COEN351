<?php
error_reporting(0);
include("dbconfig.php");
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
			*/	if($username)
				{
				echo "<td><h3 align= 'center' style='color:green;'>Welcome ".$username."<br/><a href='logout.php'>Log out</a></h3></td>";		
  				}
  				if(!($username))
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
						<a rel="nofollow" href="final.php" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px ;font-size:24px"></b></a>
					</td>
					<td align="center"
>
						<a rel="nofollow" href="quantity.php"><b  style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px" > Products </b></a>
					</td>
					<td align="center"
>
						<a rel="nofollow" href="forum.php?show"><b  style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px"></b></a>
					</td>
					<td align="center"
>
						<a rel="nofollow" href="contact-us.php" ><b style="color:green;text-shadow:0.5px 0.5px 0.5px #22A6B0 ;font-size:24px"></b></a></td>
					<td align="center"
>
						<a href="" ><b style="color:green;text-shadow:0.8px 0.8px 0.8px #22A6B0 ;font-size:24px"></b></a>
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
if( isset($_POST['submit']) && $_POST['submit']){
// This code﻿ will only run if $_POST['submit'] is set.
}
echo "<h3>Register</h3>";

$submit = @$_POST['submit'];

$fullname = strip_tags(@$_POST['fullname']);
$username = strip_tags(@$_POST['username']);
$password = strip_tags(@$_POST['password']);
$repeatpassword = strip_tags(@$_POST['repeatpassword']);
$question = strip_tags(@$_POST['question']);
$answer = strip_tags(@$_POST['answer']);
$street = strip_tags(@$_POST['street']);
$city = strip_tags(@$_POST['city']);
$state = strip_tags(@$_POST['state']);
$zipcode = @($_POST['zipcode']);
$date = date("Y-m-d");
$activationkey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
$email = mysql_real_escape_string($_POST[email]);


$patt_full = '/\w+(\.)*/i';
$patt_pass = '/\w{8,}(\W)*/i';
$patt_pin3 = '/[0-9]{5}/i';
$patt_pin2 =  '/[0-9]{5}-[0-9]{4]/i';
$patt_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i';

if ($submit)
{

//check for existance
	if(preg_match($patt_full,$username))
	{
	}
	else
	{
		echo "<h3 style='color:red;'>Username Error: Username con contain only numbers alphabets and an underscore.</h3>";
		echo '<br/><br/><br/><a href="register.php"><input type="button" value = "register"/></a>';
		exit();
			
	}
	if(preg_match($patt_pass,$password,$matches))
	{
	
	}
	else
	{
		echo "<h3 style='color:red;'>Password Error: Password should contain eight characters or more.</h3>";	
		echo '<br/><br/><br/><a href="register.php"><input type="button" value = "register"/></a>';
		exit();
	}
if(preg_match($patt_email,$email, $matches))
	{
	
	}
	else
	{
		echo "<h3 style='color:red;'>Email Error: email should have a valid format<br/> Ex: <i style='color:black;'>ex1@example.com</i></h3>";	
		echo '<br/><br/><br/><a href="register.php"><input type="button" value = "register"/></a>';
		exit();
	}
if(preg_match($patt_pin2,$zipcode,$matches) || preg_match($patt_pin3,$zipcode,$matches))
	{
	
	}
	else
	{
		echo "<h3 style='color:red;'>Pincode Error: Please enter a five or nine digit pin code<br/> For ex: 95053 or 95053-2609</h3>";	
		echo '<br/><br/><br/><a href="register.php"><input type="button" value = "register"/></a>';
		exit();
	}





if($fullname&&$username&&$password&&$repeatpassword&&$street&&$city&&$state&&$zipcode&&$question&&$answer&&$email)
{
	
	
	if($password==$repeatpassword)
	{
		
	
		if(strlen($username)>25 || strlen($fullname)>25)
		{
			echo " Length of username/fullname is too long</center></div></body></html>";
		}
		
		else 
		{
		//check password length
			if(strlen($password)>25 || strlen($password)<6)
		    {	
		    	
		    	echo "Password must be between 6 and 25 characters</center></div></body></html>";
		
	        }
			else
			{
				//register the user!
				//encrypt password
				$password = md5($password);
				$repeatpassword = md5($repeatpassword);
				$connect=mysql_connect($dbhost,$dbuser,$dbpass) or die("Couldn't connect");
				mysql_select_db($dbname) or die("Couldn't find db");
				
				$number_of_rows = mysql_num_rows(mysql_query('SELECT * FROM users WHERE username="'.$username.'" AND `name`="'.$fullname.'"'));

		if($number_of_rows > 0)
			{
			}
		else 
			{
				$mcode = mcode();
				$queryreg = mysql_query('INSERT INTO users VALUES(NULL,"'.$fullname.'","'.$username.'","'.$password.'","'.$question.'","'.$answer.'","'.$mcode.'","'.$date.'","'.$street.'","'.$city.'","'.$state.'",'.$zipcode.',"verify","'.$email.'","'.$activationkey.'",0)') or 	die(mysql_error());
				mysql_query($queryreg);// or die(mysql_error());		
				echo "An email has been sent to ".$email." with an activation key. Please check your mail to complete registration.";

			##Send activation Email

			$to      = $_POST['email'];

			$subject = " Eco-cycle.com Registration";

			$message = "Welcome to Eco Cycle!\r\rYou, or someone using your email address, has completed registration at ecocycle.com. You can complete registration by clicking the following link:\r\rYour Member Code is $mcode \r\rhttp://localhost/Assign123/verify.php?$activationkey\r\rIf this is an error, ignore this email and you will be removed from our mailing list.\r\rRegards,Eco-cycle.com Team";

			$headers = 'From: noreply@ ecocycle.com' . "\r\n" .
		
    		'Reply-To: noreply@ ecocycle.com' . "\r\n" .

		    'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);

				echo "<h3 align= 'center'>You have been registered! <br/>Your member Code is <i>".$mcode."</i><br/><a href='index.php'>Continue to the Website</a></h3></center></div></body></html>";
		
			
			}

				
				
				
					
			}
		
		}
		
		
}
	
	else
	{
		echo "Your passwords donot match";		
	}
	
}
//else 

//	echo "Please fill in <b>all</b> fields!";


}
?>
<?php
function mcode() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 
?>

<form action="register.php" method="POST">
		<div id="table12">
		<table id="regis">
        		<tr>
                	<td>
                    <b class="text1">Your full name:</b>
                    </td>
                    <td>
                    <input type="text" name="fullname" value=""><!--<?php echo $fullname; ?>-->
                    </td>
                </tr>
        		<tr>
                	<td>
                    <b class="text1">Choose a username:</b>
                    </td>
                    <td>
                    <input type="text" name="username" value=""><!--<?php echo $username; ?>-->
                    </td>
                </tr>
                <tr>
                	<td>
                    <b class="text1">Choose a password:</b>
                    </td>
                    <td>
                    <input type="password" name="password">
                    </td>
                </tr>
				<tr>
                	<td>
                    <b class="text1">Repeat your password:</b>
                    </td>
                    <td>
                    <input type="password" name="repeatpassword">
                    </td>
                </tr>
                <tr>
                	<td>
                    <b class="text1">Enter Your Email</b>
                    </td>
                    <td>
                    <input type="text" name="email" value="Email">
                    </td>
                </tr>

                <tr>
                	<td>
                    <b class="text1">Security Question:</b>
                    </td>
                    <td>
                    <input type="text" name="question" value="Security Question">
                    </td>
                </tr>
               
               <tr>
                	<td>
                    <b class="text1">Enter the answer:</b>
                    </td>
                    <td>
                    <input type="text" name="answer" value="Your answer?">
                    </td>
                </tr>
               <tr>
                	<td>
                    <b class="text1">Enter your Street:</b>
                    </td>
                    <td>
                    <input type="text" name="street" value="Your street?">
                    </td>
                </tr>
				<tr>
                	<td>
                    <b class="text1">Enter the City:</b>
                    </td>
                    <td>
                    <input type="text" name="city" value="Your city?">
                    </td>
                </tr>
				<tr>
                	<td>
                    <b class="text1">Enter the State:</b>
                    </td>
                    <td>
                    <input type="text" name="state" value="Your state?">
                    </td>
                </tr>
				<tr>
                	<td>
                    <b class="text1">Enter the Zipcode:</b>
                    </td>
                    <td>
                    <input type="text" name="zipcode" value="Your zipcode?">
                    </td>
                </tr>
				
        </table>
        </div>
        <p>
        <div class="demo">
        <input type="submit" id="submitbox"name="submit" value="Register">
        </div>
</form></center></div></body></html>