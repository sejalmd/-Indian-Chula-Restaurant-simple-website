<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<script>
$(document).ready( function () {
    $('#cmslist').DataTable();
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
   
</nav>
<table id="cmslist" class="display">
    
    <div class="col-md-4"style="text-align:right">
        <h5>CMS List</h5>
    </div>
     
    <thead>
        <tr>
            
            <th>srno</th>
            <th>Title(En)</th>
            <th>Title(Fr)</th>
            <th>Status</th>
            
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
          
            <td>1</td>
            <td><i class="fa-solid fa-pen-field"></i>(Privacy Policy)</td>
            <td><i class="fa-solid fa-pen-field"></i>(Privacy Policy)</td>
            <td>Active</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            <td>2</td>
            <td><i class="fa-solid fa-pen-field"></i>(Contact Us)</td>
            <td><i class="fa-solid fa-pen-field"></i>(Contact Us)</td>
            <td>Active</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        <tr> 
            <td>3</td>
            <td><i class="fa-solid fa-pen-field"></i>(About Us)</td>
            <td><i class="fa-solid fa-pen-field"></i>(About Us)</td>
            <td>Active</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        <tr> 
            <td>4</td>
            <td<i class="fa-solid fa-pen-field"></i>(Terms of Us)</td>
            <td><i class="fa-solid fa-pen-field"></i>(Terms of Us)</td>
            <td>Active</td>
            
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
            
            
        </tr>
        
        
    </tbody>
</table>

</body>