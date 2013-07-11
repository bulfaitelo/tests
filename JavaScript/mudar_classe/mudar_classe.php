<html>
<head>
<title>Exemplo - Mudar Classe CSS com JavaScript</title>
<style>
.estilo1
{
font-family: verdana;
font-size: 14px;
color: blue;
cursor: pointer;
}
.estilo2
{
font-family: Arial;
font-size: 28px;
font-weight: bold;
color: green;
cursor: pointer;
}
</style>
<script>
function ChangeClass(objAttrib,NameClass)
{
//Tratamento para FF
if ((!document.all)&&(document.getElementById))
{
objAttrib.setAttribute("class",NameClass);
}
//Tratamento para I.E
if ((document.all)&&(document.getElementById))
{
objAttrib.setAttribute("className",NameClass);
}
}
</script>
</head>
<body>
<span id="texto" class="estilo1" onclick="ChangeClass(document.getElementById('texto'),'estilo2');">Texto formatado por CSS</span>
</body>
</html>