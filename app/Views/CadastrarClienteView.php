<?php
    helper('form');
    echo form_open('cliente/cadastrar_cliente');
    
    echo '<pre>';
    echo form_label('        ***  LOCADORA  ***         ', '');
    echo form_label('<br><br><br>---------------------------------------------- <br>', '');
    echo form_label('         CADASTRAR CLIENTE               ');
    echo '<br>';
    echo form_label('---------------------------------------------- <br>', '');
    echo '<br>';
    echo '<br>';
    echo form_label('Nome Cliente   ', 'nomeCli');
    echo form_input('TB_CLIENTE_NOME', '');
    
    echo form_label('Telefone  Cliente ', 'telefone');
    echo form_input('TB_CLIENTE_TEL', '');
    
    echo form_label('Sexo   ', 'sexo');
    echo form_input('TB_CLIENTE_SEXO', '');
    
    echo form_label('E-MAIL  ', 'email');
    echo form_input('TB_CLIENTE_EMAIL', '');
    
    echo form_label('Senha         ',  'senha');
    echo form_input('TB_CLIENTE_ENDERECO', '');
    
    echo form_label('Endereço    ', 'endereco');
    echo form_input('TB_CLIENTE_ENDERECO', '');

    echo form_label('Complemento    ', 'complemento');
    echo form_input('TB_CLIENTE_COMPLEMENTO', '');
    
    echo form_label('Bairro       ', 'bairro');
    echo form_input('TB_CLIENTE_BAIRRO', '');
    
    echo form_label('Cidade      ', 'cidade');
    echo form_input('TB_CLIENTE_CIDADE', '');

    echo form_label('UF      ', 'uf');
    echo form_input('TB_CLIENTE_UF', '');

    echo form_label('Data de Nascimento      ', 'dtnascimento');
    echo form_input('TB_CLIENTE_DT_NASC', '');

    echo form_label('Data de Cadastro      ', 'dtcadastro');
    echo form_input('TB_CLIENTE_DT_CADASTRO', '');

    echo '<br>';
    echo '<br>';
    echo form_submit('mysubmit', 'CADASTRAR');
    echo form_close(); 

?>