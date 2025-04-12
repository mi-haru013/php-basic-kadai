
<p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;
           

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;               
            }
          }
         
                
          
        // インスタンス化する
        $food = new Food('poteto', 250);

        // インスタンス$userの各プロパティの値を出力する
        print_r($poteto);
        echo '<br/>';

      
        ?>


        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$userの各プロパティの値を出力する
        print_r($dog);
        ?>
        <br>
        $poteto-> show_price();
        echo '<br/>';
        $dog-> show_height();

        
        