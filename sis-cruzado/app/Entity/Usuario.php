<?php 

namespace App\Entity;

use App\Database\Conexao;
use \PDO;

use APP\Database;

class Usuario {
    CONST TB_PREFIX = "tb_";

    public $codigo;
    public $nome;
    public $email;
    public $senha;
    public $ativo;
    public $dtcadastro;


    public static function obterUsuario($where = [], $fields = '*'){
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];
        return (new Conexao(self::TB_PREFIX . $tabela))->select($where, $fields)
            ->fetchObject(__CLASS__);
    }

    public static function obterUsuarios($where = [], $fields = '*'){
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];
        return (new Conexao(self::TB_PREFIX . $tabela))->select($where, $fields)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function inserir($values = []) {
        return (new Conexao(self::TB_PREFIX . __CLASS__))->insert($values);
    }

}


