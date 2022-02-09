@extends("base")

@section("content")
<h1>Singleton</h1>
<p>
{{ $a->increment() }} </br>
{{ $b->increment() }} </br>
{{ $a->increment() }}
</p>
@endsection