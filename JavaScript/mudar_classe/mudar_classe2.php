<html>
<head>
<title>Untitled</title>
<style type="text/css">
<!--
.teste{
width: 200px;
height: 200px;
border: #000000 1px Solid;
background: #CCCCCC;
}
-->
.test{
width: 200px;
height: 200px;
border: #CCCCCC 2px Solid;
background: #000000;
}
</style>
<script language="JavaScript" type="text/javascript">
<!--

       


function muda(){
    classe = document.getElementById('tst').className;
    if(classe == 'teste'){
       document.getElementById('tst').className = 'test';
   }else{
       document.getElementById('tst').className = 'teste';
   }
}
//-->
</script>
</head>
<body>                               
<div class="teste" id="tst" onclick="muda();" />
</body>
</html>