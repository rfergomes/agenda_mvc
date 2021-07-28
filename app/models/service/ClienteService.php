<?php

namespace app\models\service;

use app\util\UtilService;
use app\models\validacao\ClienteValidacao;
use app\models\service\Service;

class ClienteService {

    public static function salvar($cliente, $campo, $tabela) {
        global $config_upload;
        $validacao = clienteValidacao::salvar($cliente);
        if ($validacao->qtdeErro() <= 0) {
            /// fazendo o upload do arquivo
            if ($_FILES["arquivo"]["name"]) {
                $cliente->foto = UtilService::upload("arquivo", $config_upload);
                if (!$cliente->foto) {
                    return false;
                }
            }
        }
        return Service::salvar($cliente, $campo, $validacao->listaErros(), $tabela);
    }

}
