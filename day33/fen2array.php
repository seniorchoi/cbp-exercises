<?php

function fen2array($fen)
{
    $parts = preg_split('#\s+#', $fen);
    $rows = explode('/', $parts[0]);

    $pieces = array();

    $y = 8;
    foreach($rows as $row)
    {
        $x = 1;
        for($i = 0; $i < strlen($row); $i++)
        {
            if(is_numeric($row[$i]))
            {
                $x += intval($row[$i]);
            }
            else
            {
                $pieces[$x][$y] = $row[$i];
                $x++;
            }
        }
        $y--;
    }

    return $pieces;
}

$pieces = fen2array('rnbqkbnr/pppppppp/8/8/4P3/8/PPPP1PPP/RNBQKBNR b KQkq e3');

echo preg_replace('#\s+#', '', var_export($pieces, true));