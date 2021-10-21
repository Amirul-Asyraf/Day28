<?php
    include 'question2.php';


    // Display/Select all data
    $sql = "SELECT (name, dob, age, username, password, salary, bonus, leave_days, leave_days_proof, mc, mc_proof, claims, claims_proof) FROM employee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]."<br>"."Date of Birth: " . $row["dob"]."<br>"."Age: " . $row["age"]."<br>"."Username: " . $row["uname"]."<br>"."Password: " . $row["pwd"]."<br>"."Salary: " . $row["salary"]."<br>"."Bonus: " . $row["bonus"]."<br>"."Leave Days: " . $row["leave_days"]."<br>"."Leave Days Proof: " . $row["leave_days_proof"]."<br>"."MC: " . $row["mc"]."<br>"."MC Proof: " . $row["mc_proof"]."<br>"."Claims: " . $row["claim"]."<br>"."Claims Proof: " . $row["claim_proof"]."<br>";
    }
    } else {
    echo "0 results";
    }   
?>