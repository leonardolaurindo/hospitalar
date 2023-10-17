<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Models\Worker;

$worker = Worker::getWorkers();
//echo "<pre>"; print_r($worker); echo "</pre>"; exit;

include __DIR__.'/App/Includes/header.php';
include __DIR__.'/App/Includes/list.php';
include __DIR__.'/App/Includes/footer.php';

?>