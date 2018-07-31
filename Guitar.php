<?php

class guitar extends Instrument {
	use Strings;

	protected $type;

	public function __construct(string $newInstrument, string $newType) {
		parent::__construct($newInstrument);
		$this->setType($newType);
	}

	public function getType(): string {
		return($this->type);
	}

	public function setType(string $newType): void {
		$this->type= $newType;
	}
}