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
    <!-- <div class="d-flex align-items-start"> -->
    <table class="table" id="table-1">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Bike Number</th>
          <th scope="col">Bike Name</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Customer Mobile</th>
          <th scope="col">Order ID</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Rent</th>
          <th scope="col">Pickup Status</th>
          <th scope="col">Drop Status</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">MH 05 9854</td>
          <td>Activa</td>
          <td>Rajat</td>
          <td>6786786788</td>
          <td>#6764hfbhjh57</td>
          <td>21-09-2021</td>
          <td>21-10-2021</td>
          <td>3500</td>
          <td>Done</td>
          <td>Not Done</td>
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
          <td scope="row">MH 05 9854</td>
          <td>Activa</td>
          <td>Rajat</td>
          <td>6786786788</td>
          <td>#6764hfbhjh57</td>
          <td>21-09-2021</td>
          <td>21-10-2021</td>
          <td>3500</td>
          <td>Done</td>
          <td>Not Done</td>
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
          <td scope="row">MH 05 9854</td>
          <td>Activa</td>
          <td>Rajat</td>
          <td>6786786788</td>
          <td>#6764hfbhjh57</td>
          <td>21-09-2021</td>
          <td>21-10-2021</td>
          <td>3500</td>
          <td>Done</td>
          <td>Not Done</td>
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
    <!-- </div> -->
    <hr class="w-100" />
    <div class="more-details-main" id="table-2" style="display: none">
      <div class="d-flex justify-content-between px-2">
        <h2 class="text-center">More Details Section</h2>
        <span class="close" onclick="closeModal('table-2')">x</span>
      </div>
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Number of Helmets</th>
            <td>
              <input
                class="editable-input form-control"
                type="text"
                value="2"
              />
            </td>
          </tr>
          <tr>
            <th scope="row">Service Details</th>
            <td>Popup</td>
          </tr>
          <tr>
            <th scope="row">Insurance Expiry</th>
            <td class="bg-danger text-white">
              <input type="date" value="2021-12-09" />
            </td>
          </tr>
          <tr>
            <th scope="row">Pollution Expiry</th>
            <td class="bg-warning"><input type="date" value="2021-12-09" /></td>
          </tr>
          <tr>
            <th scope="row">Fitness Expiry</th>
            <td class="bg-success text-white">
              <input type="date" value="2021-12-09" />
            </td>
          </tr>
          <tr>
            <th scope="row">Permit Expiry</th>
            <td class="bg-warning"><input type="date" value="2021-12-09" /></td>
          </tr>
          <tr>
            <th scope="row">High Security Number Plate</th>
            <td>
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select</option>
                <option value="1">Already Have</option>
                <option value="2">Applied</option>
              </select>
            </td>
          </tr>
          <tr>
            <th scope="row">Comment</th>
            <td><input class="comment-input form-control" type="text" value="Lorem ipsum dolor sit amet." /></td>
          </tr>
          <tr>
            <th scope="row">SMS Trigger</th>
            <td>sms</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</html>
