<?php
/**
 * @package WordPress
 * @subpackage Restaurante Sabor Brasil
 * @since 1.0
 * @version 1.2
 */

?>

<?php wp_footer(); ?>

<footer class="footer">
    <div class="footer-container">

          <input class="barra" type="text" onblur="if (this.value == '')
            {this.value = 'Pesquisar';}" onfocus="if
            (this.value == 'Pesquisar')
            {this.value = '';}" value="Pesquisar">
          <input type="submit" class="botao-barra" value="<?php esc_attr_e( 'ir', 'nest' ); ?>">

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


</body>
</html>
