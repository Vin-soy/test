<!DOCTYPE html>
<html>
<head>
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #6CB4EE;
        }
        .form {
            position: relative;
            top: 70px;
            width: 80%;
            min-width: 600px; /* Adjust the value as needed */
            height: 70%;
            margin: 0 20px;
            background-color: #F0F8FF;
            padding: 20px;
            border-radius: 5px;
        }
        .form-control {
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #555;
        }
        .form-select{
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #555;
        }
        .btn-primary {
            border: 0;
            background-color: red;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-primary col-auto col-md-3.5 col-lg-3.5 min-vh-100">
                <div class="p-2">
                    <a class="mb-3 d-flex text-decoration-none align-item-center text-white">
                        <span class="fs-1 d-none d-sm-inline">School System</span>
                    </a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-window-maximize"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
                                </a>
                        </li> 
                        <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-home"></i><span class="fs-4 ms-3 d-none d-sm-inline">Home</span>
                                </a>
                        </li> 
                        <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-id-badge"></i><span class="fs-4 ms-3  d-none d-sm-inline">Tables</span>
                                </a>
                        </li> 
                    </ul>
                </div>
            </div>
            <div class="">
                <form class="row g-3" method="post" action="submit.php">
                    <div class="row g-3">
                        <div class="col-md-5">
                            <label  for="inputEmail4" class="form-label">Assessment Name:</label>
                            <input name="assess_name" class="form-control" id="assess_name">
                            <!-- <p style="color: red;">Please fill this form</p> -->
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" id="date">
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <label  for="subject_id" class="form-label">Subject ID</label>
                        <select name="subject_id" id="inputState" class="form-select">
                            <option>ENG101</option>
                            <option>MATH201</option>
                            <option>SCI301</option>
                            <option>HIS202</option>
                            <option>CS150</option>
                        </select> 
                    </div>
                    
                    <div class="col-md-3">
                        <label for="subject_id" class="form-label">Assessment Type</label>
                        <select name="assess_type" id="inputState" class="form-select">
                            <option>Test</option>
                            <option>quiz</option>
                            <option>exam</option>
                            <option>presentation</option>
                            <option>project</option>
                        </select> 
                    </div>

                    <div class="col-12">
                        <button  name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
           
        </div> 
    </div>
</body>
</html>
