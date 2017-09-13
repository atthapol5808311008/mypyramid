<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  13</font></legend>
<?php
for($row=1;$row<=5;$row++) {
	for($col=2;$col<=$row;$col++) {
	echo("&nbsp&nbsp");
	}
	for($col=11;$col>=11;$col--){
		echo($col-$row-$row);
	}
	for($col=10;$col>=6+$row;$col--){
		echo($col-$row-$row);
	}

	for($col=5;$col>=1+$row;$col--){
		echo($col-$row);
	}

	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>