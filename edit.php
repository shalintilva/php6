<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="edit.css">


    <title>Edit DATA</title>
    <style>
        body{
    /* background-color: #EDC7B7; */
    background-image: url("https://wallpapercave.com/uwp/uwp1292704.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
h2{
    color: blueviolet;
    background-color: white;
    border-radius: 20px;
    border-color: black;
}
h2:hover{
    background-color: transparent;
    color: black;
    cursor: pointer;
}
.btn{
    border-radius: 20px;
    border-color: black;
}
.btn .btn-primary{
    text-align: center;
}
.btn:hover{
    color: black;
    background-color: yellow;
    border-color: red;
}
label{
    font-size: 20px;
    color: blueviolet;
}
    </style>
</head>

<body>
    <?php $con = mysqli_connect("localhost","root","","school"); 

      $id = $_GET['id'];

      $select=mysqli_query($con,"SELECT * FROM `student` WHERE id='$id'");
      $row=mysqli_fetch_array($select);

    ?>
    <?php 

        if(isset($_POST['submit'])){
            $roll_no = $_POST['roll_no'];
            $enr_no = $_POST['enr_no'];
            $s_name = $_POST['s_name'];
            $std = $_POST['std'];
            $division = $_POST['division'];
            $hobbies = implode(",",$_POST['hobbies']);
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $update = mysqli_query($con,"UPDATE `student` SET `roll_no`='$roll_no', `enr_no`='$enr_no', 
            `s_name`='$s_name', `std`='$std', `division`='$division', `hobbies`='$hobbies', 
            `email`='$email', `password`='$password'  WHERE id = $id ");
        
            if($update){
                header("location:home.php"); 
            }else{
            echo "Fail ";
            }
        }
    ?>



    <form method="POST">
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>--- Edit DATA ---</h2>
                </div>
            </div>

            <div class="form-group mt-5">
                <label for="number">Roll No : </label><br>
                <input type="number" id="number" name="roll_no" value="<?php echo $row['roll_no'];?>"
                    placeholder="Enter Roll No" Required>
            </div>
            <div class="form-group mt-3">
                <label for="enr_no">Enrollment No : </label><br>
                <input type="text" id="enr_no" name="enr_no" value="<?php echo $row['enr_no'];?>"
                    placeholder="Enter Enrollment No" Required>
            </div>
            <div class="form-group mt-3">
                <label for="usr">Student Name : </label>
                <input type="text" class="form-control" id="usr" name="s_name" value="<?php echo $row['s_name'];?>"
                    placeholder="Enter Student Name" Required>
            </div>

            <div class="form-group mt-3">
                <label for="std">Standard : </label>
                <select class="form-control" name="std" Required>
                    <option value="1" <?php if($row['std'] == "1") echo "selected='selected'"; ?>>1</option>
                    <option value="1" <?php if($row['std'] == "2") echo "selected='selected'"; ?>>2</option>
                    <option value="1" <?php if($row['std'] == "3") echo "selected='selected'"; ?>>3</option>
                    <option value="1" <?php if($row['std'] == "4") echo "selected='selected'"; ?>>4</option>
                    <option value="1" <?php if($row['std'] == "5") echo "selected='selected'"; ?>>5</option>
                    <option value="1" <?php if($row['std'] == "6") echo "selected='selected'"; ?>>6</option>
                    <option value="1" <?php if($row['std'] == "7") echo "selected='selected'"; ?>>7</option>
                    <option value="1" <?php if($row['std'] == "8") echo "selected='selected'"; ?>>8</option>
                    <option value="1" <?php if($row['std'] == "9") echo "selected='selected'"; ?>>9</option>
                    <option value="1" <?php if($row['std'] == "10") echo "selected='selected'"; ?>>10</option>
                    <option value="1" <?php if($row['std'] == "11") echo "selected='selected'"; ?>>11</option>
                    <option value="1" <?php if($row['std'] == "12") echo "selected='selected'"; ?>>12</option>
                    <option value="1" <?php if($row['std'] == "College") echo "selected='selected'"; ?>>College</option>
                </select>
            </div>


            <label class="form-check-label mt-3"> Division : <br>
                <input type="radio" name="division" value="A"
                    <?php if($row['division'] == "A") echo "checked='checked'";?>>A<br>
                <input type="radio" name="division" value="B"
                    <?php if($row['division'] == "B") echo "checked='checked'";?>>B<br>
                <input type="radio" name="division" value="C"
                    <?php if($row['division'] == "C") echo "checked='checked'";?>>C<br>
                <input type="radio" name="division" value="D"
                    <?php if($row['division'] == "D") echo "checked='checked'";?>>D<br></lable>
                <br>

                <?php
                    $mark = explode(",",$row['hobbies']);
                ?>
                <label class="form-check-label"> Hobbies : <br>
                    <input type="checkbox" name="hobbies[]" value="Cricket"
                        <?php if(in_array("Cricket",$mark))  echo "checked='checked'"; ?>>Cricket<br>
                    <input type="checkbox" name="hobbies[]" value="Hockey"
                        <?php if(in_array("Hockey",$mark))  echo "checked='checked'"; ?>>Hockey<br>
                    <input type="checkbox" name="hobbies[]" value="Carrom"
                        <?php if(in_array("Carrom",$mark))  echo "checked='checked'"; ?>>Carrom<br>
                    <input type="checkbox" name="hobbies[]" value="Chess"
                        <?php if(in_array("Chess",$mark))  echo "checked='checked'"; ?>>Chess<br>
                    <input type="checkbox" name="hobbies[]" value="Other"
                        <?php if(in_array("Other",$mark))  echo "checked='checked'"; ?>>Other<br>
                    </lable>
                    <br>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address : </label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" Required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleInputPassword1">Password : </label>
                        <input type="password" class="form-control" name="password"
                            value="<?php echo $row['password'];?>" id="exampleInputPassword1"
                            placeholder="Enter Password" Required>
                    </div>

                    <button type="submit" value="submit" name="submit"
                        class="btn btn-primary mb-3 mt-3">Submit</button><br>

                    <a type="submit" href="home.php" class="btn btn-success btn-lg mb-5" name="submit">Back</a>
        </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


</body>

</html>