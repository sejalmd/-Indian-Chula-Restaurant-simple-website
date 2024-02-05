<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Recipe Management</span>
  </div>
</nav>
<div class="form">
    <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <div class="md=12">
                        <label for="edit_recipe"  class="form-label">Edit Recipe</label><br>
                        <select id="text" id="edit_recipe" class="form-control" >
                        
                            <option>All Veg Triple Deckar Grilled Sandwhich</option>
                            <option>Almonds The Bread Scotland</optiopn>
                            <option>Cassoult</option>
                            <option>Almonds The Bread Scotland</option>
                            <option>Chicken Fritters</option>
                            <option>Creamy Chicken Masala</option>
                            <option>Cumin Spiced Chicken Crumbles</option>
                            <option>English Rhubarb Crumble</option>
                        </select>

                    </div>
                </div><br>
                <div class="form" id="details" >
                    <label for="details"  class="form-label">Details</label>
                    <input type="text" class="form-control" id="details">
                    
                </div><br>
                <div class="form" id="editrecipe" >
                  <label for="bannerimage"  class="form-label">Banner Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
                  <i class="fa-solid fa-cloud-arrow-up"></i>
                  <input type="file" accept="image/*">
                  
                </div><br><br>
                <div class="d-grid gap-2 d-md-block" style="text-align:center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-primary" type="reset">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>