<html>
  <head>
      <meta charset="utf-8">
      <title>Products</title>
    <link href="cssFolder/stylesheet.css" type="text/css" rel="stylesheet">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a id="brand" class="navbar-brand" href="/">YourProducts</a>
              </div>
                <ul class="nav navbar-nav">
                  <li><a href="/">Home</a></li>
                  <li><a href="/products">Products</a></li>
                  <li><a href="/products/create">Create</a></li>
                </ul>
              </div>
            </nav>
            </div>
            <div class="col-md-1"></div>
          </div>
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">

         @yield('content')
      </div>
      <div class="col-md-2"></div>
    </div>
    </div>
  </body>
</html>
