<?php
	/*
		Plugin Name: Sort posts by alphabetical order
		Description: Displays posts in alphabetical & ascending order from any category selection
		Version: 1.1
		Author: Jersey Shore Technologies
		Author URI: http://jstechnologies.net
		License: GPL2
		License URI:  https://www.gnu.org/licenses/gpl-2.0.html
		
		sort-categories-by-alphabetical-order is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 2 of the License, or
		any later version.
		
		sort-categories-by-alphabetical-order is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
		GNU General Public License for more details.
		
		You should have received a copy of the GNU General Public License
		along with Sort Categories. If not, see {License URI}.
	*/
	
	function sort_categories_by_alphabetical_order($query) {
		if (is_category()) {
			$query->set('orderby', 'title');
			$query->set('order', 'ASC');
			return $query;		
		}
	}
	add_action('pre_get_posts', 'sort_categories_by_alphabetical_order');
		
	register_activation_hook(__FILE__, 'sort_categories_by_alphabetical_order');
			
?>