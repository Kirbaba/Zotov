    <?php

define('GENERATOR_THEME_DIR', plugin_dir_path(__FILE__));
define('GENERATOR_THEME_URL', plugin_dir_url(__FILE__));

require_once(GENERATOR_THEME_DIR . "/lib/parser_generator_theme.php");

function add_style()
{
    wp_enqueue_style('my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style('fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('zoomwall-css', get_template_directory_uri() . '/css/zoomwall.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
}

function add_script()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script('my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script('fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_enqueue_script('zoomwall-js', get_template_directory_uri() . '/js/zoomwall.js', array(), '1');
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/script.js', array(), '1');

}

add_action('wp_enqueue_scripts', 'add_style');
add_action('wp_enqueue_scripts', 'add_script');

function prn($content)
{
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r($content);
    echo '</pre>';
}

function my_pagenavi()
{
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big))
    , 'format' => ''
    , 'current' => max(1, get_query_var('paged'))
    , 'total' => $wp_query->max_num_pages
    );

    $result = paginate_links($args);

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace('/page/1/', '', $result);

    echo $result;
}

function excerpt_readmore($more)
{
    return '... <br><a href="' . get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}

add_filter('excerpt_more', 'excerpt_readmore');


if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');

/*----------ADMIN--------------*/


function gen_menu_page()
{
    add_menu_page('Слайдер', 'Настройки слайдера', 'administrator', 'slides', 'genSlidesAdminPage');
    add_menu_page('Фотографы и видеографы', 'Настройки страницы "Фотографы и видеографы"', 'administrator', 'photographers', 'genPhotographersAdminPage');
}

add_action('admin_menu', 'gen_menu_page');

function genSlidesAdminPage()
{
    global $wpdb;
    $message = '';
    $parser = new Parser_generator_theme();

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if (isset($_GET['delSlide'])) {
        $wpdb->delete('head_slider', array("id" => $_GET['delSlide']));
        $message = "Фото успешно удалено!";
    }

    if (isset($_POST['attachment_url'])) {
        $wpdb->insert('head_slider', array("img" => $_POST['attachment_url']));
        $message = "Слайд успешно добавлен!";
        echo mysql_error();
    }

    $generate = '';

    $slides = $wpdb->get_results("SELECT * FROM head_slider");
    foreach ($slides as $slide) {
        $generate .= "<tr>
                        <td style='padding-right: 10px'><img src='" . $slide->img . "' alt='' style='width: 50px;'/></td>
                        <td style='padding-right: 10px'><a href='/wp-admin/admin.php?page=slides&delSlide=$slide->id'>Удалить</a></td>
                      </tr>";
    }

    $parser->parse(GENERATOR_THEME_DIR . "/view/admin/headSlider.php", array('slides' => $generate,
        'message' => $message), true);
}

function slidesShortcode()
{
    global $wpdb;

    $iterator = 0;

    $slides = $wpdb->get_results("SELECT * FROM head_slider");

    foreach ($slides as $key => $slide) {

        $generate .= "<img src='" . $slide->img . "' alt='Carousel Item Title'>";
        $iterator++;
    }

    return "<div class='fotorama' data-arrows='false' data-minwidth='100%'  data-ratio='1634/697' data-fit='cover' data-autoplay='true' data-loop='true'>" . $generate . "</div>";
}

add_shortcode('headSlides', 'slidesShortcode');

// load script to admin
function admin_js()
{
    $url = get_template_directory_uri() . '/js/admin.js';
    echo "<script type='text/javascript' src='$url'></script>";
}

add_action('admin_head', 'admin_js');

/*------------END ADMIN--------------*/

function genPhotographersAdminPage()
{
    global $wpdb;
    $message = '';
    $parser = new Parser_generator_theme();

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if (isset($_GET['delPhoto'])) {
        $wpdb->delete('photographers_gallery', array("id" => $_GET['delPhoto']));
        $message = "Фото успешно удалено!";
    }

    if (isset($_POST['attachment_url'])) {
        $wpdb->insert('photographers_gallery', array("img" => $_POST['attachment_url']));
        $message = "Слайд успешно добавлен!";
        echo mysql_error();
    }

    $generate = '';

    $photos = $wpdb->get_results("SELECT * FROM photographers_gallery");
    foreach ($photos as $photo) {
        $generate .= "<tr>
                        <td style='padding-right: 10px'><img src='" . $photo->img . "' alt='' style='width: 50px;'/></td>
                        <td style='padding-right: 10px'><a href='/wp-admin/admin.php?page=photographers&delPhoto=$photo->id'>Удалить</a></td>
                      </tr>";
    }

    $parser->parse(GENERATOR_THEME_DIR . "/view/admin/photographers_gallery.php", array('photos' => $generate,
        'message' => $message), true);
}

function photosShortcode()
{
    global $wpdb;

    $iterator = 0;

    $photos = $wpdb->get_results("SELECT * FROM photographers_gallery");

    foreach ($photos as $key => $photo) {

        $generate .= "<img src='" . $photo->img . "' alt='Carousel Item Title'>";
        $iterator++;
    }

    return "<div class='fotorama' data-nav='thumbs' data-fit='scaledown' data-autoplay='true' data-loop='true' date-width='80%' data-height'500' data-maxwidth='100%' data-navposition='bottom' data-ratio='3/2' data-thumbheight='56'>" . $generate . "</div>";
}

add_shortcode('photographersGallery', 'photosShortcode');

function get_events()
{
    $parser = new Parser_generator_theme();
    $events = get_posts(array(
            'numberposts' => 4,
            'category' => '13',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status' => 'publish'
        )
    );
    foreach($events as $event){
        $img = get_the_post_thumbnail($event->ID);
        $permalink = get_permalink( $event->ID );
        $parser->parse(GENERATOR_THEME_DIR . "/view/events/events_view.php", array('images'=>$img,'title'=>$event->post_title,'link'=>$permalink), true);
    }

   // $img = get_the_post_thumbnail($events['ID']);
    /*$parser->parse(GENERATOR_THEME_DIR . "/view/.php", array(), true);*/
   // prn($img);
  // prn($events);
}

add_shortcode('events','get_events');

function true_customizer_init( $wp_customize ) {
       $wp_customize->add_section(
        'bannersBlock', // id секции, должен прописываться во всех настройках, которые в неё попадают
        array(
            'title'     => 'Лого',
            'priority'  => 200, // приоритет расположения относительно других секций
            'description' => '' // описание не обязательное
        )
    );

    $wp_customize->add_setting(
        'banner1',
        array(
            'default'           => 'arse',
            'capability'        => 'edit_theme_options',
            'type'           => 'option',
        )
    );
  
    $wp_customize->add_control(
        new   WP_Customize_Upload_Control($wp_customize, 'banner1', array(
                'label'    => __('Загрузить лого', 'themename'),
                'section'  => 'bannersBlock',
                'settings' => 'banner1',
            )
        )
    );
}

add_action( 'customize_register', 'true_customizer_init' );