<?php

if (isset($_GET['array'])) 
{
    require_once 'sort-utils.php';

    function get_array() {
        return array_map('intval', explode(',', $_GET['array']));
    }

    $array = get_array();
    echo "Массив до сортировки: ", implode(";",$array), "<br>";

    $array = selection_sort(get_array());
    echo "Сортировка выбором: ", implode(";",$array), "<br>";
}
else {
    echo 'Please specify the <b>array</b> parameter';
}

