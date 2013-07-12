<?
    // criado por: Tiago Alves Ferreira
    // email:      tiagosemail@ubbi.com.br
    // icq:        119146155
    
    // este arquivo tem a função de tratar as datas e modificar seus formatos
    
    function DataAno($data){ 
        $ano = (integer)substr($data, -2);
        if($ano < 10){
            $ano += 2000;
        }
        else{
            $ano += 1900;
        }
        return $ano;
    }// fim da função DataAno.
     // Esta função pega o ano de uma data de formato 120302 que é 02
     // e transforma em 2002

    function DataMes($data){ 
        $mes = (integer)substr($data, -4, 2);
        if($mes < 10){
           $mes = "0" . $mes;
        }
        return $mes;
    }// fim da função DataMes.
     // Esta função pega o mes de uma data de formato 020302 que é 03

    function DataDia($data){ 
        $dia = (integer)substr($data, -6, 2);
        if($dia < 10){
           $dia = "0" . $dia;
        }
        return $dia;
    }// fim da função DataDia.
     // Esta função pega o mes de uma data de formato 020302 que é 02
    
    function TratarData($data){
        $dia = DataDia($data);
        $mes = DataMes($data);
        $ano = DataAno($data);
        
        $data = $dia . "/" . $mes . "/" . $ano;
        return $data;
    }// fim da função TratarData.
     // Esta função pega a data no formato 020202
     // e transforma para o formato 02/02/2002
    
    function DataDeposito($data){
        $ano = substr($data, -4);
        $mes = substr($data, -7, 2);
        $dia = substr($data, 0, 2);
        $data = $ano . "-" . $mes . "-" . $dia;
        return $data;
    }// fim da função DataDeposito.
     // Esta função pega a data no formato 02/03/2002
     // e transforma para o formato 2002-03-02 para depósito no mysql

    function DataDepositoParaExibir($data){
        $ano = substr($data, 0, 4);
        $mes = substr($data, 5, 2);
        $dia = substr($data, 8, 2);
        $data = $dia . "/" . $mes . "/" . $ano;
        return $data;
    }// fim da função DataDepositoParaExibir.
     // Esta função pega a data no banco no formato 2002-03-02
     // e transforma para o formato 02/03/2002 para exibir na tela
     
    function DataDepositoParaValorAntigo($data){
        $ano = substr($data, 2, 2);
        $mes = substr($data, 5, 2);
        $dia = substr($data, 8, 2);
        $data = $dia . $mes . $ano;
        return $data;
    }// fim da função DataDepositoParaValorAntigo.
     // Esta função pega a data no banco no formato 2002-03-02
     // e transforma para o formato antigo 020302 para poder trabalha-la posteriormente
        
    function DataMaisUm($data){
        $dia = DataDia($data);
        $mes = DataMes($data);
        $ano = DataAno($data);
        
        switch ($mes)
	    {
            case 1 : $num_dias_mes = 31;   break; //janeiro
            case 2 : $num_dias_mes = 28;   break; //fevereiro
            case 3 : $num_dias_mes = 31;   break; //março
            case 4 : $num_dias_mes = 30;   break; //abril
            case 5 : $num_dias_mes = 31;   break; //maio
            case 6 : $num_dias_mes = 30;   break; //junho
            case 7 : $num_dias_mes = 31;   break; //julho
            case 8 : $num_dias_mes = 31;   break; //agosto                                                           
            case 9 : $num_dias_mes = 30;   break; //setembro
            case 10 : $num_dias_mes = 31;  break; //outubro
            case 11 : $num_dias_mes = 30;  break; //novenbro                                                           
            case 12 : $num_dias_mes = 31;  break; //dezembro
        }
        
        if($dia < $num_dias_mes){
           $dia += 1;
        }
        else{
            if($mes == 12){
               $mes = 1;
            }
            else{
               $mes += 1;
            }
            $dia = 1;
        }            
        
        if ($dia < 10){
            $dia = "0" . $dia;
        }
        
        if ($mes < 10){
            $mes = "0" . $mes;
        }
                
        $data = $dia . "/" . $mes . "/" . $ano;
        return $data;
    }// fim da função DataMaisUm.
     // Esta função soma 1 a data de formato 020302
     // e transforma a data para o formato 03/03/2002
    
    function Transf_Data_em_Dias($data){
        $dia = DataDia($data);
        $mes = DataMes($data);
        $ano = DataAno($data);
        
        switch ($mes)
	    {
            case 1 :  $num_dias_mes = 31; break; //janeiro
            case 2 :  $num_dias_mes = 28; break; //fevereiro
            case 3 :  $num_dias_mes = 31; break; //março
            case 4 :  $num_dias_mes = 30; break; //abril
            case 5 :  $num_dias_mes = 31; break; //maio
            case 6 :  $num_dias_mes = 30; break; //junho
            case 7 :  $num_dias_mes = 31; break; //julho
            case 8 :  $num_dias_mes = 31; break; //agosto
            case 9 :  $num_dias_mes = 30; break; //setembro
            case 10 : $num_dias_mes = 31; break; //outubro
            case 11 : $num_dias_mes = 30; break; //novenbro                                                           
            case 12 : $num_dias_mes = 31; break; //dezembro
        }
        
        $mat_num_dias[1]  = 31;
        $mat_num_dias[2]  = 28;
        $mat_num_dias[3]  = 31;
        $mat_num_dias[4]  = 30;
        $mat_num_dias[5]  = 31;
        $mat_num_dias[6]  = 30;
        $mat_num_dias[7]  = 31;
        $mat_num_dias[8]  = 31;
        $mat_num_dias[9]  = 30;
        $mat_num_dias[10] = 31;
        $mat_num_dias[11] = 30;
        $mat_num_dias[12] = 31;
        
        for($i = 1; $i < $mes; $i++){
            $tot_dias += $mat_num_dias[$i];
        }

        $tot_dias += $dia + $ano;

        return $tot_dias;
    }// fim da função Transf_Data_em_Dias.
     // Esta função transforma a data em dias. Exemplo 010102 = 2003
     // Pois é somado o ano. No caso 2002 com o nº de dias corridos do ano.
        

// HORAS

    function segundos_hr($hora_func){
        $segundos = (integer)substr($hora_func, -2);
        return $segundos;
    }// fim da função segundos_hr.
     // Esta função pega o valor dos segundos da hora de formato 14:36:20 EX: 20

    function minutos_hr($hora_func){
        $minutos = (integer)substr($hora_func, 3, 2);
        return $minutos;
    }// fim da função minutos_hr.
     // Esta função pega o valor dos minutos da hora de formato 14:36:20 EX: 36

    function hora_hr($hora_func){
        $hora = (integer)substr($hora_func, 0, 2);
        return $hora;
    }// fim da função hora_hr.
     // Esta função pega o valor das horas da hora de formato 14:36:20 EX: 14
       
    function Transf_Hora_em_Minutos($hora_func){
        $minutos     = minutos_hr($hora_func);
        $hora        = hora_hr($hora_func);
        $tot_minutos = $hora * 60 + $minutos;
        return $tot_minutos;
    }// fim da função Transf_Hora_em_Minutos.
     // Esta função transforma a hora em minutos. Exemplo 14:36:20 = 876 minutos
     
    function Transf_Minutos_em_Horas($hora_func){
        $tot   = (integer)($hora_func / 60);
        $resto = ($hora_func / 60) - ((integer)($hora_func / 60));
        $resto = $resto * 60;
        $tot   = $tot . ":" . $resto . ":00";
        return $tot;
    }// fim da função Transf_Minutos_em_Horas.
     // Esta função transforma a minutos em hora. Exemplo 876 minutos = 14:36:00
?>
