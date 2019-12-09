@extends('home.mainLayout')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Session::get('name')}}</div>

                <div class="card-body">
						
					<h3>Action</h3>
						<ul style="list-style-type: square;">
						
							<li> 
								<a href="#"> Change Layout </a>
							</li>
							
							<li>
								<a href="{{route('registration.index')}}">Register</a>
							</li>
							
						</ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title')
	Admin Home
@endsection
