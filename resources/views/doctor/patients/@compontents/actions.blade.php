<div class="dropdown mb-2">
	<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		Naplánovat událost
	</button>
	<ul class="dropdown-menu">
		@foreach(\App\Enums\VisitType::cases() as $case)
			<li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">{{$case->value}}</a></li>
		@endforeach
	</ul>
</div>


<div class="dropdown">
	<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		Přidat intervenci
	</button>
	<ul class="dropdown-menu">
		@foreach(\App\Enums\InterventionType::cases() as $case)
			<li><a class="dropdown-item" href="#">{{$case->value}}</a></li>
		@endforeach
	</ul>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Odběr krve</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row mb-3">
					<div class="col-4">Termín a čas</div>
					<div class="col">
						<input type="datetime-local" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-4">Poznámka pro pacienta</div>
					<div class="col">
						<textarea class="form-control"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrušit</button>
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Objednat pacienta</button>
			</div>
		</div>
	</div>
</div>