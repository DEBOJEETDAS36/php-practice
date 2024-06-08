<!DOCTYPE html>
<html>
<head>
<title>Running php inside html</title>
<style>
    body{
        background-color:green;
        display:flex;
    }
    .container{
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
        border: 2px solid blue;
        background-color:black;
        border-radius: 6px;
        width: 500px;
        height:400px;
        margin:180px 500px;
        justify-content:space-around;
    }
    .wrapper{
   
        color:white;
        display:flex;
        flex-direction:row;
        flex-wrap:wrap;
        justify-content:space-around;
    }
    .left{
        border:2px solid white;
        display:flex;
        justify-content:center;
        align-items:center;
        width: 170px;
        height:300px;
    }
    .right{
        border: 2px solid yellow;
        display: flex;
        justify-content:center;
        align-items:center;
        width: 220px;
        height:300px;
    }
    .txt{
        border:2px solid pink;
        line-spacing: 6px;
    }
    .txt p{
        margin:0px;
    }
    .output{
        border:2px solid red;
        width:100%;
        height: 50px;
        color: white;
    }
    form{
        display:flex;
        flex-direction:column;
        justify-content:space-between;
        align-items:center;
        padding:5px 2px;
    }
    .inputs{
        margin:3px 0px;
        width:200px;
        height:30px;
        border-radius:4px;
        border:none;
    }
    #operation{
        width:50px;
        height:20px;
        margin:6px 0px;
        border-radius:30px;
    }
    #s1{
        background-color:blue;
        color:white;
        margin:3px 0px;
        border:none;
        width:200px;
        height:20px;
        border-radius:4px;
    }
    #s1:hover{
        cursor:pointer;
    }
</style>
</head>
<body>
<div class="container">
<div class="wrapper">
    <div class="left">
        <div class="txt">
            <p>PHP</p>
            <p>CALCULATOR</p>
        </div>
    </div>
    <div class="right">
        <form method="POST">
            <div>
            <input type="text" name="num1" placeholder="Enter first no." class="inputs">
            </div>
            <div>
            <input type="text" name="num2" placeholder="Enter second no." class="inputs">
            </div>
            <div>
                <select name="operation" id="operation">
                <option value="add">Add</option>
                <option value="substract">Substract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
                </select>
            </div>
            <div>
            <input type="submit" value="SUBMIT" name="submit" id='s1'>
            </div>
        </form>
    </div>
    </div>
    <div class="output">
        <p>The output is :
            <?php
                if(isset($_POST['submit'])){
                    $num1=$_POST['num1'];
                    $num2=$_POST['num2'];
                    $operation=$_POST['operation'];
                    switch($operation){
                        case "add":
                            $sum = $num1+$num2;
                            echo "$sum";
                            break;

                        case "substract":
                            $sub = $num1-$num2;
                            echo "$sub";
                            break;

                        case "multiply":
                            $mul = $num1*$num2;
                            echo "$mul";
                            break;
                            
                        case "divide":
                            $div = $num1/$num2;
                            echo "$div";
                            break;
                        default:
                            echo "The operator does not exists";
                    }
                }
            ?>
        </p>
    </div>
</div>
</body>
</html>