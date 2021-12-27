<html>
<body>

    <p>Minimum number of changes required is:
<?php

function leven($s1, $s2){
    $l1 = strlen($s1);                    // Length of string $s1
    $l2 = strlen($s2);                    // Length of $s2
    $dis = range(0, $l2);                 // Array with (0,1,2,...,n)

    for ($x = 1; $x <= $l1; $x++) {
        $dis_new[0] = $x;
        for ($y = 1; $y <= $l2; $y++) {
            $c = ($s1[$x - 1] == $s2[$y - 1]) ? 0 : 1;
            $dis_new[$y] = min($dis[$y] + 1, $dis_new[$y - 1] + 1, $dis[$y - 1] + $c);
        }
        $dis = $dis_new;
    }

    return $dis[$l2];
}

echo leven($_POST["str1"], $_POST["str2"]);

 ?>
    </p>

</body>
</html>
