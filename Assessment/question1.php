<html>
    <head></head>

    <body>
        <form action="" method="post">
            <label>User 1</label><br>
            <input type="number" name="user1-1">
            <input type="number" name="user1-2">
            <input type="number" name="user1-3">
            <input type="number" name="user1-4">
            <input type="number" name="user1-5"><br><br>
            <label>User 2</label><br>
            <input type="number" name="user2-1">
            <input type="number" name="user2-2">
            <input type="number" name="user2-3">
            <input type="number" name="user2-4">
            <input type="number" name="user2-5"><br><br>
            <label>User 3</label><br>
            <input type="number" name="user3-1">
            <input type="number" name="user3-2">
            <input type="number" name="user3-3">
            <input type="number" name="user3-4">
            <input type="number" name="user3-5"><br><br>
            <input name= "submit" type="submit" value="Submit Answers">
        </form>

        <?php
            if(isset($_POST['submit'])) {
                $user1_1 = $_POST['user1-1'];
                $user1_2 = $_POST['user1-2'];
                $user1_3 = $_POST['user1-3'];
                $user1_4 = $_POST['user1-4'];
                $user1_5 = $_POST['user1-5']; 

                $user2_1 = $_POST['user2-1'];
                $user2_2 = $_POST['user2-2'];
                $user2_3 = $_POST['user2-3'];
                $user2_4 = $_POST['user2-4'];
                $user2_5 = $_POST['user2-5']; 

                $user3_1 = $_POST['user3-1'];
                $user3_2 = $_POST['user3-2'];
                $user3_3 = $_POST['user3-3'];
                $user3_4 = $_POST['user3-4'];
                $user3_5 = $_POST['user3-5']; 

                $user1_num = [$user1_1, $user1_2, $user1_3, $user1_4, $user1_5];
                $user2_num = [$user2_1, $user2_2, $user2_3, $user2_4, $user2_5];
                $user3_num = [$user3_1, $user3_2, $user3_3, $user3_4, $user3_5];

                userOne($user1_num);
                userTwo($user2_num);
                userThree($user1_num, $user3_num);

            }

            function userOne($user1_num) {
                echo "User 1 - ";
                foreach ($user1_num as $num) {
                    if ($num >= 5) {
                        echo $num.', ';
                    }
                }
            }

            function userTwo($user2_num) {
                echo "<br>User 2 - ";
                foreach ($user2_num as $num) {
                    if ($num <= 5) {
                        echo $num.', ';
                    }
                }
            }

            function userThree($user1_num, $user3_num) {
                rsort($user3_num);
                echo "<br>User 3 - ";
                for ($i=0; $i<3; $i++) {
                    echo $user3_num[$i].", ";
                }

                echo "<br>";

                $user1_largest = 0;
                $user3_largest = 0;

                foreach ($user1_num as $num) {
                    if ($num > $user1_largest) {
                        $user1_largest = $num;
                    }
                }

                foreach ($user3_num as $num) {
                    if ($num > $user3_largest) {
                        $user3_largest = $num;
                    }
                }

                if ($user1_largest > $user3_largest) {
                    echo "Between User 1 and User 3, the largest number belongs to User 1, which is ".$user1_largest;
                } else {
                    echo "Between User 1 and User 3, the largest number belongs to User 3, which is ".$user3_largest;
                }

            }
        ?>
    </body>
</html>