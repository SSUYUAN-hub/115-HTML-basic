<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 設定參數，並使用dd語法將參數寫入
    $myArr  = [1, 2, 3];
    dd($myArr);

    // 使用function 呼叫 dd 函式將剛剛寫入data的資料列印出來
    function dd($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    ?>

    <!-- 不使用function函式直接使用dd將寫入$assocArr資料印出 -->
    <?php
    $assocArr = [
        "s1" => "AAA",
        "s2" => "BBB",
        "s3" => "CCC"
    ];
    dd($assocArr);
    ?>

    <?php
    foreach ($myArr as $key => $value) {
        echo "$key => $value <br>";
    }
    ?>

    <?php
    foreach ($assocArr as $key => $value) {
        echo "$key => $value <br>";
    }
    ?>

</body>

</html>