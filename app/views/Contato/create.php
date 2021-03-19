<section class="caixa">
    <div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
    <div class="base-form">
        <div class="caixa-form">
            <div class="thead">Inserir novo cadastro</div>
            <form action="<?php echo URL_BASE . "contato/salvar" ?>" method="POST" enctype="multipart/form-data">
                <?php
                $this->verMsg();
                $this->verErro();
                ?>					
                <div class="rows">
                    <div class="col-3 position-relative">
                        <?php $imagem = isset($contato->foto) ? URL_IMAGEM . $contato->foto : URL_BASE . "assets/img/img-usuario.png" ?>
                        <img src="<?= $imagem ?>" class="img-fluido foto" id="imgUp">
                        <div  class="foto-file">
                            <input type="file" name="arquivo" id="arquivo" onchange="pegaArquivo(this.files)">
                            <label for="arquivo" ><span>Editar foto</span></label>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="rows">
                            <div class="col-12">
                                <label>Nome</label>
                                <input name="contato" value="<?php echo isset($contato->contato) ? $contato->contato : null ?>" type="text" placeholder="Insira um nome" class="form-campo">
                            </div>
                            <div class="col-4">
                                <label>Cep</label>
                                <input name="cep" value="<?php echo isset($contato->cep) ? $contato->cep : null ?>" type="text" placeholder="Insira seu CEP" class="form-campo mascara-cep busca_cep cep">
                            </div>

                            <div class="col-8">				
                                <label>Endereço</label>
                                <input name="endereco" value="<?php echo isset($contato->endereco) ? $contato->endereco : null ?>" type="text" placeholder="Insira seu endereço" class="form-campo rua">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <label>Número</label>
                        <input name="numero" value="<?php echo isset($contato->numero) ? $contato->numero : null ?>" type="text" placeholder="Insira um Número" class="form-campo">	
                    </div>	
                    <div class="col-4">
                        <label>Complemento</label>
                        <input name="complemento" value="<?php echo isset($contato->complemento) ? $contato->complemento : null ?>" type="text" placeholder="Insira um Complemento" class="form-campo complemento">	
                    </div>			                   								
                    <div class="col-6">
                        <label>Bairro</label>
                        <input name="bairro" value="<?php echo isset($contato->bairro) ? $contato->bairro : null ?>" type="text" placeholder="Insira seu bairro" class="form-campo bairro">
                    </div>
                    <div class="col-6">
                        <label>Cidade</label>
                        <input name="cidade" value="<?php echo isset($contato->cidade) ? $contato->cidade : null ?>" type="text" placeholder="Insira sua cidade" class="form-campo cidade">	
                    </div>
                    <div class="col-2">
                        <label>UF</label>
                        <select name="id_estado" class="form-campo estado">
                            <option>Selecione</option>
                            <?php
                            foreach ($estados as $uf) {
                                ?>                         
                                <option value="<?php echo $uf->id_estado; ?>"<?php if ($contato->id_estado == $uf->id_estado) echo 'selected="selected"'; ?>><?= $uf->sigla; ?></option>
                            <?php } ?>
                        </select> 
                    </div>              
                    
                    <div class="col-4">
                        <label>Celular</label>
                        <input name="celular" value="<?php echo isset($contato->celular) ? $contato->celular : null ?>" type="text" placeholder="Insira seu celular" class="form-campo mascara-celular">
                    </div>
                    <div class="col-4">
                        <label>CPF</label>
                        <input name="cpf" value="<?php echo isset($contato->cpf) ? $contato->cpf : null ?>" type="text" placeholder="Insira seu CPF" class="form-campo mascara-cpf">
                    </div>
                    <div class="col-4">
                        <label>Sexo</label>
                        <?php $sexo = isset($contato->sexo) ? $contato->cpf : null ?>
                        <select class="form-campo" name="sexo">
                            <option value="M" <?php echo ($sexo == "M") ? "selected" : "" ?>>Masculino</option>
                            <option value="F" <?php echo ($sexo == "F") ? "selected" : "" ?>>Feminino</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label>Data de Nascimento</label>
                        <input name="data_nascimento" value="<?php echo isset($contato->data_cadastro) ? $contato->data_cadastro : null ?>" type="date" placeholder="Insira sua data" class="form-campo">
                    </div>

                    <div class="col-6">
                        <label>Email</label>
                        <input name="email" value="<?php echo isset($contato->email) ? $contato->email : null ?>" type="text" placeholder="Insira um email" class="form-campo">
                    </div>
                    
                    <div class="col-6">
                        <label>Site</label>
                        <input name="site" value="<?php echo isset($contato->site) ? $contato->site : null ?>" type="text" placeholder="Insira seu Site" class="form-campo">
                    </div>
                    <div class="col-12">
                        <label>Observação</label>
                        <textarea rows="10" name="observacao" class="form-campo"><?php echo isset($contato->observacao) ? $contato->observacao : null ?></textarea>
                    </div>
                    <input type="hidden" name="id_contato" value="<?php echo isset($contato->id_contato) ? $contato->id_contato : "" ?>" />
                    <input type="submit" value="<?= isset($contato->id_contato) ? "Salvar" : "Cadastrar" ?>" class="btn">
                </div>
            </form>
        </div>
    </div>
</section>
<script src="<?= URL_BASE ?>assets/js/js.generico.js" type="text/javascript"></script>