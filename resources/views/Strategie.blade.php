@extends("base")

@section("content")
<h1>Stratégie</h1>
<p>
TVA : 
{{ $a->getTva() }}
</p>
@endsection