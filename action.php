<?php
    include 'db.sql.php';

    $fname = $_GET['fname'];

    //INSERT data into db
    $sql = "INSERT INTO training (name, updated_date) VALUES ('$fname', NOW()) ";

    if ($fname != null) {
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
      
    // Display/Select all data
    $sql = "SELECT name FROM training";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]."<br>";
    }
    } else {
    echo "0 results";
    }
?>