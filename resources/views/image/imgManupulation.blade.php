@extends('home.mainLayout')
@section('content')

		
		<div align="center">
			<form method="post" enctype="multipart/form-data">
				<img src="{{asset('upload/'. $img)}}" alt="Image" name="tempImage">
				<br/><br/>
				<input type="submit" name="button" value="rotate Left">
				
				<input type="submit" name="button" value="rotate Right">
				
				<a href="{{route('imgMan.crop', $img)}}"> <input type="button" name="save" value="crop"> </a>
				
			</form>
		</div>
		
@endsection

@section('title')
	Edit Image
@endsection