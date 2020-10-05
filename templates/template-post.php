<div class="card">
  <?php the_post_thumbnail()?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text"><?php the_excerpt() ?></p>
    <a href=" <?php the_permalink(); ?> " class="btn btn-light">Visitar</a>
  </div>
</div>