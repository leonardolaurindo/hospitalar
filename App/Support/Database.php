<?php 
namespace App\Support;
use \PDO;
use PDOException;

class Database{
    const HOST = 'localhost';
    const NAME = 'hospitalar';
    const USER = 'root';
    const PASS = '';
    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }
    // Metodo responsavel por criar uma conexão com o banco de dados
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
    // Metodo responsavel por executar queries dentro do banco de dados
    public function execute($query, $params = []){
        try{
            $statemen = $this->connection->prepare($query);
            $statemen->execute($params);
            return $statemen;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
    // Metodo responsavel por inserir dados no banco
    public function insert($values){
    // Dados da Query
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');
        //echo "<pre>"; print_r($binds); echo"</pre>"; exit;
        // Monta a Query
        $query = 'INSERT INTO '.$this->table.' ('.implode(',', $fields).') VALUES ('.implode(',',$binds).')';
        //Executa o insert
        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }
    // Metodo responsavel por executar uma consulta no banco
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //Dados da query
        $where = strlen($where) ? 'WHERE '.$where : ' ';
        $order = strlen($order) ? 'ORDER BY '.$order : ' ';
        $limit = strlen($limit) ? 'LIMIT '.$limit : ' ';
        //Monta a Query
        $query= 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit.'';
        //Executa a Query
        return $this->execute($query);
    }

    // Metodo responsavel por atualizar banco de dados
    public function updateWorker($where, $values){
        //Dados da Query
        $fields = array_keys($values);
        
        //Monta a Query
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
        
        // Execitar a Query
        $this->execute($query,array_values($values));

        return true;
    }
    // Metodo repsonsavel por excluir dados do banco
    public function deleteWorker($where){
        //Monta a query
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
        //Executa a Query
        $this->execute($query);

        // Retorna Sucesso
        return true;
    }

}

?>