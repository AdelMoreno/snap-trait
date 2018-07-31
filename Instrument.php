<?php

class Instrument {
protected $instrument;

	public function __construct(string $newInstrument) {
		{
		$this->setInstrument($newInstrument);
		}
	}

	public function getNewInstrument(): string {
		return ($this->instrument);
	}

	public function setInstrument(string $newInstrument): void {
	$newInstrument = trim($newInstrument);
		$newInstrument = filter_var($newInstrument, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newInstrument) === true) {
	throw (new InvalidArgumentException("Instrument is empty or insecure"));
	}
	$this->instrument = $newInstrument;
	}

}