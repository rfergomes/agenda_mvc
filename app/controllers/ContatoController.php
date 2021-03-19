<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\util\UtilService;
use app\models\service\ContatoService;

class ContatoController extends Controller {

    private $tabela = "contato";
    private $campo = "id_contato";

    public function __construct() {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
    }

    public function index() {
        $dados["lista"] = Service::lista($this->tabela);
        $dados["view"] = "Contato/Index";
        $this->load("template", $dados);
    }

    public function cadastrar() {
        $dados["estados"] = Service::lista("estado");
        $dados["contato"] = Flash::getForm();
        $dados["view"] = "Contato/Create";
        $this->load("template", $dados);
    }

    public function editar($id) {
        $contato = Service::get($this->tabela, $this->campo, $id);
        if (!$contato) {
            $this->redirect(URL_BASE . "Contato/index");
        }
        $dados["estados"] = Service::lista("estado");
        $dados["contato"] = $contato;
        $dados["view"] = "Contato/Create";
        $this->load("template", $dados);
    }

    public function salvar() {
        $contato = new \stdClass();
        if ($_POST["id_contato"] != null) {
            $contato->id_contato = $_POST["id_contato"];
        }
        $contato->contato = $_POST['contato'];
        $contato->cep = $_POST['cep'];
        $contato->endereco = $_POST['endereco'];
        $contato->numero = $_POST['numero'];
        $contato->complemento = $_POST['complemento'];
        $contato->bairro = $_POST['bairro'];
        $contato->cidade = $_POST['cidade'];
        $contato->id_estado = $_POST['id_estado'];
        $contato->celular = $_POST['celular'];
        $contato->cpf = $_POST['cpf'];
        $contato->sexo = $_POST['sexo'];
        $contato->data_nascimento = $_POST['data_nascimento'];
        $contato->email = $_POST['email'];
        $contato->site = $_POST['site'];
        $contato->observacao = $_POST['observacao'];
        $contato->data_cadastro = date("Y-m-d");

        Flash::setForm($contato);
        if (ContatoService::salvar($contato, $this->campo, $this->tabela)) {
            $this->redirect(URL_BASE . "contato");
        } else {
            if (!$contato->id_contato) {
                $this->redirect(URL_BASE . "Contato/cadastrar");
            } else {
                $this->redirect(URL_BASE . "Contato/editar/" . $contato->id_contato);
            }
        }
    }

    public function excluir($id) {
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE . "Contato/index");
    }
    
    public function filtro() {
        $filtro = new \stdClass();
        $filtro->campo = $_GET["campo"];
        $filtro->valor = $_GET["valor"];
        $dados["filtro"] = $filtro;
        $dados["lista"] = Service::getLike($this->tabela, $filtro->campo, $filtro->valor,true);
        $dados["view"] = "Contato/Index";
        $this->load("template", $dados);
    }

}
