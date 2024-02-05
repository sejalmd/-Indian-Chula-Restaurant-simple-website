<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form">
    <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <div class="md=12">
                        <label for="users"  class="form-label">User</label><br>
                        <select id="text" id="addorder" class="form-control" >
                        
                            <option>Yadnesh</option>
                            <option>Atharva</option>
                            <option>Yash</option>
                            <option>Tushar</option>
                        </select>
                    
                    </div>
                </div><br>
                <div class="form" id="addorder" >
                
                    <label for="Restaurent"class="form-label">Restaurant</label><br>
                    <select id="restaurant_list" id="addorder" class="form-control">
                        <option>PARRALAX REASTAURANT</option>
                        <option>VERRETO REASTAURAN</option>
                        <option>RS VANTEGE REASTAURANT</option>
                        <option>HOMEWOODIES REASTAURAN</option>
                    </select>
                </div><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form" id="menu_item" >
                            <label for="menu_item"class="form-label">Menu Item</label><br>
                            <select id="menu_item" id="addorder" class="form-control">
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
                    </div>
                    <div class="col-md-1">
                        <div class="form" id="qtyno">
                            <input type="number" placeholder="Qty.No">
                        </div>
                    </div>&nbsp;
                    <div class="col-md-1">
                        <div class="form" id="base_price">
                            <input type="number" placeholder="Base Price">
                        </div>
                    </div>&nbsp;
                    <div class="col-md-1">
                        <div class="form" id="item_rate">
                            <input type="number" placeholder="Item Rate">
                        </div>
                    </div>&nbsp; 
                    <div class="col-md-1">
                        <div class="form" id="addorder" href="#">
                            <i class="fa-solid fa-plus"></i>  
                        </div>
                    </div>
                    
                </div> 
                <div class="form" id="addmenu1" >
                    <label for="Address"  class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="address">
                    
                </div><br>
                <div class="form" id="coupon" >
                    <label for="coupon"class="form-label">Coupon</label><br>
                    <select id="coupon" id="addorder" class="form-control">
                        <option>Coupon1</option>
                        <option>Coupon2</option>
                        <option>Coupon3</option>
                        <option>Coupon4</option>
                        <option>Coupon5</option>
                        <option>Coupon6</option>
                        <option>Coupon7</option>

                    </select>
                </div>
                <div class="form" id="coupon_discount" >
                    <label for="coupon_discount"  class="form-label">Coupon Discount</label>
                    <input type="number" class="form-control" id="coupon_discount" placeholder="_%">
                    
                </div><br>
                <div class="form" id="service_tax" >
                    <label for="service_tax"  class="form-label">Service Tax</label>
                    <input type="text" class="form-control" id="service_tax" >
                    
                </div><br>
                <div class="form" id="service_fee" >
                    <label for="service_fee"  class="form-label">Service Fee</label>
                    <input type="text" class="form-control" id="service_fee" >
                    
                </div><br>
                <div class="form" id="sub_total" >
                    <label for="sub_total"  class="form-label">Sub Total($)</label>
                    <input type="text" class="form-control" id="sub_total" >
                    
                </div><br>
                <div class="form" id="total_rate" >
                    <label for="total_rate"  class="form-label">Total Rate</label>
                    <input type="text" class="form-control" id="total_rate" >
                    
                </div><br>
                <div class="form" id="status" >
                    <label for="order_status"class="form-label">Order Status</label><br>
                    <select id="orderstatus" id="orderstatus" class="form-control">
                        <option>Present</option>
                        <option>Absent</option>

                    </select>
                </div>
                <div class="form" id="datoforder" >
                    <label for="dateoforder"  class="form-label">Date Of Order</label>
                    <input type="number" class="form-control" id="dateoforder" placeholder="dd/mm/yyyy">
                    
                </div><br>
                <div class="d-grid gap-2 d-md-block" style="text-align:center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-primary" type="reset">Back</button>
                </div>
                

            </div>
    </div>
</div>