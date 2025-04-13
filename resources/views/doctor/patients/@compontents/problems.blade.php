<table class="table">
	<thead>
		<tr>
			<th>Kdy</th>
			<th>Typ problému</th>
			<th>Víděl lékař</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($problems as $problem)
			<tr class="{{$problem->seen_by == null ? 'fw-bold' : ''}}">
				<td>{{$problem->datetime->format('d.m H:i')}}</td>

				<td>{{$problem->type}}</td>
				<td>
					@if ($problem->seen_by)
						{{$problem->seen_by}} ({{$problem->seen_at->format('d.m. H:i')}})
					@endif
				</td>
			</tr>
		@endforeach
	</tbody>
</table>