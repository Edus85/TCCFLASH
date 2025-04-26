<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSA PÁGINA SERÁ EXCLUÍDA!</title>
    <link rel="stylesheet" type="text/css" href="./SEREI_EXCLUIDO.css"/>
</head>
<body>

<!-- O Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>QUERIDOS ALUNOS,</h2>
        <h3>APERTE NO X para ABRIR O SISTEMA</h3>
        <hr>
        <p>Este é um projeto de TCC que está com toda a arquitetura montada.</p>
        <p>Você pode adicionar qualquer página, estilização, programação porém,<br>
            é extremamente importante que vocês utilizem um padrão para os projetos.</p>
        <p>PORTANTO, LEIAM OS CÓDIGOS E COMENTÁRIOS E PRINCIPAL, FOQUEM NO ENTENDIMENTO DA SOLUÇÃO DO GRUPO,<BR>
         O QUE O PROJETO RESOLVE? QUAL DOR? QUAL PÚBLICO ALVO? COM BASE NISSO, ESSE SITE SERÁ A SOLUÇÃO? COMO OS USUÁRIOS VÃO INTERAGIR COM ESSE SISTEMA?</p>

         <br>
         <p>Implementamos uma arquitetura M-V-C, espero que facilite o desenvolvimento, tem scripts de banco para vocês usarem e testarem.</p>
         <p>Lembrem, tem bastante coisa a ser feita, então MÃOS A OBRA!</p>
    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    window.onload = function() {
        modal.style.display = "block";
    };
    var span = document.getElementsByClassName("close")[0];
    
    span.onclick = function() {
        window.location.href = "php/view/Home.php";
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            window.location.href = "php/view/Home.php";
        }
    };
</script>

</body>
</html>
