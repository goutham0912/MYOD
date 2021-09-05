<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="SignUpPage.css">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
        </head>
        <body>
           
            <div class="container">
                <div class="row">
                    <div class="col-md-15 offset=md-1">
                        <div class="row">
                            <div class="col-md-5 left_alignment">
                                <h2 style="font-family: 'Permanent Marker', cursive;">Fun Facts...</h2>
                                <h4 style="font-family: 'Shadows Into Light', cursive;">-THE FRENCH USED TO CALL THEIR DOUGHNUTS <b>"NUN'S FARTS."</b></h4>
                                <h4 style="font-family: 'Shadows Into Light', cursive;">-DOUGHNUTS WERE SERVED TO SOLDIERS DURING WWI.</h4>
                                <h4 style="font-family: 'Shadows Into Light', cursive;">-THEY WERE ONCE CALLED <b>"OLYKOEKS"</b>.</h4>

                            </div>
                            <div class="col-md-7">
                                <h1 style="font-family: 'McLaren', cursive";><b>Register Here...</b></h1>

                                <div>
                                    <form action="signup.php" method="post" name='myform'>
                                   
                                    <div  class="form-group"  >
                                        <input type="text" class="form-control" name="name" 
                                        placeholder="Name" required>
                                        
        
                                    </div>
                                    <div   class="form-group">
                                        <input type="text" class="form-control" name="username"
                                        placeholder="UserName"  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phonenumber"
                                        placeholder="Phone Number"  pattern="[1-9]{1}[0-9]{9}" required>
                                    </div>
                                    <div  class="form-group" >
                                        <input type="email" class="form-control" name="emailid"
                                        placeholder="Email" required>
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"
                                        placeholder="Password" minlength="5"  required>
                                    </div>
                                    <button type="submit" name='submit'  class="btn btn-info">Register</button> 
                                </form>
                                    
                                </div>
                                <div class="bottom-text">Already have an account? <a href="LoginPage1.php">Login</a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h5>Want to know more about us?<br>Feel free to explore...</h5>
                <button type="button" onclick="window.location.href='AboutUsPage.html'"  class="btn btn-primary">About Us</button>
                
            </div>

        </body>
    </head>
</html>