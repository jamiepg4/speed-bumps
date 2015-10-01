<?php
namespace Speed_Bumps\Constraints\Elements;

class Dummy extends Constraint_Abstract {
	public function paragraph_not_contains_element( $paragraph ) {
		return false;
	}

	public function not_inside_unclosed_element( $before, $after ) {
		return false;
	}
}
