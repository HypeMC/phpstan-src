<?php declare(strict_types = 1);

namespace Bug12717Vendor;

trait MyTrait
{

	/**
	 * @return non-empty-list<string>
	 */
	public static function getLabels(): array
	{
		return array_keys(self::getMap());
	}

	public function hasValue(string $key): bool
	{
		return $this->getValue($key) > 0;
	}

	/**
	 * @return non-empty-array<non-empty-string, self>
	 */
	abstract private static function getMap(): array;

	abstract private function getValue(string $key): int;

}
