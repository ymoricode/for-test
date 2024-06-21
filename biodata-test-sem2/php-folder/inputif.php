<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input If</title>
</head>

<body>
    <form method="post" action="if.php">
        <table width="374" border="0" align="center">
            <tr>
                <td width="122">Nama Anda</td>
                <td width="10">:</td>
                <td width="242">
                    <input type="text" name="tNama">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="text" name="tJK" maxlength="1" />(L atau P)
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="Submit" value="Proses">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>