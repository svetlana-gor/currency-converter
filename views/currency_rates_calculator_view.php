<center>
  <div class="jumbotron col-md-6" style="background: none">
    <div class="container">
      <form action="index.php" method="POST" class="form-horizontal">
        <fieldset>
          <legend>Currency Rates Calculator</legend>
          <div class="form-group">
            <label class="col-md-4 control-label">
              <b>I have:</b>
            </label>

            <div class="col-md-5">
              <input type="" name="amountOfCurrency1" step="any" placeholder="Enter amount" class="form-control input-md">
            </div>

            <!-- Select -->
            <div class="col-md-5">
              <select name="nameOfCurrency1" class="form-control">
                <?php
                    foreach ($allCurrencies as $value) {
                        echo "<option value='$value'>$value</option>";
                }?>
              </select>
            </div>
          </div>

          <!-- Select -->
          <div class="form-group">
            <label class="col-md-4 control-label">
              <b>Change to:</b>
            </label>

            <div class="col-md-5">
              <select name="nameOfCurrency2" class="form-control">
                <?php
                  foreach ($allCurrencies as $value) {
                      echo "<option value='$value'>$value</option>";
                }?>
              </select>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" name="submit"></label>
            <div class="col-md-4">
              <button type="submit" name="form1" class="btn btn-success">Convert</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>

    <?php
    include './calculateAllRates.php';
    ?>

  </div>
</center>