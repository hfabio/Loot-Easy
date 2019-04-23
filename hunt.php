<?php
function criaTabela($numeroPlayers){
return '<tr>'.
    insereLinhasPlayers($numeroPlayers).
    insereLinhaLootTotal($numeroPlayers).
    insereLinhaWasteTotal().
    insereLinhaProfitTotal().
    insereLinhaProfitUnitario().
    '</tr>';
}

function insereLinhasPlayers($numeroPlayers){
    $texto = "";
    for($i = 0; $i< $numeroPlayers ; $i++){
        $texto .= '<th scope="row"><p class="text-primary" style="padding-top: 10%;">Supply Player '.($i+1).':</p></th><td><center><input type="number" class="form-control form-control-lg col-md-6" id="'.$i.'" value="0" onChange="calcula('.$numeroPlayers.')"></center></td></tr>';
    }
    return $texto;
}

function insereLinhaLootTotal($numeroPlayers){
    return '<th scope="row"><p class="text-primary" style="padding-top: 10%;">Total pego em loot:</p></th><td><p class="text-primary"><center><input type="number" class="form-control form-control-lg col-md-6" id="total_loot" value="0" onChange="calcula('.$numeroPlayers.')"></p></center></td></tr>';
}

function insereLinhaWasteTotal(){
    return '<tr><th scope="row"><p class="text-danger" style="padding-top: 10%;"><abbr title="Aqui você pode ver o total gasto pelo time!">Waste total:</p></abbr></th><td><center><input type="text" value="0" class="form-control form-control-lg col-md-6 text-danger" id="waste_total" disabled></center></p></td></tr>';
}

function insereLinhaProfitTotal(){
    return '<tr><th scope="row"><p class="text-success" style="padding-top: 10%;"><abbr title="Aqui você pode ver profit total do time!">Profit total:</p></abbr></th><td><p class="text-success"><center><input type="text" value="0" class="form-control form-control-lg col-md-6 text-success" id="profit_total" disabled></center></p></td></tr>';
}

function insereLinhaProfitUnitario(){
    return '<tr><th scope="row"><p class="text-success" style="padding-top: 10%;"><abbr title="Aqui você pode ver o profit de cada um!">Profit por player:</p></abbr></th><td><p class="text-success"><center><input type="text" value="0" class="form-control form-control-lg col-md-6 text-success" id="profit_unitario" disabled></center></p></td>';
}
 ?>
