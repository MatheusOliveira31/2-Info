<?php

namespace Model;

use Model\VO\DisciplinaVO;
use Util\Database;

final class DisciplinaModel extends Model {

    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM disciplinas");

        $array = [];

        foreach($data as $row) {
            $array[] = new DisciplinaVO($row['id'], $row['nome']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM disciplinas WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);
        
        if (count($data) == 0) {
            return null;
        }

        return new DisciplinaVO($data[0]['id'], $data[0]['nome']);
    
    }

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO disciplinas (nome) VALUES (:nome)";
        $binds = [
            ":nome" => $vo->getNome()
        ];

        $sucess = $db->execute($query, $binds);

        if ($sucess) {
            return $db->getLastInsertedId();
        } else {
            return null;
        }

    }

    public function update($vo) {

        $db = new Database();
        $query = "UPDATE disciplinas SET nome = :nome WHERE id = :id";
        $binds = [
            ":nome" => $vo->getNome(),
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM disciplinas WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }


}
