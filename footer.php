<?php
/**
 * @package WordPress
 * @subpackage meu-tema
 * @since 1.0
 * @version 1.2
 */

?>
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/style.css">
<footer>
  <div class="footer-container">
      <div class="contato">
        <h2>Contato:</h2>
        <p>Tel.: (21)98920-6381</p>
        <p>E-mail: macgonagall@hogwarts.com</p>
      </div>
      <a class="brasao" href="#">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/horgwarts.png" alt="Emblema de Hogwarts">
      </a>
      <div class="rede_soc">
        <nav>
            <ul class="icones-sociais">
                <li>
                    <a href="https://br.linkedin.com" class="linkedin">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="emblema linkedin">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/" class="twitter">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="emblema twitter">
                    </a>
                </li>
                <li>
                    <a class="facebook" href="http://www.facebook.com.br">
                      <img src="<?= get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="emblema face">
                    </a>
                </li>
            </ul>
        </nav>
      </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
