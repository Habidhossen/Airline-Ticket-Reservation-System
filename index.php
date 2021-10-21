<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Airline Ticket Reservation System</title>
  <!-- add custom font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <!-- add bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- add css file -->
  <link rel="stylesheet" href="css/style.css">
  <!-- add favicon -->
  <link rel="shortcut icon" href="images/logo_1.svg" type="image/x-icon">
</head>


<body>
  <!-- ======= Header starts here ======= -->
  <div class="full-header">
    <div class="d-flex flex-column">
      <header class="mb-auto header-nav-bg">
        <div>
          <a href="index.php" class="d-flex float-md-start text-decoration-none text-white justify-content-center">
            <img src="images/logo_1.svg" width="40" height="32">
            <h3><strong>ATRS</strong></h3>
          </a>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link custom-nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link custom-nav-link" href="about.php">About</a>
            <a class="nav-link custom-nav-link" href="contact.php">Contact us</a>
            <a class="nav-link custom-nav-link" href="admin/admin_login.php">Admin login</a>
          </nav>
        </div>
      </header>
      <main class="header-text">
        <h1>Airline Ticket Reservation System</h1>
        <p class="lead">Airline Ticket Reservation System is Web-Based Online Flight Booking Software which
          helps to Book & Search a Flight Ticket for Particular Seats Available on Various Flights.</p>
      </main>
    </div>
  </div>
  <!-- ======= Header ends here ======= -->




  <!--=======Search-flights Part starts here=======-->
  <section class="py-5">
    <div class="container search-flight-container">
      <div class="row">
        <div class="col-md-4 py-5 text-white">
          <div class=" ">
            <div class="card-body">
              <h2 class="py-3"><strong>Go To Trip?</strong><br>Search For Best Flight</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam iste quos cumque ab
                soluta! Totam commodi odit, voluptatem similique eos odio exercitationem in repellat id iusto placeat
                nihil fugiat!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 p-3 border">
          <form action="" method="post">
            <div class="form-group py-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="option1">
                <label class="form-check-label" for="inlineRadio1">Roundtrip</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="option2">
                <label class="form-check-label" for="inlineRadio2">One way</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                  value="option3">
                <label class="form-check-label" for="inlineRadio3">Multi-City</label>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Flying from</span>
                  <input class="form-control" type="text" placeholder="City or airport">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Flying to</span>
                  <input class="form-control" type="text" placeholder="City or airport">
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Departing</span>
                  <input class="form-control" type="date" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <span class="form-label">Returning</span>
                  <input class="form-control" type="date" required>
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-md-4">
                <div class="form-group">
                  <span class="form-label">Adults (18+)</span>
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <span class="form-label">Children (0-17)</span>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <span class="form-label">Travel class</span>
                  <select class="form-control">
                    <option>Economy class</option>
                    <option>Business class</option>
                    <option>First class</option>
                  </select>
                  <span class="select-arrow"></span>
                </div>
              </div>
            </div>
            <div class="form-row py-2">
              <button type="submit" class="btn btn-outline-light shadow">Search Flights</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--=======Search-flights Part ends here=======-->




  <!--=======Various-flight(Domestic & International) and Popular Airlines Part starts here=======-->
  <section class="pt-2 pb-5" style="background-color: whitesmoke;">
    <div class="container">
      <h4 class="fw-bold text-center py-4">Our <span style="color: darkslateblue;">Domestic Flight</span></h4>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="images/dhaka.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Dhaka</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/chittagong.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Chittagong</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/cox's_bazar.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Cox's Bazar</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/sylhet.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Sylhet</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <h4 class="fw-bold text-center py-4">Our <span style="color: darkslateblue;">International Flight</span></h4>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="images/saudi_arabia.png" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Saudi Arabia</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/uae.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">United Arab Emirates</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/qatar.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Qatar</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/england.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">England</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/india.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">India</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/nepal.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Nepal</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/singapore.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Singapor</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/china.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">China</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <h4 class="fw-bold text-center py-4">Our <span style="color: darkslateblue;">Popular Airlines</span></h4>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="images/biman_bangladesh.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Biman Bangladesh Airlines</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/us_bangla.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">US-Bangla Airlines</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/novoair.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Novoair</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/regent_airways.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Regent Airways</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/qatar_airways.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Qatar Airways</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/emirates.png" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Emirates</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/air_arabia.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Air Arabia</h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/singapore_airlines.jpg" class="card-img" alt="...">
            <div class="card-body py-2">
              <h6 class="card-title">Singapore Airlines</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=======Various-flight(Domestic & International) Part ends here=======-->




  <!-- ======= Footer starts here ======= -->
  <footer class="text-white text-center" style="background-color: darkslateblue;">
    <div class="text-center py-3">Copyright © 2021 Team <strong>Free Thinkers</strong>, All right reserved</div>
  </footer>
  <!-- ======= Footer ends here ======= -->




  <!-- ======= Bootstrap, JavaScript CDN add ======= -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
    integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
    crossorigin="anonymous"></script>
</body>

</html>