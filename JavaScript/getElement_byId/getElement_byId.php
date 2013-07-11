<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="BULFAITELO" />

	<title>Untitled 3</title>
    <style>
        #teste {
        color: white;
        font-size:10pt;
        background-color: black;
         
        }
    </style>  
    <script type='text/javascript' >
    
    function mudaCor() {
    document.getElementById("teste").style.color = "red";
    }
     
    function mudaTamanhoFonte() {
    document.getElementById("teste").style.fontSize = "20pt";
    }
     
    function mudaBackground() {
    document.getElementById("teste").style.backgroundColor = "green";
    }
     
    function mudaItalico() {
    document.getElementById("teste").style.fontStyle = "italic";
    }
     
    function escondeDiv() {
    document.getElementById("teste").style.display = "none";
    }
     
    function reapareceDiv() {
    document.getElementById("teste").style.display = "block";
    }
    </script>  
</head>

<body>

<div id="teste">Alguma frase s— para o exemplo.</div>
 
<input type="button" value="Muda cor da fonte" onclick="mudaCor()"/><br/>
<input type="button" value="Muda tamanho da fonte" onclick="mudaTamanhoFonte()"/><br/>
<input type="button" value="Muda background" onclick="mudaBackground()"/><br/>
<input type="button" value="Deixa em italico" onclick="mudaItalico()"/><br/>
<input type="button" value="Esconde a div" onclick="escondeDiv()"/><br/>
<input type="button" value="Reaparece com a div" onclick="reapareceDiv()"/>


</body>
</html>