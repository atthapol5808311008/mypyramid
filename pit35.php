<pre style="font-family:'courier new';font-size:20px;">
<body background ="BGGG.png" topmargin="200px">
<table border="10"  align="center" bgcolor=#FFFF99>
	<tr>
	<td>
	<fieldset><legend><font size=5>พีระมิดที่  35</font></legend>
<?php
   $n=1; $m=2;
   for($i=1; $i<=5; $i++) {
   		echo "&nbsp&nbsp&nbsp".$i."*";
   		for($j=1; $j<=1; $j++) {
   			echo $n."*".$m;
   		}

   		$n=$n+2;
   		$m=$m+2;
   		echo "<br>";
   }
?>
	</fieldset>
	</td>
	</tr>
</body>