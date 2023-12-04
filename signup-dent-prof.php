<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Sign Up Dentist</title>
    <style>
        body {
                font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        header {
            font-weight: 500;
    font-size: 2em;
    text-align: center;
    padding-top: 0.6em;
        }
        hr{
  opacity: 0.5;
    width: 100%; 
    background-color: grey;
    border-top: solid auto;
    text-align: center;
    margin-bottom: 20px;
}

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            height: 100vh;
        }

        .column {
            flex: 1;
            min-width: 300px;
            margin: 5px;
        }
        .left-columns, .right-columns {
            flex: 1;
            min-width: 300px;
            margin: 0;
            background: #f0f1f2;
        }

        .logo{
            padding-top: 30px;
    padding-left: 20px;
    display: flex;
    width: 35%;
        }
        .center{
    display: block;
    width: 20%;
    margin-top: 30%;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    box-shadow: 2px 2px 7px 5px #4d8eff;
}
.main{
    height: 100%;
    background-color: #5F9AFF;
    background-image: url('images/top-bg.png'), url('images/bottom-bg.png');
    background-repeat: no-repeat;
    background-position: top, bottom;
    background-size: 100%;}

        form {
            padding: 45px;
            margin: 0 30px;
            background-color: transparent;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 500;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            font-family: 'Raleway', sans-serif; 
            box-sizing: border-box;
            background: transparent;
            border-radius: 5px;
            border: 1px solid rgba(30, 30, 30, 0.80);
        }
        /* Add styling for the select element */
select {
    font-family: 'Raleway', sans-serif;
    width: calc(100% - 16px);
    padding: 8px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid rgba(30, 30, 30, 0.80);
    background: transparent;
}

/* Other styles remain unchanged */

        .container p{
    text-align: center;
    font-size: 0.95em;
    color: grey;
}
        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .row .column {
            flex: 1;
            min-width: calc(33.33% - 10px);
        }
        a{
    color: grey;
}

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Add transition effect */
        }

        button:hover {
            background-color: #386d9c; /* Change background color on hover */
        }
        /* Add a class to the form container for styling */
.form-container {
    overflow-y: auto;
}
.pt-signup{
    display: block;
    width: 50%;
    margin: 1em auto;
    height: 2.2em;
    font-family: 'Raleway';
    font-size: 1rem;
    font-weight: 600;
    color: #ffffff;
    border: 2px solid;
    border-radius: 0.3em;
    border-color: #539DBF;
    box-shadow: 4px 4px 5px lightgrey;
    background-color: #1D92C7;
}
.have-account{
    font-size: small;
    font-weight: 700;
}
.login-link{
    font-size: small;
    color: black;
    text-decoration: none;
}
.login-link:hover{
    text-decoration: underline;
    color: grey;
}
@media (max-width: 992px) {
            .row .column {
                flex: 1 0 100%;
                min-width: 100%;
                margin-bottom: 10px;
            }
            .col-md-4 {
        flex: 0 0 calc(100% - 20px);
        max-width: calc(100% - 20px);
    }
    .left-columns{
        display: none;
    }
}

@media (max-width: 768px) {
    .col-md-4 {
        flex: 0 0 calc(100% - 20px);
        max-width: calc(100% - 20px);
    }
}

@media (max-width: 768px) {
            .row .column {
                flex: 1 0 100%;
                min-width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="left-columns">
            <div = class="main">
            <img alt="logo" class="logo" src="images/logo-dental 2.png">
            
        <img src="images/dentist-logo.png" alt="patient" class="center">
        </div>
        </div>

        <div class="right-columns">
            <form action="#" method="post" class="form-container">
                            <header>Create an Account</header>
            <hr>
                <div class="row">
                    <div class="column">
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" placeholder="First name" required>
                    </div>
                    <div class="column">
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Full Address"required>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="contact">Contact Number:</label>
                        <input onkeypress="return isNumber(event)" value="" type="text" minlength="11" maxlength="11" required name="contact_num" class="form-control" placeholder="09XXXXXXXXX">
                    </div>
                    <div class="column">
                        <label class="label">Gender</label>
                                    <select required="" class="form-control" name="gender">
                                      <option value="" selected="" disabled="">-Gender-</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="others">Prefer not to say</option>
                                    </select>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required>
                    </div>
                    <div class="column">
                        <label class="label">Status</label>
                                    <select required="" class="form-control" name="marital_status">
                                      <option value="" selected="" disabled="">-Status-</option>
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Widowed">Widowed</option>
                                      <option value="Seperated">Seperated </option>
                                    </select>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="occupation">Dental Clinic:</label>
                        <input type="text" id="dent-clinic" name="dent-clinic" placeholder="Name of Dental Clinic:" required>
                    </div>
                    <div class="column">
                        <label for="occupation">Occupation:</label>
                        <input type="text" id="occupation" name="occupation" placeholder="Occupation" required>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="column">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="*******"required>
                    </div>
                    <div class="column">
                        <label for="password">Confirm Password:</label>
                        <input type="password" id="password" name="password" placeholder="********" required>
                    </div>
                </div>

                <p>Signing up for Dent-Click account means you agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of 
                Service.</a></p>

                <button class="pt-signup" type="submit" name="submit">Sign Up</button>
                <center>
                                  <span class="have-account">Already have account ?</span>
                                  <a href="login.php" class="login-link">Login</a>
                                </center>
            </form>
        </div>
    </div>

    <script>
        function isNumber(event) {
            var charCode = event.which ? event.which : event.keyCode;
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }
    </script>

</body>
</html>
