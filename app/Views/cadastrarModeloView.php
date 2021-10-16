<?php

helper('form');
echo form_open('modelo/inserir_Modelo');

echo '<pre>';
echo form_label('               Cadastrar Modelo              ');
echo '<br>';
echo '<br>';
echo '<br>';
echo form_label('Descrição do Modelo  ', 'modDesc');
echo form_input('TB_MODELO_DESC', '');

echo form_label('Observações do Modelo  ', 'modObs');
echo form_input('TB_MODELO_OBS', '');

echo form_label('Data do Modelo  ', 'modData');
echo form_input('TB_MODELO_DATA', '');

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close(); 
?>