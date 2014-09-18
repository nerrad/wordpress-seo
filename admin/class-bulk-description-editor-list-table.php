<?php
/**
 * @package Admin
 */

if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}


if ( ! class_exists( 'WPSEO_Bulk_Description_List_Table' ) ) {
	/**
	 *
	 */
	class WPSEO_Bulk_Description_List_Table extends WPSEO_Bulk_List_Table {


		/**
		 * Current type for this class will be (meta) description.
		 *
		 * @var string
		 */
		protected $page_type = 'description';

		/**
		 * The meta type which will be used in get_meta_data
		 * @var string
		 */
		protected $meta_type = 'metadesc';

		/**
		 * The columns shown on the table
		 *
		 * @return array
		 */
		function get_columns() {
			return array_merge(
				parent::get_columns(),
				array(
					'col_existing_yoast_seo_metadesc' => __( 'Existing Meta Description', 'wordpress-seo' ),
					'col_new_yoast_seo_metadesc'      => __( 'New Meta Description', 'wordpress-seo' ),
				)
			);
		}

	} /* End of class */
} /* End of class-exists wrapper */
