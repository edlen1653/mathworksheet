<!DOCTYPE html>
<html>
<head>
    <style>
        td {
            font-style: normal;
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
        }
    </style>
</head>
<body>
    <?php
    $across = 5;    $down = 4;    $factors = 4;    $hiDigits = 4;    $loDigits = 4;    $sign = "+";

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
