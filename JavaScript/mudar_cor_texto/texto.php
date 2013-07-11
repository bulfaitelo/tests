    <body bgcolor=#3366cc>
    <head>
     
    <base="FRITEM">
    <BODY onLoad='glow()'>
     
     
     
    <center>
    <table border="0" cellpadding="0" cellspacing="0" width="736" height="379">
    <tr>
    <td width="736" height="13" colspan="3">
     
    <FONT FACE="Arial Black">
    <script TYPE="text/javascript">
    
     
    var loop = true; // LIGA DESLIGA
    var xpos = "280"; // DISTANCIA DA MARGEN
    var ypos = "3"; // DISTANCIA DO TOPO
    var wide = "405"; // TAMANHO DA LINHA
    var rate = "150"; // MUDAR A VELOCIDADE
     
    var tnum = "1";
    var t = new Array();
    t[1] = "......codigos......";
    t[2] = "......é com......";
    t[3] = "....fabio poletto.....";
    t[4] = "......fabio_ptto@hotmail.com......";
    t[5] = "......codigo fonte......";
    t[6] = "......Membro Soartes......";
     
     
    var cnum = "1";
    var c = new Array();
    c[1] = "gray";
    c[2] = "gray";
    c[3] = "silver";
    c[4] = "whitesmoke";
    c[5] = "white";
    c[6] = "white";
    c[7] = "white";
    c[8] = "White";
    c[9] = "whitesmoke";
    c[10] = "silver";
    c[11] = "gray";
    c[12] = "black";
     
    if(document.layers)document.write("<layer name='hi' Left='"+xpos+"' Top='"+ypos+"' Width='"+wide+"'></layer>");
    if(document.all)document.write("<div id='hi' style='position:absolute;left:"+xpos+";top:"+ypos+";width:"+wide+"'>");
     
    function glow()
    {
    if(document.layers)
    {
    if(tnum < t.length)
    {
    if(cnum < c.length-1)
    {
    document.layers["hi"].document.write("<font size=2 color='"+c[cnum]+"'>"+t[tnum]+"</font>");
    document.layers["hi"].document.close();
    cnum++;
    }
    else
    {	
    cnum = 1;
    tnum++;
    if(loop)
    {
    if(tnum == t.length) tnum = 1;
    }
    }
    setTimeout("glow()",rate);
    }
    else
    {
    document.layers["hi"].document.write("");
    document.layers["hi"].document.close();
    }
    }
     
    if(document.all)
    {
    if(tnum < t.length)
    {
    if(cnum < c.length-1)
    {
    document.all("hi").innerHTML = "<font size=4 color='"+c[cnum]+"'>"+t[tnum]+"</font>";
    cnum ++;
    }	
    else
    {
    cnum = 1;
    tnum ++;
    if(loop)
    {
    if(tnum == t.length) tnum = 1;
    }
    }
    setTimeout("glow()",rate);
    }
    else document.all("hi").innerHTML = "";
    }
    }
    
    </script>
    </font></td>
    </tr>
     
    </body>
    </html>