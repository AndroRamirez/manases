<!DOCTYPE html>
<html>
	<head>
            <meta charset="utf-8">
            <!-- css -->
            {{ HTML::style('css/bootstrap.min.css'); }}
            
            <!-- js -->
            {{ HTML::script('js/jquery.min.js'); }}
            {{ HTML::script('js/bootstrap.min.js'); }}
	</head>
	<body>
               <div class="container">
                    @section('sidebar')
			
                    @show
		
		
                    @yield('content')
		</div>
	</body>
</html>