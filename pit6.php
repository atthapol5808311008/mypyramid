<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  6</font></legend>
<?php
for ($row=0;$row<=6 ;$row++ )
{
	for ($col=1;$col<=$row;$col++ ){
		echo "&nbsp";
	}
		for ($col=1;$col<15-($row*2)-1 ;$col++ ) {
			echo $col%2;
		}
			echo"<br>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>