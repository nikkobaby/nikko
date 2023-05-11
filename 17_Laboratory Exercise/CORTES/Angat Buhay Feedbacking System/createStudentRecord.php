<?php

    $mysqli = new mysqli('localhost', 'root', '', 'dbcortesg6studentinfosys') or die (mysqli_error($mysqli));

    if (isset($_POST['btnAdd'])){
        $sidn = $_POST['sidn'];
        $sfname = $_POST['sfname'];
        $slname = $_POST['slname'];
        $sdob = $_POST['sdob'];
        $sgender = $_POST['sgender'];
        $sphone = $_POST['sphone'];

        $mysqli->query("INSERT into tblstudentinfo (sidn, sfname, slname, sdob, sgender, sphone) values ('$sidn', '$sfname', '$slname', '$sdob', '$sgender', '$phone')") or die($mysqli->error);
        header ("Location: dashboard.php");
    }
?>