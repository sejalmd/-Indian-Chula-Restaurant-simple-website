<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<script>
$(document).ready( function () {
    $('#recipemanagement').DataTable();
} );
</script>  
</head>
<body>
<table id="recipemanagement" class="display">
    <thead>
        <tr>
            <th>SrNo.</th>
            <th>Title(En)</th>
            <th>Title(Fr)</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          
            <td>1</td>
            <td>Humans</td>
            <td></td>
            <td>Active</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            
            <td>2</td>
            <td>Air Fryer Stuffed Mushrooms</td>
            <td></td>
            <td>Active</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            
            <td>3</td>
            <td>All Veg Triple Decker Grilled Sandwich</td>
            <td></td>
            <td>Active</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            
            <td>4</td>
            <td>Cassoulets</td>
            <td></td>
            <td>Active</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            
            <td>5</td>
            <td>Lemon and Dill Shrimp Sandwhich</td>
            <td></td>
            <td>Active</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        <tr> 
            
            <td>6</td>
            <td>English Rhubarb Crumble</td>
            <td></td>
            <td>Active</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i></td>
        </tr>
        
        
    </tbody>
</table>

</body>
