<?php

namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class Foo extends Bar implements FooInterface, BarInterface, FooBarInterface, \Countable, \ArrayAccess
{

	public function sampleFunction($a, $b = null)
	{
		if ($a === $b) {
			bar();
		} elseif ($a > $b) {
			$foo->bar($arg1);
		} else {
			BazClass::bar($arg2, $arg3);
		}
	}

	final public static function bar()
	{
		// method body
	}

	public function aVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongName(
	ClassTypeHint $arg1, &$arg2, array $arg3 = []
	)
	{
		// method body
		for ($i = 0; $i < 10; $i++) {

		}

		do {
			// structure body;
		} while ($expr);

		switch ($expr) {
			case 0:
				echo 'First case, with a break';
				break;
			case 1:
				echo 'Second case, which falls through';
			// no break
			case 2:
			case 3:
			case 4:
				echo 'Third case, return instead of break';
				return;
			default:
				echo 'Default case';
				break;
		}
	}
}

class A
{

	public function bee(
	SomeClassHint $object, $parameter1, $parameter2, $anotherParameter, $default = 'do_not_know'
	)
	{
		$x = 0;
		return $x;
	}
}