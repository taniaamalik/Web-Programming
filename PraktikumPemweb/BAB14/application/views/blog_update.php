<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Saya</title>
  </head>
  <body>
    <h1>Update Artikel</h1>
    <form action="<?php echo base_url('blog/update_process'); ?>" method="post">
    <?php foreach ($posts as $post): ?>
      <label>
        Judul: <input type="text" name="judul" value="<?php echo $post->judul; ?>" autofocus>
      </label>
      <br>
      <label>
        Konten:<br>
        <textarea name="konten"><?php echo $post->konten ?></textarea>
      </label>
      <br>
      <input type="hidden" name="id" value="<?php echo $post->id ?>">
      <input type="submit" value="Update">
      <?php endforeach; ?>
    </form>
  </body>
</html>