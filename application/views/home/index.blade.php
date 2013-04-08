@layout('layouts.main')

@section('container')

<form action="/faq/buscar" method="get" class="search-targ-form">
	<input type="text" name="NomeTag" class="span12 input-custom-large" placeholder="Pesquisar...">
</form>

<div class="accordion" id="accordion2">
@foreach ( $problemas as $p )
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			{{ $p->NomeProblema }}
			</a>
		</div>
		<div id="collapseOne" class="accordion-body collapse in">
			<div class="accordion-inner">
			Anim pariatur cliche...
			</div>
		</div>
	</div>
@endforeach
</div>

@endsection