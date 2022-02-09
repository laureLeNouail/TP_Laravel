@extends("base")

@section("content")
<h1>Factory</h1>
<p>
{{ $a->getMarque()}} </br>
{{ $b->getMarque()}} </br>
</p>
@endsection