<form method="POST" action="/register">
	
{{ csrf_field() }}

<input type="text" name="name">
<input type="password" name="password">



<select name="city">
@foreach ($cities as $city)
	<option value="{{ $city['city'] }}"> {{ $city['city'] }} </option>
@endforeach
</select>
<select name="gender">
	<option value="male">
		Male
	</option>
	<option value="female">
		Female
	</option>

</select>



<input type="submit" value="Register"></input>
</form>
