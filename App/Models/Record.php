<?php
namespace App\Models;

use App\Support\Database;

class Record{
    
    public $rec_id;
    public $pat_name;
    public $pat_natural;
    public $pat_sus;
    public function NewRecord(){
        $obDatabase = new Database('record');
        $this->rec_id = $obDatabase->insert([
            'pat_name' => $this->pat_name,
            'pat_natural' => $this->pat_natural,
            'pat_sus' => $this->pat_sus
        ]);
    echo "<pre>"; print_r($this); echo "</pre>"; exit;
    }
}


?>