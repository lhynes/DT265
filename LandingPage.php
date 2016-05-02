<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF08">
<!--The following <meta> informs internet explorers to use the latest rendering engine-->
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<!--The following <meta>  sets the page size to the size of the device and zoom level to 1-->      
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- My CSS -->
<link href="mystyles.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="navbar-fixed.css" rel="stylesheet">
<!--Style for custom font-->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<script>/* script - fucntion to generate inspirational quotes when a user loads the page*/
    function quotes(){
        /*Store Quotes and authors in arrays*/
        quotes = [];
        authors = [];
        quotes[0] = " Whatever the mind of man can conceive and believe, it can achieve.";
        authors[0] = "Napoleon Hill";
              
        quotes[1] = "Two roads diverged in a wood, and I—I took the one less traveled by, And that has made all the difference.";
        authors[1] = "Robert Frost";
              
        quotes[2] = "Strive not to be a success, but rather to be of value. ";
        authors[2] = "Albert Einstein";
              
        quotes[3] = "You can do what ever you out your mind to ";
        authors[3] = "My mom";
              
        quotes[4] = "Success consists of going from failure to failure without loss of enthusiasm.";
        authors[4] = "Winston Churchill";
              
        quotes[5] = "People were created to be loved. Things were created to be used.";
        authors[5] = "Unknown";
              
        quotes[6] = "Your time is limited, so don't wast it living someone else's life";
        authors[6] = "Steve Jobs";
              
        quotes[7] = "You can never cross the ocean until you have the courage to lose sight of the shore.";
        authors[7] = "Christopher Columbus";
              
        /*To generate selection or random indexGenerate a random index*/
        index = Math.floor(Math.random() * quotes.length);

        /*Display the quote*/
        document.getElementById("quote").innerHTML = quotes[index];
        document.getElementById("author").innerHTML = "~"+authors[index];
        
    }
    
    /*Automatically run the script when the page loads*/
    window.onload = quotes
</script>
<style>
    .jumbotron{
        margin: auto;
        align-content: center;
        align-self: center;
        background-color:mediumvioletred;
        color:antiquewhite;
        height:100%;
        width:50%;
            }   
</style>   
</head>
    
    
    
<body class = "landingpage">

<div class="container">
    <header>Welcome</header>    

    <div class ="jumbotron">
    
            <p>
            
            Hi there,<br>
                Hello, today is <?php echo date('l, F jS, Y'); ?>.
                This website has been created to give you all the info you need to know about 
                                            Louise Hynes
            Just click below to find out more!  
     
                <form action="LouiseHynes.php" method="post">
                    <label for="yourname">Enter your name:</label>
                    <br>
                    <input id="yourname" name="yourname" type="text" style="color:#000"/>
                    <input type="submit" value="Submit!" style="color:#000"/><submit>
                </form>
                    
			</p>
        
        
    
    <div class="container">
            <div class="field col-md-12 col-md-offset-50">
                <a href ="LouiseHynes.html" class= "btn btn-default btn-sm" role="button">Click Here</a>
            </div><!-- close button  -->
    </div><!-- close button container -->


    </div> <!-- close jumbo -->
    
<div class="padding"></div>
    
  <div class="row">
        <div class="col-xs-10 col-sm-9 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 tidy-text quote" id="quote"></div>
        <div class="col-xs-10 col-sm-9 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 tidy-text" id="author"></div>
      </div>
    
<div class="padding"></div>
</div>  <!-- close container -->
    
    
    
    
      



 

    
<footer>WELCOME
    <br>
    </footer>
           				
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html>
