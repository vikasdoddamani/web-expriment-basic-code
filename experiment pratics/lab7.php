<!DOCTYPE html>
<html>
 <head>
	<meta http-equiv="refresh" content="1">
	<style>
		p{
	   	 color:white;
		 font-size:90px;
		 position:absolute;
		 top:50%;
		 left:50%;
		 transform:translate(-50%,-50%);
		}
		body
		{
		 background-color:black;
		}	
	</style>
 </head>
 <body>
	<p style="color:white;">
	<?php
	   date_default_timezone_set("Asia/calcutta");
	   echo"<table border=7 style=color:white; text-align:center;><tbody><tr><td>".date("h")."</td><td>".date("i")."</td><td>".date("s")."</td><td>".date("A")."</td></tr>";
	   echo"<tr><td>".date("d")."</td><td colspan=2>".date("M")."</td><td>".date("Y")."</td></tr>";
	   echo"<tr><td colspan=2>Day</td><td colspan=2>".date("D")."</td></tr></tbody></table>";
	?>
	</p>
 </body>
</html>