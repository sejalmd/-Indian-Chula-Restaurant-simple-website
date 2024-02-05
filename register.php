<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<style>
    .bigimage1{
    width: 1600px;
    height: 750px;
    position: relative;
    background-image: url('../images/OIP.jpg');
    background-size: cover;
    }
    .login_box{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height:600px;
        padding:80px 40px;
        box-sizing:border-box;
        background:(0, 0, 0, .5);
        border-radius: 8px;
        background-color: white;
        box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
  
  
 
    }


    
</style>
</head>
<body>
    <div class="overlay">
        <div class="bigimage1">
            <div class="login_box ">
                <div class="col-md-5">
                    <h2>Register</h2>
                </div>
                <div class="col-md-12" >
                    <div class="mb-6">
                        <label for="exampleInputEmail1" class="form-label">USER NAME</label>
                        <input type="email" class="form-control" id="exampleInputusername" aria-describedby="username">
                        
                    </div>
                    <div class="mb-6">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-4">
                        <label for="exampleConformPassword1" class="form-label">Conform Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <div class="col-md-2">
                                <a href="welcome.php" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>