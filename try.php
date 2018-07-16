<html>
<head>
<title>blah</title>
<script language="javascript">
function addone(field) {
field.value = Number(field.value) + 1;
}

function subtractone(field) {
field.value = Number(field.value) - 1;
}
</script>
</head>
<body>
<form name="myform">
<!--input type="submit" onclick="this.disabled = true" value="Save" -->
<input type="text" name="myfield" value="0" size="5" readonly="readonly"><br>
<input type="button" value="Like! " onclick="addone(myfield);" onclick="this.disabled = true"> 
<input type="button" value="Unlike!" onclick="subtractone(myfield);"><br>
</form>
</body>
</html>