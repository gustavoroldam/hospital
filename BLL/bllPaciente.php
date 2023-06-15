<?php

namespace BLL;

use DAL\dalPaciente;

include_once '../../DAL/dalPaciente.php';
include_once 'C:/xampp/htdocs/hospital/MODEL/paciente.php';

include_once 'C:/xampp/htdocs/hospital/MODEL/medicamento.php';
include_once 'C:/xampp/htdocs/hospital/BLL/bllMedicamento.php';

class bllPaciente
{
    public function Select()
    {
        $dal = new \DAL\dalPaciente();
        //Regras de Negocios

        return $dal->Select();
    }

    public function SelectId(int $id)
    {
        $dal = new \DAL\dalPaciente();
        //Regras de Negocios

        return $dal->SelectId($id);
    }

    public function SelectNome(string $nome)
    {
        $dalPaciente = new dalPaciente();

        return $dalPaciente->SelectNome($nome);
    }

    public function Delete(int $id)
    {
        $dal = new \DAL\dalPaciente();
        $dal->Delete($id);
    }

    public function Insert(\MODEL\Paciente $paciente)
    {
        $bllMedicamento = new \bll\bllMedicamento();
        $medicamento = new \MODEL\Medicamento();
        $medicamento = $bllMedicamento->SelectID($paciente->getIdMedicamento());
        $novoValor = $medicamento->getQtde() - 1;
        $medicamento->setQtde($novoValor);
        $bllMedicamento->Update($medicamento);

        $dal = new \DAL\dalPaciente();
        $dal->Insert($paciente);
    }

    public function Update(\MODEL\Paciente $paciente)
    {
        $dal = new \DAL\dalPaciente();
        $dal->Update($paciente);
    }
}
