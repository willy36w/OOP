<?php
include_once "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式</title>
</head>

<body>
    <?php

    dd(all('students', " WHERE `id`<5"));
    dd(find('students', ['uni_id' => 'F200000035', 'parents' => '孔進豐']));
    dd(q("select * from `students` where `dept`='3'  order by `id` desc limit 10"));
    //del('dept', ['name' => '綜合演藝學系']);
    ?>
</body>

</html>