<?php
class ViewParticipanteDetalhar {
    public static function exibir($id = ''){
        ?>
        <table>
            <thead>
                <tr>
                    <th>Atributos</th>
                    <th>Informações</th>
                </tr>
            </thead>
            <tbody>
                <tr class="impar">
                    <td>
                        <b>Nome</b>
                    </td>
                    <td>Nome do participante</td>
                </tr>
                <tr class="par">
                    <td>
                        <b>Numero do benefício</b>
                    </td>
                    <td>Número do benefício</td><!--Deve trazer "sem número de benefício" para beneficiários que não tem número de benefício-->
                </tr>
                <tr class="impar">
                    <td>
                        <b>NIS</b>
                    </td>
                    <td>Número de identificação social do participante</td><!--Deve trazer "Sem número NIS" para beneficiários que não tiverem NIS-->
                </tr>
                <tr class="par">
                    <td>
                        <b>Nome da mãe</b>
                    </td>
                    <td>Nome da mãe do participante</td>
                </tr>
                <tr class="impar">
                    <td>
                        <b>Data de nascimento</b>
                    </td>
                    <td>22/22/2222</td>
                </tr>
            </tbody>
        </table>
        <?php
    }
}
