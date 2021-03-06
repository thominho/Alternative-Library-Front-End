<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Καλώς Ήρθατε</title>

    <!-- Bootstrap core CSS -->
    <link href="Boostrap/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="Boostrap/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="index_files/starter-template.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="index_files/ie-emulation-modes-warning.js"></script>
	<script src="Bootstrap/bootstrap-dropdown.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
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

      <div class="starter-template">
		
        <h1>Καλώς Ήρθατε στην Ηλεκτρονική Βιβλιοθήκη του Εθνικού και καποδιστριακού πανεπιστημίου Αθηνών</h1>
        <p class="lead">Αυτή η ιστοσελίδα αποσκοπεί στην αναζήτηση βιβλιοθηκών που συνεργάζονται με το Εθνικό και Καποδιστριακό
		Πανεπιστήμιο Αθηνών αλλά και τα βιβλία που διατίθενται προς δανεισμό. Οι υπηρεσίες του αφορά κυρίως μέλη της πανεπιστημιακής
		κοινότητας για αυτό προσφέρεται και εγγραφή στο σύστημα ώστε ο χρήστης να έχει πλήρη έλεγχο τόσο των βιβλίων που έχει δανειστεί 
		όσο και της ημερομηνίας επιστροφής τους.</p>
      </div>

    </div><!-- /.container -->
	
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Ανακοίνωση 7-1-2016</h2>
          <p>Σήμερα εγκρίθηκε η σύμβαση με την Βιβλιοθήκη του Harvard για τον διαδανεισμό βιβλίων</p>
          <p><a class="btn btn-secondary" href="#news" role="button">Δείτε Περισότερα »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Ανακοίνωση 26-12-2015 </h2>
          <p>Προσφορά Χριστουγέννων!!! Δωρεάν τα Έξοδα για βιβλία που παραγγέλνονται απο πανεπιστήμια του εξωτερικού </p>
          <p><a class="btn btn-secondary" href="#" role="button">Δείτε Περισότερα »</a></p>
       </div>
        <div class="col-md-4">
          <h2>Ανακοίνωση 23-12-2015</h2>
          <p>Κλειστές θα παραμείνουν οι βιβλιοθήκες του ΕΚΠΑ τις ημέρες 24-12-2015,25-12-2015,31-07-2016,1-07-2016 τις υπόλοιπες μέρες θα λειτουργήσουν κανονικά</p>
          <p><a class="btn btn-secondary" href="#" role="button">Δείτε Περισότερα »</a></p>
        </div>
      </div>

      <hr>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="index_files/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="index_files/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="index_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>