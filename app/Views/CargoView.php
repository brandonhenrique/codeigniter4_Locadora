<?php

$table = new \CodeIgniter\View\Table();

$template = [
    'table_open'         => '<table border="1" cellpadding="6" cellspacing="0">',

    'table_close'        => '</table>'
];
$table->setHeading('ID', 'CARGO', 'AÇÃO', 'AÇÃO');

$table->setTemplate($template);

echo $table->generate($tabela);
?> 
<br>
<br>
<a href="inserir">INSERIR</a>



?>