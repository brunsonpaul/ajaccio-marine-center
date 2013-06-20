<?php

add_theme_support('post-thumbnails');

function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
	}


add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


register_nav_menus( array(
	'header_menu' => 'My header menu'
) );



  $labels = array(
    'name'                       => _x( 'Catégorie', 'taxonomy general name' ),
    'singular_name'              => _x( 'Catégorie', 'taxonomy singular name' ),
    'search_items'               => __( 'Rechercher une catégorie' ),
    'popular_items'              => __( 'Catégories populaires' ),
    'all_items'                  => __( 'Toutes les catégories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Editer la catégorie' ),
    'update_item'                => __( 'Mettre à jour la catégorie' ),
    'add_new_item'               => __( 'Ajouter une catégorie' ),
    'new_item_name'              => __( 'Nom de la catégorie' ),
    'separate_items_with_commas' => __( 'Séprarer les catégories avec des virgules' ),
    'add_or_remove_items'        => __( 'Ajouter / supprimer une catégorie' ),
    'choose_from_most_used'      => __( 'Choisir la catégorie la plus vue' ),
    'not_found'                  => __( 'Aucune catégorie trouvée.' ),
    'menu_name'                  => __( 'Catégories' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'categories' ),
  );

  register_taxonomy( 'categories', array('bateaux_neufs','locations','accessoires','bateaux_occasions'), $args );






class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<em>';
           $append = '</em>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}