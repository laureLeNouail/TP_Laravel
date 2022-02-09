@extends("base")

@section("content")
<h1>Observer</h1>

<p>
Compte des notifications:</br>
Observer 1 :</br>
{{$a->display()}} </br>
Observer 2 :</br>
{{$b->display()}} </br>

{{$sujet->avertir()}}
<br>

Observer 1 :</br>
{{$a->display()}} </br>
Observer 2 :</br>
{{$b->display()}} </br>

</p>

@endsection