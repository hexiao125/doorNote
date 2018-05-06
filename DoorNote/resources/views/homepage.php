<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Latest compiled and minified CSS -->
        <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
        <!-- Optional theme -->
        <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"-->
        <link rel="icon" href="../../favicon.ico">

        <title>Door Note</title>

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="resources/css/bootstrap.css" rel="stylesheet"/>
        <link href="resources/css/jumbotron-narrow.css" rel="stylesheet"/>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="resources/js/doorMsg.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="header clearfix">
                <nav>
                    <!--ul class="nav nav-pills pull-right">
                        <li role="presentation"><a href="#">Sign up</a></li>
                        <li role="presentation"><a href="#">Log in</a></li>
                    </ul-->
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </nav>
                <h3 class="text-muted">DoorNote</h3>
            </div>
            <div class ="text-center">
                <h2>Current Message</h2>
            </div>
            <div class="jumbotron">
                <p class="lead" id="displayMsg"></p>           
            </div>
            <div class ="text-center">
                <p>
                    <button id="loadMsg" type="button" class="btn btn-lg btn-success">Load</button>
                    <button id="clearMsg" type="button" class="btn btn-lg btn-success">Clear</button>
                </p> 
            </div>
            <div class="form-group">
                <textarea class="form-control" id="newMsg" name ="newMsg" rows="4" 
                          placeholder="Please enter your message here.." required autofocus></textarea>
            </div> 
            <div class="form-group">
                <button class="btn btn-primary" id="submitMsg" type="button">Submit</button>
            </div>
            
            <footer class="footer">
                <p>&copy; 2017 DoorNote</p>
            </footer>
        </div> <!-- /container -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
