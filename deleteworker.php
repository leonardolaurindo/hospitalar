<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Models\Worker;
// Validação do ID
if(!isset($_GET['wor_id']) or !is_numeric($_GET['wor_id'])){
    header('location: index.php?status=error');
    exit;
}
// Metodo responsavel por buscar um worker
$obWorker = Worker::getWorker($_GET['wor_id']);
//echo "<pre>"; print_r($obAddWorker); echo "</pre>"; exit;

//Validação da Vaga
if(!$obWorker instanceof Worker){
    header('location: index.php?status=error');
    exit;
}

//echo "<per>"; print_r($obWorker); echo "</pre>"; exit;

//Validação do POST
if(isset($_POST['delete'])){
    $obWorker->deleteWorker(); 
    header('location: index.php?status=success');
    exit;
}


include __DIR__.'/App/Includes/header.php';
include __DIR__.'/App/Includes/deleteworker.php';
include __DIR__.'/App/Includes/footer.php';

?>