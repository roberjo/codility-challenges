function solution($A) {
    // Prefix Sum == Suffix Sum Demo Challenge

    $n = count($A);

    if ($n == 0)
        return -1;

    $sum = 0;

    $i;

    for ($i = 0; $i < $n; $i++)
        $sum+=$A[$i];
    $sum_left = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum_right = $sum - $sum_left - $A[$i];
        if ($sum_left == $sum_right)
            return $i;
        $sum_left += $A[$i];
    }
    return -1;
}
