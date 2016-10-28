@extends( 'layouts.app' )

@section( 'title', 'Paginatitel' )

@section( 'header' )
	<h1>Header</h1>
@endsection

@section( 'content' )
	<p>This is my body</p>
	<p>{{ $test }}</p>
@endsection

@section( 'footer' )
	<h1>Footer</h1>
@endsection