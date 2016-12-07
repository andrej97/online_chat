<?php


    $data_base = mysql_connect ("localhost","root","");

    if (!$data_base)
{
    die('Could not connect: ' . mysql_error());
};
    mysql_select_db ("online_chat",$data_base);
    ?>
