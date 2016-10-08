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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/assets/images/logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="menu">Menu</a></li>
                        <li><a href="inventory">Inventory</a></li>
                        <li><a href="recipe">Recipe</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="container">
            <!--{content}
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.{ci_version}</p> -->
            <div class="navbar">
                <div class="navbar-inner">
                </div>
            </div>           
            <div id="content">
                <h1>{pagetitle}</h1>
                {content}
            </div>
            <div id="footer" class="span12">
                Copyright &copy; 2016,  <a href="mailto:someone@somewhere.com">BCIT COMP4711 Starbucks Project </a>.
            </div>
        </div>

        
        
    </body>
</html>