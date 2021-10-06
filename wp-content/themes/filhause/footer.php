<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Filhause
 */
	$logo_footer = get_field('logo_footer', 'options');
	$icon_footer = get_field('icon_footer', 'options');
?>
<footer class="footer contacts">
    <div class="contacts__logo">
        <a rel="stylesheet" href="<?php echo $logo_footer['logo_link']; ?>"><img src="<?php echo $logo_footer['logo_icon']['sizes']['medium']; ?>" alt="FilHause"></a>
    </div>
    <!-- <div>
        Автор иконок: <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/ru/" title="Flaticon">www.flaticon.com</a>
    </div> -->
    <div class="contacts__link">
        <div class="contacts__socialnetwork socialnetwork">
            <a rel="stylesheet" href="<?php echo $icon_footer['whatsapp']['logo_link']; ?>"><img src="<?php echo $icon_footer['whatsapp']['icon']['sizes']['medium']; ?>" alt="telegram"></a>
            <a rel="stylesheet" href="<?php echo $icon_footer['instagram']['logo_link']; ?>"><img src="<?php echo $icon_footer['instagram']['icon']['sizes']['medium']; ?>" alt="instagram"></a>
            <a rel="stylesheet" href="<?php echo $icon_footer['telegram']['logo_link']; ?>"><img src="<?php echo $icon_footer['telegram']['icon']['sizes']['medium']; ?>" alt="whatsap"></a>
        </div>
    </div>
</footer>
	</div>
	<!-- Script -->
	<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> -->
	<?php wp_footer(); ?>
</body>
<?php
   // echo '<pre>';
   // print_r($icon_footer);
   // echo  '</pre>';
?>
</html>