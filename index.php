<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel=”stylesheet” href=”css/bootstrap.css”>
    <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
    <link rel="stylesheet" href="styles.css">
    <script src="mortgageCalc.js"></script>
    <title style="margin: auto;">Mortgage Calculator</title>
</head>
<body>
    <!--  FILE IS PHP SO IT CAN BE HOSTED ON HEROKU  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-0">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="#">
            <img class="img-fluid" src="CalcyoulateCaps.png" alt="" >
          </a>  
          <!-- Keep this in to keep logo left aligned -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>  
    </nav>


    <div class="row">

        <!--
        <div class="col-sm-6">
            <img src="" style="width:30rem;height:10rem;">
        </div>
    -->

    </div>
    
    <div class="card-group" style="padding-left: 25%; padding-right: 25%; padding-top: 4%;">
        
        <div class="card card1" style="min-width: 15rem;">
        <div class="container">
        <div class="card-body" style="padding-left: 15%;">      
        <div class="input-group">
            <div class="col-xs-3">
            <label class="ex1">Home Price</label>
            <input id="homePriceVal" name="homeprice" type="number" aria-label="Home Price" class="form-control" value="120000">
            <label class="ex1">Down Payment</label>
            <input id="downPaymentVal" name="dwnpmnt" type="number" aria-label="Down Payment" class="form-control" value="20000">
            <label class="ex1">Interest Rate (%)</label>
            <input id="interestVal" name="interest" type="number" aria-label="Interest Rate" class="form-control" value="3.92">
            <label class="ex1">Mortgage Period</label>
            <select class="form-select" id="floatingSelectGrid" name="loanlngth" aria-label="Floating label select example" style="margin-bottom: 5%;">
                <option selected value="30">30 Years</option>
                <option value="20">20 Years</option>
                <option value="15">15 Years</option>
                <option value="10">10 Years</option>
              </select>
            </div>
            <br>
            <div class="d-grid gap-1 col-6 ms-4">
                <button class="btn btn-primary" type="button" onClick="calculateMortgage()">CALCULATE</button>
            </div>
            <br>
            <br>
          </div>
          </div>
          
        </div>
    </div>
    
        <div class="card" style="min-width: 15rem;">
            <div class="card-body" style="padding-left: 30%; padding-top: 25%;">
         Monthly Payment
         <h1 id="monthlyResult"></h1>
         <hr width=64%>
         
        
         Total loan cost
         <h6 id="yearlyResult" style="padding-left: 0%;"></h6>
         </div>
         </div>
         </div>
       
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>