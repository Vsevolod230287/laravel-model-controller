@extends ('layouts.app')

@section('main')

@foreach ($movies as $movie)
<ul>
<li>{{$movie->id}}</li>
<li>{{$movie->title}}</li>
<li>{{$movie->original_title}}</li>
<li>{{$movie->nationality}}</li>
<li>{{$movie->date}}</li>
<li>{{$movie->vote}}</li>
</ul>
@endforeach
@endsection
