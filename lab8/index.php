<?php
include './includes/header.php';
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <form class="row g-3" method="post" action="receive.php">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="address" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" name="city" required>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Province</label>
          <select id="inputState" class="form-select" name="province" required>
            <option value="" disabled selected>Choose...</option>
            <option>Alberta</option>
            <option>British Columbia</option>
            <option>Manitoba</option>
            <option>New Brunswick</option>
            <option>Newfoundland and Labrador</option>
            <option>Northwest Territories</option>
            <option>Nova Scotia</option>
            <option>Nunavut</option>
            <option>Ontario</option>
            <option>Prince Edward Island</option>
            <option>Quebec</option>
            <option>Saskatchewan</option>
            <option>Yukon</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Area Code</label>
          <input type="text" class="form-control" id="inputZip" name="postal_code" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

      <div class="row justify-content-center mt-5">
        <div>
          <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
        </div>
      </div>
      
      <div class="mt-2">
        <form method="post" action="delete.php">
          <div class="input-group">
            <input type="text" inputmode="numeric" pattern="\d*" class="form-control input-primary-soft" id="inputPrimary" name="primary_key" placeholder="Primary Key" style="flex: 0 0 16.25%;" required>
              <button type="submit" class="btn btn-danger" style="flex: 0 0 83.75%;">To delete a record, click this button</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include './includes/footer.php';
?>