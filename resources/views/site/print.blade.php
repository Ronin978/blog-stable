@extends('layouts.app')
@section('content')



<a onClick="javascript:CallPrint('pagePrint');">Роздрукувати</a>

	<div id="pagePrint">
		<h1>{{$article->title}}</h1>
	<br>
		@if ($article->preview)
			<div class="myImg">	
				<img src="{{$article->preview}}">;
			</div>
		@endif
	
	<div>{!!$article->content!!}</div><hr>
	</div>

@endsection