<?php
class ViewGrupoDetalhar{
    
    public static function exibir()
    {
        /*as variáveis abaixo. serão utilizadas para aplicar os filtros necessários*/
        $cras = isset($_POST[ViewGrupo::$cras])?$_POST[ViewGrupo::$cras]:'';
        $grupoCodigo = isset($_POST[ViewGrupo::$codigo])?$_POST[ViewGrupo::$codigo]:'';
        $ibge = isset($_POST[ViewGrupo::$ibge])?$_POST[ViewGrupo::$ibge]:'';
        ?>
        <table>
            <thead>
                <tr>
                    <th>Atributo</th>
                    <th>Informação</th>
                </tr>
            </thead>
            <tbody>
                <tr class="impar">
                    <td>
                        <b>Código do grupo</b>
                    </td>
                    <td>51</td>
                </tr>
                <tr class="par">
                    <td>
                        <b>Vigência</b>
                    </td>
                    <td>Vigência 2022</td>
                </tr>
                <tr class="impar">
                    <td>
                        <b>Nome do grupo</b>
                    </td>
                    <td>asdfadsf</td></tr>
                <tr class="par">
                    <td>
                        <b>Forma de execução</b>
                    </td>
                    <td>Indireta</td>
                </tr>
                <tr class="impar">
                    <td>
                        <b>Nome do CRAS</b>
                    </td>
                    <td>CRAS PARANOÁ</td>
                </tr>
                <tr class="par">
                    <td>
                        <b>Entidade ativa</b>
                    </td>
                    <td>Já presentes no ACESSUAS</td>
                </tr>
                <tr class="impar">
                    <td>
                        <b>Coordenador</b>
                    </td>
                    <td>741061</td>
                </tr>
                <tr class="par">
                    <td>
                        <b>Técnico de nível superior</b>
                    </td>
                    <td>53421351</td>
                </tr><tr class="impar">
                    <td>
                        <b>Técnico de nível médio</b>
                    </td>
                    <td>334532</td>
                </tr>
                <tr class="par">
                    <td>
                        <b>Status</b>
                    </td>
                    <td>Ativo</td>
                </tr>
            </tbody>
        </table>
        <?php
    }
}