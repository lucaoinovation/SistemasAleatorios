<?php
class ViewParticipantePesquisar {
    public static function exibir(){
        ?>
        <table>
            <tr>
                <td colspan="5">
                    <label>
                        <input 
                            form="<?= ViewModulo::$formName?>"
                            type="radio" 
                            name="" 
                            value="1"/>
                        Encaminhados e não vinculados
                    </label>
                    <label>
                        <input 
                            form="<?= ViewModulo::$formName?>" 
                            type="radio" 
                            name="<?= ViewParticipante::$tipoDeBusca?>" 
                            value="2"/>
                        Já vinculados
                    </label>
                    <label>
                        <input 
                            form="<?= ViewModulo::$formName?>" 
                            type="radio" 
                            name="<?= ViewParticipante::$tipoDeBusca?>" 
                            value="2"/>
                        Todos
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    NIS ou NB: 
                </td>
                <td>
                    <input 
                        type="text"/><!--será diferenciado onde nis tem 11 digitos e nb tem 10 digitos-->
                </td>
            </tr>
            <tr>
                <td>
                    UF: 
                </td>
                <td>
                    <select 
                        form="<?= ViewModulo::$formName?>">
                        <option>Selecione...</option>
                        <option>Rondônia</option>
                        <option>Acre</option>
                        <option>Amazonas</option>
                        <option>Roraima</option>
                    </select>
                </td>
                <td>
                    Nome: 
                </td>
                <td>
                    <input 
                        type="text"/>
                </td>
            </tr>
            <tr>
                <td>
                    Data de nascimento: 
                </td>
                <td>
                    <input 
                        type="date"/>
                </td>
                <td>
                    Nome da mãe: 
                </td>
                <td>
                    <input 
                        type="text"/>
                </td>
            </tr>
        </table>
        <?php
    }
}
