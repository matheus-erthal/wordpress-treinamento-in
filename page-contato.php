
<?php 
/* Template Name: Home Template*/
//determinou o nome do template//

get_header(); //chama o header//

?>

        <section class="contato">
                <div class="formulario">
                    <form id="contact" action="" method="post">
                        <label>Nome</label>
                        <input type="text" placeholder="Seu nome">
                        <label>E-mail</label>
                        <input type="text" placeholder="Seu e-mail">
                        <label>O que deseja?</label>
                        <input type="text" placeholder="O que deseja?">
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </section>

<?php get_footer(); ?>