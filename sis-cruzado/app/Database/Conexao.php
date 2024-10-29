<?php 

namespace App\Database;

use \PDO;
use \PDOException;

class Conexao {

    const HOST =  'localhost';

    const DATABASE = 'bd_siscruzado';

    const USER = 'root';

    const PASS = '';


    private $tabela;
    private $conexao;

    public function __construct($tabela = null)
    {
        $this-> tabela = $tabela;
        $this-> setConexao();
    }

    private function setConexao(){
        try {
            $this->conexao = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DATABASE, self::USER, self::PASS);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    private function execute($query, $params = []){
        try{
            $stm = $this->conexao->prepare($query);
            $stm->execute($params);
            return $stm;
        } catch (PDOException $e){
            die('ERROR: ' . $e->getMessage());
        }
    }
    
    public function select($where = [], $values = '*') {
        $where = count($where) > 0 ? 'WHERE ' . implode(' AND ', $where) : '';
        $query = 'SELECT ' . $values . ' FROM ' . $this->tabela . ' ' . $where;
        
        return $this->execute($query);
    }

    public function update($where, $values) {
        $fields = array_keys($values);
        $query = 'UPDATE ' .$this->tabela.' SET '. implode(' = ?, ', $fields) .' = ? WHERE ' . $where;
        
        // echo "<pre>"; print_r($query); echo "</pre> <br/> "; 
        // print_r($values);
        // exit;
        
        $this->execute($query, array_values($values));
        return true;
    }

    public function delete($where) {
        $query = 'DELETE FROM '.$this->tabela.' WHERE '. $where;
        $this->execute($query);
        return true;

    }

    public function insert($values = []) {
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?'); 
        $query = 'INSERT INTO ' . $this->tabela . ' (' . implode(', ', $fields) . ') VALUES (' . implode(', ', $binds) . ') ';

        // echo "<pre>"; print_r($query); echo "</pre> <br/> "; 
        // print_r($values);
        // exit;

        $this->execute($query, array_values($values));

        return $this->conexao->lastInsertId();
    }


}