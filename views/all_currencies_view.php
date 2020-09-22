<div class="container">
  <center>
    <legend>All Currencies</legend>
      <table class="table table-sm" style="width: 20%">
        <thead>
          <tr>
            <th>#</th>
            <th class="text-center">Currency Name</th>
          </tr>
          <?php
          for ($i = 0; $i < count($allCurrencies); $i++) {
              echo '<tr>
                      <td>'.($i+1).'</td>
                      <td class="text-center">'.$allCurrencies[$i].'</td>
                    </tr>';
          }
          ?>
        </thead>
        <tbody>

        </tbody>
      </table>
  </center>
</div>
