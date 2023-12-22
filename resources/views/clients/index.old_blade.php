<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KH-Computer Store</title>

    <link rel="stylesheet" href="styles.css">
    
    
</head>


<body>
    <div class="container">
        
        <!------HEADER------>
        @include('clients.header')


        <!-----MENU_LEFT----->
		<div class="main">
            



        <!-----BODY----->
			<div class="body">
				body
			</div>


        <!-----MENU_RIGHT----->   
			<div class="menu-right">
				right
			</div>
		</div>


        <!----- FOOTER ----->
            <div class="footer" >
                @include('clients.footer')
			</div>
	</div>
    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
</body>

</html>
