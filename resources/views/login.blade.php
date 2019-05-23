<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
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
    <!-- login body -->
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Librarian Login</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Student Login</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Login">Create New Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>