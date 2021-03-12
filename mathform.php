<html>
<body>

<form action="worksheet.php" method="post">
    <table>
        <tr><td>Problems</td><td>
            <select id="sign" name="sign">
                <option value="+">Addition</option>
                <option value="x">Multiplication</option>
                <option value="-">Subtraction</option>
            </td></tr>
        <tr><td>Factors</td><td><input type="text" value="3" name="factors"></td></tr>
        <tr><td>High Digits</td><td><input type="text" value="3" name="hiDigits"></td></tr>
        <tr><td>Low Digits</td><td><input type="text" value="3" name="loDigits"></td></tr>
        <tr><td>Pages</td><td><input type="text" value="5" name="pages"></td></tr>
        <tr><td>Rows</td><td><input type="text" value="5" name="rows"></td></tr>
    </table>
    </br>
    <input type="submit">
</form>

</body>
</html>