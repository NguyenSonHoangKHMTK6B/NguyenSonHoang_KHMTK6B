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
        <main></main>
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


        <?php
        /*$n = "Nguyen Son Hoang";
        $c = "KHMTK6B";
        $s = "xin chao \"$n\" hoc lop '$c' \n";
        echo $s;
        echo "\t";
        echo str_replace(array($n,$c),array("Nguyễn Cẩm Hiếu","KHMT6"),$s);

            //viết code đưa ra lời chào biết hoten, gioitinh, tuoi 
            // nếu tuổi <= 20 -> chào em, >=20 <40 nam -> chào anh, nữ chào chị
            //nếu > 40 <=60 -> nam chào bác nữ chào cô  
        $hoten = "Hoang"; $gt = "nam" ; $age = 45;

        if ($age <= 20){
            echo "Chào em $hoten";
        }elseif(in_array($age, range(20,39)) ){
            if ($gt = "nam"){
                echo "Chào anh $hoten";
            }else{
                echo "Chào chị $hoten";
            }
        }elseif(in_array($age, range(40,60)) ){
            if ($gt = "nam"){
                echo "Chào bác $hoten";
            }else{
                echo "Chào cô $hoten";
            }
        }else{
            if ($gt = "nam"){
                echo "Chào ông $hoten";
            }else{
                echo "Chào bà $hoten";
            }
        }

        
        $employee = array (

            "Name" => "Alex",
            
            "Email" => "alex_jtp@gmail.com",
            
            "Age" => 21,
            
            "Gender" => "Male"
            
            );
            
            
        foreach ($employee as $key => $element) {
                
            echo $key . " : " . $element;
                
            echo "</br>";
                
        }

        $toan = 6; $anh = 9; $van = 7;
        $dtb = ($toan+$anh+$van)/3;
        function diem($dtb){
            if ( $dtb <= 4.9 ){
                echo "D";
            }elseif ($dtb >= 5 and  $dtb <=7.49 ){
                echo "C";
            }elseif ($dtb >= 7.5 and  $dtb <= 8.49 ){
                echo "B";
            }elseif ($dtb >= 8.5 and  $dtb <= 10 ){
                echo "A";
            }
            return "\n$dtb";
        }
        echo diem($dtb);
        function getnum(&$value){
            echo $value +=5;
        }
        $num = 2;
        echo getnum($num);
        echo $num;*/
        // mảng array
        $arr = ["toyota","BMW","VINfast"];
        $arr2 = [
            0 => "Volva",
            1 => "BMW"
        ];

        $myarr = array("color", "years");
        unset($myarr[1]);
        echo $myarr[0],",",$myarr[1];
        ?>



    </body>
</html>
