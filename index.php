<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
            WYSIWYG editor
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>


      <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>


    </div>
  </section>
  </body>
</html>