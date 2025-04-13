<?php

namespace App\Http\Controllers\Doctor;

use App\Enums\VisitState;
use App\Enums\VisitType;
use Faker\Factory;

class CalendarController
{
	public function index() {
		return view(
			'doctor.calendar.index',
			[
				'visits' => $this->getFakeVisits()
			]
		);
	}

	protected function getFakeVisits(): array
	{
		$rslt = [];
		for($i = 0; $i < 2 * 7; $i++) {
			$rslt[] = (object) [
				 'time' => now()->startOfDay()->addHours(8)->addMinutes($i * 30),
				 'visits' => $this->getFakeSlot()

			];
		}
		return $rslt;
	}

	protected function getFakeSlot() : array
	{
		$rslt = [];
		for($i = 0; $i < rand(1, 3) ; $i++) {
			$rslt[] = (object) [
				'name' => Factory::create('cs_CZ')->name,
				'type' => VisitType::cases()[array_rand(VisitType::cases())],
				'state' => VisitState::cases()[array_rand(VisitState::cases())],
			];
		}
		return $rslt;
	}
}