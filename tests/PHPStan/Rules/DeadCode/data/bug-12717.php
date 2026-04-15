<?php declare(strict_types = 1);

namespace Bug12717;

use Bug12717Vendor\MyTrait;

class MyClass
{

	use MyTrait;

	private static function getMap(): array
	{
		return [
			'one' => 1,
			'two' => 2,
			'three' => 3,
		];
	}

	private function getValue(string $key): int
	{
		return self::getMap()[$key];
	}

}
