<?php 
class ViewOficinaLista{
    public static function exibir(){
        ?>
        <table class="noMargin">
            <thead>
                <tr>
                    <th>Data da oficina</th>  
                    <th>Carga horária da oficina</th>
                    <th width="40%">Conteúdo(s) trabalhado(s)</th>
                    <th align="center">Ações</th>
                </tr>
            </thead>
            <tbody class="listaDeOficina"></tbody>
        </table>
        <?php
    }
}