<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link {{isset($currentPage) && $currentPage== 'patients' ? 'active' : ''}}"
		   aria-current="page" href="{{route('doctor.patients.index')}}"
		>
			<span class="fa fa-user-group"></span>
			Pacienti
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link {{isset($currentPage) && $currentPage == 'calendar' ? 'active' : ''}}"
			href="{{route('doctor.calendar.index')}}"
		>
			<span class="fa fa-calendar-day"></span>
			Objednávání
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link"  {{isset($currentPage) && $currentPage== 'messagebox' ? 'active' : ''}}
			href="#"
		>
			<span class="fa fa-message"></span>
			Messagebox
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">K řešení</a>
	</li>
</ul>