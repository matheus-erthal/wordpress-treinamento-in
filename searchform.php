<php ?>
  
<form action="/" method="get" accept-charset="utf-8"  role="search">
  <div>
    <input type="text" class="barra" placeholder="Pesquisar" value="<?php the_search_query(); ?>" />
    <input type="submit" class="botao-barra" value="<?php echo esc_attr_x( 'search', 'submit button' ) ?>" />
  </div>
</form>
