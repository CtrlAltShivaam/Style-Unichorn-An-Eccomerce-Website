<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <div class="form">
        <h1 class="text-center">Registration</h1>
        <form>
            <div class="name">
                <div class="form-group was-validated">
                    <label class="form-lebel" for="name">First Name</label>
                    <input class="form-control" type="text" id="name" placeholder="First Name" required>
                    <div class="invalid-feedback">
                        Enter First name...              
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label class="form-lebel" for="name">Last Name</label>
                    <input class="form-control" type="text" id="name" placeholder="Last Name" required>
                    <div class="invalid-feedback">
                        Enter Last name...              
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="form-group was-validated">
                    <label class="form-lebel" for="email">Email Address</label>
                    <input class="form-control" type="email" id="email" placeholder="abc@email.com" required>
                    <div class="invalid-feedback">
                        Enter your email address...              
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label class="form-lebel" for="phone">Phone No.</label>
                    <input class="form-control" type="tel" id="phone" placeholder="Phone" required>
                    <div class="invalid-feedback">
                        Enter your phone number...              
                    </div>
                </div>
            </div>
            <div class="password">
                <div class="form-group was-validated">
                    <label class="form-lebel" for="password">Password</label>
                    <input class="form-control" type="password" id="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                        Enter a password...              
                    </div>
                </div>
                <div class="form-group was-validated">
                    <label class="form-lebel" for="password">Confirm Password</label>
                    <input class="form-control" type="password" id="password" placeholder="Confirm Password" required>
                    <div class="invalid-feedback">
                        Confirm your password...              
                    </div>
                </div>
            </div>
            <div class="user-type">
                <div class="form-group was-validated">
                    <label for="user-type">User Type</label>
                    <select id="user-type">
                        <option value="user-type">User Type</option>
                        <option value="Customer">Customer</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Sign Up">
        </form>
       <h4 class="text-center">Or Sign Up with</h4> 
        <div class="icon">
            <button><i class="bi bi-google"></i></button>
            <button><i class="bi bi-facebook"></i></button>
            <button><i class="bi bi-telephone"></i></button>
        </div>
        <h4 class="text-center">Already have an account?</h4>
        <a href=""><input class="btn btn-success w-100" type="submit" value="Login"></a>
    </div>
</body>
</html>