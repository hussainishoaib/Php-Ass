<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="form123.css">
    <title>Registrartion Form</title>
</head>
<body>
  <form action="Form Ass(Post).php" method = "post">
  <div class="container">
    <div class="justify-content-center">
        <div class="card">
          <div class="row g-0">
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name = "Fname" class="form-control form-control-lg" />
                      <label class="form-label">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name = "Lname" class="form-control form-control-lg" />
                      <label class="form-label" >Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name = "Mname" class="form-control form-control-lg" />
                      <label class="form-label">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name = "FAname" class="form-control form-control-lg" />
                      <label class="form-label" >Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name = "Address" class="form-control form-control-lg" />
                  <label class="form-label">Address</label>
                </div>

                <div class="d-md- mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <input type="radio" name="gender" value="female">Female
                  <input type="radio" name="gender" value="male">Male

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option>Country</option>
                      <option value="UK" name = "country">UK</option>
                      <option value="USA" name = "country">USA</option>
                      <option value="Australia" name = "country">Australia</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option>City</option>
                      <option  value = "city" >New York</option>
                      <option  value = "city" >London</option>
                      <option  vakue = "city" >Sydney</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text"  name = "DateOfBirth" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name = "Pincode" id="form3Example90" class="form-control form-control-lg" />
                  <label class="form-label">Pincode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text"  name = "Course" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label">Course</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name = "Email" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label">Email ID</label>
                </div>

                <div class="d-flex justify-content-center pt-3">
                  <button type="button" class="btn btn-danger btn-lg">Reset All</button>
                  <button type="submit" class="btn btn-warning" name ="btn">Submit</button>
                </div>

              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</form>

<?php
    if(isset($_POST["btn"])){
        $FName = $_POST["Fname"];
        $LName = $_POST["Lname"];
        $FAname = $_POST["FAname"];
        $MName = $_POST["Mname"];
        $Address = $_POST["Address"];
        $Gender = $_POST["gender"];
        // $Country = $_POST["country"];
        // $City = $_POST["city"];
        $DOB = $_POST["DateOfBirth"];
        $Pincode = $_POST["Pincode"];
        $Course = $_POST["Course"];
        $EmailID = $_POST["Email"];

    }
    
?>
<br>
<table border = 2>
    <tr>
        <th>First Name: </th>
        <td><?= @$FName ?></td>
    </tr>

    <tr>
        <th>Last Name: </th>
        <td><?= @$LName ?></td>
    </tr>

    <tr>
        <th>Father Name: </th>
        <td><?= @$FAname ?></td>
    </tr>

    <tr>
        <th>Mother Name: </th>
        <td><?= @$MName ?></td>
    </tr>

    <tr>
        <th>Address: </th>
        <td><?= @$Address ?></td>
    </tr>

    <tr>
        <th>Gender: </th>
        <td><?= @$Gender ?></td>
    </tr>

    <tr>
        <th>Country: </th>
        <td><?= @$Country ?></td>
    </tr>

    <tr>
        <th>City: </th>
        <td><?= @$City ?></td>
    </tr>

    <tr>
        <th>Date Of Birth: </th>
        <td><?= @$DOB ?></td>
    </tr>

    <tr>
        <th>Pincode: </th>
        <td><?= @$Pincode ?></td>
    </tr>

    <tr>
        <th>Email ID: </th>
        <td><?= @$EmailID ?></td>
    </tr>
</table>
</body>
</html>