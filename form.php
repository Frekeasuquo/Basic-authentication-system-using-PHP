<?php


if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $array_data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'dob' => $dob,
        'username' => $username,
        'password' => $password
    ];

    if (file_exists('files/database' . ".json")) {
        echo 'user already registered';
        echo "<script>location.href='login.php'</script>";
    } else {
        file_put_contents('files/database' . ".json", json_encode($array_data));

        echo "You are registered </br>" ;
        echo "Your Username is $username </br>";
        echo "<a href=" . "logout.php" . ">Logout</a>";
    }

}




?>