<h1>Esta es la prueba en test/index</h1>

<h1>This is My Test Page</h1>
@if(count($pollos) > 0)
	@foreach($pollos as $beatle)
	{{ $beatle }} <br>
	@endforeach
@else
	<h1> Sorry, nothing to show... </h1>
@endif