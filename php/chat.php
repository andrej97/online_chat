<?php
 session_start();

if(!isset($_SESSION['login']))
  { header("location: index.php"); }

?>
<!DOCTYPE html>
<html>
<head>	
        <?php
        include 'head.php';
        include 'data_base.php';
        ?>
        <title>Online Chat</title>
</head>

<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>

<script type="text/javascript">
$(document).ready(function(){
   $("#send").click(function(){

      var message = $("#message").val();
    var to_msg = $("#to_msg_show").text(); 
      $.ajax({
         type: "POST",
         url: "send_message.php",
         data: { "done": 1, "message": message, "to_msg": to_msg },
        success: function(data){ 
          update();
  // alert(data); 
        }

    });
});
});

function update() {
  var to_msg = $("#to_msg_show").text();

  

    $.ajax({

      url: "send_message.php",
      type: "POST",
      data: {"display" : 1, "to_msg": to_msg},
      success: function(data) {
       $("#messages").html(data); 
      // alert(data);
      }

    });





};




$(function() {
  $("p[id^='usr'").each(function() {
    $(this).click(function() {
      //alert($(this).text());
var tms= $(this).text();
    $("#to_msg_show").text("");
     $("#to_msg_show").text(tms);
    }); 
});
});
setInterval("update()", 300);




</script>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12"></div> 
        <div class="col-sm-9" style="background-color: green;">
        
        </div>    
        <div class="col-sm-3" >
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" value="" style="width: 50%;">
    <?php echo "<p style='display: inline-block'> {$_SESSION['login']} </p>"?>

  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">My page</a></li>
    <li><a href="profile_edit.php">Edit</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>

        </div> 

    </div>
    <div class="row">
        <div class="col-sm-3">
        
        </div>    
        <div class="col-sm-6"> 
                <div class="col-sm-4">
                        <div class="panel panel-default form_friends ">
                                <div class="panel-body">
                                        <h3 >Friends</h3> 
<?php                                        
$result = mysql_query("SELECT login, id FROM users ORDER BY id", $data_base);

              if(mysql_num_rows($result) > 0) {
                $arr = mysql_fetch_array($result);
                do {
                    printf('<p id="usr'.$arr['id'].'">%s</p>',$arr['login']);

                } while($arr = mysql_fetch_array($result));


              }
?>
                                        <p> <span class="glyphicon glyphicon-globe"></span> User 2</p>
              
                                </div>
                        </div>                              
                </div>
                <div class="col-sm-8">
                        <div class="panel panel-default form_messages">
                                <div class="panel-body" id="message_output">
                                 
                                 <div >
                                 <h3 id="to_msg_show"></h3>
                                  <hr>
                                  </div>      
<div id="messages">



                                      <!--
              <a href="logout.php">logout</a>
                                       -->  
</div>

                                </div>                         
                        </div>
                        <div class="panel panel-default form_messages">
                                <div class="form-inline">
                                        <div  class="form-group">
                                                <input type="text" class="form-control" id="message" placeholder="message">        
                                        </div> 
                                        <button name="submit" class="btn btn-primary" id="send" style="width: 138px;">Send</button>      
                                </div>
                                <input type="hidden" name="login" id="login" value="<?php echo $_SESSION['login']?>">                  
                        </div>  
        <div class="col-sm-3"></div> 
        </div>          
    </div>  
</div> 

</body>
</html>

