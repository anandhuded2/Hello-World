<?php
mysql_connect('localhost','root','root123');
mysql_select_db('tutorials');
$sql="SELECT * FROM employees";
$records=mysql_query($sql);
?>

<html>
<head>
<title>Employee Data</title>
</head>
<style type="text/css">
span.big{
background-color="red"};
</style>
<body>
<p>Below table is the <span class="big">Employee deatils</span></p>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Name</th>
<th>Age</th>
<th>Position</th>
<th>Salary</th>


<?php

while($employee=mysql_fetch_ASSOC($records)){

	echo "<tr>";

	echo "<td>".$employee["name"]."</td>";
	echo "<td>".$employee["age"]."</td>";
	echo "<td>".$employee["position"]."</td>";
	echo "<td>".$employee["salary"]."</td>";

	echo "<tr>";


}
?>

</table>
</body>
</html>
