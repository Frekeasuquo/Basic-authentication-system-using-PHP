<?php

session_start();


if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(file_exists('files/database'. $username . ".json")){

        $data = file_get_contents("files/database".$username . ".json", "r");

        $array_data = json_decode($data);


        $aapassword = $array_data->password;


        if($_POST['username']!==$nameone && $_POST['password']==$aapassword){
            echo "<script>alert(username or password invalid) </script>";

            echo "<script>location.href='index.php'</script>";

            
        } else {
            echo "<script>alert('Please register, username not found') </script>";

            echo "<script>location.href='index.php'</script>";
        }
    }else {
        $_SESSION['username'] = $username;

        echo "<script>location.href='home.php'</script>";
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    </body>

</html>