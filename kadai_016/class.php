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
            
            // 「Food」クラスには「price」プロパティの値を出力する「show_price」メソッドを作成
            public function getPrice() {
            return $this->price;
            }

            // メソッドを定義
            public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
            }
        }

        // クラスを元に任意の引数を渡してインスタンスを作成
        $food = new Food('potato', 250);

        // print_r関数を使いそれぞれのインスタンスを出力
        print_r($food);
        echo '<br>';
        
        // 「Animal」クラスを作成
        class Animal {
            // 「Animal」クラスには「name」「height」「weight」プロパティを定義する
            private $name;
            private $height;
            private $weight;

            // 高「Animal」クラスには「height」 プロパティの値を出力する「show_height」メソッドを作成
            public function getHeight() {
            return $this->height;
            }

            // メソッドを定義
            public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }
        }
        // クラスを元に任意の引数を渡してインスタンスを作成
        $animal = new Animal('dog', 60, '5000');

        // print_r関数を使いそれぞれのインスタンスを出力
        print_r($animal).'<br>';
        echo '<br>';

        // 取得した値を出力する
        // Foodクラスのインスタンスから価格を取得する
        echo $food->getprice().'<br>';

        // Animalクラスのインスタンスから高さを取得する
        echo $animal->getHeight().'<br>';
        ?>
    </p>
</body>
</html>