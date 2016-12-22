<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ZiLaVue Laravel + Vue Js 2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->        
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div id="app">
             <div class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Zi Laravel + VueJS 2 Starter Template</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-inverse-collapse">
                    <ul class="nav navbar-nav">
                       <li> <router-link to="/" >Home</router-link></li>  
                       <li> <router-link to="/example">Example</router-link></li>
                       <li> <router-link to="/about" >About Me</router-link></li>
                       <li> <router-link to="/bar" >Bar</router-link></li>
                                
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                        <input type="text" class="form-control col-md-8" placeholder="Search">
                        </div>
                    </form>                    
                    </div>
                </div>
                </div>

             <router-view class="view"></router-view>

             <footer align="center">
                <p>Created by <a href="http://jakwir.com">faozi</a>. All Rights Reserved</p>
             </footer>
        </div>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                ]); ?>
        </script>
        <script src="/js/app.js"></script>
    </body>
</html>
