<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Mauricio Samy Silva" />
<title>Layout CSS com duas colunas - Exemplo 10</title>
<style type="text/css">
body{
	margin:10px 15px;
	font: 12px Arial, Helvetica, sans-serif;
	background:#ffe;
	text-align:center;
	}
#tudo {
	width:760px;
	background: url(http://maujor.com/tutorial/apoio_lay2faux/faux-bg.gif) repeat-y 0 0;
	text-align:left;
	margin:0 auto;
	}
#topo {	
	height:80px;
	background-color:#df7ddf;
	}

#principal {
	width:578px;
	background-color:#9cf;
	float:right;
	}
#navegacao {
	width:180px;
	background-color:#ffbe7d;
	float:left;
	}
#principal * {
	padding: 0 20px;
	}
#navegacao * {
	padding: 0 8px;
	}
#rodape {	
	clear:both;
	height:20px;
	background-color:#b5daa2;
	}
</style>

</head>
<body>
<h2 style="text-align:left;">CSS</h2>
<pre style="text-align:left;">
body{
	margin:10px 15px;
	font: 12px Arial, Helvetica, sans-serif;
	background:#ffe;
	<b style="color:#c30;">text-align:center;</b>
	}
#tudo {
	width:760px;
	background: url(faux-bg.gif) repeat-y 0 0;
	<b style="color:#c30;">text-align:left;</b>
	<b style="color:#c30;">margin:0 auto;</b>
	}
#topo {	
	height:80px;
	background-color:#df7ddf;
	}

#principal {
	width:578px;
	background-color:#9cf;
	float:right;
	}
#navegacao {
	width:180px;
	background-color:#ffbe7d;
	float:left;
	}
#principal * {
	padding: 0 20px;
	}
#navegacao * {
	padding: 0 8px;
	}
#rodape {	
	clear:both;
	height:20px;
	background-color:#b5daa2;
	}
</pre>
<hr />

<h2>RENDERIZAÇÃO:</h2>
<div id="tudo">
<div id="topo">TOPO</div>
<div id="principal">COLUNA PRINCIPAL
<p>Lorem ipsum dolor sit amet, coLorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. SuspendisLorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. SuspendisLorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. SuspendisLorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisnsectetuer adipiscing elit. Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus. Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisse potenti. Donec ullamcorper cursus dolor. Duis vitae ipsum. Maecenas dapibus hendrerit diam. Morbi varius, massa id pretium accumsan, nunc lorem congue libero, ut euismod metus libero id nulla. Duis posuere odio sed velit vulputate venenatis. Suspendisse et dui ac metus auctor fringilla. Curabitur interdum augue a pede.</p>
</div>
<div id="navegacao">COLUNA DE NAVEGAÇÃO
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
<p>Lorem ipsum dolor</p>
</div>
<div id="rodape">RODAPE</div>
</div>

</body>
</html>
