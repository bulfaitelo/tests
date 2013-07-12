<?php


function calendario($mon, $year)
{
    global $vetor_dia_semana;
    $aday=(60*60*24); // duracao de um dia, em segundos
    $start = mktime(0, 0, 0, $mon, 1, $year); //hora, minuto, seg, mes, dia, ano
    $firstDayArray = getdate($start);

    $form= "<TABLE BORDER = 1 CELLPADDING=5>\n
    <div class='box-content'>
						<ul class='calendar-nav'>
							<li class='calendar-previous'><a href='#'>Anterior</a></li>
							<li class='calendar-month'>mes</li>
							<li class='calendar-next'><a href='#'>Próximo</a></li>
						</ul>
						<table border=1 class='calendar-table'>
                        <thead>
								<tr>
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