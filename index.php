<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Calculator</title>
</head>
<body>
    <div class="container"> 
    
    <div class="position-absolute top-50 start-50 translate-middle">
    <div class="p-3 mb-2 bg-primary text-white text-center">Emoji-Based Calculator</div>
    <!-- post method in form -->
        <form method="POST">
        <div class="row g-3">
            <!-- Getting the first value -->
        <div class="col">
            <input type="text" class="form-control border border-primary" placeholder="First Number" aria-label="First name", name="f_num">
        </div>
        <!-- Getting the second value -->
        <div class="col">
            <input type="text" class="form-control border border-primary" placeholder="Second Number" aria-label="Last name", name="s_num">
        </div>
        <!-- Getting the desired operation -->
        <div class="col">
        <select class="form-select border border-primary" aria-label="Default select example", name="op">
        <option selected> Operations </option>
        <!-- Alien: Addition, Skull: Subtraction, Ghost: Multiplication, Scream: Division -->
        <option value="Alien"> &#x1F47D; </option> 
        <option value="Skull"> &#x1F480; </option>
        <option value="Ghost"> &#x1F47B; </option>
        <option value="Scream"> &#x1F631; </option>
        </select>
        </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto p-3 mb-2">
        <input class="btn btn-outline-primary", name="submit", type="submit", value="Submit">
        </div>
        </form>
        <div>
        <div class="p-3 mb-2 text-center"> <h5 class="text-primary">
        <?php
            if(isset($_POST['submit'])){
                $first_number = $_POST['f_num'];
                $second_number = $_POST['s_num'];
                $operation = $_POST['op'];
                echo " Calculating {$first_number} - {$operation} - {$second_number} ";
            }
        ?>
        </h5></div>
        <div class="p-3 mb-4">
            <!-- Showing the calculated operation response in a textarea -->
        <textarea class="form-control border border-primary text-primary" id="exampleFormControlTextarea1" rows="3">
        <?php
            if(isset($_POST['submit'])){
                $first_number = $_POST['f_num'];
                $second_number = $_POST['s_num'];
                $operation = $_POST['op'];
                
                // switch case condition to handle the operations 
                switch($operation){
                    case "Alien": $addition = $first_number + $second_number;
                            echo "The response is {$addition}";
                            break;
                    case "Skull": $subtraction = $first_number - $second_number;
                            echo "The response is {$subtraction}";
                            break;
                    case "Ghost": $multiplication = $first_number * $second_number;
                            echo "The response is {$multiplication}";
                            break;
                    case "Scream": $division = $first_number / $second_number;
                            echo "The response is {$division}";
                            break;
                    default: echo "No Response";
                }
            }
        ?>

        </textarea>
        </div>
        </div>
    </div>
    </div>
</body>
</html>