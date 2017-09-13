<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  8</font></legend>
<?php
for($i=1;$i<=7;$i++)
{
	for($j=2;$j<=$i;$j++)
	{
	echo"&nbsp";
	}
	for($j=$i;$j<=$i;$j++)
	{
	echo $i;
	echo $i+1;
	echo $i+2;
	}
	for($j=1;$j<=($i+1);$j++)
	{
	echo "*";
	}
	echo "<br>";
}
?>
	</fieldset>
	</td>
	</tr>
</body>