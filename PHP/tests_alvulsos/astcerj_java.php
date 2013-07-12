<?php

echo "

<script type='text/javascript'>

function submitform2(acao, formulario) {
	var submite=document.getElementById('submite');

    submite.value=acao;
    //alert(submite.value);
    document.getElementById(formulario).submit();
}
function resetform2(acao) {
	//alert(acao);
    document.getElementById(acao).reset();
}

</script>


";


/**
 * @author BULFAITELO
 * @copyright 2012
 */



print "	<a href=\"javascript:submitform2('Recuperar_Senha', 'formprincipal')\" class='botaocontato'>Recuperar Senha</a>";
?>


