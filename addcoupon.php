<?php 
echo '<prev>';
var_dump($_POST);
echo '</prev>';
?>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Add COUPON</span>
  </div>
</nav>
<form action="" method="post">
    <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <div class="md=12">
                        <label for="coupontype"  class="form-label">Coupon Type</label><br>
                        <select id="text" id="coupontype" class="form-control" >
                        
                            <option>Free Coupon</option>
                            <option>Discount on Items</option>
                            <option>Discount on Items</option>
                            <option>Discount on combo deal</option>
                            <option>User Registration</option>
                        </select>

                    </div>
                </div><br>
                <div class="form" id="coupon" >
                    <label for="Coupon"  class="form-label">Coupon</label>
                    <select id="text" id="coupon" class="form-control" >
                    
                        <option>Beverly Hills</option>
                        <option>Manage</option>
                        
                    </select>

                </div><br>
                <div class="md=12">
                    <label for="restaurant"  class="form-label">Restaurant</label><br>
                    <select id="text" id="restaurant" class="form-control" >
                    
                        <option>PARRALAX REASTAURANT</option>
                        <option>VERRETO REASTAURAN</option>
                        <option>RS VANTEGE REASTAURANT</option>
                        <option>HOMEWOODIES REASTAURAN</option>
                    </select>
                
                </div><br>
                <div class="form" id="menuitems" >
                    
                    <label for="menuitems"class="form-label">Menu Items</label><br>
                    <select id="menuitems" id="menuitems" class="form-control">
                        <option>Aysa Abla Houston's da</option>
                        <option>Ballroom Restaurant</optiopn>
                        <option>Barbaque Unlimited</option>
                        <option>Bob's Breakfast</option>
                        <option>Bob's Cafe Shop</option>
                        <option>Bob's Place-Dinner</option>
                        
                    </select>
                </div><br>
                <div class="form" id="description" >
                    <label for="description"  class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="">
                
                </div><br>
                <div class="form" id="image_upload">
                <label for="image"  class="form-label">Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <input type="file" accept="image/*">
                </div><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Percentage" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Percentage
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Amount" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Amount
                    </label>
                </div><br>
                <div class="form" id="amount" >
                    <label for="amount"  class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" placeholder="">
                
                </div><br>
                <div class="form" id="min_amount" >
                    <label for="min_amount"  class="form-label">Min Order Amount</label>
                    <input type="text" class="form-control" id="min_amount" placeholder="">
                
                </div><br>
                <div class="form" id="start_date" >
                    <label for="start_date"  class="form-label">Start Date&Time</label>
                    <input type="number" class="form-control" id="dateoforder" placeholder="dd/mm/yyyy">
                    
                </div><br>
                <div class="form" id="end_date" >
                    <label for="end_date"  class="form-label">End Date&Time</label>
                    <input type="number" class="form-control" id="dateoforder" placeholder="dd/mm/yyyy">
                    
                </div><br><br>
                <div class="d-grid gap-2 d-md-block" style="text-align:center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-primary" type="reset">Back</button>
                </div>



                


            </div>
        </div>
    </div>
</form>
</body>