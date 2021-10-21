<html>
    <head><?php include 'results.php'?></head>

    <body>
        <form action="results.php" method="get">
            <label>Name: </label>
            <input type="text" name="fname"><br>
            <label>Date of Birth: </label>
            <input type="text" name="dob"><br>
            <label>Age: </label>
            <input type="text" name="age"><br>
            <label>Username: </label>
            <input type="text" name="uname"><br>
            <label>Password: </label>
            <input type="text" name="pwd"><br>
            <label>Salary: </label>
            <input type="text" name="salary"><br>
            <label>Bonus: </label>
            <input type="text" name="bonus"><br>
            <label>Leave Days: </label>
            <input type="text" name="leave_days"><br>
            <label>Leave Days Proof: </label>
            <input type="text" name="leave_days_p"><br>
            <label>MC: </label>
            <input type="text" name="mc"><br>
            <label>MC Proof: </label>
            <input type="text" name="mc_p"><br>
            <label>Claims: </label>
            <input type="text" name="claim"><br>
            <label>Claims Proof: </label>
            <input type="text" name="claim_p"><br>
            <input name= "submit" type="submit" value="Submit Details">
        </form>

        <?php
            if(isset($_POST['submit'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "companyA";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "Connected successfully"; 

                //Get inputted data
                $fname = $_GET['fname'];
                $dob = $_GET['dob'];
                $age = $_GET['age'];
                $uname = $_GET['uname'];
                $pwd = $_GET['pwd'];
                $salary = $_GET['salary'];
                $bonus = $_GET['bonus'];
                $leave_days = $_GET['leave_days'];
                $leave_days_p = $_GET['leave_days_p'];
                $mc = $_GET['mc'];
                $mc_p = $_GET['mc_p'];
                $claim = $_GET['claim'];
                $claim_p = $_GET['claim_p'];


                //INSERT data into db
                $sql = "INSERT INTO employee (name, dob, age, username, password, salary, bonus, leave_days, leave_days_proof, mc, mc_proof, claims, claims_proof) VALUES ('$fname', '$dob', '$age', '$uname', '$pwd', '$salary', '$bonus', '$leave_days', '$leave_days_p', '$mc', '$mc_p', '$claim', '$claim_p') ";

                if ($fname != null) {
                    if ($conn->query($sql) === TRUE) {
                        echo "<br>New record created successfully";
                    } else {
                        echo "<br>Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            }
            
        ?>
    </body>
</html>