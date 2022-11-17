<?php
require "./classes/ville.class.php";


$lyon = new Ville("Lyon", "Rhone");
echo $lyon->showDepartementOfVille();

echo $lyon->setDepartement("La loire");

echo $lyon->showDepartementOfVille();
