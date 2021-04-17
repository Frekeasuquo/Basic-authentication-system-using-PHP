<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .a {
            text-align: center;
            padding-top: 20px;
            font-family: sans-serif;
            font-weight: 40px;
            margin: 0;
            line-height: 1;
            color:white;

        }
    </style>
</head>

<body>

    <h2>Registration Page</h2>
    <form action="form.php" method="POST">
        <div class="mean">
            <div class="pencil">
                <div class="bin">
                    First name: <input type="text" name="first_name" placeholder="First name" required><br><br>
                    Last name: <input type="text" name="last_name" placeholder="Last name" required><br><br>
                    Email: <input type="email" name="email" placeholder="Email address" required><br><br>
                    Date of birth: <input type="date" name="dob" placeholder="Date of birth" required><br><br>
                    Username: <input type="text" name="username" placeholder="Type a username" required><br><br>
                    Password: <input type="password" name="password" placeholder="Password" required><br><br>
                    <button type="submit" name="register" placeholder="Register">Register</button>
                </div>
            </div>
        </div>
    </form>
    <div class="a">
        <a href="login.php">Login here</a>
    </div>
</body>

</html>