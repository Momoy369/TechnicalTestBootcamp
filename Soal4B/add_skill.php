<?php
    require_once "connection.php";

    // $sql = 'INSERT INTO skill_tb (name_skill, id_users)
    //         VALUES ("'.$_POST["name_skill"].'","'.$_POST["id_users"] = $user_id.'")';

    //         if(mysqli_query($con, $sql)){
    //             header('Location: index.php');
    //         } else{
    //             echo "Gagal: " .$sql . "<br>" . mysqli_error($con);
    //         }

    //         mysqli_close($con);
    if(isset($_POST['add'])){
        $name_skill = trim(mysqli_escape_string($con, $_POST['name_skill']));
        $user = trim(mysqli_escape_string($con, $_POST['user']));

        mysqli_query($con, "INSERT INTO skill_tb (name_skill, user_id) VALUES ('$name_skill', '$user')") or die(mysqli_error($con));
        echo "<script>window.location='index.php';</script>";
    }
?>