<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
</head>
<body>
    <div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
        <div class="row">
            <div class="col-md-12">
                <div class="form" id="addpackage" >
                  <label for="restaurantname"  class="form-label">Restaurant Name</label>
                  <input type="text" class="form-control" id="restaurantname" placeholder="Restaurant Name">

                </div>
                <div class="form" id="addpackage" >
                  <label for="packagename"  class="form-label">Package Name</label>
                  <input type="text" class="form-control" id="packagename" placeholder="Package Name">
                  
                </div>
                <div class="form" id="addpackage" >
                  <label for="packageprice"  class="form-label">Package Price</label>
                  <input type="text" class="form-control" id="packageprice" placeholder="Price">
                  
                </div>
                <div class="form" id="addpackage" >
                  <label for="packagedescription"  class="form-label">Package Description</label><br>
                  <textarea rows = "5" cols = "120" name = "description"placeholder="Description"></textarea>
                </div><br><br>
                <div class="form" id="addpackage" >
                  <label for="bannerimage"  class="form-label">Banner Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
                  <i class="fa-solid fa-cloud-arrow-up"></i>
                  <input type="file" accept="image/*">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Morning" id="flexCheckDisabled" >
                    <label class="form-check-label" for="flexCheckDisabled">
                        Morning
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Lunch" id="flexCheckCheckedDisabled" >
                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                        Lunch
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Dinner" id="flexCheckDisabled" >
                    <label class="form-check-label" for="flexCheckDisabled">
                        Dinner
                    </label>
                </div><br><br><br><br>
                <div class="d-grid gap-2 d-md-block" style="text-align:center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-primary" type="reset">Back</button>
                </div>

                


            </div>
        </div>
    </div>
</body>
