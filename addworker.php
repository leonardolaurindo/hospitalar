<?php 

require __DIR__.'/vendor/autoload.php';
define('TITLE',"Cadastrar Worker");
use \App\Models\Worker;
$obWorker = new Worker;
//Validação do POST
if(isset($_POST['wor_type'],$_POST['wor_name'],$_POST['wor_password'],$_POST['wor_email'],$_POST['wor_doc'])){
    $obWorker = new Worker;
    $obWorker->wor_type = $_POST['wor_type'];
    $obWorker->wor_name = $_POST['wor_name'];
    $obWorker->wor_password = $_POST['wor_password'];
    $obWorker->wor_email = $_POST['wor_email'];
    $obWorker->wor_doc = $_POST['wor_doc'];
    $obWorker->NewWorker();
    header('location: index.php?status=sucess');
    exit;
}


include __DIR__.'/App/Includes/header.php';
include __DIR__.'/App/Includes/addworker.php';
include __DIR__.'/App/Includes/footer.php';

?>