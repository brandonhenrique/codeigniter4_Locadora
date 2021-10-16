<?php
    helper('form');
    echo form_open('automovel/cadastrar_carro');
    
    echo '<pre>';
    echo form_label('        ***  LOCADORA  ***         ', '');
    echo form_label('<br><br><br>---------------------------------------------- <br>', '');
    echo form_label('         CADASTRAR VEICULO               ');
    echo '<br>';
    echo form_label('---------------------------------------------- <br>', '');
    echo '<br>';
    echo '<br>';
    echo form_label('ID MARCA    ', 'marca');
    echo form_input('TB_MARCA_ID', '');
    
    echo form_label('ID MODELO   ', 'modelo');
    echo form_input('TB_MODELO_ID', '');
    
    echo form_label('AUTOMÓVEL   ', 'nome');
    echo form_input('TB_AUTOMOVEL_NOME', '');
    
    echo form_label('ANO/MODELO  ', 'anoFab');
    echo form_input('TB_AUTOMOVEL_ANO_FAB', '');
    
    echo form_label('COR         ',  'cor');
    echo form_input('TB_AUTOMOVEL_COR', '');
    
    echo form_label('KM ATUAL    ', 'km');
    echo form_input('TB_AUTOMOVEL_KM', '');
    
    echo form_label('VALOR       ', 'valor');
    echo form_input('TB_AUTOMOVEL_VALOR_D', '');
    
    echo form_label('STATUS      ', 'status');
    echo form_input('TB_AUTOMOVEL_STATUS', '');
    echo '<br>';
    echo '<br>';
    echo form_submit('mysubmit', 'CADASTRAR');
    echo form_close(); 

?>