<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  32</font></legend>
<?php
for($row=1;$row<=5;$row++) {
	for($col=1;$col<=8-$row;$col++) {
		echo($col);	
	}

	for($col=1;$col<=2+$row;$col++) {
		echo("*");	
	}
	
	echo($row+2);

	echo "<br/>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>