<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">  
</head>

<body>
    
    <div class="reg-container">
        <div class="reg-wrapper">
            <div class="form-container">

                <form action="jsregister.php" method="POST">
                    <h1>Registration Form</h1>

                    <div class="input-wrapper">
                        <span class="label"> Firstname </span>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>

                    <div class="input-wrapper">
                        <span class="label"> Lastname </span>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>

                    <div class="input-wrapper">
                        <span class="label"> E-mail </span>
                        <input type="text" id="email" name="email" required>
                    </div>

                    <div class="input-wrapper">
                        <span class="label"> Phone Number </span>
                        <input type="text" id="phonenumber" name="phonenumber" required>
                    </div>

                    <div class="input-wrapper">
                        <span class="label"> Password </span>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="input-wrapper">
                        <button id="register" name="create"> Create </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    

    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/boostrap.min.js"></script> -->
    
    <script>
            $(function(){
                $("#register").click(function(e){

                    var valid = this.form.checkValidity();

                    

                    if(valid) {

                        var firstname   = $('#firstname').val();
                        var lastname    = $('#lastname').val();
                        var email       = $('#email').val();
                        var phonenumber = $('#phonenumber').val();
                        var password    = $('#password').val();


                        e.preventDefault();

                        $.ajax({
                            type: 'POST',
                            url: 'jsregister.php',
                            data: {firstname: firstname, lastname: lastname, email: email, phonenumber: phonenumber, password: password},
                            success: function(data) {
                               var swalFireWork = Swal.fire(
                                    'Congratulations!',
                                    data,
                                    'success'
                                );
                            },
                            error: function(data) {
                                Swal.fire(
                                    'Oops!',
                                    'There was a problem while processing your form please try again.',
                                    'error'
                                )
                            }
                        });
                    } else {
                    
                    };                   
                });
            });

    </script>
</body>
</html>
