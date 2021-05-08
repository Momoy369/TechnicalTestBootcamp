<?php 
    include "connection.php";

    $sql = 'INSERT INTO users_tb (name_users, id_users, photo_users)
            VALUES ("'.$_POST["name_users"].'", "'.$_POST['id_users'].'", "'.$_POST["photo_users"].'")';

            if(mysqli_query($con, $sql)){
                header('Location: index.php');
            } else{
                echo "Gagal: " .$sql . "<br>" . mysqli_error($con);
            }

            mysqli_close($con);
?>