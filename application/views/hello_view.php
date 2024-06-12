<?php
defined('BASEPATH') or exit('No direct scrip access allowed');
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>Hello Clara Maria dan Nim</title>
</head>

<body>
    <h1>Selamat Datang di Web Clara</h1>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>
</body>

</html>