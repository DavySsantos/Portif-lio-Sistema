<?php 

namespace App\Entity;

use App\Database\Conexao;
use \PDO;


class Vaga_Nivel {
    CONST TB_PREFIX = "tb_";

    public $codigo;
    public $nome_emp;
    public $nome;
    


    public static function obterVaganivel($where = [], $fields = '*'){
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];
        return (new Conexao(self::TB_PREFIX . $tabela))->select($where, $fields)
            ->fetchObject(__CLASS__);
    }

    public static function obterVaganiveis($where = [], $fields = '*'){
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];
        return (new Conexao(self::TB_PREFIX . $tabela))->select($where, $fields)
            ->fetchAll(PDO::FETCH_CLASS, self::class);

    }

    public function inserir($values = []) {
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];

        return (new Conexao(self::TB_PREFIX . $tabela))->insert($values);
    }

    public function atualizar($where, $values = []) {
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];
        return (new Conexao(self::TB_PREFIX . $tabela))->update($where, $values);
    }

    public function excluir($where) {
        $tabela = explode("\\", __CLASS__)[count(explode("\\", __CLASS__)) - 1];
        return (new Conexao(self::TB_PREFIX . $tabela))->delete($where);
    }
}