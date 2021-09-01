<?php

    class binarySearch
    {
        public function search(Array $arr, Int $l, Int $r, Int $x) : Int
        {
            if ($r >= $l) {
                $mid = ceil($l + ($r - $l) / 2);
                if ($arr[$mid] == $x) return floor($mid);
                if ($arr[$mid] > $x) return $this->search($arr, $l, $mid - 1, $x);
                return $this->search($arr, $mid + 1, $r, $x);
            }

            return -1;
        }
    }

    $arr = array(2, 3, 4, 10, 40);
    $n = count($arr);
    $search = $argv[1];
    $binary = new binarySearch();
    $result = $binary->search($arr, 0, $n - 1, $search);
    if($result == -1) {
        echo "O elemento {$search} não existe na array";
    } else {
        echo "O elemento {$search} está na posição: {$result}";
    }
