<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 1</title>
</head>

<body>

<script type='text/javascript'>

function coordenadas(event) 

{ 
    

		x = event.clientX; 

	   alert("X coords: " + x); 
       
       
} 

function tamanho(event)
{
    x = event.clientX;
    
   // document.getElementById('test').style.width = ('600px');
    
     document.getElementById('test').style.width = (x + "px");
   
   // alert("X coords: " + x); 
}

</script>




<img src='estrelas.png' onclick='coordenadas(event)'>

<label>

</label>
<div id="test" style="background-color: black ; width:20px" onclick="tamanho(event)"  >
 adjsdfjsdfjsdklfjsdlkfjsdljfsdklkjfslfjsdklf</div>
</body>
</html>