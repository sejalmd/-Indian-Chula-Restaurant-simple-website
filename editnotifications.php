<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<style>
    .bigimage1{
    width: 1600px;
    height: 780px;
    position: relative;
    background-image: url('../images/OIP.jpg');
    background-size: cover;
    }
    .login_box{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height:770px;
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
    
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Notification Management</span>
  </div>
</nav>
        <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Edit Notification</span>
  </div>
</nav>
<div class="form">
<div class="overlay">
        <div class="bigimage1">
            <div class="login_box ">
                <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <div class="md=12">
                        <label for="users"  class="form-label">Users</label><br>
                        <select id="text" id="users" class="form-control" >
                        
                            <option>All Customers</option>
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                        </select>

                    </div>
                </div><br>
                <div class="form" id="feedback" >
                    <label for="notification_title"  class="form-label">Notification Title</label>
                    <input type="text" class="form-control" id="notification_title">
                  
                </div><br>
                <div class="form" id="notification_message" >
                    <label for="notification_message"  class="form-label">Notification Message</label>
                    <textarea rows="5" col="200" name="notification_message" ></textarea>
                  
                </div><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="save_notification" id="save_notification" >
                    <label class="form-check-label" href="#" for="flexCheckDisabled"flexCheckCheckCheckDisabled>
                        Save Notification(Only for Customers)
                    </label>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
</div>