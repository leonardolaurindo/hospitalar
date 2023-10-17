<?php 

require __DIR__.'/vendor/autoload.php';
define('TITLE',"Editar Worker");

use \App\Models\Worker;
// Validação do ID
if(!isset($_GET['wor_id']) or !is_numeric($_GET['wor_id'])){
    header('location: index.php?status=errorID');
    exit;
}
// Metodo responsavel por buscar um worker
$obWorker = Worker::getWorker($_GET['wor_id']);
//echo "<pre>"; print_r($obAddWorker); echo "</pre>"; exit;

//Validação da Vaga
if(!$obWorker instanceof Worker){
    header('location: index.php?status=errorInstance');
    exit;
}

//Validação do POST
if(isset($_POST['wor_type'],$_POST['wor_name'],$_POST['wor_password'],$_POST['wor_email'],$_POST['wor_doc'])){
    $obWorker->wor_type = $_POST['wor_type'];
    $obWorker->wor_name = $_POST['wor_name'];
    $obWorker->wor_password = $_POST['wor_password'];
    $obWorker->wor_email = $_POST['wor_email'];
    $obWorker->wor_doc = $_POST['wor_doc'];
    //"<pre>"; print_r($obWorker); echo "</pre>"; exit;
    $obWorker->updateWorker(); 
    header('location: index.php?status=sucess');
    exit;
}


include __DIR__.'/App/Includes/header.php';
include __DIR__.'/App/Includes/addworker.php';
include __DIR__.'/App/Includes/footer.php';

?>