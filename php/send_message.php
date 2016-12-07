<?php
	session_start();
    include ("data_base.php");



if (isset($_POST['done'])) {

$text = $_POST["message"];
$from_msg = $_SESSION['login'];
$to_msg = $_POST["to_msg"];	

 $sql = mysql_query("INSERT INTO chat_messages (text,from_msg,to_msg)
VALUES ('$text', '$from_msg', '$to_msg')");



}
//to_msg ='".$_SESSION['login']."'

if (isset($_POST['display'])) {

$from_msg = $_SESSION['login'];
$to_msg = $_POST["to_msg"];	

$result = mysql_query("SELECT  text, date_time, from_msg FROM chat_messages where (to_msg ='$to_msg' AND from_msg='$from_msg') OR (to_msg ='$from_msg' AND from_msg='$to_msg') ORDER BY id",$data_base);

// OR  (to_msg ='$from_msg' AND from_msg='$to_msg')
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

if(mysql_num_rows($result) > 0) {

                $arr = mysql_fetch_array($result);
            
                do {
                //  printf('<p style="color: red">%s',$arr['text']);

                  echo "<p>{$arr['from_msg']}: {$arr['text']}</p>";

                //  echo "<p>{$arr['text']}</p>";
                //   echo "<p>{$arr['data_time']}</p>";
                // echo "<p>{$arr['from_msg']}</p>";

                } while($arr = mysql_fetch_array($result));



}
}

?>