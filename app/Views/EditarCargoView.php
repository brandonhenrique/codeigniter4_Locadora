<?php
    helper('form');

    echo form_open('cargo/CadastrarCargo');
    echo '<pre>';
    echo form_label('   ***Editar Cargo***');
    echo '<br>';
    
    echo form_label('Digite o ID a alterar ', 'TB_CARGO_ID'); 
    echo form_input('TB_CARGO_ID', $editar['TB_CARGO_ID']);

    echo form_label('Digite o Cargo ', 'TB_CARGO_NOME'); 
    echo form_input('TB_CARGO_NOME', $editar['TB_CARGO_NOME']);

    echo '<br>';
    echo '<br>';
    echo form_submit('mysubmit', 'ALTERAR');
    echo form_close();
?>