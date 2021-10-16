<?php
    helper('form');

    echo form_open('modelo/inserir_Modelo');
    echo '<pre>';
    echo form_label('   Editar Marca');
    echo '<br>';
    
    echo form_label('Digite o ID a alterar ', 'TB_MODELO_ID'); 
    echo form_input('TB_MODELO_ID', $editar['TB_MODELO_ID']);

    echo form_label('Digite a Descrição do Modelo ', 'TB_MODELO_DESC'); 
    echo form_input('TB_MODELO_DESC', $editar['TB_MODELO_DESC']);

    echo form_label('Digite as Observações do Modelo ', 'TB_MODELO_OBS'); 
    echo form_input('TB_MODELO_OBS', $editar['TB_MODELO_OBS']);

    echo form_label('Digite a Data do Modelo ', 'TB_MODELO_DATA'); 
    echo form_input('TB_MODELO_DATA', $editar['TB_MODELO_DATA']);


    echo '<br>';
    echo '<br>';
    echo form_submit('mysubmit', 'ALTERAR');
    echo form_close();
?>