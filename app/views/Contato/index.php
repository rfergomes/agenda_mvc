<section class="caixa">
    <div class="thead"><i class="ico lista"></i> Lista de contatos</div>
    <div class="base-lista">
        <div>
            <div class="text-end d-flex">
                <a href="<?= URL_BASE ?>contato/cadastrar" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar contato</a>
                <a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
            </div>
        </div>
        <div class="lst mostraFiltro">
            <form action="<?= URL_BASE ?>contato/filtro" method="GET">
                <div class="rows">
                    <div class="col-4">
                        <select name="campo">
                            <option selected="" disabled="">Selecione um campo</option>
                            <?php
                            $campos = array(
                                "id_contato" => "Id",
                                "contato" => "Nome",
                                "email" => "E-mail",
                                "cidade" => "Cidade",
                                "site" => "Site",
                                "celular" => "Celular"
                            );
                            foreach ($campos as $chave => $item) {
                                if ($filtro->campo == $chave) {
                                    ?>
                                    <option selected='selected' value="<?= $chave ?>"><?= $item ?></option>
                                <?php } else {
                                    ?>
                                    <option value="<?= $chave ?>"><?= $item ?></option>
                                    <?php
                                }
                            }
                            ?>                           
                        </select>
                    </div>
                    <div class="col-6">
                        <input type="text"  name="valor" value="<?= isset($filtro) ? $filtro->valor : null ?>" placeholder="Valor da pesquisar..." >
                    </div>
                    <div class="col-2">
                        <input type="submit" class="btn" value="pesquisar">
                    </div>
                </div>
            </form>
        </div>
        <div class="tabela-responsiva">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
                <thead> 
                    <tr>
                        <th align="left">ID</th>
                        <th align="left">Nome</th>
                        <th align="left">Email</th>
                        <th align="center">Telefone</th>
                        <th align="center">Ação</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php foreach ($lista as $contato) { ?>
                        <tr>
                            <td><?= $contato->id_contato ?></td>
                            <td><?= $contato->contato ?></td>
                            <td align="center"><?= $contato->email ?></td>
                            <td><?= "(" . $contato->ddd . ") " . $contato->celular ?></td>
                            <td align="center">
                                <a href="<?= URL_BASE . "contato/editar/" . $contato->id_contato ?>" class="btn alterar">Editar</a>
                                <a href="javascript:;" onclick="excluir(this)" data-entidade="contato" data-id="<?= $contato->id_contato ?>"  class="btn excluir">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>				
                </tbody>
            </table>
        </div>
        <?php if (!$lista) { ?>
            <p class="nao-encontrado">Nenhum registro encontrado</p>
        <?php } ?>
    </div>
</section>
