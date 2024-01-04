<?php
/*
Plugin Name: Unicode to Bijoy Converter
Description: A simple Unicode to Bijoy converter tool with shortcode support. [unicode_to_bijoy_converter]
Version: 1.0
Author: Your Name
*/

// Enqueue necessary scripts and styles
function unicode_to_bijoy_converter_scripts() {
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'js/common.js', array('jquery'), null, true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), null, true);
    wp_enqueue_style('custom-font', 'https://fonts.maateen.me/kalpurush/font.css');
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'css/style.css',  array(), null, true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'unicode_to_bijoy_converter_scripts');

// Add shortcode for the converter tool
function unicode_to_bijoy_converter_shortcode() {
    ob_start();
    ?>
    <div class="container">
       <div class="row">
        <div class="col-md-12">
        <h4 class="mt-3" style="font-family:Kalpurush">Unicode To Bijoy Converter With Voice Type</h4>
        <p>Looking for a Unicode to Bijoy font converter? Dhaka Post Bangla Converter offers you Unicode to Bijoy, Bijoy to Unicode, Ansi to Unicode, Unicode to Ansi, Avro to Bijoy, Bijoy to Avro easy conversion with voice type.</p>

      

        <textarea id="inputText" class="form-control" placeholder="ইউনিকোড কি-বোর্ডের লেখা এখানে পেস্ট করুন"></textarea>
        
        <button onclick="convertToBijoy()" class="btn btn-primary mt-3">Unicode to Bijoy</button>
        <button onclick="convertToUnicode()" class="btn btn-primary mt-3">Bijoy to Unicode</button>
        <button onclick="fixUnicode()" class="btn btn-warning mt-3">Fix Unicode Broken</button>
        <button onclick="fixBijoy()" class="btn btn-warning mt-3">Fix Bijoy Broken</button>
        <button onclick="clearText()" class="btn btn-danger mt-3">Clear Text</button>
        <button id="voiceBtn" class="btn btn-info mt-3">Click Here to Voice Typing</button>
        <div id="output" class="mt-3">

        </div>

        
        </div>
       </div>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('unicode_to_bijoy_converter', 'unicode_to_bijoy_converter_shortcode');
?>
