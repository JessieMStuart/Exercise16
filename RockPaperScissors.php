<!DOCTYPE html>
<html>
    <head>
        <title> Rock, Paper, Scissors </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="JavaScript.js"> </script>
        
    </head>
        
    <body>
        <h1 class='text-center'> Welcome to Rock, Paper, Scissors! </h1>
        <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
              <a id="Rock" onclick='play(this.id)'>
                 <img src="Rock.jpg" alt="Rock" style="width:100%" width="300" height="300" id="Rock">
              </a>
              <div class="caption">
                <p class="text-center">Rock</p>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
              <a id="Paper" onclick='play(this.id)'>
                 <img src="Paper.jpg" alt="Paper" style="width:100%" width="300" height="300" id="Paper">
              </a>
              <div class="caption">
                <p class="text-center">Paper</p>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
              <a id="Scissors" onclick='play(this.id)'>
                <img src="Sci1.jpg" alt="Scissors" style="width:100%" width="300" height="300" id="Scissors">
              </a>
              <div class="caption">
                <p class="text-center">Scissors</p>
              </div>
          </div>
        </div>
      </div>
      <div class='text-center'>    
        <p id="result"> </p>
      </div> 
    </body>
</html>
