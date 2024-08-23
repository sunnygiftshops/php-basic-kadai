<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>テストの平均点を計算しよう</title>
 </head>
 
 <body>
     <p>
         <?php
            // 値の合計
            $fruit = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);

            // 値の平均
            $average = array_sum($fruit) / count($fruit);

            // 値の表示
            echo $average; //echo array_sum($fruit); も同じ
         ?>
     </p>
 </body>
 
 </html>