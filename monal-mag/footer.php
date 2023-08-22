</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="mt-4 p-0 site-footer " role="contentinfo">
<?php 
$footer_name = esc_html(get_theme_mod('footer_choices', '1' ), 'monal-mag');
if($footer_name == '1'){
    require_once dirname(__FILE__) . '/inc/footer_templates/footer1.php';
}
elseif ($footer_name == '2'){
    require_once dirname(__FILE__) . '/inc/footer_templates/footer2.php';
}
?> 
    <section class="py-5 text-center bg-black copyright copyright-background copyright-text font-poppins">
        <?php
            $copyright_text = get_theme_mod('copyright_text_footer', '© 2021 - WordPress Theme : monal-mag');
            echo esc_html($copyright_text);
            ?>

        </p>
        
    </section>

</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>