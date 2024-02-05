
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<script>
$(document).ready( function () {
    $('#eventlist').DataTable();
} );
</script>  




</head>
<body>
    <div class="form" id ="menu(multipleitems)"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">    
            <div class="md=4">
                <label for="restaurantname"  class="form-label">Restaurant Name</label><br>
                <select id="text" id="addmenu1" class="form-control" >
                
                    <option>PARRALAX REASTAURANT</option>
                    <option>VERRETO REASTAURAN</option>
                    <option>RS VANTEGE REASTAURANT</option>
                    <option>HOMEWOODIES REASTAURAN</option>
                </select>
                
            </div>
            <div class="md=4">
                <div class="form" id="bookingdate" >
                    <label for="bookingdate"  class="form-label">Booking Date</label>
                    <input type="number" class="form-control" id="bookingdate" placeholder="dd/mm/yyyy">
                    
                </div><br>
                <div class="d-grid gap-2 d-md-block" style="text-align:center">
                    <button class="btn btn-primary" type="submit">Import Menu</button>
                </div>
            </div>

        </div>
    
    </div>
    
 

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Event List</span>
  </div>
</nav>
<table id="eventlist" class="display">
    <thead>
        <tr>
            <th>SrNo</th>
            <th>Customer</th>
            <th>Restaurant</th>
            <th>Number of People</th>
            <th>Event Date</th>
            <th>Package</th>
            <th>Amount</th>
            <th>Payment Statement</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Ranjita Sahani</td>
            <td>Ballroom Restaurant</td>
            <td>2</td>
            <td>08/9/2022</td>
            <td>Dinner</td>
            <td>$400.50</td>
            <td>paid</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;<i class="fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;<i class="fa-solid fa-memo-pad"></i></td>
        </tr>
        <tr> 
        <tr>
            <td>1</td>
            <td>Viki VK</td>
            <td>RS Vintage Restaurant</td>
            <td>2</td>
            <td>06/9/2022</td>
            <td>Breakfast</td>
            <td>$4200.50</td>
            <td>paid</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;<i class="fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;<i class="fa-solid fa-memo-pad"></i></td>
        </tr>
        </tr>
        <tr> 
        <tr>
            <td>1</td>
            <td>Ranjita Shah</td>
            <td>Tentant Restaurant</td>
            <td>1</td>
            <td>10/9/2022</td>
            <td>Coffe Cafe</td>
            <td>$800.50</td>
            <td>paid</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;<i class="fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;<i class="fa-solid fa-memo-pad"></i></td>
        </tr>
        </tr>
        
        
    </tbody>
</table>

</body>