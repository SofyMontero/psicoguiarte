<?php
date_default_timezone_set("America/Bogota");
$fechatiempo=date("Y-m-d H:i:s");
$fechaactual=date("Y-m-d");
$fechainicio=date("Y-m-01");

$numero = count($_GET);
$tags = array_keys($_GET);// obtiene los nombres de las varibles
$valores = array_values($_GET);// obtiene los valores de las varibles
// crea las variables y les asigna el valor
for($i=0;$i<$numero;$i++){
 $tags[$i]=@$valores[$i];
 }
//VARIABLES POR POST 
$numero2 = count($_POST);
$tags2 = array_keys($_POST); // obtiene los nombres de las varibles

 $valores2 = array_values($_POST);// obtiene los valores de las varibles
//print_r($tags2);
// crea las variables y les asigna el valor
for($i=0;$i<$numero2;$i++){ 
@$tags2[$i]=@$valores2[$i]; 
} 

@$id_param=$_REQUEST["id_param"];
@$id_param0=$_REQUEST["id_param0"];
@$id_param1=$_REQUEST["id_param1"];
@$id_param2=$_REQUEST["id_param2"];
@$param=$_REQUEST["param"];
@$param1=$_REQUEST["param1"];
@$param2=$_REQUEST["param2"];
@$param3=$_REQUEST["param3"]; 
@$param4=$_REQUEST["param4"];
@$param5=$_REQUEST["param5"];
@$param6=$_REQUEST["param6"];
@$param7=$_REQUEST["param7"];
@$param8=$_REQUEST["param8"];
@$param9=$_REQUEST["param9"];
@$param10=$_REQUEST["param10"];
@$param11=$_REQUEST["param11"];
@$param12=$_REQUEST["param12"];
@$param13=$_REQUEST["param13"];
@$param14=$_REQUEST["param14"];
@$param15=$_REQUEST["param15"];
@$param16=$_REQUEST["param16"];
@$param17=$_REQUEST["param17"];
@$param18=$_REQUEST["param18"];
@$param19=$_REQUEST["param19"];
@$param20=$_REQUEST["param20"];
@$param21=$_REQUEST["param21"];
@$param22=$_REQUEST["param22"];
@$param23=$_REQUEST["param23"];
@$param24=$_REQUEST["param24"];
@$param25=$_REQUEST["param25"];
@$param26=$_REQUEST["param26"];
@$param27=$_REQUEST["param27"];
@$param28=$_REQUEST["param28"];
@$param29=$_REQUEST["param29"];
@$param30=$_REQUEST["param30"];
@$param31=$_REQUEST["param31"];
@$param32=$_REQUEST["param32"];
@$param33=$_REQUEST["param33"]; 
@$param34=$_REQUEST["param34"];
@$param35=$_REQUEST["param35"];
@$param36=$_REQUEST["param36"];
@$param37=$_REQUEST["param37"];
@$param38=$_REQUEST["param38"];
@$param39=$_REQUEST["param39"];
@$param40=$_REQUEST["param40"];
@$param41=$_REQUEST["param41"];
@$param42=$_REQUEST["param42"];
@$param43=$_REQUEST["param43"];
@$param44=$_REQUEST["param44"];
@$param45=$_REQUEST["param45"];
@$param46=$_REQUEST["param46"];
@$param47=$_REQUEST["param47"];
@$param48=$_REQUEST["param48"];
@$param49=$_REQUEST["param49"];
@$param50=$_REQUEST["param50"];
@$param51=$_REQUEST["param51"];
@$param52=$_REQUEST["param52"];
@$param53=$_REQUEST["param53"];
@$param54=$_REQUEST["param54"];
@$param55=$_REQUEST["param55"];
@$param56=$_REQUEST["param56"];
@$param57=$_REQUEST["param57"];
@$param58=$_REQUEST["param58"];
@$param59=$_REQUEST["param59"];
@$param60=$_REQUEST["param60"];
@$param61=$_REQUEST["param61"];
@$param62=$_REQUEST["param62"];
@$param63=$_REQUEST["param63"]; 
@$param64=$_REQUEST["param64"];
@$param65=$_REQUEST["param65"];
@$param66=$_REQUEST["param66"];
@$param67=$_REQUEST["param67"];
@$param68=$_REQUEST["param68"];
@$param69=$_REQUEST["param69"];
@$param70=$_REQUEST["param70"];
@$param71=$_REQUEST["param71"];
@$param72=$_REQUEST["param72"];
@$param73=$_REQUEST["param73"];
@$param74=$_REQUEST["param74"];
@$param75=$_REQUEST["param75"];
@$param76=$_REQUEST["param76"];
@$param77=$_REQUEST["param77"];
@$param78=$_REQUEST["param78"];
@$param79=$_REQUEST["param79"];
@$param80=$_REQUEST["param80"];
@$param81=$_REQUEST["param81"];
@$param82=$_REQUEST["param82"];
@$param83=$_REQUEST["param83"];
@$param84=$_REQUEST["param84"];
@$param85=$_REQUEST["param85"];
@$param86=$_REQUEST["param86"];
@$param87=$_REQUEST["param87"];
@$param88=$_REQUEST["param88"];
@$param89=$_REQUEST["param89"];
@$param90=$_REQUEST["param90"];
@$param91=$_REQUEST["param91"];
@$param92=$_REQUEST["param92"];
@$param93=$_REQUEST["param93"];
@$param94=$_REQUEST["param94"];
@$param95=$_REQUEST["param95"];
@$param96=$_REQUEST["param96"];
@$param97=$_REQUEST["param97"];
@$param98=$_REQUEST["param98"];
@$param99=$_REQUEST["param99"];
@$param100=$_REQUEST["param100"];
@$param101=$_REQUEST["param101"];
@$param108=$_REQUEST["param108"];
@$param109=$_REQUEST["param109"];
@$param110=$_REQUEST["param110"]; 
@$param111=$_REQUEST["param111"]; 
@$param112=$_REQUEST["param112"]; 
@$param113=$_REQUEST["param113"]; 
@$param114=$_REQUEST["param114"]; 

@$bandera=$_REQUEST["bandera"];
@$tabla=$_REQUEST["tabla"];
@$idrol=$_REQUEST["idrol"];
@$general=$_REQUEST["general"];
@$sql=$_REQUEST["sql"];
@$n1=$_REQUEST["n1"];
@$ord=$_REQUEST["ord"];
@$p1=$_REQUEST["p1"];
@$para=$_REQUEST["para"];
@$id_p=$_REQUEST["id_p"];
@$rw=$_REQUEST["rw"];
@$cond =$_REQUEST["cond"];
@$cond1 =$_REQUEST["cond1"];
@$cond2 =$_REQUEST["cond2"];
@$cond3 =$_REQUEST["cond3"];
@$cond4 =$_REQUEST["cond4"];
@$cond5 =$_REQUEST["cond5"];
@$cond6 =$_REQUEST["cond6"];
@$estado =$_REQUEST["estado"];
@$actual =$_REQUEST["actual"];
@$fecha1 =$_REQUEST["fecha1"];
@$fecha2 =$_REQUEST["fecha2"];
@$i  =$_REQUEST["i"];
@$color   =$_REQUEST["color"];
@$nivel   =$_REQUEST["nivel"];
@$redir    =$_REQUEST["redir"];
@$validaBuzon  =$_REQUEST["validaBuzon"];
@$volver  =$_REQUEST["volver"];
@$p0=$_REQUEST["p0"];
@$titul=$_REQUEST["titul"];
@$par=$_REQUEST["par"];
@$rw1=$_REQUEST["rw1"];
@$tips_rol=$_REQUEST["tips_rol"];
@$condecion=$_REQUEST["condecion"];
@$conde2=$_REQUEST["conde2"];
@$valores=$_REQUEST["valores"];
@$cond_rol=$_REQUEST["cond_rol"];
@$pagina=$_REQUEST["pagina"];
@$asc=$_REQUEST["asc"];
@$ordby=$_REQUEST["ordby"];
@$condlimit=$_REQUEST["condlimit"];
@$valor=$_REQUEST["valor"];
@$paciente=$_REQUEST["paciente"];


?>