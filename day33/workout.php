<?php


class piece
{
    protected $type = null;

    protected static $images = array(
        'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
        'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
        'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
        'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
        'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
        'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
        'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
        'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
        'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
        'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
        'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
        'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
    );

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return '<img src="' . static::$images[ $this->type ] . '" />';
        // '<img src="http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png" />'
    }
}

class field
{
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

    public function __construct($x, $y, $piece = null)
    {
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;
    }

    public function isDark()
    {
        if($this->x_coord % 2 == $this->y_coord % 2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function __toString()
    {
        if($this->isDark())
        {
            return '<div class="dark">' . $this->piece . '</div>';
        }
        else
        {
            return '<div class="light">' . $this->piece . '</div>';
        }
    }

    public function toString_ver2()
    {
        if($this->isDark())
        {
            $class_name = 'dark';
        }
        else
        {
            $class_name = 'light';
        }

        return '<div class="' . $class_name . '">' . $this->piece . '</div>';
    }

    public function toString_ver3()
    {
        $class_name = $this->isDark() ? 'dark' : 'light';
        
        return '<div class="' . $class_name . '">' . $this->piece . '</div>';
    }
}

$black_pawn = new piece('p');
$white_queen = new piece('Q');

// echo $black_pawn;
// echo $white_queen;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
.dark, .light {
    box-sizing: border-box;
    float: left;
    width: 40px;
    height: 40px;
    text-align: center;
    padding-top: 7px;
    position: relative;
}
.dark img, .light img {
    position: absolute;
    bottom: 7px;
    left: 10px;
}
.dark {
    background-color: #999999;
}
.light {
    background-color: #cccccc;
}
    </style>
</head>
<body>

    <?php
$a2 = new field(1, 2);
$b2 = new field(2, 2, $white_queen);
$c2 = new field(3, 2, $black_pawn);
$d2 = new field(4, 2);
echo $a2."\n";
echo $b2."\n";
echo $c2."\n";
echo $d2."\n";
    ?>
    
</body>
</html>
