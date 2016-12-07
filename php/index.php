<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>

        <?php
        include 'head.php';
        ?>
                <title>Login Form</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12"></div> 
    </div>
    <div class="row">
        <div class="col-sm-3"></div>    
        <div class="col-sm-6"> 
            <div class="panel panel-default form">
                <div class="panel-body">
                    <h1 >Login Form</h1> 
                    <form action="testreg.php" method="post">
                        <div class="form-group">
                            <label for="UserName">Login</label>
                            <input type="text" class="form-control" id="login"  name="login" placeholder="login">
                        </div>                  
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form> 
                    <form method="get" action="reg.php">
                        <button type="submit" name="submit" class="btn btn-primary ">Register</button>  
                    </form>         
                </div>
            </div>
        </div>  
        <div class="col-sm-3"></div> 
        </div>      
    </div>  
</div> 

</body>
    </html>