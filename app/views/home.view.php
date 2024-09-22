<?php require 'partials/head.php'; ?>

<body>
  <div class="wrapper">

    <?php require 'partials/header.php'; ?>

    <main class="main">
      <div class="main__container">
        <ul class="main__list list">
          <?php if($res) : ?>
            <?php foreach($res as $post) : ?>
              <li class="list__item">
                <h2 class="list__title"><?= htmlspecialchars($post['title']) ?></h2>
                <img src="<?= htmlspecialchars($post['img_url']) ?>" alt="" class="list__img">
                <p class="list__text"><?= htmlspecialchars($post['text']) ?></p>
              </li>
            <?php endforeach ; ?>
          <?php else : ?>
            <h2>No content</h2>
          <?php endif ; ?>
        </ul>
      </div>
    </main>

    <?php require 'partials/footer.php'; ?>

  </div>
</body>

</html>