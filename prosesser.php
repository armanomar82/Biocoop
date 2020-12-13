<?php
  @date_default_timezone_set("Europe/Paris");
  @setlocale(LC_TIME, "fr_FR.utf8","fra");
  $moisActuel = strftime("%B");
  $pathJson = "liste.json";
  $contentJson  = file_get_contents($pathJson);
  $arrayContentJson = json_decode($contentJson, true);
  $arrayLength = count($arrayContentJson);
?>