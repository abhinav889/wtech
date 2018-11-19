<?php
$name=$_REQUEST['name'];
$comments=$_REQUEST['comments'];
$message="Name:$name\nComment:$comments";
//echo $message;
$old = fopen("comments.txt", "r+t");
$old_comments = fread($old, 1024);
$write = fopen("comments.txt", "w+");
$string = "<b>".$name."</b><br>".$comments."<br>\n".$old_comments;
fwrite($write, $string);
fclose($write);
fclose($old);
$read = fopen("comments.txt", "r+t");
//echo "<br><br>Comments<hr>".fread($read, 1024);
echo "<h1 align=center>YOUR RESPONSE HAS BEEN SUCCESSFULL SUBMITTED</h1>";
fclose($read);
/*header("Location:thankyou.html");*/
?>