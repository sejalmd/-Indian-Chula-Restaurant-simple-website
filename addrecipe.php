<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/22d0512add.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<style type="text/css">
    .clrPicker
    {
        width: 30px;
        height: 30px;
        border: 1px solid #808080;
        margin-bottom: 5px;
        cursor:pointer;
    }
    .lineWidth
    {
        background-color:black;
        margin-bottom:5px;
        margin-top:15px;
    }
    .lineWidthC
    {
        width:30px;
        height:30px;
        border:1px dotted #808080;
        margin-bottom:5px;
        overflow:hidden;
        cursor:pointer;
    }
</style>

<div  class="container"style="background: ghostwhite;font-size: 20px; padding: 10px; border: 1px solid lightgray; margin: 10px;" >
    <div class="row">
        <div class="col-md-12">
            <div class="form" id="addpackage" >
                <label for="name"  class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">

            </div>
            <div class="form" id="addpackage" >
                <label for="detail"  class="form-label">Detail</label>
                <input type="text" class="form-control" id="detail">
            </div>
            <div class="form" id="addrecipe" >
                <label for="image"  class="form-label">Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <input type="file" accept="image/*">
            </div><br>
            <div class="form" id="ingrediante" >
                <label for="detail"  class="form-label">Ingrediants</label>
                <div id="board" style="width: 930px;">

                <canvas id="kfCanvas" width="800px" height="500px;" style="border: 3px dotted #000;cursor:crosshair;">Sorry, your browser doesn't support canvas technology.
                </canvas>

                <div style="float: right;">

                    <div>
                    Color picker: 
                    <div class="clrPicker" style="background-color:black;" onclick="SetBrushColor('black')"></div>
                    <div class="clrPicker" style="background-color:red;" onclick="SetBrushColor('red')"></div>
                    <div class="clrPicker" style="background-color:blue;" onclick="SetBrushColor('blue')"></div>
                    <div class="clrPicker" style="background-color:green;" onclick="SetBrushColor('green')"></div>
                    <div class="clrPicker" style="background-color:orange;" onclick="SetBrushColor('orange')"></div>
                    <div class="clrPicker" style="background-color:yellow;" onclick="SetBrushColor('yellow')"></div>
                    <div>Set color<br />
                        <input type="text" title="Write color code and click button to set new brush color" name="clrText" id="clrText" style="width:50px;" placeholder="Color code/name" />
                        <input type="button" value="Set" onclick="SetBrushColor('Text')" />
                    </div>

                    <div class="clrPicker" onclick="SetBrushColor('white')" style="width:45px;height:25px;padding-top:3px;">&nbsp;Eraser</div>

                </div>

                <div>
                    Line width: 
                    <div class="lineWidthC" onclick="SetLineWidth('5')"><div class="lineWidth" style="height:5px;"></div></div>
                    <div class="lineWidthC" onclick="SetLineWidth('4')"><div class="lineWidth" style="height:4px;"></div></div>
                    <div class="lineWidthC" onclick="SetLineWidth('2')"><div class="lineWidth" style="height:2px;"></div></div>
                    <div>Set width<br />
                        <input type="text" title="Write line width and click button to set new line width" name="widthText" id="widthText" style="width:50px;" placeholder="Width in pixel" />
                        <input type="button" value="Set" onclick="SetLineWidth('0')" />
                    </div>
                </div><br><br><br><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="save_notification" id="addrecipe" >
                    <label class="form-check-label" for="flexCheckDisabled"flexCheckCheckCheckDisabled>
                        Save Notification(Only for Customers)
                    </label>
                </div>
                
            </div>
            
        </div>
    </div>

</div>