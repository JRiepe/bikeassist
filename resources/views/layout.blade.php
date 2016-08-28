<title>@yield('title')</title>

        <!--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        
        <script src="https://code.jquery.com/jquery-2.2.3.js" integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4=" crossorigin="anonymous">    
        </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        
        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
                background-color: skyblue;
            }

            .jumbotron {
                margin: 0 auto;
                padding: 5px;
                position: relative;
                background-color: maroon;
                color: white;

            }

            .container {
                margin: 0 auto;
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            
        </style>

        </head>
    <body>
        <div class="container">
            <div class="jumbotron">

            <h2>Bike Assist</h2>
            </div>

            <div id="flashDiv">
                
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title text-center">@yield('title')</h1>
                    
                </div>
                <div class="panel-body text-center">
                    @yield('content')
                </div>
            </div>

            
        </div>
        
            
        
        
    </body>
</html>
