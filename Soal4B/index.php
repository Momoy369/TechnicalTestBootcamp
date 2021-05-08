<?php
    include_once "connection.php"
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

            <title>Programmer List With Skills</title>
        </head>

        <body class="bg-dark">
        <div class="row" style="margin:1%;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Programmer Skill Lists</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#tambahUser">Add New User</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="container-fluid row">
                <div class="container col-md-12 row" style="margin: 1.5%;">
                    <?php
                        $query = "SELECT users_tb.id_users as id_users,
                        users_tb.name_users as name_users,
                        users_tb.photo_users as photo_users,
                        skill_tb.name_skill as name_skill
                        FROM skill_tb join users_tb on skill_tb.user_id = users_tb.id_users";
                        $result = mysqli_query($con, $query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<div class="col-md-4 p-3">
                                    <div class="card">
                                        <img src="'.$row["photo_users"].'" class="card-img-top img-fluid" alt="'.$row["name_users"].'">
                                        <div class="card-body">
                                            <h4 class="card-title">'.$row["name_users"].'</h4>
                                            <p class="card-text">'.$row["name_skill"].'</p>
                                            <a href="#" class="btn btn-success">Detail</a>
                                            <a href="#" class="btn btn-success">Edit</a>
                                        </div>
                                    </div>
                                </div>';
                            }
                        } else{
                            echo "0 hasil";
                        }
                    ?>
                </div>
            </div>
                <div class="container col-md-8">
                        <ul class="list-group mt-3">
                            <?php
                                $query = "SELECT * FROM users_tb";
                                $result = mysqli_query($con, $query);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<li class="list-group-item">'.$row["name_users"].'</li>';
                                    }
                                } else{
                                    echo "0 hasil";
                                }
                            ?>
                        </ul>

                        <form id="tambahUser" class="mt-3" action="add_users.php" method="post">
                                <div class="card bg-light p-3">
                                    <h4 class="card-title">Add New User</h4>
                                    <div class="form-group">
                                        <label for="name_users">Nama User</label>
                                        <input type="text" class="form-control" name="name_users" placeholder="Nama User">
                                    </div>
                                    <div class="form-group">
                                        <label for="name_skill">Skill</label>
                                        <input type="text" name="name_skill" class="form-control" placeholder="Skill(pisahkan dengan koma)">
                                    </div>
                                <div class="form-group">
                                    <label for="photo_users">URL Image</label>
                                    <input type="text" class="form-control" name="photo_users" placeholder="Image or Photo">
                                </div>
                                <p>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mb-3">Add User</button>
                            </div> 
                            </p>
                            </div>
                        </form>
                </div>
                <div class="container col-md-8">

                <form id="addtype" class="mt-3" action="add_skill.php" method="post">
                <div class="card bg-light p-2"> 
                    <h5 class="card-title" >Add Users Skill</h5>
                    <div class="form-group">
                        <label for="users_name">Name</label>
                        <input type="text" class="form-control" name="users_name" placeholder="Rambo">
                    </div>

                    <div class="form-group">
                        <label for="skill_name">Skill Name</label>
                        <input type="text" class="form-control" name="skill_name" placeholder="Rambo">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Add Skill</button>
                    </div>
                </div>
            </form>
                </div>
            </div>

        </body>
    </html>