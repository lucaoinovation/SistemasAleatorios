<?php
class ViewPrincipalMostrar{
    public static function exibir(){
        $grupos = 30;
        $oficinas = 150;
        $participantes = 450;
        
        $pactuacoes = 10;
        $repactuacoes = 15;
        $repactuacoesPactuacoes = 25;
        ?>
        <div class="estiloBasico">
            <div class="relatorioBasico flutuanteEsquerda">
                <span>Capacidade de atendimento pactuada: 500</span>
                <br/><br/>
                <span>
                    <?=$grupos?> grupos, <?=$oficinas?> oficnas, <?=$participantes?> participantes<br/>
                    <?=$pactuacoes?> pactuações, <?=$repactuacoes?> repactuações, <?=$repactuacoesPactuacoes?> pactuações/repactuações
                </span>
                
                
                <!--br/><br/>
                <span>participantes: 300;</span>
                <span>Grupos: 15;</span>
                <span>Oficinas: 60</span>
                <br/><br/>
                <span>Pactuação: 3;</span>
                <span>Repactuação: 8;</span>
                <span>Pactuação/Repactuação: 4</span-->
            </div>

            <!--S. A. T. C. quer dizer "Sobrenome Abreviado A Todo o Custo"-->
            <div class="sobreGestor flutuanteDireita">
                <span>Nome S. A. T. C. (cargo)</span>
                <br/><br/>
                <span>Municipio/UF (IBGE 6 dígitos)</span>
            </div>
        </div>
        <br/>
        <div class="campoDeMensagens estiloBasico">
            <h3>Aviso povis hilarium</h3>
            <p>Avisos povis hilarium bavariun penórium 
                <?php for($i = 1; $i <= 10; $i++){?>
                    povis hilarium bavariun penórium
                <?php }?>
            </p>
        </div>
        <?php
    }
}