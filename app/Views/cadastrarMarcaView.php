<?php

helper('form');
echo form_open('marca/inserir_Marca');

echo '<pre>';
echo form_label('               Cadastrar Marcas               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';
echo form_label('Nome da Marca  ', 'marcNome');
echo form_input('TB_MARCA_NOME', '');

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close(); 
?>