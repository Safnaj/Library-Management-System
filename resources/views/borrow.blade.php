<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <!--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    -->
</head>
<body>
    <h2>Library Management System</h2>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Book</h3>
                <div aleign="center">
                <form class="form-inline my-2 my-lg-0">
                    <label for="search" >Search</label>  
                    <input class="form-control mr-sm-2" id="search" type="text" placeholder="Search">
                </form>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Student</h3>
               
            </div>
        </div>
    </div>
</body>
</html>