<?php

helper('form');
echo form_open('locacao/inserir_Locacao');

echo '<pre>';
echo form_label('               INSERIR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';
echo form_label('TIPO DE LOCAÇÃO  ', 'tipoLoc');
echo form_input('TB_LOCACAO_TIPO', '');

echo form_label('VALOR            ', 'valorLoc');
echo form_input('TB_LOCACAO_VALOR', '');

echo form_label('DATA INICIAL     ', 'dtInicio');
echo form_input('TB_LOCACAO_DT_INICIO', '');

echo form_label('DATA FINAL       ', 'dtFim');
echo form_input('TB_LOCACAO_DT_FIM', '');

echo form_label('CLIENTE          ',  'idCli');
echo form_input('TB_CLIENTE_ID', '');

echo form_label('FUNCIONÁRIO      ', 'idFun');
echo form_input('TB_FUNCIONARIO_ID', '');

echo form_label('AUTOMOVEL        ', 'idAuto');
echo form_input('TB_AUTOMOVEL_ID', '');

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'INSERIR');
echo form_close(); 
?>