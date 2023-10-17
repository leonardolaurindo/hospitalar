<?php
namespace App\Models;

use App\Support\Database;
use \PDO;

class Worker{
    
    public $wor_id;
    public $wor_type;
    public $wor_name;
    public $wor_password;
    public $wor_email;
    public $wor_doc;
    public function NewWorker(){
        $obDatabase = new Database('worker');
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
    public function UpdateWorker(){
        return(new Database('worker'))->updateWorker('wor_id =' .$this->wor_id,[
            'wor_type' => $this->wor_type,
            'wor_name' => $this->wor_name,
            'wor_password' => $this->wor_password,
            'wor_email' => $this->wor_email,
            'wor_doc' => $this->wor_doc
        ]);
    }
    //Metodo responsavel por excluir Worker do Banco
    public function DeleteWorker(){
        return (new Database('worker'))->deleteWorker('wor_id ='.$this->wor_id);
    }


    // Metodo responsavel por obter os Workers do banco de dados
    public static function getWorkers($where = null, $order = null, $limit = null){
        return(new Database('worker'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    // Metodo responsavel por buscar Worker por ID
    public static function getWorker($wor_id = null){
        return(new Database('worker'))->select('wor_id =' .$wor_id)
                                      ->fetchObject(self::class);
                                      
    }
}


?>