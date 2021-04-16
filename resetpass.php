<?php


    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $mydata = file_get_contents('files/database.json');
        $fileget = json_decode($mydata, true);

        $listdata = array();
        $index = null;
        $oldpassword = null;
        foreach ($fileget as $key => $value) {
            $listdata[] = $username;
            if($username == $username){
                $index = $key;
            }
        }

        if(in_array($username, $listdata)){
    
            
            if ($password !== $oldpassword && in_array($username, $fileget)) {
                $filearr[$index]['password'] = $password;
                    echo "Password updated </br>";
                    file_put_contents("files/database.json", json_encode($fileget));
                    echo "Login with new password </br>";
                    echo "<a href=" . "login.php" . ">Login</a>";
                }

            else{
                echo "same password <br/>";
                echo "<a href=" . "reset.php" . ">Try again</a>";
                }

            }
        else{
            echo "Username not found <br/>";
            echo "<a href=" . "reset.php" . ">Try again</a>";
            }        
    }

