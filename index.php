<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ridobiko Project</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="assets/css/index.css" />
  </head>
  <body>
    <!-- Header  -->
    <?php
      include('common/header.html');
    ?>
    <div class="d-flex">
    <div class="sidebar w-25 bg-secondary"><div class="text-center text-white">SIDEBAR</div></div>
    <table class="table" id="table-1">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Bike Details</th>
          <th scope="col">Customer Details</th>
          <th scope="col">Order ID</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Rent</th>
          <th scope="col">Pickup and Drop Status</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">
            <div>Activa</div>
            <div>MH 05 9854</div>
          </td>
          <td>
            <div>Rajat</div>
            <div>6786786788</div>
          </td>
          <td>#6764hfbhjh57</td>
          <td>
            <div>21-10-2021</div>
            <div>00:00:00</div>
          </td>
          <td>
            <div>21-10-2021</div>
            <div>00:00:00</div>
          </td>
          <td>3500</td>
          <td>
            <div>Pickup - <span>Done</span></div>
            <div>Drop - <span>Not Done</span></div>
          </td>
          <td>
            <button
              class="btn btn-primary more-details-btn"
              id="more-details-btn"
            >
              More Details
            </button>
          </td>
        </tr>
        <tr>
          <td scope="row">
            <div>Activa</div>
            <div>MH 05 9854</div>
          </td>
          <td>
            <div>Rajat</div>
            <div>6786786788</div>
          </td>
          <td>#6764hfbhjh57</td>
          <td>
            <div>21-10-2021</div>
            <div>00:00:00</div>
          </td>
          <td>
            <div>21-10-2021</div>
            <div>00:00:00</div>
          </td>
          <td>3500</td>
          <td>
            <div>Pickup - <span>Done</span></div>
            <div>Drop - <span>Not Done</span></div>
          </td>
          <td>
            <button
              class="btn btn-primary more-details-btn"
              id="more-details-btn"
            >
              More Details
            </button>
          </td>
        </tr>
        <tr>
          <td scope="row">
            <div>Activa</div>
            <div>MH 05 9854</div>
          </td>
          <td>
            <div>Rajat</div>
            <div>6786786788</div>
          </td>
          <td>#6764hfbhjh57</td>
          <td>
            <div>21-10-2021</div>
            <div>00:00:00</div>
          </td>
          <td>
            <div>21-10-2021</div>
            <div>00:00:00</div>
          </td>
          <td>3500</td>
          <td>
            <div>Pickup - <span>Done</span></div>
            <div>Drop - <span>Not Done</span></div>
          </td>
          <td>
            <button
              class="btn btn-primary more-details-btn"
              id="more-details-btn"
            >
              More Details
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
    <?php
      include('more-det.php');
    ?>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
  <script src="js/index.js"></script>
</html>
