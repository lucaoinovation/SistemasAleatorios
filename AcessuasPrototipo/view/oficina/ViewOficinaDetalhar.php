<?php
class ViewOficinaDetalhar {
    public static function exibir($id = ''){
        ?>
        <table>
            <tr class="par">    
                <th>
                    <b>Atributo</b>
                </th>
                <th>Informação</th>
            </tr>
            <tr class="impar">
                <td>
                    <b>Código da oficina</b>
                </td>
                <td>Código do CRAS <?=$id?></td>
            </tr>    
            <tr class="par">    
                <td>
                    <b>Data da oficina</b>
                </td>
                <td>00/00/00</td>
            </tr>    
            <tr class="impar">    
                <td>
                    <b>Carga horária (em minutos):</b>
                </td>
                <td>4</td>
            </tr>
            <tr class="par">
                <?php ViewParametrosOficinaDetahar::exibir($id);?>
            </tr>
        </table>
        <?php
    }
}
