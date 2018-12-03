<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Houses</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Search Houses</h2>
        <p class="lead">You can easily find a house by filling out the form below.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">House found</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
          </ul>
        </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Search Form</h4>
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="house-name">House name</label>
              <input type="text" class="form-control" name="house_name" id="house-name" placeholder="The Victoria">
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="minimum-price">Minimum price</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control" name="price_min" id="minimum-price" placeholder="263604" required>
                  </div>
              </div>
              <div class="col-md-6 mb-3">
                  <label for="maximum-price">Maximum price</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control" name="price_max" id="maximum-price" placeholder="263604" required>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="bedrooms">Bedrooms</label>
                <input type="number" class="form-control" name="bedrooms" id="bedrooms" placeholder="4">
              </div>

              <div class="col-md-3 mb-3">
                <label for="bathrooms">Bathrooms</label>
                <input type="number" class="form-control" name="bathrooms" id="bathrooms" placeholder="3" required>
              </div>

              <div class="col-md-3 mb-3">
                <label for="storeys">Storeys</label>
                <input type="number" class="form-control" name="storeys" id="storeys" placeholder="2" required>
              </div>

              <div class="col-md-3 mb-3">
                <label for="garages">Garages</label>
                <input type="number" class="form-control" name="garages" id="garages" placeholder="1" required>
              </div>
            </div>

            <hr class="mb-4">
            <button id="search-button" class="btn btn-primary btn-lg" type="button">Search</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
      </footer>
    </div>
  </body>
</html>
