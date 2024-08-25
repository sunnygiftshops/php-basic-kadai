<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPマニュアルを参照してソート関数を実装してみよう</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order) {
            if ($order) {
                echo '昇順にソートします。<br>';
                sort($array);
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
            }

            foreach ($array as $num) {
                echo $num . "<br>";
            }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // sort_2way TRUE：昇順／FALSE：降順
        // 昇順ソート
        sort_2way($nums, true);

        // 降順ソート
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>