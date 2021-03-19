<?php

namespace app\models\validacao;

use app\core\Validacao;
use app\models\service\Service;

class ContatoValidacao {

    public static function salvar($contato) {
        $validacao = new Validacao();

        $validacao->setData("contato", $contato->contato);
        $validacao->setData("cpf", $contato->cpf);
        $validacao->setData("cep", $contato->cep);
        $validacao->setData("bairro", $contato->bairro);
        $validacao->setData("cidade", $contato->cidade);
        $validacao->setData("uf", $contato->id_estado);
        $validacao->setData("email", $contato->email);
        
        //fazendo a validação
        $validacao->getData("contato")->isVazio();
        $validacao->getData("cep")->isVazio();
        $validacao->getData("bairro")->isVazio();
        $validacao->getData("cidade")->isVazio();
        $validacao->getData("uf")->isVazio();
        $validacao->getData("cpf")->isVazio()->isCPF();

        if ($contato->email || $contato->cpf) {
            $email = Service::get("contato", "email", $contato->email);
            $cpf = Service::get("contato", "cpf", $contato->cpf);
            if ($email && $contato->id_contato != $email->id_contato) {
                $validacao->getData("email")->isUnico(1);
            }
            if ($cpf && $contato->id_contato != $cpf->id_contato) {
                $validacao->getData("cpf")->isUnico(1);
            }
        }
        return $validacao;
    }

}
