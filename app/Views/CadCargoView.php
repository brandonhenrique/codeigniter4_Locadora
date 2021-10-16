<?php
    helper('form');

    echo form_open('cargo/CadastrarCargo');

    echo '<pre>';
    echo form_label('        ***  LOCADORA  ***         ', '');
    echo form_label('<br><br><br>---------------------------------------------- <br>', '');
    echo form_label('               CADASTRAR CARGO              ');
    echo '<br>';
    echo form_label('---------------------------------------------- <br>', '');
    echo '<br>';
    echo '<br>';
    echo form_label('CARGO       ', 'nomeCargo');
    echo form_input('TB_CARGO_NOME', '');

    echo '<br>';
    echo '<br>';
    echo form_submit('mysubmit', 'INSERIR');
    echo form_close(); 

?>