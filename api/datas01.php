<div class="titulo">Datas #1</div>

<?php
    echo time() . "<br>";
    echo date('D, d \d\e M \d\e Y H:i A') . "<br>";

    echo strftime('%A, %d de %B de %Y', time()) . '<br>';
    setlocale(LC_ALL, "pt_BR");
    //
    echo strftime('%A, %d de %B de %Y', time()) . '<br>';

    $amanha = time() + (24 * 60 * 60);
    echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

    $proximaSemana = strtotime('+1 week');
    echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

    $dataFixa = mktime(10, 0, 0, 1, 9, 1996);
    echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';
?>