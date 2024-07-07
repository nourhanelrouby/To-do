<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title><?=$title?></title>
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



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <form action="<?php echo 'http://ruby.test/home/updateTask/'.$id ;?>" method="POST" class="form border p-2 my-5">
                <input type="text" name="task" class="form-control my-3 border border-success" placeholder="Update task">
                <input type="submit" name="sub" value="Update" class="form-control btn btn-primary my-3 " placeholder="Update">
            </form>
        </div>
    </div>
    <div>
        <?php
        if(isset($_POST['sub']))echo("<h1>Task Updated successfully</h1>");
        ?>
        <h2>wanna show all tasks ?</h2>
        <a href="<?php echo('http://ruby.test/home/index'); ?>">Click here</a>
    </div>
</div>

</body>

</html>