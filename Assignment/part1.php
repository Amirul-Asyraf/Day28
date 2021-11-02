<html>
    <head>
        <?php include 'header.php';?>
    </head>

    <body>
        <form action="" method="post">
            <label>Enter Employee ID: </label>
            <input type="text" name="employee-id">
            <input type="submit" name='submit' value="I'm Here">
        </form>

        <?php
            // include 'db.php';

            $sql = "SELECT employee_id, name FROM employee";
            $result = $conn->query($sql);

            if(isset($_POST['submit'])) {
                // echo "hello";
                $employee_id = $_POST['employee-id'];

                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if ($employee_id == $row['employee_id']) {
                            echo $row['name']." you are now checked in!";
                            $sql = "INSERT INTO employee_attendance (employee_id, date_created) VALUES ('$employee_id', NOW())";
                            $conn->query($sql);
                        }
                    }
                } else {
                    echo "0 results";
                }
            }
        ?>
    </body>
</html>