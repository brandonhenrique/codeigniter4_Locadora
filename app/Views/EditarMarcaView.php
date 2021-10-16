<?php
    helper('form');

    echo form_open('marca/inserir_Marca');
    echo '<pre>';
    echo form_label('   Editar Marca');
    echo '<br>';
    
    echo form_label('Digite o ID a alterar ', 'TB_MARCA_ID'); 
    echo form_input('TB_MARCA_ID', $editar['TB_MARCA_ID']);

    echo form_label('Digite a Marca ', 'TB_MARCA_NOME'); 
    echo form_input('TB_MARCA_NOME', $editar['TB_MARCA_NOME']);

    echo '<br>';
    echo '<br>';
    echo form_submit('mysubmit', 'ALTERAR');
    echo form_close();
?>