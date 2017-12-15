<?php if (have_comments() ) : ?>
  <h6 id="comments"><span class="badge badge-dark"> <?php comments_number('% Comentarios' ); ?></span></h6>
  <div class="list-group comment-list pb-3">
    <?php wp_list_comments( array( 'style' => 'div' ) ); ?>
  </div>
  <?php else: ?>
  <h6 id="comments"><span class="badge badge-dark"> <?php comments_number('Aún no hay comentarios en este articulo' ); ?></span></h6>
<?php endif; ?>

<?php
  $comments_args = array(
    'label_submit' => 'Enviar comentario',
    'title_reply' => 'Deja un comentario',
    'Comment_notes_after' => ''
  );
  comment_form($comments_args);
?>
