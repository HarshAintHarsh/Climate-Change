<?php
        $servername = "127.0.0.1:3306";
        $username = "root";
        $password = "bTl6+Er8";
        $dbname = "LoginData";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM UserInformation";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> uniqueId: ". $row["uniqueId"]. " - Name: ". $row["firstName"]. " " . $row["lastName"] . " - Email: ". $row["userEmail"]. " - Password:". $row["userPassword"]."<br>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
?>   

