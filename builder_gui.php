<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Creational Design Pattern</title>
  </head>
  <body>
<div class="row justify-content-center">
<div class="col-6">
<div class="card">
  <h5 class="card-header">Creational Design Pattern - Builder</h5>
  <div class="card-body">
    <h5 class="card-title">Enter the Information Needed</h5>
    <p class="card-text">
  <form method="post" action="builder.php">
  <div class="form-group">
      <label for="pageTitle">Enter Title of the Page</label>
      <input type="text" class="form-control" id="pageTitle" aria-describedby="titleHelp" placeholder="Enter Title" name="pageTitle">
      <small id="titleHelp" class="form-text text-muted">Enter the title of the page here.</small>
    </div>
    <div class="form-group">
      <label for="pageHead">Enter Heading of the Page</label>
      <input type="text" class="form-control" id="pageHead" placeholder="Enter Page Header" name="pageHead">
      <small id="pageHelp" class="form-text text-muted">Enter the Header of the page here.</small>
    </div>
    <div class="form-group">
      <label for="pageText">Enter Text of the Page</label>
      <input type="text" class="form-control" id="pageText" placeholder="Enter Text of the Page Here" name="pageText">
      <small id="textHelp" class="form-text text-muted">Enter the Text of the page here.</small>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="html">Process to HTML</button>
  </form>
    </p>
  </div>
</div>
</div>
</div>

  </body>
</html>