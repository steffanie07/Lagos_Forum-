<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Lagos Forum </title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2></h2>
        
      </div>

      
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Add your Advert </h4>

          <form method="POST" action="{{ url('uploadbusiness') }}" enctype="multipart/form-data">
@csrf

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Business Name</label>
                <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid business name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Description</label>
                <input type="text"  name="description"  class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid description is required.
                </div>
              </div>
            </div>



            <div class="mb-3">
              <label for="address">Category </label>
              <input type="text" class="form-control" name="category"  required>
              <div class="invalid-feedback">
                Please enter your category.
              </div>
            </div>

          <div class="col-md-6">
<label>Add Logo or Business Image</label>
<input type="file" name="logo" >
    </div>  


            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
