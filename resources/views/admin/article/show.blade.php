@extends('admin.main')
@section('content')
<h1>{{$article->title}}</h1>
<br>
	
	<div>{!!$article->content!!}</div>

@include('site.comment')


@endsection 