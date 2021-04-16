<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-weight: 400;
            background-color: saddlebrown;
        }

        h2 {
            text-align: center;
            margin: 0;
            line-height: 1;
            padding-bottom: 20px;
        }

        .pencil {
            display: flex;
            text-align: left;
            justify-content: center;
            flex-direction: column;
        }

        .bin {
            width: 350px;
            margin: auto;
            background: khaki;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            padding: 40px 55px 45px 55px;
            transition: all .3s;
            border-radius: 20px;
        }

        a {
            display: flex;
            text-align: center;
            justify-content: center;
            flex-direction: column;
            padding: 40px 55px 45px 55px;
        }
    </style>
</head>

<body>

    <h2>Login Page</h2>
    <form action="checklogin.php" method="POST">
        <div class="pencil">
            <div class="bin">
                Username: <input type="text" name="username" placeholder="Email/username" required><br>
                <br>
                Password: <input type="password" name="password" placeholder="Password" required><br><br>
                <button type="submit" name="login" placeholder="Login">Login</button>
            </div>
        </div>
    </form>
    <a href="reset.php">Reset password</a>
</body>

</html>