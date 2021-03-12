<!DOCTYPE html>
<html>
<head>
    <style>
        .inner {
            font-size: 18pt;
            font-family: "arial";
            width:auto;
            margin: 30px;
            text-align: right;
            border-bottom: solid 2px;
        }
        .outer {
            width:25%;
            float: left; 
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <?php
    $pages = $_POST["pages"];
    $rows = $_POST["rows"];
    $factors = $_POST["factors"];
    $hiDigits = $_POST["hiDigits"];
    $loDigits = $_POST["loDigits"];
    $sign = $_POST["sign"];
    $title = "";

    if ($sign == "+") {$title = "Addition Worksheet";}
    else if ($sign == "-") {
        $title = "Subtraction Worksheet";
        $factors = 2;
        $loDigits = $hiDigits - 1;
    }
    else if ($sign == "x") {
        $title = "Multiplication Worksheet";
        $factors = 2;
     }

    for ($p = 1; $p <= $pages; $p++) {
        print "<div style='width:7.5in; page-break-after: always;'>\n";
        print "<h2>" . $title . "</h2>";   

        for ($r = 1; $r <= $rows; $r++) {
            
            for ($x = 1; $x <= 4; $x++) {
                print "<div class='outer'><div class='inner'>\n";

                for ($f = 1; $f <= $factors; $f++) {
                    if ($f < $factors) {
                        print rand(10**($hiDigits-1),(10**$hiDigits)-1);
                        print "</br>\n";
                    }
                    else {
                        print "$sign&nbsp;";
                        print rand(10**($loDigits-1),(10**$loDigits)-1);
                        print "</br>\n";
                    }
                }
                print "</div></div>\n";
            }
        }
         print "<p>&nbsp;</p></div>\n\n";
    }

    ?>
</body>
</html>
