<?php
$idade = 11;
$nome = "Claro";

if($idade > 17){
  echo $nome." de ".$idade." anos deve votar";
}elseif($idade < 16){
  echo $nome." de ".$idade." anos não vota";
}else{
  echo $nome." de ".$idade." anos pode votar";
}
 ?>
