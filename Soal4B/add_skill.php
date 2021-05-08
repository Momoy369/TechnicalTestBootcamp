<?php
    include "connection.php";

    $sql = 'INSERT INTO skill_tb (name_skill)
            VALUES ("'.$_POST["name"].'")';

            if(mysqli_query($con, $sql)){
                header('Location: index.php');
            } else{
                echo "Gagal: " .$sql . "<br>" . mysqli_error($con);
            }

            mysqli_close($con);
?>