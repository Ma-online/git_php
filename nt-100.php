
 <?php

    for ($i = 1; $i < 100; $i++) {
        if (is_snt($i)) {
            echo $i . '<br>';
        }
    }
    function is_snt($n)
    {
        $j = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $j++;
            }
        }
        if ($j == 2) {
            return false;
        } else {
            return true;
        }
    }

    ?>