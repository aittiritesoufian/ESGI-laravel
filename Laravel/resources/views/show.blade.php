@extends("layout")

@section('title')
Wall @endsection

@section('content')
<div class="title m-b-md">
    Wall
    @if ($search != false)
    	of {{ $search }}
    @else

    @endif

    {!! Form::open(['url' => 'write']) !!}
    	{!! Form::text('post_content') !!}
    	{!! Form::submit('Write on the wall') !!}
    {!! Form::close() !!}
</div>
<br><br>
<ul>
@foreach($posts as $post)
<li><b>{{ $post->user->name }}</b> says : <i>{{ $post->content }}</i></li>
@endforeach
</ul>
@endsection