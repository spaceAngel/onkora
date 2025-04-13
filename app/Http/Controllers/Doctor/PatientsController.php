<?php

namespace App\Http\Controllers\Doctor;

use App\Enums\ProblemType;
use App\Enums\VisitState;
use App\Enums\VisitType;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Support\Str;

class PatientsController
{
	public function index()
	{
		return view(
			'doctor.patients.index',
			[
				'patients' => $this->getFakePatients()
			]
		);
	}

	public function detail(
		int $id
	)
	{
		return view(
			'doctor.patients.detail',
			[
				'patient' => $this->getFakePatient(),
				'messages' => $this->getFakeMessages(),
				'visits' => $this->getFakeVisits(),
				'problems' => $this->getFakeProblems(),
			]
		);
	}

	protected function getFakeVisits(): array
	{
		$rslt = [];
		$dayAdd = 0;
		for ($i = 0; $i < 10; $i++) {
			$dayAdd += rand(1, 120);
			$rslt[] = (object) [
				'date' => Carbon::now()->subYear()->addDays($dayAdd)->hour(rand(8, 16))->minute([0, 15, 30, 45][rand(0, 3)]),
				'type' => VisitType::cases()[array_rand(VisitType::cases())],
				'state' => VisitState::cases()[array_rand(VisitState::cases())],
			];
		}
		return $rslt;
	}

	protected function getFakeProblems()
	{
		$rslt = [];
		$i = 0;
		for ($j = 0; $j < rand(0,20); $j++) {
			$i += rand(1, 60*24);
			$rslt[] = (object) [
				'datetime' => now()->subDays(10)->addminutes($i),
				'type' => ProblemType::cases()[array_rand(ProblemType::cases())],
				'seen_by' => rand(0, 1) == 1 ? Factory::create('cs_CZ')->name : null,
				'seen_at' => now()->subDays(10)->addminutes($i)->addMicros(rand(1, 300)),

			];
		}
		return array_reverse($rslt);
	}

	protected function getFakePatients(int $count = 10): array
	{
		$patients = [];
		foreach (range(0, $count) as $index) {
			$patients[] = $this->getFakePatient();
		}
		return $patients;
	}

	protected function getFakePatient(): \stdClass {
		$faker = Factory::create('cs_CZ');
		$name = $faker->lastName . ' ';
		$name .= Str::endsWith($name, 'á ') ? $faker->firstNameFemale : $faker->firstNameMale;
		return (object) [
			'name' => $name,
			'visit_last' => Carbon::now()->subDays(rand(10, 120)),
			'visit_next' => Carbon::now()->addDays(rand(10, 120)),
			'birth_number' => $this->getFakeBirthNumber(Str::contains($name, 'á ')),
			'pain_avg' => rand(0, 10),
			'pain_trend' => rand(-200, 200),
			'messages_unread' => rand(0, 1),
			'problems_unread' => rand(0, 1),
		];
	}

	protected function getFakeBirthNumber(bool $isFemale): string
	{
		return Str::padLeft(rand(0, 99), 2, '0')
		. Str::padLeft(
			$isFemale ? rand(51, 62) : rand(1, 12),
			2,
			'0'
		)
		. Str::padLeft(rand(1, 31), 2, '0')
		. Str::padLeft(rand(0, 9999), 4, '0');
	}

	protected function getFakeMessages(): array
	{
		return [
  			(object) [
				"text" => "Dobrá den paní doktorko, dnes mě to velmi bolí. Můžete mi prosím napsat něco na bolest?",
				'date' => Carbon::now()->subDays(rand(4, 5))->subMinutes(rand(0, 600)),
				'doctor' => null
		    ],
			(object) [
				"text" => "Dobrý den pane Nováku, nůžete si vzít Novalgin i večer. Pokud to nezabere, dejte prosím vědět. Dr. Bpůíto",
				'date' => Carbon::now()->subDays(rand(3, 4))->subMinutes(rand(0, 600)),
				'doctor' => 'MUDr. Bolíto Jan'
		    ],
		    (object) [
			    "text" => "Dobrý den pane Nováku, zabralo Vám zvýšení léků na bolest? Dr. Bolíto",
			    'date' => Carbon::now()->subDays(rand(2, 3))->subMinutes(rand(0, 600)),
			    'doctor' => 'MUDr. Bolíto Jan'
		    ],
		    (object) [
			    "text" => "Dobrá den pane doktore, ano, zabralo. Konećne jsem mohl usnout",
			    'date' => Carbon::now()->subDays(rand(3, 4))->subMinutes(rand(0, 600)),
			    'doctor' => null
		    ]


		];
	}
}
