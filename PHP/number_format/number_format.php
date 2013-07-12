<?php

echo "<br />".$number = '045';

// Notação Inglesa (padrão)
echo "<br />".$english_format_number = number_format($number);
// 1,234

// Notação Francesa
echo "<br />".$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56

// Notação Francesa
echo "<br />".$nombre_format_francais = number_format($number, 2, ',', '');
// 1 234,56




// Notação Inglesa com separador de milhar
echo "<br />".$english_format_number = number_format($number, 2, '.', '');
// 1234.57

function number_format_clean($number,$precision=0,$dec_point='.',$thousands_sep=',')
    {
    RETURN trim(number_format($number,$precision,$dec_point,$thousands_sep),'0'.$dec_point);
    }

echo "<br />".number_format_clean(25.00,2);
echo "<br />".number_format_clean(25.52,2);
echo "<br />".number_format_clean(50.10,2);
echo "<br />".number_format_clean(05.50,2);

?>
