
 <?php
    echo is_snt(1);
    echo '<br>';
    echo is_snt(2);
    echo '<br>';
    echo is_snt(6);
    echo '<br>';
    echo is_snt(5);
    echo '<br>';
    echo is_snt(19);
    echo '<br>';
    echo is_snt(9);


    function is_snt($n)
    {
        $j = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $j++;
            }
        }
        if ($j > 2) {
            return 'false';
        } else {
            return 'true';
        }
    }
    

    ?>