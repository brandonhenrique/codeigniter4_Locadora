<?php

helper('form');

echo form_open('automovel/cadastrar_carro');
echo '<pre>';
echo form_label('        *** LOCADORA ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('      Editar informações do Automóvel           ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';

echo form_label('Digite o ID a alterar ', 'TB_AUTOMOVEL_ID'); 
echo form_input('TB_AUTOMOVEL_ID', $alterar['TB_AUTOMOVEL_ID']);

echo form_label('Digite a marca        ', 'marca');
echo form_input('TB_MARCA_ID', $alterar['TB_MARCA_ID']);

echo form_label('Digite o modelo       ', 'modelo');
echo form_input('TB_MODELO_ID',$alterar['TB_MODELO_ID']);

echo form_label('Digite o automóvel    ', 'automovel');
echo form_input('TB_AUTOMOVEL_NOME', $alterar['TB_AUTOMOVEL_NOME']);

echo form_label('Digite o ano/modelo   ', 'anomodelo');
echo form_input('TB_AUTOMOVEL_ANO_FAB', $alterar['TB_AUTOMOVEL_ANO_FAB']);

echo form_label('Digite a cor          ',  'cor');
echo form_input('TB_AUTOMOVEL_COR', $alterar['TB_AUTOMOVEL_COR']);

echo form_label('Digite a km atual     ', 'kmatual');
echo form_input('TB_AUTOMOVEL_KM', $alterar['TB_AUTOMOVEL_KM']);

echo form_label('Digite o valor        ', 'valor');
echo form_input('TB_AUTOMOVEL_VALOR_D', $alterar['TB_AUTOMOVEL_VALOR_D']);

echo form_label('Digite o status       ', 'status');
echo form_input('TB_AUTOMOVEL_STATUS', $alterar['TB_AUTOMOVEL_STATUS']);

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close();


?>