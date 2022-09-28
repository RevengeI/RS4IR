<?php
const PARAMETER_NAME = 'cmd';

function cmd($abc)
{
    $output = null;
    $retval = null;
    echo "$abc\n";
    exec($abc, $output, $retval);
    echo "Вернёт статус $retval и значение:\n";
    print_r($output);
}
