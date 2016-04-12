<?php
//Name:login.php
//Purpose:To create a login form with username and password
//Author:Swathi Panneer Selvam swpa6826@colorado.edu
//Version:1.1
//Date:4/4/2016
?>
<html> 
<head>
<title> Tolkien DB </title>
</head>
<body> 

<center>  
  <a href=index.php> Story List </a>  |  <a href=index.php?s=50> Character List </a> | <a href=add.php> Add Characters </a>  
<hr>

<center>
 <form method=post action=add.php?s=4>
	<table><tr> <td> Username: </td> <td> <input type=text name=postUser>  </td> </tr>
	<tr> <td> Password: </td> <td> <input type=password name=postPass>  </td> </tr>
	<tr> <td colspan=2> <input type=submit name=submit value=Login> </td></tr> 
	</table>
	</form>
</body>
</html>
