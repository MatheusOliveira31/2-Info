<?php

namespace Model;

use Model\VO\AlunoVO;
use Util\Database;

final class AlunoModel extends Model
{

    public function selectAll($vo = null)
    {
        $db = new Database();
        $data = $db->select("SELECT * FROM alunos");

        $array = [];

        foreach ($data as $row) {
            $array[] = new AlunoVO($row['id'], $row['nome'], $row['matricula']);
        }

        return $array;
    }

    public function selectOne($vo = null)
    {
        $db = new Database();
        $query = "SELECT * FROM alunos WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) == 0) {
            return null;
        }

        return new AlunoVO($data[0]['id'], $data[0]['nome'], $data[0]['matricula']);
    }

    public function insert($vo)
    {

        $db = new Database();
        $query = "INSERT INTO alunos (nome, matricula) VALUES (:nome, :matricula)";
        $binds = [
            ":nome" => $vo->getNome(),
            ":matricula" => $vo->getMatricula()
        ];

        $sucess = $db->execute($query, $binds);

        if ($sucess) {
            return $db->getLastInsertedId();
        } else {
            return null;
        }

    }

    public function update($vo)
    {

        $db = new Database();
        $query = "UPDATE alunos SET nome = :nome, matricula = :matricula WHERE id = :id";
        $binds = [
            ":nome" => $vo->getNome(),
            ":matricula" => $vo->getMatricula(),
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo)
    {

        $db = new Database();
        $query = "DELETE FROM alunos WHERE id = :id";
        $binds = [
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);

    }


}