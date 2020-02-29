<?php
/**
 * hello child tracking codes
 *
 * @link https://kinsta.com/knowledgebase/add-code-wordpress-header-footer/
 *
 * @package HelloChild 
 */


/**
 * HEADER TRACKING CODES
 * **************************************
 */

/** Google Tag Manager Code
 * *********************** */
add_action('wp_head', 'hello_child_tracking_gtm');

function hello_child_tracking_gtm(){
?>

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth=9eXmjTsztYoM0aS2ex-oWg&gtm_preview=env-1&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKZ938B');</script>

<!-- End Google Tag Manager -->

<?php
};