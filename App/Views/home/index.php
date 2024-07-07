<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title><?=$title?></title>
</head>

<body>



<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <form action="<?php echo 'http://ruby.test/home/InsertData' ;?>" method="POST" class="form border p-2 my-5">
                <input type="text" name="task" class="form-control my-3 border border-success" placeholder="add new todo">
                <input type="submit" name="sub" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
            </form>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $dt): ?>
                <tr>
                    <td><?php echo $dt->id; ?></td>
                    <td><?php echo $dt->content; ?></td>
                    <td>
                        <a href="<?php echo 'http://ruby.test/home/deleteItem/'.$dt->id ;?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                        <a href="<?php echo 'http://ruby.test/home/updateTask/'.$dt->id ;?>" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                    </td>
                </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</body>

</html>