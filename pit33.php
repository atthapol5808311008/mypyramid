<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  33</font></legend>
<?php
for($row=1;$row<=3;$row++) {
	for($col=-1;$col<=3-$row;$col++) {
		
		echo("&nbsp");
	}

	for($col=1;$col<=$row;$col++){

		echo("*");
	}

	for($col=2;$col<=$row;$col++){

		echo("*");
	}

	for($col=1;$col<=3-$row;$col++) {
		
		echo("&nbsp");
	}

	echo "<br/>";
}

for($row=2;$row>=1;$row--) {
	for($col=-1;$col<=3-$row;$col++) {
		echo("&nbsp");
	}
	
	for($col=1;$col<=$row;$col++){
		echo("*");
	}
	
	for($col=2;$col<=$row;$col++){
		echo("*");
	}

	for($col=1;$col<=3-$row;$col++) {
		echo("&nbsp");
	}

	echo "<br/>";
}

?>
	</fieldset>
	</td>
	</tr>
</body>