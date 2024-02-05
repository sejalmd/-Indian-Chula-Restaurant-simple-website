<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
 <script>
$(document).ready( function () {
    $('#review').DataTable();
} );
</script>  
<style>
    .bigimage1{
    width: 1600px;
    height: 780px;
    position: relative;
    background-image: url('../images/OIP.jpg');
    background-size: cover;
    }
    .login_box{
        position:absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height:770px;
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
    <span class="navbar-brand mb-0 h1" href="#">Review</span>
  </div>
</nav>
<div class="overlay">
        <div class="bigimage1">
            <div class="login_box ">
                <table id="review" class="display">
    <thead>
        <tr>
            <th>SrNo</th>
            <th>Menu Item</th>
            <th>Rating</th>
            <th>Status</th>
            <th>Price</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Kadai Chicken</td>
            <td>4.5</td>
            <td>Active</td>
            <td>220 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Chicken Curry</td>
            <td>3.0</td>
            <td>Active</td>
            <td>299 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Butter chicken</td>
            <td>4.0</td>
            <td>Active</td>
            <td>220 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Shahi Paneer</td>
            <td>5.0</td>
            <td>Active</td>
            <td>130 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Matar Paneer</td>
            <td>4.0</td>
            <td>Active</td>
            <td>130 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Kadai Paneer</td>
            <td>4.0</td>
            <td>Active</td>
            <td>150 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>7</td>
            <td>Paneer Bhujia</td>
            <td>4.1</td>
            <td>Active</td>
            <td>150 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>8</td>
            <td>Mix Vegetable</td>
            <td>4.4</td>
            <td>Active</td>
            <td>500 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
        <tr>
            <td>9</td>
            <td>Dal- Fry</td>
            <td>4.7</td>
            <td>Active</td>
            <td>80 rs</td>
            <td><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;
            <i class=" fa-solid fa-ban"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-rotate"></i></td>
        </tr>
            
        
        
    </tbody>
</table>
            </div>
        </div>
</div>
</body>

</body>
