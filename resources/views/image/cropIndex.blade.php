@extends('home.mainLayout')
@section('content')

		
		<div align="center">
			<form method="post" enctype="multipart/form-data">
				<img src="{{asset('upload/'. $img)}}" alt="Image" name="tempImage">
				<br/><br/>
				<table>
					<tr>
						<td>
							<h5>Width : </h5>
						</td>
						<td>
							<input type="text" name="width" placeholder="  insert width">
						</td>
					</tr>
					<tr>
						<td>
							<h5>  Heigth : </h5>
						</td>
						<td>
							<input type="text" name="height" placeholder="  insert heigth">
						</td>
				
					</tr>
					
				</table>
				<br/>
				<table>
					<tr>
						<td>
							
						</td>
						<td>
							<input type="submit" name="save" value="Save">
						</td>
				
					</tr>
				</table>
			</form>
		</div>
		
@endsection

@section('title')
	Crop Image
@endsection