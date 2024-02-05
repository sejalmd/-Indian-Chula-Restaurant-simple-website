<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<script>
$(document).ready( function () {
    $('#orderlist').DataTable();
} );
</script>  
<style>
    .bigimage1{
    width: 1600px;
    height: 750px;
    position: relative;
    background-image: url('../images/OIP.jpg');
    background-size: cover;
    }
    .login_box{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 880px;
        height:600px;
        padding:80px 40px;
        box-sizing:border-box;
        background:(0, 0, 0, .5);
        border-radius: 8px;
        background-color: white;
        box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
  
  
 
    }


    
</style>



</head>
<body>
  

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1" href="#">No of orders of a day</span>
  </div>
</nav>
<div class="overlay">
        <div class="bigimage1">
            <div class="login_box ">
              <table id="orderlist" class="display">
    <thead>
        <tr>
            <th>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </th>
            <th>Order no</th>
          
            <th>Customer</th>
            <th>Order Total</th>
            <th>Order Assign To</th>
            <th>Order Status</th>
            <th>Order Date</th>
            <th>Order Type</th>
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
            <td>678</td>
         
            <td>ms. sejal mahendra dumbre</td>
            <td>$789.00</td>
            <td></td>
            <td>Placed</td>
            <td>03/06/2022-PM</td>
            <td>pick-up order</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr> 
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </td>
            <td>678</td>
            
            <td>mr. yash mahendra dumbre</td>
            <td>$674.00</td>
            <td></td>
            <td>Placed</td>
            <td>05/06/2022-PM</td>
            <td>pick-up order</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr> 
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </td>
            <td>678</td>
           
            <td>ms. divya rajesh khanvilkar</td>
            <td>$345.00</td>
            <td></td>
            <td>Placed</td>
            <td>09/06/2022-PM</td>
            <td>pick-up order</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr> 
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" >
                    
              </div>
            </td>
            <td>678</td>
            
            <td>mr. pranav akhilesh kanse</td>
            <td>$659.00</td>
            <td></td>
            <td>Placed</td>
            <td>19/06/2022-PM</td>
            <td>pick-up order</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
 
        
        
    </tbody>
</table>
            </div>
        </div>
</div>
</body>