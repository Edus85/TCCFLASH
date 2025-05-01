<?php
if ( isset($_POST['cnpj']) && !empty($_POST['cnpj']) ){
    echo "é uma PJ";
}elseif ( isset($_POST['cpf']) && !empty($_POST['cpf']) ){
    echo 'echo é uma PF';
}else{
    echo "passei aki";
}