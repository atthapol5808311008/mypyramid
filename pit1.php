<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่ 1</font></legend>
	<?php
	$totalRow =4;
	for($row=1; $row <= $totalRow; $row++) {
		for($col=2; $col <= $row; $col++) {
			echo "&nbsp";
		}
		echo $row."".$row;
		for($col=$totalRow; $col >= ($row + 1); $col--) {
			echo "**";
		}
		echo $row."".$row."<br>";
	}
	?>
	</fieldset>
	</td>
	</tr>
</body>