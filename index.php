<?php

$query  = explode('&', $_SERVER['QUERY_STRING']);
$link = $_SERVER['HTTP_HOST'] . '?' . $_SERVER['QUERY_STRING']

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check GET</title>
</head>
<body style="max-width: 100%; line-break: anywhere">
    <?php
    echo "<div>Your link: $link</div><br>";
    echo "<div>" . $_SERVER['HTTP_USER_AGENT'] . "</div><br>";
    echo "<div>" . $_SERVER['REMOTE_ADDR'] . "</div><br>";
    ?>
    <table border="1px solid #000" width="100%">
        <tr bgcolor="#a9a9a9">
            <th align="left">key</th>
            <th align="left">value</th>
        </tr>

        <?php
        foreach($query as $param)
        {
            list($name, $value) = explode('=', $param, 2);
            echo "<tr><td>$name</td><td>$value</td></tr>";
        }
        ?>
    </table>

</body>
</html>