<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  17</font></legend>
<?php
for($row=1;$row<=5;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);
	}

	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>