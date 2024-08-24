<body>
    <p>
        <?php
        // キーと値を持つ連想配列を作成し、変数に代入
        $product_information = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // foreach文とecho文を使いブラウザに要素それぞれのキーと値を出力
        // 連想配列のキーと値をコロン（:）で区切り、要素ごとに改行した形で画面に出力
        foreach ($product_information as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
    </p>
</body>

</html>