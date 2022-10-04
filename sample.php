<!doctype html>
<html><head><meta charset="utf-8"><title>DB Connection</title></head><body>
<?php echo "  Id: A0861xxx; Name:XXX (Test0603) <br><hr>";
$link=mysqli_connect("echo-database.c7wikjuqsbtk.us-east-1.rds.amazonaws.com", "admin","00000000") or die("Cannot connect DB");
echo "Success to connect DB<br>";
mysqli_select_db($link,"table1") or die(" Create error!!!");
$sql="SELECT * FROM table002";
$result=mysqli_query($link, $sql);
echo "Number of rows:".$result->num_rows."<br>";
echo " Number of fields ".mysqli_num_fields($result);
if ($result->num_rows > 0) 
{
echo "<table border=1>";
  echo "<tr><td>id</td><td>tel</td><td>nam</td>/th>";
  for ($i=0; $i < $result->num_rows; $i++){
  echo "<tr>";
  $row1=mysqli_fetch_row($result);
  for($j=0; $j <mysqli_num_fields($result); $j++)
{  echo "<td>".$row1[$j]."</td>";
}}} 
else {echo "0 results";
}echo "</table>";
mysqli_close($link);
?>
</body></html>