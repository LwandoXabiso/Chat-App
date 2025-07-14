<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat Application</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="name">First Name</label>
                        <input type="text" name ="fname" placeholder="First Name"  required>
                    </div>
                    <div class="field input">
                        <label for="name">Last Name</label>
                        <input type="text" name ="lname" placeholder="Last Name"  required>
                    </div>
                </div>
                <div class="field input">
                        <label for="name">Email Address</label>
                        <input type="text" name = "email" placeholder="Email Address"  required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="field input">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Enter new Password"  required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="name">Select Image</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">Already signed up? <a href="login.html">Login now</a></div>
            </form>
            
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>