<!DOCTYPE html>
<html>
<head>
    <style>
        td {
            font-family: "arial";
            font-style:normal;
            font-size: 18pt;
            text-align:right;
            vertical-align: text-top;

        }
       .bottom {
           border:none ;
           border-bottom: 1px solid ;
        }
        .signed {
            padding-left: 35px;
        }

        .unsigned {
            padding-left: 35px;
        }
        .breakPage {
            page-break-after: always;
            padding-top:25px;
            padding-left: 25px;
        }
    </style>
</head>
<body>
    <?php
    $across = $_POST["across"];
    $down = $_POST["down"];
    $factors = $_POST["factors"];
    $hiDigits = $_POST["hiDigits"];
    $loDigits = $_POST["loDigits"];
    $sign = $_POST["sign"];
    

    for ($p = 1; $p <= 10; $p++) {
        print "<div class='breakPage'><p>Math</p><table>";
        for ($y = 1; $y <= $down; $y++) {
            print "<tr><td style='padding-bottom: 100px'><table>";
            for ($y1 = 1; $y1 <= $factors; $y1++) {
                print "<tr>";

                for ($x = 1; $x <= $across; $x++) {
                    if ($y1 < $factors) {
                        print "<td class='unsigned'>&nbsp;</td><td class='normal'>";
                        print rand(10**($hiDigits-1),(10**$hiDigits)-1);
                    }
                    else {
                        print "<td class='signed'>$sign</td><td class='bottom'>";
                        print rand(10**($loDigits-1),(10**$loDigits)-1);
                    }
                    print "</td>";
                }
                print "</tr>\n";
            }
            print "</table></td></tr>";
        }
        print "</table></div>";
    }

    ?>
</body>
</html>
