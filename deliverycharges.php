<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<script>
$(document).ready( function () {
    $('#deliverycharges').DataTable();
} );
</script>  




</head>
<body>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
    <div class="col-md-4">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1" href="#">Delivery Charges</span>
        </div>
    </div>
   <div class="col-md-4"style="text-align:right">
      <h5>Add</h5>
    </div>
</nav>
<table id="deliverycharges" class="display"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;">
    <thead>
        <tr>
            
            <th>srno</th>
            <th>Restaurant Name</th>
            <th>Area Name(Fr)</th>
            <th>Price</th>
            
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
          
            <td>1</td>
            <td>RS VANTEGE REASTAURANT</td>
            <td>INDIA</td>
            <td>$2.80</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            <td>2</td>
            <td>VERRETO REASTAURANT</td>
            <td>BROOKLYN</td>
            <td>$1.60</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        <tr> 
            <td>3</td>
            <td>PARRALAX REASTAURANT</td>
            <td>HOUSTON</td>
            <td>$3.90</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        <tr> 
            <td>4</td>
            <td>BALLROOM REASTAURANT</td>
            <td>RHODE ISLAND</td>
            <td>$1.69</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        <tr> 
            <td>5</td>
            <td>HOMEWOODIES REASTAURANT</td>
            <td>NEW MEXICO</td>
            <td>$20.00</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        
    </tbody>
</table>

</body>