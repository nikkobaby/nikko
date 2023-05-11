<?php
    $title = 'Login Page';
    require_once 'includes/header.php';
?>

    <div style='background-color:#ffff00'>
    <center><p style="color:white"><h2>Student Information System</h2></p></center>
</div>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login from</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
</div>
    <div class="form-group">
        <label for="password" class="text-info">Password:</label><br>
        <input type="text" name="password" id="password" class="form-control">
</div>
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
        <a href = "#" type = "button">CANCEL</a>
</div>
    <div id="register-link" class="text-right">
        <a href="registration.php" class="text-info">Not yet registered? Click here</a>
</div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php'; ?>