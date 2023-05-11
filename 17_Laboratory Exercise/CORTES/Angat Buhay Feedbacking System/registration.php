<?php
    $title = 'Registration Page';
    require_once 'includes/header.php';
?>

<form action="createStudentRecord.php" method="POST">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
            <div class="pane panel-primary">
                <div class="panel-heading"> Enter your Details Here
</div>
    <br>
    <p><i><font color = "red"> Fields marked * are REQUIRED</font></i><p>
        <div class="panel-body">
            <form name="myform">
                <div class="form-group">
                    <label for="sidn">ID Number *</label>
                    <input id="sidn" name="sdin" class="form-control" type="number" min="1">
                    <span id="error_age" class="text-danger"></span>
</div>
    <div class="form-group">
        <label for="myName">First Name *</label>
        <input id="sfname" name="sfname" class="form-control" type="text" data-validation="required">
        <span id="error_name" class="text-danger"></span>
</div>
    <div class="from-group">
        <label for="lastname">Last Name *</label>
        <input id="slname" name="slname" class="form-control" type="text" data-validation="email">
        <span id="error_lastname" class="text-danger"></span>
</div>
    <div class="from-group">
        <label for="dob">Date of Birth *</label>
        <input type="date" name="sdob" id="sdob" class="form-control">
        <span id="error_dob" class="text-danger"></span>
</div>
    <div class="from-group">
        <label for="gender">Gender *</label>
        <select name="sgender" id="sgender" class="form-control">
            <option selected>Male</option>
            <option>Female</option>
        </select>
        <span id="error_gender" class="text-danger"></span>
</div>
    <div class="from-group">
        <label for="phone">Phone Number *</label>
        <input type="text" id="sphone" name="sphone" class="form-control">
        <span id="error_phone" class="text-danger"></span>
</div>

    <button id="submit" type="submit" value="submit" name="btnAdd" class="btn btn-primary center">Submit</button>

</from>

            </div>
        </div>
    </div>
</div>
</form>

<?php require_once 'includes/footer.php'; ?>