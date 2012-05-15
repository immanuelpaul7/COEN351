<?php
include("dbconfig.php");
if (isset($_POST['submit'])){
    processForm();
}else{
    displayForm();
}
function testUnique(){
    if (!isset($_SESSION['uid'])) return false;
    if (!isset($_POST['uid'])) return false;
    if (trim($_POST['uid']) !== $_SESSION['uid']) return false;
    return true;
}
function generateUID(){
    if (isset($_SESSION['uid'])){
        return $_SESSION['uid'];
    }else{
        $_SESSION['uid'] = uniqid("test_", true);
        return $_SESSION['uid'];
    }
}
function displayForm($msg=''){
    $msg = !empty($msg)?"<legend>$msg</legend>":'';
    $uid = generateUID();
    $field = isset($_POST['txt_name']) ? $_POST['txt_name'] : '';
	$field1 = isset($_POST['txt_email']) ? $_POST['txt_email'] : '';
	$field2 = isset($_POST['txt_comment']) ? $_POST['txt_comment'] : '';

	function posted()
{
	if ( isset($_GET['posted'])) 
	{ 
		$add = $_GET['posted'];
		$connect = mysql_connect("dbserver.engr.scu.edu", "iperli", "") or die("error connection");
		mysql_select_db("sdb_iperli", $connect) or die("not connected");


		$var = $_POST["txt_name"];
		$len = strlen($var);
		//only write database if there's a name
		if(isset($_POST['submit']))
		{
			if($len > 0)
			{
			$email = $_POST["txt_email"];
			$comment = $_POST["txt_comment"]; 
			$query = "insert into guestbook (`name`, `email`, `comment`,`index`) VALUES ('$field', '$field1','$field2','$add')";
			}
		}
	}
echo <<<HTML

<html>
<head>
<title>Guestbook</title>
</head>
<body>
<center>

	<br/><br/><br/><br/>
<form method="post" action="{$_SERVER['PHP_SELF']}" >
   <div style="margin-left: 15%; margin-right:15%position:inherit;">
    <fieldset style="width:70%;">
    
    <input type="hidden" name="uid" value="$uid" />
	<p>Enter your name:</p>   
	<input type = "text" name = "txt_name" value="$field" size ="20"/>		
	<p>Enter the your Email:</p> 
	<input type = "text" name = "user_name" value="$field1" size ="40"/>	
	
	<p>Comment:</p> 
	<textarea style= "width: 50%" rows="5" name="txt_comment" value="$field2"></textarea>
	<br/><br/>
	<input type="submit" name="submit" value="submit" />
    </fieldset>
    <br/><br/>
	<b>$msg</b>
	</div>
</form>


<table bgcolor="#AAAAA" border="0" width="75%" cellspacing="1" cellpading="2">
HTML;

	


}
function processForm(){
    if (testUnique()){
    	set_time_limit(0);
		$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
		mysql_select_db($dbname,$connect) or die(mysql_error());
		mysql_query($query) or die(mysql_error());
	$query= 'SELECT * FROM guestbook where `index`='.$add.'';
	$result = mysql_query($query, $connect) or die(mysql_error()); 
	for ($i=0; $i < mysql_num_rows($result); $i++)
	{
		$name = mysql_result($result, $i, 'name' );
		$email = mysql_result($result, $i, 'email' );
		$comment = mysql_result($result, $i, 'comment' ); 
		$date = mysql_result($result, $i, 'data_auto' ); 
		$email_len = strlen($email);
		echo ' 
		<tr> 
		<td width="100%" bgcolor="#EEEEEE">
		<font face="arial" size="2">';
	
		if($email_len>0)
			{
				echo '<b>Name:</b> <a href="mailto:'.$email.'">'.$name.'</a>';
			}
		else
			{
				echo '<b>Name:</b>'.$name.'';
			}
		echo '
			<br/>
			<b>Date:</b>'.$date.'
			<br/>
			<b>Comment:</b> '.$comment.'
			</font>
			</td>
			</tr>';

	}


echo <<<HTML
</table>
</center>
</body>
</html>
HTML;
	}
        killVars();
        displayForm("Success, Your Topic '".$topic_name."' has been created");
       
        
    } else {
        //you may want to do something else here
        killVars();
        displayForm("You just refreshed your page");
    }
    
}

function killVars(){
    unset($_SESSION['uid']);
    unset($_POST);
}
?>

	</body>
</html>
