(function($){
	$( document ).ready( function() {
		var $menu_item = $( '#toplevel_page_sevenp_blu_options' );

		if ( $menu_item.length ) {
			var $first_menu_item = $menu_item.find( '.wp-first-item' );

			if ( 'Blu' === $first_menu_item.find( 'a' ).text() ) {
				$first_menu_item.remove();
			}
		}
	});
})(jQuery)
