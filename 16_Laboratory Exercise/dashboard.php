<?php
    $title = 'Dashboard';
    require_once 'includes/header.php';
	include'connect.php';
?>
<div style='background-color:#ffff00'>

    <div <center><p style="color:white"<h5> List of Students Registered</h5></p></center>
</div>

<?php

    $mysqli = new mysqli('localhost', 'root','', 'dbcortesg6studentinfosys') or die (mysqli_error($mysqli));

    $resultset = $mysqli->query("SELECT * from tblstudentinfo") or die ($mysqli->error);

?>

    <table id="tblStutentRecords" class="table table-striped table-bordered table-sm" cellspacing="0" with="100%">
        <thead>
            <tr>
                <th>ID Number</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['sidn'] ?></td>
                    <td><?php echo $row['sfname'] ?></td>
                    <td><?php echo $row['slname'] ?></td>
                    <td><?php echo $row['sgender'] ?></td>
                    <td>
                        <a href = "">VIEW</a>
                        <a href = "">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

<?php require_once  'includes/footer.php'; ?>