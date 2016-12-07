<!DOCTYPE html>
<html>
<head>	
        <?php
        include 'head.php';
        ?>
        <title>Registration Form</title>
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
                                <h1 >Registration Form</h1> 
                                        <form action="save_user.php" method="post">
                                                <div class="form-group">
                                                        <label for="UserName">Login</label>
                                                <input type="text" class="form-control" id="login" name="login" placeholder="login">
                                                </div>                                  
                                                <div class="form-group">
                                                        <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                                </div>
                                                <div class="form-group">
                                                        <label for="password">Confirm Password</label>
                                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="password">
                                                </div>                                                
                                                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                        </form> 
                    <form method="get" action="index.php">
                        <button type="submit" name="submit" class="btn btn-primary ">Login</button>  
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