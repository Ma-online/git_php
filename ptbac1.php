
 <?php
    echo bac1(0, 2);
    function bac1($a, $b)
    {
        if ($a == 0 && $b == 0) {
            return '-1';
        } else if ($a == 0 && $b != 0) {
            return '1';
        } else {
            return '0';
        }
    }

    ?>