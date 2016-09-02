@extends('app::layouts.main')

@section('title', 'Unidades ')

@section('containerTitle', 'Listar Unidades')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('unidades.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>NÚMERO</th>
			<th>ATIVO</th>
			<th>CONDOMINO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($unidades as $unidade)
				<tr>
					<td>{{ $unidade->numero }}</td>
					<td>{{ $unidade->ativo }}</td>
					<td>
						<a href="{{ route('unidades.show', $unidade->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('unidades.edit', $unidade->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('unidades.destroy', $unidade->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de unidades!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $unidades->currentPage() !!} de {!! $unidades->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $unidades->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $unidades->count() !!} de {!! $unidades->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection
