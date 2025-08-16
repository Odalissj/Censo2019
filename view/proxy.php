<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");
$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : "999";
$upstream = "https://censopoblacion.azurewebsites.net/API/indicadores/2/" . urlencode($codigo);
echo file_get_contents($upstream);
