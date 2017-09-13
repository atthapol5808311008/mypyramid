<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  24</font></legend>
<?php
for($row=1;$row<=5;$row++) {
	echo($row);

	for($col=1;$col<=$row;$col++) {
		echo("*");	
	}
	
	for($col=2;$col<=$row;$col++) {
		echo("*");	
	}

	for($col=5;$col>=$row;$col--) {
		echo($row);
	}

	for($col=5;$col>=$row;$col--) {
		echo($row);
	}

	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>