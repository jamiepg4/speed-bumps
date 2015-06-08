<?php
namespace Speed_Bumps\Constraint\Text;

class Speed_Bumps_Text_Constraints {

	public static function minimum_content_length( $canInsert, $context, $args, $alreadyInsertAd ) {

		if ( strlen( $context['the_content'] ) < $args['minimum_content_length'] ) {
			$canInsert = false;
		}

		return $canInsert;
	}

}
