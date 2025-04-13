<?php

namespace App\Http\Controllers\Doctor;

use App\Enums\ProblemType;
use Faker\Factory;

class ProblemsController
{
	public function index()
	{
		return view(
			'doctor.problems.index',
			[
				'problems' => $this->getFakeProblems()
			]
		);
	}

	protected function getFakeproblems(): array
	{
		$rslt = [];
		$i = 0;
		for ($j = 0; $j < rand(6,30); $j++) {
			$i += rand(1, 60*24);
			$rslt[] = (object) [
				'datetime' => now()->subDays(10)->addminutes($i),
				'patient'=> Factory::create('cs_CZ')->name,
				'type' => ProblemType::cases()[array_rand(ProblemType::cases())],
				'seen_by' => rand(0, 1) == 1 ? Factory::create('cs_CZ')->name : null,
				'seen_at' => now()->subDays(10)->addminutes($i)->addMicros(rand(1, 300)),

			];
		}
		return array_reverse($rslt);
	}
}