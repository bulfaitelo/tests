<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="JavaScript" type="text/javascript">
if (document.all){}
else document.captureEvents(Event.CLICK);
document.onclick=mouse;

function mouse(e) {
	if (navigator.appName == 'Netscape'){
		xcurs = e.pageX;
		ycurs = e.pageY;  
	} else {
		xcurs = event.clientX;
		ycurs = event.clientY;
	}
	alert("x:"+xcurs+" y:"+ycurs);
}

</script>




</head>
<body>
<br /><br /><br /><br /><br />
<img src="estrelas.png" onclick="mouse();" />


</body>
</html>