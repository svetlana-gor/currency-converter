<div class="container">
<center>
<legend>Request History</legend>
<table class="table table-sm table-bordered">
  <thead>
  <tr>
    <th>#</th>
    <th>Amount Of Currency 1</th>
    <th>Name Of Currency 1</th>
    <th>Amount Of Currency 2</th>
    <th>Name Of Currency 2</th>
    <th>Date Of Request</th>
  </tr>
  </thead>
  <tbody>
  <?php
    include './sql/display_table_requests.php';
  ?>
  </tbody>
</table>
</center>
</div>