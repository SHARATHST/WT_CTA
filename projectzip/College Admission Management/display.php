<html>
    <head>
        <title>DISPLAY DATA</title>
    </head>
    <body>
        <table border="2">
            <tr>
                <th>APPLICATIONID</th>
                <th>FIRSTNAME</th>
                <th>MIDDLENAME</th>
                <th>LASTNAME</th>
                <th>ADMISSIONTYPE</th>
                <th>BRANCH</th>

            </tr>
    

</html><?php
include("connection.php");
$query="select * from registration";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//$result=mysqli_fetch_assoc($data);
//echo $total;
//echo $result['APPLICATIONID']."  ".$result['FIRSTNAME']."  ".$result['MIDDLENAME']."  ".$result['LASTNAME']."  ".$result['ADMISSIONTYPE']."  ".$result['BRANCH'];
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['APPLICATIONID']."</td>
        <td>".$result['FIRSTNAME']."</td>
        <td>".$result['MIDDLENAME']."</td>
        <td>".$result['LASTNAME']."</td>
        <td>".$result['ADMISSIONTYPE']."</td>
        <td>".$result['BRANCH']."</td>
        </tr>";
    } 
}
?>
</table>
</body>
</html>