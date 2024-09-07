<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
        <?php
        // 「Food」クラスを作成
        class Food {
            // 「Food」クラスには「name」「price」プロパティを定義
            private $name;
            private $price;
            
            // コンストラクトを定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
                }

            // 「Food」クラスには「price」プロパティの値を出力する「show_price」メソッドを作成
            public function show_price() {
            echo $this->price;
            }
        }
        
        // 「Animal」クラスを作成
        class Animal {
            // 「Animal」クラスには「name」「height」「weight」プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // コンストラクトを定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
                }

            // 「Animal」クラスには「height」 プロパティの値を出力する「show_height」メソッドを作成
            public function show_height() {
            echo $this->height;
            }
        }

        // クラスを元に任意の引数を渡してインスタンス化
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, '5000');

        // print_r関数を使いそれぞれのインスタンスを出力
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        // 取得した値を出力する
        // Foodクラスのインスタンスから価格を取得する
        $food->show_price();
        echo '<br>';
        // Animalクラスのインスタンスから高さを取得する
        $animal->show_height();
        ?>
    </p>
</body>
</html>