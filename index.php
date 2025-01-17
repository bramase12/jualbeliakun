<?php include 'login/main.php';?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *, html {
            padding: 0;
            margin: 0;
            box-sizing:border-box;
        }
            
        body {
            background-color: #f4f4f4;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        #login-box {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            opacity: 1; 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            margin-bottom: 5px;
            font-size: 16px;
            color: #333;
        }
        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input:focus {
            border-color: #2600ff;
            outline: none;
        }
        button {
            padding: 10px 15px;
            background-color: #4b2bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #10006b;
        }

        form p {
            text-align: center;
            padding: 10px;
        }


    </style>
</head>
<body>
    <div id="login-box" method="post" action="">
        <h2>LOGIN</h2>
        <form id="login-form" method="POST" action="">
            <label for="username">Username</label>
            <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; }?>
            <input type="text" id="username" name="username" required placeholder="Username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Password">
            
            <button type="submit" name="login">Login</button>
            <p>Sponsored by PPLG</p>
        </form>
    </div>
</body>
</html>