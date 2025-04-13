@extends('doctor.layout', ['currentPage' => 'calendar'])
@section('content')
	<div class="row">
		<div class="col-2 fw-bold h5">
			<a href="#">&lt;&lt; {{now()->subDay()->format('d.m.Y')}}</a>
		</div>
		<div class="col-4 text-center fw-bold h3">
			{{now()->format(('d.m.Y'))}}
		</div>
		<div class="col-2 fw-bold h5  ">
			<a href="#">{{now()->addDay()->format('d.m.Y')}} &gt;&gt;</a>
		</div>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>čas</th>
				<th>Jméno pacienta</th>
				<th>Typ návštěvy</th>
				<th>Stav</th>
				<th>Ošetřjící lékař</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($visits as $slot)
				@foreach ($slot->visits as $i => $visit)
					<tr>
						@if ($i == 0)
							<td rowspan="{{count($slot->visits)}}">
								{{$slot->time->format('H:i')}} <br/>
								<a href="#" class="btn btn-secondary ">
									<span class="fa fa-add"></span>
								</a>
							</td>
						@endif
						<td>
							<span class="statebox statebox-{{strtolower($visit->state->name)}}"></span>
							<a href="{{route('doctor.patients.detail', ['patient' => 1])}}">{{$visit->name}}</a>
						</td>
						<td>{{$visit->type}}</td>
						<td>
							<span class="state-{{strtolower($visit->state->name)}}">{{$visit->state}}</span>
						</td>
						<td>
							{{['MUDr. Miroslav Bolíto', 'MUDr. Karel Vyřízl'][rand(0,1)]}}
						</td>
						<td>
							<a href="#" class="btn btn-secondary"><span class="fa fa-cancel"></span></a>
						</td>
					</tr>
				@endforeach
			@endforeach
		</tbody>
	</table>
@endsection