<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  18</font></legend>
<?php
	for($i=1; $i<=5; $i++) {
		echo $i;
		for($j=1; $j<=$i; $j++) {
			echo "*";
		}
		echo $i;
		for($k=5; $k>=$i; $k--) {
				echo "*";
		}
		for($l=1; $l<=1; $l++) {
			echo 10-$i;
		}
		echo "<br>";
	}
?>
	</fieldset>
	</td>
	</tr>
</body>