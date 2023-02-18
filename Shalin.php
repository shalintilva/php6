<?php
$con = mysqli_connect("localhost","root","","school");

if(isset($_POST['submit'])){
  $roll_no = $_POST['roll_no'];
  $enr_no = $_POST['enr_no'];
  $s_name = $_POST['s_name'];
  $std = $_POST['std'];
  $division = $_POST['division'];
  $hobbies = implode(",",$_POST['hobbies']);
  $email = $_POST['email'];
  $password = $_POST['password'];

  $insert = mysqli_query($con,"INSERT INTO `student`(`roll_no`, `enr_no`, `s_name`, `std`, `division`, `hobbies`, `email`, `password`) 
  VALUES ('$roll_no','$enr_no','$s_name','$std','$division','$hobbies','$email','$password')");

  if($insert){
    echo "Success";
  }else{
    echo "Fail ";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Regestration</title>
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
    <div class="container mt-5 ">
        <form method="POST">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>--- Insert Information ---</h2>
                </div>
            </div>

            <div class="form-group mt-5">
                <label for="number">Roll No : </label><br>
                <input type="number" id="number" name="roll_no" placeholder="Enter Roll No" Required>
            </div>
            <div class="form-group">
                <label for="enr_no">Enrollment No : </label><br>
                <input type="text" id="enr_no" name="enr_no" placeholder="Enter Enrollment No" Required>
            </div>
            <div class="form-group">
                <label for="usr">Student Name : </label>
                <input type="text" class="form-control" id="usr" name="s_name" placeholder="Enter Student Name"
                    Required>
            </div>

            <div class="form-group">
                <label for="std">Standard : </label>
                <select class="form-control" name="std" Required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>College</option>
                </select>
            </div>


            <label class="form-check-label"> Division : <br>
                <input type="radio" name="division" value="A">A<br>
                <input type="radio" name="division" value="B">B<br>
                <input type="radio" name="division" value="C">C<br>
                <input type="radio" name="division" value="D">D<br></lable>
                <br>

                <label class="form-check-label"> Hobbies : <br>
                    <input type="checkbox" name="hobbies[]" value="Cricket">Cricket<br>
                    <input type="checkbox" name="hobbies[]" value="Hockey">Hockey<br>
                    <input type="checkbox" name="hobbies[]" value="Carrom">Carrom<br>
                    <input type="checkbox" name="hobbies[]" value="Chess">Chess<br>
                    <input type="checkbox" name="hobbies[]" value="Other">Other<br>
                    </lable>
                    <br>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address : </label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Email" Required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password : </label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                            placeholder="Enter Password" Required>
                    </div>

                    <button type="submit" value="submit" name="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>