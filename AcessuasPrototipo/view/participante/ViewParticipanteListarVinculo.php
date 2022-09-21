<?php
class ViewParticipanteListarVinculo {
    public static function exibir(){
        $pagina = isset($_GET['pagina'])?$_GET['pagina']:'';
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nome da mãe do participante</th>
                    <th>Data de nascimento</th>
                    <th align="center" width="20%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=1;$i<=3;$i++){ ?>
                    <tr class="<?=$i%2?'par':'impar'?>">
                        <td>Nome<?=$i?></td>
                        <td>Nome da mãe do participante<?=$i?></td>
                        <td>Data de nascimento<?=$i?></td>
                        <td align="center">
                            <button class="tupla">Retirar participante</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
    }
}
