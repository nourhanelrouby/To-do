<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        div {
            text-align: center;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 18px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db; /* Blue color for the button */
            color: #fff; /* White text color */
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 20px;
        }

        a:hover {
            background-color: #2980b9; /* Darker blue color on hover */
        }
    </style>
</head>
<body>
<div>
    <h1>Task added successfully</h1>
    <h2>wanna add a new task?</h2>
    <a href="<?php echo('http://ruby.test/home/index'); ?>">Click here</a>
</div>
</body>
</html>
