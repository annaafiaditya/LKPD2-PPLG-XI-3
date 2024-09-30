

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <label for="employee_code">Employee Code (11 digits):</label>
    <input type="text" name="employee_code" id="employee_code">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["employee_code"];

    $golongan = floor($input % 100000000000 / 10000000000);
    $tgl = floor($input % 10000000000 / 100000000);
    $bln = floor($input % 100000000 / 1000000);
    $thn = floor($input % 1000000 / 100);
    $nn = floor($input % 10000);

    if ($golongan >= 1 && $golongan <= 4) {
        $bulanName = "";
        switch ($bln) {
            case 1:
                $bulanName = "JAN";
                break;
            case 2:
                $bulanName = "FEB";
                break;
            case 3:
                $bulanName = "MAR";
                break;
            case 4:
                $bulanName = "APR";
                break;
            case 5:
                $bulanName = "MEI";
                break;
            case 6:
                $bulanName = "JUN";
                break;
            case 7:
                $bulanName = "JUL";
                break;
            case 8:
                $bulanName = "AGU";
                break;
            case 9:
                $bulanName = "SEP";
                break;
            case 10:
                $bulanName = "OKT";
                break;
            case 11:
                $bulanName = "NOV";
                break;
            case 12:
                $bulanName = "DES";
                break;
            default:
                $bulanName = "Invalid";
        }

        echo "<p>$input is an employee with golongan $golongan, born on $tgl $bulanName $thn and has serial number $nn</p>";
    } else {
        echo "<p>Invalid golongan.</p>";
    }
}
?>
</body>
</html>