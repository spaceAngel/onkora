@extends('doctor.layout', ['currentPage' => 'problems'])
@section('content')
	<table class="table">
		<thead>
			<tr>
				<th>Pacient</th>
				<th>Datum a čas</th>
				<th>Druh obtíží</th>
				<th>Poznámka paienta</th>
				<th>Viděl</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($problems as $problem)
			<tr class="{{$problem->seen_by == null ? 'fw-bold' : ''}}">
				<td>
					<a href="{{route('doctor.patients.detail', ['patient' => 1])}}">{{$problem->patient}}
				</td>
				<td>{{$problem->datetime->format('d.m H:i')}}</td>

				<td>{{$problem->type}}</td>
				<td>
					@if (rand(0,4) ==1)
						Jsem z toho neštaštný.
					@elseif (rand(0,6) ==1)
						Trvá to již tři dny
					@endif
				</td>
				<td>
					@if ($problem->seen_by)
						{{$problem->seen_by}} ({{$problem->seen_at->format('d.m. H:i')}})
					@endif
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

@endsection