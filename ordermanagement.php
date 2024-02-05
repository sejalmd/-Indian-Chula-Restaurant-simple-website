<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h3>ORDER MANAGEMENT</h3>
    <div class="form">
        <div class="row">
            
            <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;padding:20px;" >
                <div class="row-2">
                    <label for="order_management">Restaurant</label><br>
                    <select id="order_management" class="form-control">
                        <option>PARRALAX REASTAURANT</option>
                        <option>VERRETO REASTAURAN</option>
                        <option>RS VANTEGE REASTAURANT</option>
                        <option>HOMEWOODIES REASTAURAN</option>
                        
                    </select>

                </div>
                <div class="row-2">
                    <label for="order_management">Order Type</label><br>
                    <select id="order_management" class="form-control">
                        <option>Cassoult</option>
                        <option>Almonds The Bread Scotland</option>
                        <option>Chicken Fritters</option>
                        <option>Creamy Chicken Masala</option>
                        <option>Cumin Spiced Chicken Crumbles</option>
                        <option>English Rhubarb Crumble</option>

                    </select>
                    
                </div>
                <div class="sm-2">
                    <label for="order_management">Form Date</label><br>
                    <input type="text" id="fromdate" placeholder="dd-mm-yyyy">
                    
                </div>
                <div class="sm-2">
                    <label for="order_management">To Date</label><br>
                    <input type="text" id="todate" placeholder="dd-mm-yyyy">
                    
                </div>
                <div class="d-grid gap-2 d-md-block" style="text-align:center">
                    <button class="btn btn-primary"  href="#" type="submit">Download</button>
                </div>

            </div>
            
        </div>
    </div>
</body>
