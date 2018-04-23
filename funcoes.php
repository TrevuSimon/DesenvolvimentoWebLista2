<?php
function operacao($n1,$n2,$ope)
{
  if($ope == "+"){
    return $n1 + $n2;
  }elseif($ope == "-"){
    return $n1 - $n2;
  }elseif ($ope == "/") {
    return $n1 / $n2;
  }else{
    return $n1 * $n2;
  }
}

function dasilvasauro($value)
{
  return $value = $value . " DA SILVA SAURO";
}

function hora()
{
  $t=time();
  return date("H",$t);
}

function minuto()
{
  $t=time();
  return date("i",$t);
}

function dia()
{
  $t=time();
  return date("d",$t);
}
 ?>
