<div class="dropdown mb-2">
	<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		Naplánovat událost
	</button>
	<ul class="dropdown-menu">
		@foreach(\App\Enums\VisitType::cases() as $case)
			<li><a class="dropdown-item" href="#">{{$case->value}}</a></li>
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