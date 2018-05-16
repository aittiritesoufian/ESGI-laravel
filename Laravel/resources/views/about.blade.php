@extends("layout")

@section('title')
{{ strtoupper($page) }} @endsection

@section('content')
<div class="title m-b-md">
    About
</div>

<div class="links">
    <a href="/page">Home</a>
</div>
@endsection