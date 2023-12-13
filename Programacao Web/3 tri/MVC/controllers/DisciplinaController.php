<?php

namespace Controller;

use Model\DisciplinaModel;
use Model\VO\DisciplinaVO;

final class DisciplinaController extends Controller {
    
    public function list() {
        $model = new DisciplinaModel();
        $data = $model->selectAll();

        $this->loadView("listaDisciplinas", [
            "disciplinas" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new DisciplinaVO();
        } else {
            $model = new DisciplinaModel();
            $vo = $model->selectOne(new DisciplinaVO($id));
        }

        $this->loadView("formDisciplina", [
            "disciplina" => $vo
        ]);
    }

    public function save() {
        
        $id = $_POST['id'];
        $vo = new DisciplinaVO($_POST['id'], $_POST['nome']);
        $model = new DisciplinaModel();
        
        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("disciplinas.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new DisciplinaModel();
        $return = $model->delete(new DisciplinaVO($_GET['id']));

        $this->redirect("disciplinas.php");

    }

}
