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
    <form action="welcome.php" method="post">
        Thông tin:
        <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="Name"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Nhập tên"
                />
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                name="Pass"
                id=""
                placeholder=""
            />
        </div>

        <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="Email"
                    id=""
                    aria-describedby="emailHelpId"
                    placeholder="Nhập email"
                />
                <!-- <small id="emailHelpId" class="form-text text-muted"
                    >Help text</small
                > -->
        </div>
        <br>
        Địa chỉ:
        <div class="mb-3">
            <label for="" class="form-label">City</label>
            <select
                class="form-select form-select-lg"
                name="City"
                id=""
            >
                <option selected value="None">Select one</option>
                <option value="Ha long">Ha long</option>
                <option value="Quang Ninh">Quang Ninh</option>
                <option value="Ho Chi Minh">Ho Chi Minh</option>
            </select>
        </div>
        <br>
        Giới tính:
        <div class="form-check">
            <label class="form-check-label"> Male
                <input
                    class="form-check-input"
                    name="Radio"
                    id=""
                    type="radio"
                    value="Male"
                    aria-label="Text for screen reader"
                />
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label"> FeMale
                <input
                    class="form-check-input"
                    name="Radio"
                    id=""
                    type="radio"
                    value="FeMale"
                    aria-label="Text for screen reader"
                />
            </label>
        </div>
        <br>
        Mã xác nhận:
        <div>
            <div class="form-check form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="Code"
                    id=""
                    value="Mail"
                />
                <label class="form-check-label" for="">Mail</label>
            </div>
            <div class="form-check form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="Code"
                    id=""
                    value="Phone number"
                />
                <label class="form-check-label" for="">Phone number</label>
            </div>
            <div class="form-check form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="Code"
                    id=""
                    value="None"
                />
                <label class="form-check-label" for="">None</label>
            </div>
        </div>
        
        <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
        </button>
        
    </form>
    
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
        //biến siêu toàn cục có phân biệt chữ hoa và thường
        /*$x = 75;
        function myf(){
            global $x;
            echo $GLOBALS['x'];
            echo $x;
        }
        myf();

        $str = "visit hanoi city city city";
        $exp ="/city/i";
        echo preg_match_all($exp, $str);
        echo preg_replace($exp, "halong",$str);*/
        
         
        
        ?>

    </body>
</html>
