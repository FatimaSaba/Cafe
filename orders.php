<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>username</th>
    <th>email</th>
    <th>address</th>
  </tr>
  <?php
    //SQL Select
    $servername= "localhost";
    $username="sabacafe";
    $password="sabacafe123";
    $dbname="cafe";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM `userInformation`";
    $result = $conn->query($sql);    


    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th> " . $row["fullName"] . "</th>";
            echo "<th> " . $row["email"] . "</th>";
            echo "<th> " . $row["address"] . "</th>";
            echo "</tr>";
        }
    }



  ?>
</table>

</body>
</html>

