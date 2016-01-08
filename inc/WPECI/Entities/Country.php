<?php
/**
 * @package WPECI
 * @version 1.0.0
 * @author Felix Arntz <felix-arntz@leaves-and-love.net>
 */

namespace WPECI\Entities;

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

use WPOO\Term as Term;

if ( ! class_exists( 'WPECI\Entities\Country' ) ) {

	final class Country extends Term {
		protected static function get_item( $id = null ) {
			if ( null !== $id ) {
				$term = get_term( $id );
				if ( is_object( $term ) && is_a( $term, 'WP_Term' ) && 'eci_country' === $term->taxonomy ) {
					return $term;
				}
			}

			return null;
		}

		protected function __construct( $item ) {
			parent::__construct( $item );
		}
	}

}
