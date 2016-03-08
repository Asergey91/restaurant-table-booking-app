<div class='container-fluid'>
  <div class='row'>
    <div class='col-xs-10 col-xs-offset-1  col-md-8 col-md-offset-2 col-lg-4 col-lg-offset-4'>
      <div class='well customer_input'>
        <div class="form-horizontal reservation_form">
          <fieldset>
            <legend class='text-center'>Make a Reservation</legend>
            <div class='text-center'>Opening Hours:<br>Mon-Sat<br>8:00 AM - 8:00 PM</div>
            <div class="form-group">
              <label for="inputEmail" class="col-md-2 control-label">Email</label>
              <div class="col-md-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputFirstName" class="col-md-2 control-label">First Name</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputLastName" class="col-md-2 control-label">Last Name</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputTel" class="col-md-2 control-label">Telephone</label>
              <div class="col-md-10">
                <input type="tel" class="form-control" id="inputTel" placeholder="Telephone Number">
              </div>
            </div>
            <div class="form-group">
              <label for="inputParty" class="col-md-2 control-label">Party Size</label>
        
              <div class="col-md-10">
                <select id="inputParty" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputTime" class="col-md-2 control-label">Date+Time</label>
              <div class="col-md-10">
                <input type="datetime-local" class="form-control" id="inputTime">
              </div>
            </div>
            <div class='app_loading text-center'>
              <br>
              <img src='../../assets/img/loading-dots.gif'>
            </div>
            <div class="form-group app_submit">
              <div class='text-center'>
                <button class="btn btn-primary btn-raised submit_button">Submit</button>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="alert alert-dismissible alert-danger error_capacity">
          <button type="button" class="close close_error">×</button>
          <span class='error_content'>Sorry, there was an error connecting to the server</span>
        </div>
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='col-xs-8 col-xs-offset-2  col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4'>
      <div class='well customer_success'>
        <h1 class='text-center'><span class='glyphicon glyphicon-ok'></span><br><br>Your Reservation Has Been Made<br><br>Thank You<br></h1>
      </div>
    </div>
  </div>
</div>