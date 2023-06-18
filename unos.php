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
  <title>Le Nouvel Observateur</title>
</head>

<body>
  <header>
    <h1>L'OBS</h1>
    <?php include("nav.php") ?>
  </header>
  <hr>

  <main>
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
            <option value="Politik">Politik</option>
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