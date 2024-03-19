<?php
$server="localhost";
$username="root";
$password="";
$db="Tutorial Point";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
?>
<script>
	alert("connection Successfull");
</script>
<?php
}
else{
	?>
<script>
	alert("connection Not Successfull");
</script>
<?php
}
?>