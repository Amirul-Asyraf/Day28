<html>
    <head><?php include 'header.php';?></head>

    <body>
        <?php
            if(isset($_POST['admin-name'])){
                $admin_name = $_POST['admin-name'];
    
                $sql = "SELECT name FROM customers";
                $result = $conn->query($sql);
    
                if(isset($_POST['name'])){
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            if ($admin_name == $row['name']) {
                                display_employees($conn);
                            } 
                        }
                    } else {
                        echo "0 results";
                    }
                }
            }

            function display_employees ($conn) {
                $sql = "SELECT employee_id, name FROM employee";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "Employees: <br>";

                    while($row = $result->fetch_assoc()) {
                        echo "id: ".$row['employee_id']."\t"."Name: ".$row['name']."<br>";
                    }
                } else {
                    echo "0 results";
                }

                
            }
        ?>

        <br>
        <form action="" method="post">
            <label>Attendance Check</label><br>
            <label>Enter Employee ID: </label>
            <input type="number" name="employee-id">
            <input type="submit" name='submit' value="Check">
        </form>

        <?php

            $sql = "SELECT employee_id, date_created FROM employee_attendance";
            $result = $conn->query($sql);

            if(isset($_POST['employee-id'])){
                $employee_id = $_POST['employee-id'];
                if(isset($_POST['submit'])){
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            if ($employee_id == $row['employee_id']) {
                                // echo "Employee: ".$row['name']."<br>";
                                echo "Checked in at: ".$row['date_created']."<br>";
                            } 
                        }
                    } else {
                        echo "0 results";
                    }
                }
            } else {
                echo "<br>Need to input employee id!";
            }
        ?>
    </body>
</html>