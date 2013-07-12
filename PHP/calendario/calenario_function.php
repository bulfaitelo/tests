<?php

function gera_calendario()
{
   //$data = date("Y-m-d");
    $data = "2013-05-15";
    $ano =  substr("$data", 0, 4);
  $mes =  substr("$data", 5, -3);
	$dia =  substr("$data", 8, 9);
    
    $primeiro_dia_semana = date("w", mktime(0,0,0,$mes,'01',$ano) );
    
    $ultimo_dia_mes = date("t", mktime(0,0,0,$mes,0,$ano)); 
    
    $corpo_calendario.="
    <div class='box calendar'>
					<div class='box-header'>
						<h3>Calendário</h3>
					</div>
					<div class='box-content'>
						<ul class='calendar-nav'>
							<li class='calendar-previous'><a href='#'>Anterior</a></li>
							<li class='calendar-month'>mes</li>
							<li class='calendar-next'><a href='#'>Próximo</a></li>
						</ul>
						<table border=1 class='calendar-table'>
                        <thead>
								<tr>
									<th width='29'>D</th>
									<th>S</th>
									<th>T</th>
									<th>Q</th>
									<th>Q</th>
									<th>S</th>
									<th width='29'>S</th>
								</tr>
							</thead>
							<tbody>
			                    <tr>
      ";
    
    if($primeiro_dia_semana == 0)
    {
        $corpo_calendario.="";
    }
    if($primeiro_dia_semana == 1)
    {
        $corpo_calendario.="<td class='calendar-empty-day'> </td>";
    }
    if($primeiro_dia_semana == 2)
    {
        $corpo_calendario.="<td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>";
    }
    if($primeiro_dia_semana == 3)
    {
        $corpo_calendario.="<td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>";
    }
    if($primeiro_dia_semana == 4)
    {
        $corpo_calendario.="<td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>";
    }
    if($primeiro_dia_semana == 5)
    {
        $corpo_calendario.="<td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>";
    }
    if($primeiro_dia_semana == 6)
    {
        $corpo_calendario.="<td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>
                            <td class='calendar-empty-day'> </td>";
    }
    $dia_calendario = '1';
    $tabela_dia = $primeiro_dia_semana;
    for($cont=$primeiro_dia_semana;$cont<7;$cont++)
    {
       $corpo_calendario.= "<td>$dia_calendario</td>";
       $dia_calendario++;
       $tabela_dia++;
       
    }
       $corpo_calendario.="</tr>
                           <tr>";
                           
    for($cont=$tabela_dia;$cont<14;$cont++)
    {
       $corpo_calendario.= "<td>$dia_calendario</td>";
       $dia_calendario++;
       $tabela_dia++;
    }
       $corpo_calendario.="</tr>
                           <tr>";
                            
    for($cont=$tabela_dia;$cont<21;$cont++)
    {
       $corpo_calendario.= "<td>$dia_calendario</td>";
       $dia_calendario++;
       $tabela_dia++;
    }
       $corpo_calendario.="</tr>
                           <tr>";
                           
                           
     for($cont=$tabela_dia;$cont<28;$cont++)
    {
       $corpo_calendario.= "<td>$dia_calendario</td>";
       $dia_calendario++;
       $tabela_dia++;
    }
       $corpo_calendario.="</tr>
                           <tr>";
    if($tabela_dia>35)
    {
        for($cont=$tabela_dia;$cont<35;$cont++)
        {
           if($dia_calendario==$ultimo_dia_mes)
           {
                $corpo_calendario.= "<td>$dia_calendario</td>";
           } 
           //$corpo_calendario.= "<td>$dia_calendario</td>";
           $dia_calendario++;
           $tabela_dia++;
        }
        
    }
    else
    {
        for($cont=$tabela_dia;$cont<$ultimo_dia_mes+$primeiro_dia_semana;$cont++)
        {
           $corpo_calendario.= "<td>$dia_calendario</td>";
           $dia_calendario++;
           $tabela_dia++;
        }
    }                                                 
    
       $corpo_calendario.="</tr>
                           <tr>";
    for($cont=$tabela_dia;$cont<=$ultimo_dia_mes+$primeiro_dia_semana;$cont++)
    {
       $corpo_calendario.= "<td>$dia_calendario</td>";
       $dia_calendario++;
       $tabela_dia++;
    }
       $corpo_calendario.="</tr>
                           <tr>";
                            
    
    
    $corpo_calendario1.= "
			                      <td class='calendar-empty-day'> </td>
			                      <td class='calendar-empty-day'> </td>
			                      <td class='calendar-empty-day'> </td>
			                      <td class='calendar-empty-day'> </td>
			                      <td>1</td>
			                      <td>2</td>
			                      <td>3</td>
			                    </tr>
			                    <tr>
			                      <td>4</td>
			                      <td>5</td>
			                      <td class='calendar-event-day'>
			                      	6
			                      	<div class='calendar-balloon'>
			                      		<div class='calendar-ballon-wrap'>
				                      		<ul>
				                      			<li>
				                      				<span class='calendar-event-tit'>Evento Lorem</span>
				                      				<span class='calendar-event-hour'>18h</span>
				                      			</li>
				                      		</ul>
				                      		<span class='calendar-ballon-arrow'></span>
			                      		</div>
			                      	</div>
			                      </td>
			                      <td>7</td>
			                      <td>8</td>
			                      <td>9</td>
			                      <td>10</td>
			                    </tr>
			                    <tr>
			                      <td>11</td>
			                      <td>12</td>
			                      <td>13</td>
			                      <td>14</td>
			                      <td>15</td>
			                      <td>16</td>
			                      <td>17</td>
			                    </tr>
			                    <tr>
			                      <td>18</td>
			                      <td>19</td>
			                      <td>20</td>
			                      <td>21</td>
			                      <td class='calendar-event-day'>
			                      	22
									<div class='calendar-balloon'>
			                      		<div class='calendar-ballon-wrap'>
				                      		<ul>
				                      			<li>
				                      				<span class='calendar-event-tit'>Evento Lorem</span>
				                      				<span class='calendar-event-hour'>18h</span>
				                      			</li>
				                      		</ul>
				                      		<span class='calendar-ballon-arrow'></span>
			                      		</div>
			                      	</div>
			                      </td>
			                      <td>23</td>
			                      <td>24</td>
			                    </tr>
			                    <tr>
			                      <td height='17'>25</td>
			                      <td>26</td>
			                      <td>27</td>
			                      <td>28</td>
			                      <td>29</td>
			                      <td>30</td>
			                      <td class='calendar-empty-day'> </td>
			                    </tr>
							</tbody>
						</table>
					</div>	
				</div>
    
    
    ";
    
    
    return $corpo_calendario; 
}

echo gera_calendario();



function calendario($mon, $year)
{
    global $vetor_dia_semana;
    $aday=(60*60*24); // duracao de um dia, em segundos
    $start = mktime(0, 0, 0, $mon, 1, $year); //hora, minuto, seg, mes, dia, ano
    $firstDayArray = getdate($start);

    $form= "<TABLE BORDER = 1 CELLPADDING=5>\n
                                <tr>
									<th width='29'>D</th>
									<th>S</th>
									<th>T</th>
									<th>Q</th>
									<th>Q</th>
									<th>S</th>
									<th width='29'>S</th>
								</tr>";
    foreach ( $vetor_dia_semana as $day )
    $form=$form."\t<td><b>$day</b></td>\n";

    for ( $count=0; $count < (6*7); $count++ )
    {
       $dayArray = getdate($start);
      if ( (($count) % 7) == 0 )
      {
           if ( $dayArray[mon] != $mon )
              break;
           $form=$form."</tr><tr>\n";
      }
      if (( $count < $firstDayArray[wday]) or ($dayArray[mon] != $mon ))
      {
            $form=$form."\t<td><br></td>\n";
      }
      else
      {
            $form=$form."\t<td>$dayArray[mday]</td>";
           $start=$start+$aday;
      }
   }
   $form=$form."</tr></table>";
    return $form;
}

echo calendario(05, 2013);

?>
