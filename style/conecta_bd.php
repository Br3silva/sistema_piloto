<?php

/* Você deve ativar o relatório de erros para mysqli antes de tentar fazer uma conexão */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('localhost', 'root','', 'bd_relatorio');

if (!$mysqli) {
    printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
}














?>