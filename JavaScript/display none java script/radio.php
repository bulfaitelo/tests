

<script language='javascript'>
    function SelectCampos() {
        if (document.getElementById('sim').checked) 
        {
            
            document.getElementById('test1').style.display = '';
              
        }
        if (document.getElementById('nao').checked)
        {
            
            document.getElementById('test2').style.display = '';

        }
    
    }
</script>


<label>test1</label><input type='radio' id='sim'  value='test1' onclick='SelectCampos()'/>
<label>test2</label><input type='radio' id='nao'  value='test2' onclick='SelectCampos()'/>

<div id='test1' style='display:none'>       
   test
</div>

<div id='test2' style='display:none'>
    test 2
</div>