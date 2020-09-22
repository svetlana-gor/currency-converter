<center>
  <div class="jumbotron">
    <div class="container">
      <form action="index.php" method="POST">
        <legend>Settings</legend>
        <div class="form-group">
          <label for="amountOfRows">
            <b>How many recent requests to display?</b>
          </label>

          <div class="col-md-2">
            <input type="" name="rowsNumber" placeholder="Enter the number" class="form-control">
          </div>
        </div>

        <div class="form-check">
          <input class="form-check-input" name="showAllCurrencies" type="checkbox" value="true" id="defaultCheck1">
          <label class="form-check-label" name="showAllCurrencies" for="defaultCheck1">
            Show list of available currencies
          </label>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="control-label" for="sendSettings"></label>
          <div>
            <button type="submit" name="form2" class="btn btn-success">Send</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</center>
