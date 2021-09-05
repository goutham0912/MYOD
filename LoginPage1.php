<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="LoginPage.css">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        </head>
        <body>
             <form action="login.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-15" style="padding-right: 200px;">
                        <div class="row">
                            <div class="col-md-5 left_alignment" >
                                <h2 style="font-family: 'Permanent Marker', cursive;">Welcome Back...</h2>
                                <h4 style="font-family: 'Shadows Into Light', cursive;">-Did you miss our donuts?</h4>
                                <h4 style="font-family: 'Shadows Into Light', cursive;">-Don't worry, we have new designs just for you.</h4>
                                <h4 style="font-family: 'Shadows Into Light', cursive;">-Have fun.</h4>

                            </div>
                            <div class="col-md-7" style="padding-left:100px;">
                                <h1 style="font-family: 'McLaren', cursive";><b>Login...</b></h1>
                                <div>
                                   
                                    <form action="login.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" 
                                        placeholder="UserName" required>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="passwor" 
                                        placeholder="Password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-info">LOGIN</button>
                                </form>
                                    
                                </div>
                                <div class="bottom-text">Don't have an account? <a href="SignUpPage1.php">Sign Up</a>
                                </div>
                          
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                
            </div>
              </form>
            
        </body>
    </head>
</html>