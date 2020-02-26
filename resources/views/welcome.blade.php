<!doctype>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Project</title>

        <link href="css/filepond-plugin-image-preview.css" rel="stylesheet">
        <link href="css/filepond-plugin-image-edit.css" rel="stylesheet">
        <link href="css/filepond.css" rel="stylesheet">
        <link href="css/logreg.css" rel="stylesheet">
    </head>
    <body class='logRegBody'>
        <div class='mainDiv'>
            <div class='subDiv'>
                <div class='regDiv'>
                    <div class='regSubDiv'>
                        <div class="regTitleDiv">
                            <p class='regTitle'>Registeration</p>
                        </div>
                        <div class='profileDiv'>
                            <div class='profileSubDiv'>
                                <input type="file" class="filepond" name="filepond" id='profileImg' accept="image/png, image/jpeg, image/jpg"/>
                            </div>
                        </div>
                        <div class='fnameDiv'>
                            <input type="text" class='fname' name="firstname" id="firstname" placeholder="Enter Your First name...">
                        </div>
                        <div class='lnameDiv'>
                            <input type="text" class='lname' name="lastname" id="lastname" placeholder="Enter Your last name...">
                        </div>
                        <div class='emailDiv'>
                            <input type="email" class='emailCls' name="emailaddress" id="emailaddress" placeholder="Enter Your email here...">
                        </div>
                        <div class='phNumDiv'>
                            <input type="number" class='phNum' name="phonenumber" id="phnum" placeholder="Enter Your phone number here...">
                        </div>
                        <div class='passDiv'>
                            <input type="password" class='passCls' name="password" id="password" placeholder="Enter Your password here...">
                        </div>
                        <div class='confpassDiv'>
                            <input type="password" class='confpass' name="confpassword" id="confpassword" placeholder="Enter Your repeat password here...">
                        </div>
                        <div class='regbtnDiv'>
                            <button type="button" class='regbtn' id='regbtn'>Sign Up</button>
                        </div>
                    </div>
                </div>
                <div class='loginDiv'>
                    <div class='loginSubDiv'>
                        <div class='loginHeadDiv'>
                            <p class='loginTitle'>Login</p>
                        </div>
                        <div class='logemailDiv'>
                            <input type="text" class='logemail' name="email" id="loginemail" placeholder="Enter Your Email here...">
                        </div>
                        <div class='logpassDiv'>
                            <input type="password" class='logpass' name="loginpassword" id="loginpassword" placeholder="Enter Your password here...">
                        </div>
                        <div class='loginbtnDiv'>
                            <button type="button" class='loginbtn' id='loginbtn'>SignIn</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/filepond-plugin-image-crop.js"></script>
        <script src="js/filepond-plugin-image-edit.js"></script>
        <script src="js/filepond-plugin-image-preview.js"></script>
        <script src="js/filepond-plugin-image-resize.js"></script>
        <script src="js/filepond-plugin-image-transform.js"></script>
        <script src="js/filepond.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
