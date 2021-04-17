<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-weight: 400;
            background-color: saddlebrown;
        }

        h3 {
            text-align: center;
            margin: 0;
            line-height: 1;
            padding-bottom: 20px;
        }

        .mean {
            width: 100%;
            height: 100%;
        }

        .pencil {
            display: flex;
            text-align: left;
            justify-content: center;
            flex-direction: column;
        }

        .bin {
            width: 450px;
            margin: auto;
            background: khaki;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            padding: 40px 55px 45px 55px;
            transition: all .3s;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <h3>Reset Password</h3>
    <form action="resetpass.php" method="POST">
        <div class="mean">
            <div class="pencil">
                <div class="bin">
                    Username: <input type="text" name="username" placeholder="Type a username" required><br><br>
                    Password: <input type="password" name="password" placeholder="New Password"><br><br>
                    <input type="submit" name="submit" value="RESET">
                </div>
            </div>
        </div>
    </form>
</body>

</html>