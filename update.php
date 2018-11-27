<?php
require_once("connect.php");
if (isset($_POST['search'])) 
{

	$Name = $_POST['search'];
	$Query = "SELECT name FROM countries WHERE name LIKE '%".$Name."%'";
	$ExecQuery = MySQLi_query($con, $Query);
	echo'<ul class="list-group">';
	while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>

<li class="list-group-item" onclick='fill("<?php echo $Result['name']; ?>")'><?php echo $Result['name']; ?></li>

<?php
}}
?>
</ul>