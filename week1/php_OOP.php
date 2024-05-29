<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    
    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <?php
            class fruit {
                public $name;
                public $color;

                function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }

                function __destruct()
                {
                    echo "quả là {$this->name} và màu {$this->color}";
                }

                function set_name($name){
                    $this->name = $name;
                }

                function get_name(){
                    return $this->name;
                }

                function set_color($color){
                    $this->color = $color;
                }

                function get_color(){
                    return $this->color;
                }
                
            }
            $newfruit = new fruit("Banana", "yellow");
            $newfruit -> set_color("red");
            $newfruit -> set_name("apple");
            echo $newfruit -> get_name();
            echo $newfruit -> get_color();
            #Kiểm tra xem biến này có thuộc lớp fruit không
            $apple = new fruit("apple","red");
            echo 'test';
            $apple ->set_name('Aple');
            var_dump($apple instanceof fruit);

        
        ?>
        <?php
            class Fruit2{
                public $name;
                public $color;
                public $weight;

               
                function set_name2($n){
                    $this->name = $n;
                }
                protected function set_color2($n){
                    $this->color = $n;
                }
                private function set_weight2($n){
                    $this->weight = $n;
                }
            }

            
            $manga = new Fruit2();
            $manga ->name = 'mango';
            $manga ->color=' yellow';
            $manga ->weight = '300';

        ?>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
