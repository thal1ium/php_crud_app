<?php require 'partials/head.php'; ?>

<body>
  <div class="wrapper">

    <?php require 'partials/header.php'; ?>

    <main class="main">
      <div class="main__container">
        <form action="" class="main__form form">
          <input type="text" placeholder="Title" class="form__input">
          <div class="form__wrapper">
            <label for="img">Add image (png/jpeg)</label>
            <input type="file" id="img" accept="image/png, image/jpeg" class="form__input" />
          </div>
          <textarea type="text" placeholder="Text" rows="15" cols="2" class="form__input textarea"></textarea>
          <button type="submit" class="form__button">Save</button>
        </form>
      </div>
    </main>

    <?php require 'partials/footer.php'; ?>

  </div>
</body>

</html>