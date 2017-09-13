<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  12</font></legend>
<?php
for($row=1;$row<=5;$row++) {
	for($col=2;$col<=$row;$col++) {
	echo("&nbsp");
	}
	for($col=$row;$col<=10-$row;$col++){
		echo($col);
	}
	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>