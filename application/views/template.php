<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{pagetitle}</title>
        <meta charset="utf-8">
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" id="main"> 
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button> 
                    <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="Starbucks"/></a>
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/menu">Menu</a></li>
                            <li><a href="/inventory">Inventory</a></li>
                            <li><a href="/recipe">Recipe</a></li>
                        </ul><!-- end nav -->
                        <form class="navbar-form pull-left">
                            <input type="text" class="form-control" id="searchInput" placeholder="Search this site...">
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form><!-- end navbar-form -->
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div><!-- end myNavvar -->
                </div><!-- container -->
            </div><!-- end navbar-fixed-top -->
            <div class="row">
                {content}
            </div><!-- end bigContent -->
        </div><!-- end container -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <h6>Copyright &copy; 2016 <a href="http://www.bcit.ca"></a></h6>
                    </div><!-- end col-sm-2 -->
                    <div class="col-sm-4">
                        <h4>About us</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div><!-- end col-sm-4 -->
                    <div class="col-sm-2">
                        <h6>Navigation</h6>
                        <ul class="unstyled">
                            <li><a href="/">Home</a></li>
                            <li><a href="/menu">Menu</a></li>
                            <li><a href="/inventory">Inventory</a></li>
                            <li><a href="recipe">Recipe</a></li>
                        </ul>
                    </div><!-- end col-sm-2 -->
                    <div class="col-sm-2">
                        <h6>Follow Us</h6>
                        <ul class="unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div><!-- end col-sm-2 -->
                    <div class="col-sm-2">
                        <h6>Coded with<span class="glyphicon glyphicon-heart"></span></h6>
                        <p>BCIT COMP4711 Starbucks Project</p>
                    </div><!-- end col-sm-2 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
    </body>
</html>