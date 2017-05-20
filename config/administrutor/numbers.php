<?php
return array(
'title' => 'Numbers',
'single' => 'Number',
'model' => 'App\Number',
'form_width' => 500,
'columns' => array(
'id', // вывод колонки id
'name'
),
'filters' => array(
'id', 
'name'
),
'edit_fields' => array(
'name'
),
);