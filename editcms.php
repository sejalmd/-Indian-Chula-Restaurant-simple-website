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
        <h3>Content Management System</h3>
    </div>
</div>
        <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Edit CMS</span>
  </div>
</nav>
<form action="" method="post">
    <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="form" id="cms_title" >
                        <label for="cms_title"  class="form-label">CMS Page Title</label>
                        <input type="text" class="form-control" id="cms_title" placeholder="">
                    
                    </div><br>
                    <div class="form" id="image_upload">
                    <label for="image"  class="form-label">Banner Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <input type="file" accept="image/*">
                    </div><br> 
                    <div class="form" id="cms_content" >
                    <label for="cms_content"  class="form-label">CMS Page Content</label>
                    <textarea rows="5" col="150" name="cms_content" ></textarea>
                  
                </div><br>
                    <div class="form" id="image_upload">
                    <label for="image"  class="form-label">CMS Paghe Icon</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <input type="file" accept="image/*">
                    </div><br> 
                    <div class="d-grid gap-2 d-md-block" style="text-align:center">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-primary" type="reset">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>