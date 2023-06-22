<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rufina:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
  <script type="text/javascript" src="jquery-1.11.0.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="js/form-validation.js"></script>
  <title>Le Nouvel Observateur</title>
</head>

<script>
  $(function() {
    $("form[name='unos']").validate({
      rules: {
        title: {
          required: true,
          minlength: 5,
          maxlength: 30,
        },
        about: {
          required: true,
          minlength: 10,
          maxlength: 100,
        },
        content: {
          required: true,
        },
        picture: {
          required: true,
        }

      },
      messages: {
        title: {
          required: "Naslov ne smije biti prazan",
          minlength: "Naslov treba imati više od 6 znakova",
          maxlength: "Naslov treba imati manje od 30 znakova",
        },
        about: {
          required: "Potrebno je upisati kratki sadrzaj",
          minlength: "Kratki sadrzaj ne smije biti kraci od 10 znakova",
          maxLength: "Kratki sadrzaj ne smije biti duzi od 100 znakova",
        },
        content: {
          required: "Potrebno je upisati sadrzaj",
        },
        picture: {
          required: "Potrebno je uploadati sliku",
        },
      },
      highlight: function(element) {
        $(element).next().addClass("error");
      },
      unhighlight: function(element) {
        $(element).next().removeClass("error");
      },
      errorPlacement: function(error, element) {
        error.addClass("error-message");
        error.insertAfter(element);
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
</script>

<body>
  <header>
    <h1>L'OBS</h1>
    <?php include("nav.php") ?>
  </header>
  <hr>

  <main>
    <h1 class="naslov">Unos vijesti</h1>
    <form name="unos" action="insert.php" method="POST" enctype="multipart/form-data" class="form-news">
      <div class="form-item">
        <label for="title">Naslov vijesti</label>
        <div class="form-field">
          <input type="text" name="title" id="title" class="form-field-textual">
        </div>
      </div>
      <div class="form-item">
        <label for="about">Kratki sadržaj vijesti (do 100 znakova)</label>
        <div class="form-field">
          <textarea name="about" id="about" cols="50" rows="10" class="form-field-textual"></textarea>
        </div>
      </div>
      <div class="form-item">
        <label for="content">Sadržaj vijesti</label>
        <div class="form-field">
          <textarea name="content" id="content" cols="50" rows="10" class="form-field-textual"></textarea>
        </div>
      </div>
      <div class="form-item">
        <label for="picture">Slika: </label>
        <div class="form-field">
          <input type="file" accept="image/jpg,image/gif,image/png,image/jpeg" class="input-text" name="picture" id="picture" />
        </div>
      </div>
      <div class="form-item">
        <label for="category">Kategorija vijesti</label>
        <div class="form-field">
          <select name="category" id="" class="form-field-textual">
            <option value="Sport">Sport</option>
            <option value="Politika">Politika</option>
          </select>
        </div>
      </div>
      <div class="form-item">
        <label>Spremiti u arhivu?
          <div class="form-checkbox">
            <input type="checkbox" name="archive">
          </div>
        </label>
      </div>
      <div class="form-item">
        <button type="reset" value="Poništi">Poništi</button>
        <button type="submit" value="Prihvati" id="slanje">Prihvati</button>
      </div>
    </form>
  </main>

  <footer>
    <p>© L'Obs - Les marques ou contenus du site nouvelobs.com sont soumis a la protection de la propriete intellectuelle</p>
  </footer>
</body>

</html>