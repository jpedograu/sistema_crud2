<?php
$host ='localhost';
$user ='root';
$senha='';
$bd = 'sistema';

$conexao = new mysqli($host,$user,$senha,$bd);
 if (!$conexao){
    echo'erro ao se comunicar como bd'.mysqli_connect_errno();
 }
 else{
    echo 'deu certo a conexao';
 }
 

?>
