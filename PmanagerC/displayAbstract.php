
<?php
        require_once "coreAbstract.php";
        $id =$name =$company = $color = $amount = $price = "";
        $idErr = $nameErr = $companyErr = $colorErr = $amountErr = $priceErr = "";
           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = test_input($_POST["id"]);
                $name = test_input($_POST["name"]);
                $company = test_input($_POST["company"]);
                $color = test_input($_POST["color"]);
                $amount = test_input($_POST["amount"]);
                $price = test_input($_POST["price"]);
            }
            
    ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
           <div>
                <div class="mb-3">
                    <label for="" class="form-label">ID</label>
                    <span class ="error">*<?php echo $nameErr;?></span>
                    <input
                        type="text"
                        class="form-control"
                        name="id"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">Nhập mã id</small>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <span class ="error">*<?php echo $nameErr;?></span>

                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                   
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">company</label>
                    <span class ="error">*<?php echo $nameErr;?></span>

                    <input
                        type="text"
                        class="form-control"
                        name="company"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">color</label>
                    <span class ="error">*<?php echo $nameErr;?></span>

                    <input
                        type="text"
                        class="form-control"
                        name="color"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">amount</label>
                    <span class ="error">*<?php echo $nameErr;?></span>

                    <input
                        type="text"
                        class="form-control"
                        name="amount"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">price</label>
                    <span class ="error">*<?php echo $nameErr;?></span>

                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Input
                </button>
                
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Display
                </button>
              
           </div>
        
    </form>
    <?php
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
        ?>
    <?php
            
            echo "<h2>Your Input: </h2>";
            echo $id;
            echo "<br>";
            echo $name;
            echo "<br>";
            echo $company;
            echo "<br>";
            echo $color;
            echo "<br>";
            echo $amount;
            echo "<br>";
            echo $price;
            echo "<br>";
            echo "ToTal:";
            echo "<br>";
            $pr = new laptop($id,$name,$company,$color,$amount,$price );
            echo $pr-> toString($name);
    ?>

