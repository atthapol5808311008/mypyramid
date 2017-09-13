<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  29</font></legend>
<?php
for($row=1;$row<=5;$row++) {

	echo($row);

	echo("*");

	echo(2+$row);

	for($col=1;$col<=2+$row;$col++) {
		echo("*");
	}

	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>