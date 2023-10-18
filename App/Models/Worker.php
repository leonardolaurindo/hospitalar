<?php
namespace App\Models;

use App\Support\WorkerController;
use \PDO;

class Worker{
    
    public $wor_id;
    public $wor_type;
    public $wor_name;
    public $wor_password;
    public $wor_email;
    public $wor_doc;
    public function newWorker(){
        $obDatabase = new WorkerController('worker');
        $this->wor_id = $obDatabase->insert([
            'wor_type' => $this->wor_type,
            'wor_name' => $this->wor_name,
            'wor_password' => $this->wor_password,
            'wor_email' => $this->wor_email,
            'wor_doc' => $this->wor_doc,
        ]);
    //echo "<pre>"; print_r($this); echo "</pre>"; exit;
    return true;
    }
    // Atualizar Worker
    public function updateWorker(){
        return(new WorkerController('worker'))->updateWorker('wor_id =' .$this->wor_id,[
            'wor_type' => $this->wor_type,
            'wor_name' => $this->wor_name,
            'wor_password' => $this->wor_password,
            'wor_email' => $this->wor_email,
            'wor_doc' => $this->wor_doc
        ]);
    }
    //Metodo responsavel por excluir Worker do Banco
    public function deleteWorker(){
        return (new WorkerController('worker'))->deleteWorker('wor_id ='.$this->wor_id);
    }


    // Metodo responsavel por obter os Workers do banco de dados
    public static function getWorkers($where = null, $order = null, $limit = null){
        return(new WorkerController('worker'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    // Metodo responsavel por buscar Worker por ID
    public static function getWorker($wor_id = null){
        return(new WorkerController('worker'))->select('wor_id =' .$wor_id)
                                      ->fetchObject(self::class);
                                      
    }
}


?>