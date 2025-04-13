@extends('doctor.layout', ['currentPage' => 'patients'])
@section('content')

	<div class="row">
		<div class="col-4">
			<h2>{{$patient->name}}</h2>
		</div>
		<div class="col">
			{{$patient->birth_number}}
		</div>
	</div>
	<div class="row">
		<div class="col-10">
			@include('doctor.patients.@compontents.header')
			<div class="row mt-5">
				<div class="col-2">
					<ul class="js-tab nav nav-tabs nav-pills flex-column" role="tablist">
						<li class="nav-item">
							<a data-bs-toggle="tab" class="nav-link active" aria-current="page" href="#subj">Subj.</a>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="tab" class="nav-link" href="#state">Vývoj stavu</a>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="tab" class="nav-link" href="#messages">Zprávy</a>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="tab" class="nav-link" href="#calendar">Návštěvy</a>
						</li>
						<li class="nav-item">
							<a data-bs-toggle="tab" class="nav-link disabled" aria-disabled="true">Disabled</a>
						</li>
					</ul>
				</div>
				<div class="col-10">
					<div class="tab-content border p-3">
						<div class="tab-pane show active"  id="subj" role="tabpanel">
							@include('doctor.patients.@compontents.subj')
						</div>
						<div class="tab-pane" id="state" role="tabpanel">
							@include('doctor.patients.@compontents.state')
						</div>
						<div class="tab-pane" id="messages" role="tabpanel">
							@include('doctor.patients.@compontents.messages')
						</div>
						<div class="tab-pane" id="calendar" role="tabpanel">
							@include('doctor.patients.@compontents.visits')
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2">
			@include('doctor.patients.@compontents.actions')
		</div>
	</div>
@endsection