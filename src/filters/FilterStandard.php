<?php

//
//  FPDM - Filter Standard
//  NOTE: dummy filter for unfiltered streams!
//

if (isset($FPDM_FILTERS)) {
	array_push($FPDM_FILTERS, "Standard");
}

class FilterStandard {
	public function decode($data) {
		return $data;
	}

	public function encode($data) {
		return $data;
	}
}
