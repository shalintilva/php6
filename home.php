<?php
$con = mysqli_connect("localhost","root","","school");

?>

<html>

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>HOME Page</title>
    <style>
    body {
        background-image: url("https://www.teahub.io/photos/full/44-442353_plain-background-wallpapers-hd-free-hd-plain-blue.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    h2 {
        color: blue;
        background-color: white;
        border-radius: 20px;
        border-color: black;
    }

    h2:hover {
        background-color: transparent;
        color: black;
        cursor: pointer;
    }

    .container .table {
        border-radius: 20px;
    }

    .container .table a {
        border-radius: 20px;
        border-color: black;
    }

    .container .table{
        text-align: center;
    }

    .container .table td:hover {
        background-color: black;
        color: white;
    }

    .container .table th:hover {
        background-color: grey;
        color: blue;
    }

    .btn {
        border-radius: 20px;
        border-color: black;
    }

    .btn .btn-primary {
        text-align: center;
    }

    .btn:hover {
        color: black;
        background-color: yellow;
        border-color: red;
    }
    </style>

</head>

<body>

    <div class="container mt-5 mb-5 ">
        <div class="row text-center">
            <div class="col-lg-12 mb-5">
                <h2>--- Student DATA ---</h2>
            </div>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Roll_no</th>
                    <th scope="col">Enr_no</th>
                    <th scope="col">S_name</th>
                    <th scope="col">Std</th>
                    <th scope="col">Division</th>
                    <th scope="col">Hobbies</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $id = 0;
        $select = mysqli_query($con,"SELECT * FROM `student`");
        while($row = mysqli_fetch_array($select))
            {
                $id += 1;
        ?>
                <tr>
                    <th scope="row"><?php echo $id; ?></th>
                    <td><?php echo $row['roll_no']; ?></td>
                    <td><?php echo $row['enr_no']; ?></td>
                    <td><?php echo $row['s_name']; ?></td>
                    <td><?php echo $row['std']; ?></td>
                    <td><?php echo $row['division']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                        <a class="btn btn-info" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                    </td>
                </tr>
                <?php
            }   
        ?>
            </tbody>
        </table>
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