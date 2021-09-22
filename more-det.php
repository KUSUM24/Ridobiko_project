<div class="more-details-scroll">
  <div class="more-details-main" id="table-2" style="display: none">
    <div class="d-flex justify-content-between px-2">
      <h2 class="text-center">More Details Section</h2>
      <span class="close" onclick="closeModal('table-2')">x</span>
    </div>
    <table class="table">
      <tbody>
        <tr>
          <th scope="row" id="helmet-number">Number of Helmets</th>
          <td>
            <input class="editable-input form-control" type="text" value="2" />
          </td>
        </tr>
        <tr>
          <th scope="row">Service Details</th>
          <td>
            <div
              class="service-details-btn btn btn-primary"
              id="trigger-service--btn"
            >
              Check Details
            </div>
          </td>
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
            <select
              class="form-select form-control"
              id="number-plate--status"
              aria-label="Default select example"
            >
              <option hidden>Select</option>
              <option value="1">Already Have</option>
              <option value="2">Applied</option>
            </select>
          </td>
        </tr>
        <tr id="applied-number-plate" style="display: none">
          <th>Appointment Date</th>
          <td class="bg-danger"><input type="date" value="2021-05-02" /></td>
        </tr>
        <tr id="already-number-plate" style="display: none">
          <th>Number Plate</th>
          <td class="bg-success text-white">
            You Have Already Received the High Security Number Plate
          </td>
        </tr>
        <tr>
          <th scope="row">Comment</th>
          <td>
            <input
              class="comment-input form-control"
              type="text"
              value="Lorem ipsum dolor sit amet."
            />
          </td>
        </tr>
        <tr>
          <th scope="row">SMS Trigger</th>
          <td>sms</td>
        </tr>
      </tbody>
    </table>
    <div class="service-modal card" id="service-modal" style="display: none">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <div>Service Details</div>
          <div class="close" onclick="closeModal('service-modal')">x</div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <th>Cost</th>
              <td>1,500</td>
            </tr>
            <tr>
              <th>Work Done</th>
              <td>Lorem ipsum dolor sit.</td>
            </tr>
            <tr>
              <th>Type of service</th>
              <td>Bike servicing</td>
            </tr>
            <tr>
              <th>KM run</th>
              <td>40km</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
