<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
       
    </style>
</head>
<body>
        <?php 
            $nameErr=$emailErr=$phoneErr= "";

            $name=$email=$phone= "";

            if($_SERVER['REQUEST_METHOD'] == 'POST'  ){

                if(empty($_POST['name'])){

                    $nameErr = "This field is empty";

                }else{
                    $patten= "/^[a-zA-Z]+$/";

                    $check = preg_match_all($patten,$_POST['name']);

                    if($check){

                        $name= $_POST['name'];

                    }else{

                        $nameErr = "Enter the correct pattern";
                    }
                }
                if(empty($_POST['email'])){

                    $emailErr = "This field is empty";

                }else{
                    $patten= '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

                    $check = preg_match_all($patten,$_POST['email']);

                    if($check){

                        $email= $_POST['email'];

                    }else{

                        $emailErr = "Enter the correct pattern";
                    }
                }
                if(empty($_POST['mobile'])){

                    $phoneErr = "This field is empty";

                }else{
                    $patten= "/^\d{10}$/";

                    $check = preg_match_all($patten,$_POST['mobile']);

                    if($check){

                        $phone= $_POST['mobile'];

                    }else{

                        $phoneErr = "Enter the correct pattern";
                    }
                }

            }
        ?>
     <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                
                <form method ="post"  action="<?php echo $_SERVER["PHP_SELF"]; ?>">

                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                    <span class = "text-danger "> *<?php echo $nameErr; ?> </span>

                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter address">
                    <span class =text-danger> * <?php echo  $emailErr; ?> </span>
                </div>
                <div class="form-group">
                    <label for="">mobile</label>
                    <input type="text" name="mobile" id= "mobile" class="form-control" placeholder="Enter mobile number">
                    <span class = "text-danger"> * <?php echo $phoneErr ;?> </span>
                </div> <br>
                <input type="submit" name ="submit" class="btn btn-primary" value = "register">

                </form>
                <center>
                    <h2>Your input</h2>
                    <?php echo $name; ?>
                    <hr>
                    <?php  echo '<br>'?>
                    <?php echo $email; ?>
                    <hr>
                    <?php echo '<br>'?>
                    <?php echo $phone;?>
                    <hr>
                </center>
            </div>
        </div>
     </div> 

     
</body>
</html>