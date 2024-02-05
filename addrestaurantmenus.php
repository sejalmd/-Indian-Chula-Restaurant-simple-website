
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<script>
$(document).ready( function () {
    $('#addrestaurantmenus').DataTable();
} );
</script>  




</head>
<body>
  <div class="form" id ="menu(multipleitems)"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
    <div class="form" id="addpackage" >
        <label for="menufile"  class="form-label">Menu Bar<br><br>
        <i class="fa-solid fa-cloud-arrow-up"></i>
        <input type="file" accept="image/*"><br><br>
        <div class="d-grid gap-2 d-md-block" style="text-align:center">
          <button class="btn btn-primary" type="submit">Import Menu</button>
        </div>
      </div>
    
  </div>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">Menu</span>
  </div>
</nav>
<table id="addrestaurantmenus" class="display">
    <thead>
        <tr>
            <th>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </th>
            <th>srno</th>
            <th>Title(Er)</th>
            <th>Title(Fr)</th>
            <th>Price</th>
            <th>Restaurant Branch</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                  
            </div>
          </td>
            <td>1</td>
            <td>Dinner</td>
            <td></td>
            <td>$1000</td>
            <td>RS VANTAGE RESTAURANT</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </td>
            <td>2</td>
            <td>pasta</td>
            <td></td>
            <td>100/-</td>
            <td>Radha Krishna</td>
            <td>present</td>
        </tr>
        <tr> 
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </td>
            <td>3</td>
            <td>veg kolhapuri</td>
            <td></td>
            <td>100/-</td>
            <td>Radha Krishna</td>
            <td>present</td>
        </tr>
        
        
    </tbody>
</table>

</body>