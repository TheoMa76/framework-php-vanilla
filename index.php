<?php
require './vendor/autoload.php';
require_once './configs/debug.php';

use Theo\Controller\Database;

echo "bonjour";
$db = new Database();
echo "salut";
echo $db->table("Toto")->update(['filters' => ['name' => 'Maerten' , 'surname' => 'Theo'], "post" => ["mail" => "voila@ouais.com"]])->getQuery();





//$result = $pdo->getRelation(["marque","model","avis"],["ordinateur","avis"],"ordinateur.id = ordinateur_id",["ordinateur.id = 15"]);
//$ordinateur = new Ordinateur("DAUBE","BELLE DAUBE", "0","0","0","999999999");
//update($ordinateur,10);
//$result = $pdo->findAll('ordinateur');
// $html = new htmlGen();
// $html->display(['ordinateur','avis'],'relation',"ordinateur.id = 15","ordinateur.id = ordinateur_id",["marque","model","avis"]);
//dd($result);