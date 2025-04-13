@extends('doctor.layout', ['currentPage' => 'patients'])
@section('content')
	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th>Jméno pacienta</th>
				<th>Rodné číslo</th>
				<th>Poslední návštěva</th>
				<th>Příští návštěva</th>
			</tr>
		</thead>
		<tbody>
			@foreach($patients as $patient)
				<tr class="js-link" data-url="{{route('doctor.patients.detail', ['patient' => 1])}}">
					<td style="width:56px;">
						@if($patient->messages_unread  > 0)
							<span class="fa fa-envelope float-start"></span>
						@endif
						@if($patient->problems_unread > 0)
							<spam class="fa fa-warning float-end"></spam>
						@endif
					</td>
					<td>{{$patient->name}}</td>
					<td>{{$patient->birth_number}}</td>

					<td>{{$patient->visit_last->format('d. m. Y')}}</td>
					<td>{{$patient->visit_next->format('d. m. Y')}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection