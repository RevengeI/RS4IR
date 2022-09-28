<?php

class SortEngine
{
    const PARAMETER_NAME = 'numbers';
    private array $arr = [];

    public function __construct(string $array_string)
    {
        //Разделение строки на отдельные цифры
        $this->arr = preg_split('@,@', $array_string, -1, PREG_SPLIT_NO_EMPTY); 

        // Проверка на то что ввели только цифры
        if (!$this->check($this->arr)) {
            throw new Exception("Wrong input");
        }

        // Преобразование строк в цифры
        foreach ($this->arr as &$value) {
            $value = intval($value);
        }

        // Сортировка
        $this->arr = $this->insertSort($this->arr);

        // Вывод отсортированного массива через запятую
        $string = implode(', ', $this->arr);
        echo $string;
    }

    function check(array $arr): bool
    {
        foreach ($arr as &$value) {
            if (!is_numeric($value))
                return false;
        }
        return true;
    }

    function insertSort(array $arr)
    {
        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }

        for ($i = 1; $i < $count; $i++) {
            $cur_val = $arr[$i];
            $j = $i - 1;

            while (isset($arr[$j]) && $arr[$j] > $cur_val) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $cur_val;
                $j--;
            }
        }

        return $arr;
    }
}
