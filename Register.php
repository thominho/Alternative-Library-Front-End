<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Εγγραφή</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="Boostrap/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
body { 
    padding-top: 10px; 
}
<body>

<nav class="navbar navbar-inverse">
        <div class="navbar-header">
		   <img src="Images/ekpa.png" class="img-responsive" alt="EKPA LIBRARY" href="index.php">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="login.php" class="btn  btn-sm">
				<span class="glyphicon glyphicon-user"></span> Σύνδεση
				</a>
			</li>
			<li>
				<a href="Register.php" class="btn  btn-sm">
				<span class="glyphicon glyphicon-pencil"></span> Εγραφή
				</a>
			</li> 
			<li>
				<a href="Cart.php" class="btn  btn-sm">
				<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
				</a>
			</li> 
			<li><img src="Images/gre.png" class="img-responsive" alt="Ελληνικα" href="index.php"></li>
			<li><img src="Images/eng.png" class="img-responsive" alt="Αγγλικα" href="index.php"></li>
		  </ul>
		  
        </div><!--/.nav-collapse -->
		<ul class="nav navbar-nav navbar">
			<a href="index.php" style="color:#FFFFFF"><strong><h4>EKΠΑ ΒΙΒΛΙΟΘΗΚΗ</h4</strong></a>
			 <a href="index.php" class="btn btn-primary" role="button" align="right">Aρχική Σελίδα</a>
			 
			<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Υπηρεσίες <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="searchbook.php">Aναζήτηση Aντικειμένου</a></li>
					<li><a href="searchlibrary.php">Βιβλιοθήκες</a></li>
				</ul>
				</div>
			<a href="searchlibrary.php" class="btn btn-primary" role="button">Βιβλιοθήκες</a>
			
			<a href="#news" class="btn btn-primary" role="button">Ανακοινώσεις</a>
			
            <a href="help.php" class="btn btn-primary" role="button">Bοήθεια</a>
			
            <a href="#contact" class="btn btn-primary" role="button">Επικοινωνία</a>
			
          </ul>
		  
			<ul class="nav navbar-nav navbar-right">
		  	<a class="form-inline pull-xs-right">
            <input class="form-control" placeholder="Search" type="text">
            <button class="btn btn-success-outline" type="submit">Search</button>
            </a>
			</ul>
		<!--edw 8a mpei to path -->
    </nav>
	
		<div id="left">
      <div class="starter-template">
      </div>
    </div>

<div class="container">


    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Ονοματεπώνυμο</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Ηλ.Διεύθυνση</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Κωδικός</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPassword" name="InputPassword" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				<div class="form-group">
                    <label>Ταχυδρομικός Κώδικας</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputTK" name="InputTK" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				<div class="form-group">
                    <label>Διεύθυνση και Αριθμός</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputDA" name="InputDA" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				<div class="form-group">
                    <label>Περιοχή</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputPerioxh" name="InputPerioxh" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				<div class="form-group">
                    <label>Τηλέφωνο Επικοινωνίας</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputTE" name="InputTE" required>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				
                <input type="submit" name="submit" id="submit" value="Εγγραφή" class="btn btn-info pull-right">
            </div>
        </form>

</div>

</body>
</html>