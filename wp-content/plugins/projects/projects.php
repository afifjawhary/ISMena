<?php
/**
 *
 * Plugin Name: Projects
 *
 *
 * Description: Create new custom post type called Projects
 *
 * Version: 1.0.0
 *
 * Author: Afif Jawhary
 *
 * Text Domain: ISMena
 */


class Projects
{
    public function __construct()
    {

    }

    function projectsEnqueueStyles() {
        wp_enqueue_style( 'projects_style',  plugin_dir_url( __FILE__ ) . '/css/style.css' );
       // wp_enqueue_script( 'projects_script', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    }

    function registerPostTypes()
    {
        register_taxonomy(
            'project_categories',  
            'projects',            
            array(
                'hierarchical' => true,
                'label' => 'Project Categories', 
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'projects',    
                    'with_front' => false  
                )
            )
        );
        register_post_type( 'projects',
            array(
                'labels' => array(
                    'name' => 'All Projects',
                    'singular_name' => 'Project' ,
                    'menu_name'           => 'Projects',
                    'singular_name'       => 'Project',
                    'all_items'           => 'All Projects',
                    'add_new_item'        => 'Add New Project',
                    'search_items'        => 'Search Projects',
                    'not_found'           => 'No Projects found',
                    'not_found_in_trash'  => 'No Projects found in Trash',
                    'edit_item'           => 'Edit Project',
                    'new_item'            => 'New Project',
                    'view_item'           => 'View Project'
                ),
                'supports'      => array( 'title', 'editor', 'author', 'revisions','thumbnail' ),
                'menu_position' => 5,
                'public'        => true,
                'has_archive' => true,
                'taxonomies' => array( 'post_tag','project_categories'),
                'rewrite' => array( 'slug' => 'projects/%project_categories%', 'with_front' => FALSE ),
                'menu_icon' => 'dashicons-products'
            )
        );
    }

    function getAllProjects($atts){
        $number_of_posts = isset($atts["nb_posts"]) ? $atts["nb_posts"] : 100;
        query_posts( array( 'post_type' => 'projects', 'showposts' => $number_of_posts ) );

        if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div class="project_content" data-id="<?php echo get_the_ID();?>">
                <div><?php twenty_twenty_one_post_thumbnail(); ?></div>
                <a class="carousel_projects" href="<?php echo get_permalink(get_the_ID());?>">
                    <h2 class="project_title"><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <div><b>Created on: </b><?php echo get_the_date( 'Y-m-d' , get_the_ID());?></div>
                </a>
            </div>
            <?php
        endwhile; endif;
        wp_reset_query(); 
    }

    function filterProjectsLink( $link, $post ) {
        if ( $post->post_type !== 'projects' )
            return $link;

        if ( $cats = get_the_terms($post->ID, 'project_categories') )
            $link = str_replace('%project_categories%', array_pop($cats)->slug, $link);

        return $link;
    }

}

$projects = new Projects();
add_shortcode( 'projects', array($projects, 'getAllProjects') );
add_action('init',array($projects, 'registerPostTypes'));
add_filter('post_type_link', array($projects, 'filterProjectsLink'),10, 2);
add_action('wp_enqueue_scripts', array($projects, 'projectsEnqueueStyles'));