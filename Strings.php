<?php


trait Strings {
	protected $requiresTuning;


	public function getRequiresTuning(): bool {
		return $this->requiresTuning;
	}

	public function setRequiresTuning(bool
	$newRequiresTuning): void {
		$this->requiresTuning = $newRequiresTuning;
	}

	public function run(): void {
		if($this->requiresTuning === true) {
			echo "My ears!" . PHP_EOL;
		} else {
			echo "That's some good music!" . PHP_EOL;
		}
	}
}

