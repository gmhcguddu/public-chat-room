

<?php
echo"<html><head><style><meta name='viewport' content='width=device-width, initial-scale=1'/> <style>

body{
    background-image:http://icloudpicture.com/wp-content/uploads/2016/05/best_hd_nature_wallpaper_for_laptop_hd_background.jpg;
background-repeat:no-repeat;
background-image:url('https://thumbs.dreamstime.com/z/web-design-concept-website-computer-keyboard-background-word-selected-focus-enter-button-d-render-38779685.jpg');
}

header{
    text-align:center;
    color:white;
background-image:url('https://4.bp.blogspot.com/-h9LmjBQegeI/Wb1cyx4KgSI/AAAAAAAAAj8/svkdB8Ptbro2lRPLR7xsfZXl02f895YVACLcBGAs/s1600/s.r.%2Bbackground%2B%2B%252824%2529.jpg');
text-shadow: 2px 2px 5px black, 0 0 1px white, 0 0 5px lime;

}

hr{
    height:30px;
    width:300px;
    color:white;
    background-color:lime;
}
h1{

position: fixed;     top: 0;    left: 0;    right: 0;    height: 40px;
}
k{
    text-align:right;
}
button{
    background-color:skyblue;
    color:white;
}
div{
    background-color:white;
    text-color:black;
    padding:10px;
    border:dashed 5px lime;
overflow:auto;

    text-align: center;
 text-transform: capitalize;
line-height:1.4;
word-spacing: 6px;
font-family:Times, serif;
 font-style: oblique;
font-weight:bold;
display:block;
max-width:300px;
margin: auto;
float:center;
}
di2{
    background-color:white;
    text-color:black;
    padding:10px;
    border:inset 10px LIME;
    
}
button{
text-shadow:3px 1px black;
font-weight:bold;
width:280px;
}
h3{
text-shadow: 2px 4px 5px black, 0 0 1px white, 0 0 5px lime;

font-weight:bold;
}
b{
text-shadow: 0px 7px 7px black, 0 0 1px white, 0 0 5px hotpink;
}
c{
text-shadow: 0px 7px 5px silver, 0 0 9px silver, 0 0 5px white;
font-weight:bold;
}
u{
text-shadow: 2px 10px 5px black, 0 0 1px blue, 0 0 5px silver;
}
marquee{
color:yellow;
text-shadow:0px 0px 0px black,0 0 0px blue,0 0 5px silver;
font-weight:bold;
text-align:center;
}
pre {
color:blue;
text-shadow:0px 0px 0px black,0 0 0px blue,0 0 5px silver;
font-weight:bold;
text-align:center;
}
footer{
background-color:blue;
color:white;
padding:1px;
position: fixed;     bottom: 0;    left: 0;    right: 0;    height: 40px;
}
iframe{
height:300px;
width:280px;
border:dotted 5px green;
padding:10px;
}
p{

color:orange;
text-shadow:2px 2px 0px black,0 0 0px blue,0 0 5px silver;
font-weight:bold;
text-align:right;
}
</style><title>";
echo $_GET["name"].$_GET["mystory"]."Web make By Guddu Modok</title></head><body background='http://www.huili-chem.com/wp-content/uploads/2016/04/seth-1920.jpg'><header><h1>HI! I'M ".$_GET["name"];
echo"</h1><br><br><br><br><br><br><marquee>The Great ".$_GET["occ"]." From ".$_GET["address"];
echo"</marquee><br><center><button>HOME</button><center>";
echo"</header>";
echo"<p id='demo'align='right'></p>";
echo"<center><div style='height:300px;width:300px;'><center><h3>Personal Information</h3></center><br><b>Name:-</b><c>".$_GET["name"]."</c><br><b>DOB:-</b><c>".$_GET["dob"]."</c><br><b>Qualification:-</b><c>".$_GET["qua"]."</c><br><b>Job:-</b><c>".$_GET["occ"]."</c><br><b>Address:-</b><c>".$_GET["address"]."</c><br><u><center>Contact</u></center><br><b>Mobile:-</b><c>".$_GET["mob"]."</c><br><b>Email:-<b><c>".$_GET["email"]."</c></div></center>";
echo"<br><br><div><h3><center>My story</h3><br><pre>".$_GET["mystory"]."</pre></div>";





?>


<br><br><br><br><a href="web.html">
<center><h2>Create Your Web Application Now</h2></center></a>
<br>




<center>
<a href="http://publicbox.000webhostapp.com">
<img src="http://publicbox.000webhostapp.com/banner.gif"style="padding:10px;border:5px inset black;height:200px;width:280;background-color:white;">Use Now</a>




<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>
<br><br><br>

<footer>
<?php
echo"<l>Powered by:-&copy;".$_GET["name"]."<br>Developed by:-Guddu Modok";
?>

</footer>
</body></html>





<script>
function gObj(B){var A;if(document.all){if(typeof B=="string"){return document.all(B)}else{return B.style}}if(document.getElementById){if(typeof B=="string"){return document.getElementById(B)}else{return B.style}}return null}function showquickmsg(B,A){if(A){B="<font color='red'>"+B+"</font>"}gObj("coutput").innerHTML=B}function trimAll(A){while(A.substring(0,1)==" "){A=A.substring(1,A.length)}while(A.substring(A.length-1,A.length)==" "){A=A.substring(0,A.length-1)}return A}function getNum(A){outputNum=0;for(i=0;i<A.length;i++){outputNum+=A.charCodeAt(i)}return outputNum}function calc(){showquickmsg("calculating...",true);cnameone=trimAll(gObj("cnameone").value);cnametwo=trimAll(gObj("cnametwo").value);if(cnameone.length<1){showquickmsg("Please Input",true);return }else{if(cnametwo.length<1){showquickmsg("Please input",true);return }}cnameone=cnameone.toLowerCase();cnametwo=cnametwo.toLowerCase();totalNum=getNum(cnameone)*getNum(cnametwo);finalScore=totalNum%100;finalScore="<div><center><c>YOUR NAME:-"+cnameone+"</c><br><br><d>LOVER'S NAME:-"+cnametwo+"</d><br><br><e>Total Love="+finalScore+"%"+"</e></div>";showquickmsg(finalScore,false)};
</script>

</head><body>

<font color="red">Check Your Love and Enjoy Love life</font>
<br>

<table id="lovecalc">


<form>
	
<b>
<center><input type="text" name="cnameone" placeholder="Your Name" id="cnameone">
<br>
	<input type="text" name="cnametwo"  id="cnametwo"placeholder="Lovers Name">

<br>
	
<input type="button" value="Check"onclick="calc()">

<input type="reset"value="Clear">



<div id="coutput"></div>


<a href="#top">##Top/Up</a>
<br><br><br>

