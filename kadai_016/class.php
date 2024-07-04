<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>class.php</title>
  </head>

  <body>

    <?php
      // クラス
      class Food {
          // プロパティ                  
          private $name;
          private $price;

          // コンストラクタ
          public function __construct(string $Food_name, int $Food_price) {
              $this->name = $Food_name;
              $this->price = $Food_price;
          }
          // メソッド
          public function show_price(){
            // $this->price = $price;
            print_r($this->price);
          }
      }

      // クラス
      class Animal {
        // プロパティ                  
        private $name;
        private $height;
        private $weight;

        // コンストラクタ
        public function __construct(string $Animal_name, int $Animal_height, int $Animal_weight) {
            $this->name = $Animal_name;
            $this->height = $Animal_height;
            $this->weight = $Animal_weight;
        }
        // メソッド
        public function show_height(){
          print_r($this->height );
        }
      }


      // インスタンス化
      $output_Food = new Food('potato', 250);
      $output_Animal = new Animal('dog', 60, 5000);

      print_r($output_Food);
      print_r('<br>');
      print_r($output_Animal);
      print_r('<br>');
      $output_Food->show_price();
      print_r('<br>');
      $output_Animal->show_height();

    ?>

  </body>
</html>