<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="row">
    <div class="col-md-4">
    </div>  
    <div class="col-md-4" style="align-text:center">
        <h3>Email Templet Management</h3>
    </div>
</div>
        <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Edit Email Template</span>
  </div>
</nav>
<form action="" method="post">
    <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
      <div class="row">
        <div class="col-md-12">
          <div class="form" id="email_title" >
            <label for="email_title"  class="form-label">Email Title</label>
            <input type="text" class="form-control" id="email_title" placeholder="Forgot Password">
                    
          </div><br>
          <div class="form" id="email_subject" >
            <label for="email_subject"  class="form-label">Address</label>
            <input type="text" class="form-control" id="email_subject" placeholder="Eatance Password Assistance">
                    
          </div><br>
          Email body
          <div class="d-grid gap-2 d-md-block" style="text-align:center">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-primary" type="reset">Back</button>
          </div>

        </div>
      </div>
    </div>
</form>