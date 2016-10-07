
@extends('app::layouts.main')

@section('title', 'Áreas Externas ')

@section('containerTitle', 'Editar Área Externa')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('areasExternas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	
@endsection

@section('content')
	{!! Form::model($areaExterna, array('route' => array('areasExternas.update', $areaExterna->id))) !!}
		@include('app::areasExternas.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'areasExternas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection