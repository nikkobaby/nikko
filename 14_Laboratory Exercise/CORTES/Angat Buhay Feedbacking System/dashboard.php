
<?php 
    $title = 'Dashboard';
    require_once 'includes/header.php'; 
?>
    
<div style='background-color:#B2FFA9'>
    <center>
        <p style="color:white"><h2>Angat Buhay Feedbacking System</h2>
        </p></center>

    </div> <center><p style="color:white"><h5>Employee Information</h5></p></center> 
    <div> 
        <?php
    
            $mysqli = new mysqli('localhost', 'root','','dbg6cortes') or die (mysqli_error($mysqli));
            
            $resultset = $mysqli->query("SELECT * from tblemployee") or die($mysqli->error);
    
            
        ?>
        <table id="tblOffice " class="table
            table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead>
                <tr> 
                    <th>Employee ID</th> 
                    <th>First Name</th> 
                    <th>Date of Birth</th>
                    <th>Job Title</th>
					<th>Department</th> 
                </tr> 
            </thead>  
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['employee_id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['dbirth'] ?></td>
                    <td><?php echo $row['job_title'] ?></td>
					<td><?php echo $row['department'] ?></td>
                    <td>
                        <a href = "">VIEW</a>                        
                        <a href = "">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>         
        </table>
    </div>
	
	<div style='background-color:#ffff00'>
    <center>
    </div> <center><p style="color:white"><h5>Office Information</h5></p></center> 
    <div> 
        <?php
    
            $mysqli = new mysqli('localhost', 'root','','dbg6cortes') or die (mysqli_error($mysqli));
            
            $resultset = $mysqli->query("SELECT * from tbloffice") or die($mysqli->error);
    
            
        ?>
        <table id="tblOffice " class="table
            table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead>
                <tr> 
                    <th>Office ID</th> 
                    <th>Employee ID</th> 
                    <th>Location</th>
                    <th>Number of Employee</th> 
                </tr> 
            </thead>  
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['office_id'] ?></td>
                    <td><?php echo $row['employee_id'] ?></td>
                    <td><?php echo $row['location'] ?></td>
                    <td><?php echo $row['number_of_employee'] ?></td>
                    <td>
                        <a href = "">VIEW</a>                        
                        <a href = "">DELETE</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>         
        </table>
    </div>

<?php require_once 'includes/footer.php'; ?>