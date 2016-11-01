<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DD App</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Jar.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <span id="top-nav" class="include"></span>

<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">
            <div class="panel">
                <div class="panel-body">
                    <a href="https://www.facebook.com/v2.0/dialog/oauth?client_id=138566025676&amp;redirect_uri=https%3A%2F%2Fwww.airbnb.com%2Fauthenticate&amp;scope=email%2Cuser_birthday%2Cuser_likes%2Cuser_education_history%2Cuser_hometown%2Cuser_interests%2Cuser_activities%2Cuser_location%2Cuser_friends" class="fb-button fb-blue btn icon-btn btn-block btn-large large padded-btn-block row-space-1 btn-facebook" data-populate_uri="" data-redirect_uri="https://www.airbnb.com/authenticate">
                        <span class="icon-container">
                            <i class="icon icon-facebook"></i>
                        </span>
                        <span class="text-container">
                            Log in with Facebook
                        </span>
                    </a>
                    <div>
                        <h5 align="center">or</h5>
                    </div>

                    <form accept-char set="UTF-8" action="/authenticate" class="signin-form login-form" data-action="Signin" method="post">
                    <div style="margin:0;padding:0;display:inline">
                        <input name="utf8" type="hidden" value="âœ“">
                        <input name="authenticity_token" type="hidden" value="">
                    </div>
                    
                    <input id="redirect_params_action" name="redirect_params[action]" type="hidden" value="index">
                    <input id="redirect_params_controller" name="redirect_params[controller]" type="hidden" value="home_safety">

                    <div class="control-group row-space-1">
                        <input class="decorative-input" id="signin_email" name="email" placeholder="Email Address" type="email">
                    </div>
                    
                    <div class="control-group row-space-2">
                        <input class="decorative-input" id="signin_password" name="password" placeholder="Password" type="password">
                    </div>

                    <div class="clearfix row-space-2">
                        <a href="/forgot_password" class="forgot-password pull-right">Forgot password?</a>
                    </div> 
                <br>
                    <button type="submit" class="btn btn-block btn-primary large btn-large padded-btn-block">
                        Log In!    
                    </button>
                    </form>
                </div>
            </div>
        </h4>
      </div>
      <!-- <div class="modal-body">
        ...
      </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Jar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">My Jars</a>
                    </li>
                    <li>
                        <!-- Button trigger modal -->
                        <a  href="#" id="login-button">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Jar</h1>
                        <h3>Make it Happen in Jar :)</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://www.facebook.com/petmypets" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                            <!-- <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li> -->
                            <li>
                                <a href="https://twitter.com/PetmyPets" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    


    <!-- /.banner -->

    <span id="bottom-nav" class="include"></span>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Jar. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/petmypets.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#login-button').click(function() {
            $('#login-modal').modal();
        });
    });
    </script>

</body>

</html>