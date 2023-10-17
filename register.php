<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Models\Record;
//Validação do POST
if(isset($_POST['pat_name'],$_POST['pat_natural'],$_POST['pat_sus'])){
    $obRecord = new Record;
    $obRecord->pat_name = $_POST['pat_name'];
    $obRecord->pat_natural = $_POST['pat_natural'];
    $obRecord->pat_sus = $_POST['pat_sus'];
    $obRecord->NewRecord();
}


include __DIR__.'/App/Includes/header.php';
include __DIR__.'/App/Includes/record.php';
include __DIR__.'/App/Includes/footer.php';

?>