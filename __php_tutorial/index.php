<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/72c32f013b.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    // Variables
    $name = "carlos";
    echo $name;

    echo "<br>";

    $number = 20;
    $number1 = 29;
    echo $number + $number1;

    echo "<br>";

    echo (rand(1, 10));

    // switch
    echo "<br>";
    $favass = "pink";

    switch ($favass) {
        case "red":
            echo "Smell bad";
            break;
        case "pink":
            echo "this is the best";
            break;
        default:
            echo "i dont know what you like";
            break;
    }
    $x = 1;
    while ($x < 5) {
        echo "I need to break through";
        $x++;
    }

    $y = 1;
    do {
        echo "<br>";
        echo "I want you";
        $y++;
    } while ($y <= 5);


    ?>

    <div class="container ">
        <div class="row justify-content-center align-content-center vh-100">
            <div class="col-md-6">
                <form class="p-5 bg-dark text-white rounded-4">
                    <h1>CRUD</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
        <button>Update</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script> -->
</body>

</html>

<!-- http://localhost/SampleLogin/index.php -->
