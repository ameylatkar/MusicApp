<?php
    //database name = "simple_ajax"
    //table name = "users"
    $con = mysql_connect("localhost","root","");
    $dbs = mysql_select_db("simple_ajax",$con);
    $result= mysql_query("select * from cars");
    $array = mysql_fetch_row($result);
?>
<tr>
    <td>CarName: </td>
    <td>company: </td>
</tr>
<?php
    while ($row = mysql_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "</tr>";
    }   
?>