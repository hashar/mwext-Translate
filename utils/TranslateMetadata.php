<?php
/**
 * Contains class which offers functionality for reading and updating Translate group
 * related metadata
 *
 * @file
 * @author Niklas Laxström
 * @author Santhosh Thottingal
 * @copyright Copyright © 2012, Niklas Laxström, Santhosh Thottingal
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

class TranslateMetadata {
	protected static $cache = null;

	/**
	 * Get a metadata value for the given group and key.
	 * @param $group The group name
	 * @param $key Metadata key
	 * @return String
	 */
	public static function get( $group, $key ) {
		if ( self::$cache === null ) {
			$dbr = wfGetDB( DB_SLAVE );
			self::$cache = $dbr->select( 'translate_metadata', '*', array(), __METHOD__ );
		}

		foreach ( self::$cache as $row ) {
			if ( $row->tmd_group === $group && $row->tmd_key === $key ) {
				return $row->tmd_value;
			}
		}

		return false;
	}

	/**
	 * Set a metadata value for the given group and metadata key. Updates the value if already existing.
	 * @param $group The group id
	 * @param $key Metadata key
	 * @param $value Metadata value
	 */
	public static function set( $group, $key, $value ) {
		$dbw = wfGetDB( DB_MASTER );
		$data = array( 'tmd_group' => $group, 'tmd_key' => $key, 'tmd_value' => $value );
		if ( $value === false ) {
			unset( $data['tmd_value'] );
			$dbw->delete( 'translate_metadata', $data );
		} else {
			$dbw->replace( 'translate_metadata', array( array( 'tmd_group', 'tmd_key' ) ), $data, __METHOD__ );
		}

		self::$cache = null;
	}

	/**
	 * Wrapper for getting subgroups.
	 * @param string $groupId
	 * @return array|String
	 * @since 2012-05-09
	 * return array|false
	 */
	public static function getSubgroups( $groupId ) {
		$groups = self::get( $groupId, 'subgroups' );
		if ( $groups !== false ) {
			if ( strpos( $groups, '|' ) !== false ) {
				$groups = explode( '|', $groups );
			} else {
				$groups = array_map( 'trim', explode( ',', $groups ) );
			}

			foreach ( $groups as $index => $id ) {
				if ( trim( $id ) === '' ) {
					unset( $groups[$index] );
				}
			}
		}

		return $groups;
	}

	/**
	 * Wrapper for setting subgroups.
	 * @param string $groupId
	 * @param array $subgroupIds
	 * @since 2012-05-09
	 */
	public static function setSubgroups( $groupId, $subgroupIds ) {
		$subgroups = implode( '|', $subgroupIds );
		self::set( $groupId, 'subgroups', $subgroups );
	}

	/**
	 * Wrapper for deleting one wiki aggregate group at once.
	 * @param string $groupId
	 * @since 2012-05-09
	 */
	public static function deleteGroup( $groupId ) {
		$dbw = wfGetDB( DB_MASTER );
		$conds = array( 'tmd_group' => $groupId );
		$dbw->delete( 'translate_metadata', $conds );
	}

}
