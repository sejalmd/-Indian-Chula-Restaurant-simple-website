<?php include ('C:\xampp\htdocs\animals\assets\view\header.php');?>
<?php include("C:\xampp\htdocs\animals\assets\view\sidebar.php");?>
<div class="section">
    <div class="container">
        <form  autosubmit="event.preventDefault(); onFormSubmit();"autocomplete="off">
            <div class="row-md-12">
                <div class="row">
                    
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="firstname" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="lastname" placeholder="Last name" aria-label="Last name">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="addressline1" placeholder="1234 Main St">
                    <input type="text" class="form-control" id="addressline2" placeholder="area,city,state">
                    <input type="text" class="form-control" id="City">
                </div>
                <div class="col-md-4">
                    
                    <select id="category" class="form-select">
                    <option selected>category</option>
                    <option>students</option>
                    <option>teachers</option>
                    <option>mentors</option>
                    <option>parents</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <br>
                <br>
                <div class="form-action-button">
                    <input type="submit" value="submit">
                </div>    

            </div>
        </form>
    </div>  
</div>

<?php include ('C:\xampp\htdocs\animals\assets\view\footer.php');?>
