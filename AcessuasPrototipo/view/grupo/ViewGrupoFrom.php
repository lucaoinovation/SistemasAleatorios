<?php
class ViewGrupoFrom{
    public static function exibir(){
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';
        if($pagina=== ViewGrupo::$telaInsert){
            $operacao = 'Informações';
        }else if ($pagina=== ViewGrupo::$telaUpdate){
            $operacao = 'Alteração';
        }else{
            $operacao = '';
        }
        ?>
        <!--Tem de adicionar a funcionalidade de comportamento que crie um campo de código, caso o código tenha sido informado. isso permitirá o cadastro do grupo-->
        <!--Tem de adicionar a funcionalidade que modifique a action, isto para permitir que o formulário comporte alterações de grupo-->
        <!--OBS!: a funcionalidade deve ser independente do id, pois um post enviado de maneira mal intencionada pode modificar um registro no banco, caso criação de id e modificações de action sejan aninhados em um só método-->
        <fieldset>
            <legend><?=$operacao?> de grupo:</legend>
            <table class="noMargin meiaTela">
                <tr>
                    <td>
                        <b>
                            <span>CRAS:</span>
                        </b>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>Nome do grupo:</span>
                        </b>
                    </td>
                    <td>
                        <input form="<?=ViewModulo::$formName?>" type="text" name="<?=ViewGrupo::$nome?>" value="" maxlength="250">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>Forma de Execução:</span>
                        </b>
                    </td>
                    <td>
                        <select form="<?=ViewModulo::$formName?>" name="<?= ViewGrupo::$formaExecucao?>">
                            <option value="">Selecione...</option>
                            <option value="1">Direta</option>
                            <option value="2">Indireta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>
                            <span>Base física de execução</span>
                        </b>
                    </td>
                    <td>
                        <select form="<?=ViewModulo::$formName?>" name="<?=ViewGrupo::$baseFisicaExecucao?>">
                            <option value="">Selecione...</option>
                            <option value="1">Na instituição</option><!--Este valor não aparecerá, quando a forma de execução marcada for direta-->
                            <option value="2">No CRAS</option>
                            <option value="3">Unidade publica</option>
                            <option value="4">Espaço cedido/privado</option>
                        </select>
                    </td>
                </tr>
            </table>
            <table class="noMargin meiaTela">
                <tr><!--Este campo não aparecerá, quando a forma de execução marcada for direta-->
                    <td width='30%'>
                        <b>
                            <span>Informe a entidade</span>
                        </b>
                    </td>
                    <td>
                        <select form="<?=ViewModulo::$formName?>" name="<?= ViewGrupo::$entidade?>">
                            <option value="">Selecione...</option>
                            <option value="01">Já presentes no ACESSUAS</option>
                            <option value="02">Ainda não presentes no ACESSUAS</option>
                        </select>
                    </td>
                </tr>
                <!--Para os campos de coordenador e técnico de nível superior, devem ser listados todos os coordenadores de CRAS e técnicos de nível superior-->
                <tr>
                    <td>
                        <b>
                            <span>Coordenador</span>
                        </b>
                    </td>
                    <td>
                        <select form="<?=ViewModulo::$formName?>" name="<?= ViewGrupo::$coordenador?>">
                            <option value="">Selecione...</option>
                            <option value="741061">X</option>
                            <option value="8854">Coordenador Y</option>
                            <option value="95645">Coordenador Z</option>
                        </select>
                    </td>
                </tr>
                <tr><!--Este campo começará inativo e só será ativa, quando o cordenador for selecionado no campo acima-->
                    <td>
                        <b>
                            <span>Técnico de nível superior</span>
                        </b>
                    </td>
                    <td>
                        <select form="<?=ViewModulo::$formName?>" name="<?= ViewGrupo::$tecnicoNivelSuperior?>">
                            <option value="">Selecione...</option>
                            <option value="45411321">Técnico de Nível Superior X</option>
                            <option value="53421351">Técnico de Nível Superior Y</option>
                            <option value="621354">Técnico de Nível Superior Z</option>
                        </select>
                    </td>
                </tr>
                <!--Para o campo de técnico de nível médio, devem ser listados todos os técnicos de nível médio e educadores sociais-->
                <tr>
                    <td>
                        <b>
                            <span>Técnico de nível médio</span>
                        </b>
                    </td>
                    <td>
                        <select form="<?=ViewModulo::$formName?>" name="<?= ViewGrupo::$tecnicoNivelMedio?>">
                            <option value="">Selecione...</option>
                            <option value="15132135">Técnico de Nível Médio X</option>
                            <option value="25321">Técnico de Nível Médio Y</option>
                            <option value="334532">Técnico de Nível Médio Z</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <?php
    }
}