<?php
if(have_posts()):
    while(have_posts()): the_post();
    //las etiquetas de contenidos
    get_template_part('templates/template','jumbotron');
    endwhile;
else:
    get_template_part('templates/content','none');
endif;
?>