<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  31</font></legend>
<?php
for($row=1;$row<=5;$row++) {

	for($col=$row;$col<=5;$col++) {
		echo($row);	
	}

	for($col=2;$col<=$row;$col++) {
		echo("&nbsp&nbsp");
	}

	for($col=0;$col<=5-$row;$col++) {
		echo("*");	
	}

	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>