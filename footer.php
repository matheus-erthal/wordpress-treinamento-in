<?php
/**
 * @package WordPress
 * @subpackage Restaurante Sabor Brasil
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.2
 */

?>


<?php wp_footer(); ?>

<footer class="footer">
    <div class="footer-container">
      <?php get_search_form(); ?>
      <?php echo esc_attr_x( 'Search', 'submit button' ); ?>
      <div class="footer-container-img">
            <a href="http://facebook.com"><img src="<?= get_template_directory_uri(); ?>/assets/img/facebook.png"></a>
            <a href="http://twitter.com"><img src="<?= get_template_directory_uri(); ?>/assets/img/twitter.png"></a>
            <a href="http://instagram.com"><img src="<?= get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
      </div>
    </div>

    <div class="footer-sobre">
    <p>Layout desenvolvido pela equipe 1 Ⓒ 2018</p>
    </div>

</footer>



<footer></footer>
<?php wp_footer(); ?>

</body>
</html>
