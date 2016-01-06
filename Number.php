<?php
namespace WillV\Project;

class Number {
	private $value;

	private function __construct() {
	}

	static public function create($value) {
		$number = new Number;
		$number->value = $value;
		return $number;
	}

	public function isFactor($otherValue) {
		return ($this->value % $otherValue) == 0;
	}
}