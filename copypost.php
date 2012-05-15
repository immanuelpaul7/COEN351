<?php
include("dbconfig.php");
function posted()
{
	if ( isset($_GET['posted'])) 
	{ 
	    include("dbconfig.php");
		$add = $_GET['posted'];
		$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die("error connection");
		mysql_select_db($dbname, $connect) or die("not connected");
		$query2 = 'select * from `users` where `logged_in` = 1';
		$result2 = mysql_query($query2,$connect) or die(mysql_error());
		$username12 = mysql_result($result2, 0 , 'username');  
		$email12 = mysql_result($result2, 0 , 'email'); 
		$activate = mysql_result($result2, 0 , 'activationkey');  
			//if($_GET['user'])
			{
			//	$var = $_GET['user'];
			}
		//else	
			{
			//	$var = isset($_POST['txt_name']) ? $_POST['txt_name'] : '';		
			}

		$var = $username12;
//		$var = $_POST["txt_name"];
		$comment = $_POST["txt_comment"]; 
		$len = strlen($comment);
		if (isset($_POST['txt_comment']))
		{
		$query23 = "select * from `guestbook` where `name` = '$username12' AND `email` = '$email12' AND `comment` = '$comment'";
		$result23 = mysql_query($query23,$connect) or die(mysql_error());
		$numro = mysql_num_rows($result23);  
		
		//only write database if there's a name
		if(($_SESSION{'loggedin'} == TRUE) && $activate == '')
		{
			if($numro < 1)
			{
		
		
//		$email = $_POST["txt_email"];
				
				$query = "insert into guestbook (`name`, `email`, `comment`,`index`) VALUES ('$var', '$email12','$comment','$add')";
				$number_of_rows = mysql_num_rows(mysql_query("SELECT * FROM guestbook WHERE name='$var' AND email='$email' AND comment='$comment'"));
		
				if($number_of_rows > 0)
				{
				}
				else 
				{
					mysql_query($query) or die(mysql_error());		
				}
			
			}
		}
		elseif($_SESSION{'loggedin'} == TRUE)
		{
				echo '<h3>To post a comment please activate your link that has sent to your email</h3>';
		}
		else
		{
				echo '<h3>To comment please <a href="index.php">log in</a></b>';
		}
		
	}
}

echo <<<HTML

<html>
<STYLE type="text/css" >
body{
background-color:#FFED0D;
}
h1{
text-align: center;
}
</STYLE>
<head>
<title>Forum</title>
</head>
<body>
HTML;
	$email_len = strlen($email12);
	$add = $_GET['posted'];
include("dbconfig.php");
	$connect = mysql_connect($dbhost,$dbuser,$dbpass) or die("error connection");
	mysql_select_db($dbname, $connect) or die("not connected");
		
	$query= 'SELECT * FROM guestbook where `index`='.$add.'';
	$result = mysql_query($query, $connect) or die(mysql_error()); 
	
	$query54= 'SELECT * FROM `topics` where `index`='.$add.'';
	$result54 = mysql_query($query54, $connect) or die(mysql_error()); 
	$topic = mysql_result($result54,0, 'topics');
	
	echo '<h3>Topic: "'.$topic.'"</h3>' ;
	
	for ($i=0; $i < mysql_num_rows($result); $i++)
	{
		$name = mysql_result($result, $i, 'name' );
		$email = mysql_result($result, $i, 'email' );
		$comment = mysql_result($result, $i, 'comment' ); 
		$date = mysql_result($result, $i, 'data_auto' ); 
		echo ' 
		<table bgcolor="#AAAAA" border="0" width="55%" cellspacing="1" cellpading="2">
		<tr> 
			
			<td bgcolor="#AAEFFF">
				<b>Comment:</b> 
			</td>
			<td bgcolor="#AAEFFF">
				'.$comment.'
			</td>
			</font>
			</tr>

	<tr>		<td width="20%" bgcolor="#EEEEEE">
		<font face="arial" size="2">';
	
		//if($email>0)
			{
				echo '<b align="left"><a href="mailto:'.$email.'">'.$name.'</a></b></td><td bgcolor="#EEEEEE" align="left" style="margin-left:0;"><div style="left:0;margin-right:auto;">'.$date.'
</div></td></tr><br/>';
			}
		//else
			{
			//	echo '<b>Name:</b><td></td>'.$name.'</td></tr>';
			}
	
	}
	


if($username12)
{
	
echo <<<HTML
<center></table>
<form method="POST"> 
<font face="arial" size="1">
<h3 align="left"style= "width: 55%">Comment: </h3>
<textarea style= "width: 55%" rows="2" name="txt_comment"></textarea>
<center><input type="submit" name = "submit" value="Submit"></center>
</font>
</form>

HTML;

}	

echo <<<HTML
</table>

</body>
</html>
HTML;
	
}
//$comment = mysql_result($result, $i, "comment" ); 
?>
<?php
		if ( isset($_GET['posted'])) { 
		posted();
		unset($_GET['posted']);
	}	

?>
