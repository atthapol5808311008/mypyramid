<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  9</font></legend>
<?php
for($row=1;$row<=5;$row++) {
	for($col=3;$col<=1+$row;$col++) {
	echo("&nbsp");
	}
	for($col=0;$col<=5-$row;$col++){
		echo($row);
	}
	for($col=0;$col<=4-$row;$col++){
		echo($row);
	}
	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>