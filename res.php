<?php

$paragraph = $_GET["paragraph"];
$word = $_GET["word"];

$censored_char = "***";
$paragraph_censored = $paragraph;
$result = "No censorship needed";

$isCensored = str_contains($paragraph, $word);

if($isCensored){
    $word_fst = $word[0];
    $word_lst = $word[strlen($word) - 1];
    $word_censored = $word_fst . $censored_char . $word_lst;
    $paragraph_censored = str_replace($word, $word_censored, $paragraph);
    $result = "Paragraph correctly censored";

};

// var_dump($isCensored);

?>


<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP first project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  </head>
  <style>
    textarea {
      resize: none;
      height: 150px !important;
      scrollbar-width: thin;
      scrollbar-color: var(--bs-primary) white;
    }
  </style>
  <body>
    <div class="container">
      <h1 class="my-3">Beccati sta censura!</h1>
      <div class="row flex-column">
        <div class="col-6 my-3">
          <div class="form-floating">
            <textarea class="form-control" id="paragraph" name="paragraph" disabled><?= $paragraph ?></textarea>
            <label for="paragraph">Your paragraph</label>
          </div>
        </div>
        <div class="col-6 my-3">
          <div class="form-floating">
            <textarea class="form-control" id="paragraph_censored" name="paragraph"><?= $paragraph_censored ?></textarea>
            <label for="paragraph_censored">Your censored paragraph</label>
          </div>
        </div>
        <div class="col-6 my-3">
            <p><?= $result ?></p>
          <a href="./index.html" class="btn btn-primary">Again</a>
        </div>
      </div>
    </div>
  </body>
</html>
