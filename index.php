<?php
// Get a connection for the database
require_once('../mysqli_connect.php');

// Create a query for the database
$query = "SELECT * from details";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){
echo
'<html>
<head>
        <title> </title>
         <link rel="stylesheet" href="style.css">

</head>
<body>

                <div class="body"></div>
                <div class="header" > <center>IITB Blockchain</center> </div>
                <div class="bar">
                        <table class="tblh" border="5">
                                                <tr>
                                                <th width="8%"> S NO.</th>
                                                <th width="30%"> Name of merchan$
                                                <th width="28%">  BTC Address</t$
                                                <th width="8%"> In </th>
                                                <th width="8%"> Out </th>
                                                <th width="8%">Balance</th>
                                                </tr>
                        </table>
                </div>

          <div class="content"> <br><br><br><br><br>
                        <table class="tbl" border="1">';
           while($row = mysqli_fetch_array($response)){
               		                        echo' <tr>
                                                <td width="8%">'.$row['Sno'].'</td>
                                                <td width="30%">' .$row['Name'].'</td>
                                                <td width="28%">' .$row['Addr']. '</t$
                                                <td width="8%">'.$row['Inward']. '</td>
                                                <td width="8%">'.$row['Outward'].'</td>
                                                <td width="8%">'.$row['Bal'].'</td>';
                                                echo'</tr>';
						}
                       echo' </table>
                               
                </div>
</body>
</html>';
} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
