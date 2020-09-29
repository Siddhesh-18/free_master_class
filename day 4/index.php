<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <!-- POST, GET -->
    <!-- <form method="get">
        <input type="text" name="username" required placeholder="Enter your Name">
        <input type="submit" name="submitBtn">
    </form> -->

    <?php
    // if (isset($_GET['submitBtn'])) {
    //     echo $_GET['username']."<br>";
    //     echo $_GET['submitBtn'];
    // }
    // echo $_GET['username'];

    ?>
    <!-- POST -->
    <!-- <form method="POST">
        <input type="text" name="username" required placeholder="Enter your Name">
        <input type="submit" name="submitBtn">
    </form> -->
    <?php
    // if (isset($_POST['submitBtn'])) {
    //     echo $name = $_POST['username'];
    // }
    ?>

    <!-- data store database -->

    <form method="POST">
        <input type="text" name="username" required placeholder="Enter your Name">
        <input type="email" name="email" required placeholder="Enter your Email">
        <input type="submit" name="submitBtn">
    </form>
    <?php
    //host,userName ,Password,Dbname
    $con = mysqli_connect('localhost', "root", "", "master_class_b2");
    // if ($con) {
    //    echo "database connect";
    // }else{
    //     echo "database Not connect";
    // }

    // if (isset($_POST['submitBtn'])) {
    //       $name = $_POST['username'];
    //       $email = $_POST['email'];
    //        $query = "INSERT INTO `student`(`name`, `email`) VALUES ('$name','$email')";
    //        $save = mysqli_query($con,$query); 
    //        if ($save) {
    //           echo "Data save ";
    //        }else{
    //         echo "Data Not save ";
    //        }

    // }

    $query = "SELECT * FROM `student`";
    $s = mysqli_query($con,$query); 
    foreach ($s as $key => $value) {
    //   print_r( $value );
    echo "my name ".$value['name']." email is ".$value['email']."<br>";
    }

    ?>
</body>

</html>