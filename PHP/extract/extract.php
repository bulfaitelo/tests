
<?php

/* Suponha que $var_array � um array retornado pela fun��o
   wddx_deserialize */

$tamanho = "grande";
$var_array = array ("cor" => "azul",
                    "tamanho"  => "medio",
                    "forma" => "esfera");
extract ($var_array, EXTR_PREFIX_SAME, "wddx");

echo "$cor, $tamanho, $forma, $wddx_tamanho\n";




/*
    if( !defined('EXTR_PREFIX_ALL') ) define('EXTR_PREFIX_ALL', 3);
    if( !defined('EXTR_PREFIX_INVALID') ) define('EXTR_PREFIX_INVALID', 4);
    if( !defined('EXTR_IF_EXISTS') ) define('EXTR_IF_EXISTS', 5);
    if( !defined('EXTR_PREFIX_IF_EXISTS') ) define('EXTR_PREFIX_IF_EXISTS', 6);
    if( !defined('EXTR_REFS') ) define('EXTR_REFS', 256);
   
   
    function extract_to( &$arr, &$to, $type=EXTR_OVERWRITE, $prefix=false ){
       
        if( !is_array( $arr ) ) return trigger_error("extract_to(): First argument should be an array", E_USER_WARNING );
       
        if( is_array( $to ) ) $t=0;
        else if( is_object( $to ) ) $t=1;
        else return trigger_error("extract_to(): Second argument should be an array or object", E_USER_WARNING );
       
        if( $type==EXTR_PREFIX_SAME || $type==EXTR_PREFIX_ALL || $type==EXTR_PREFIX_INVALID || $type==EXTR_PREFIX_IF_EXISTS )
            if( $prefix===false ) return trigger_error("extract_to(): Prefix expected to be specified", E_USER_WARNING );
            else $prefix .= '_';
       
        $i=0;
        foreach( $arr as $key=>$val ){
           
            $nkey = $key;
            $isset = $t==1 ? isset( $to[$key] ) : isset( $to->$key );
           
            if( ( $type==EXTR_SKIP && $isset )
                || ( $type==EXTR_IF_EXISTS && !$isset ) )
                    continue;
           
            else if( ( $type==EXTR_PREFIX_SAME && $isset )
                || ( $type==EXTR_PREFIX_ALL )
                || ( $type==EXTR_PREFIX_INVALID && !preg_match( '#^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$#', $key ) ) )
                    $nkey = $prefix.$key;
                   
            else if( $type==EXTR_PREFIX_IF_EXISTS )
                if( $isset ) $nkey = $prefix.$key;
                else continue;

            if( !preg_match( '#^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$#', $nkey ) ) continue;
           
            if( $t==1 )
                if( $type & EXTR_REFS ) $to->$nkey = &$arr[$key];
                else $to->$nkey = $val;
            else
                if( $type & EXTR_REFS ) $to[$nkey] = &$arr[$key];
                else $to[$nkey] = $val;
           
            $i++;
        }
       
        return $i;
    }
   
    // e.g.:
    extract_to( $myarray, $myobject, EXTR_IF_EXISTS );
*/

?>
