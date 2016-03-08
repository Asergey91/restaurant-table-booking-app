<div class='container-fluid'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='well owner_panel'>
        <h2 class='text-center'>Today's Reservations</h2><br>
        <div class='row'>
        <?php foreach ($reservations as $res): ?>
          <div class=col-xs-3>
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Reservation at <?php echo $res['start_time']?></h3>
              </div>
              <div class="panel-body">
                <ul>
                  <li><b>First Name:</b> <?php echo $res['customer_fname']?></li>
                  <li><b>Second Name:</b> <?php echo $res['customer_lname']?></li>
                  <li><b>Tel:</b> <?php echo $res['customer_phone']?> </li>
                  <li><b>Email:</b> <?php echo $res['customer_email']?> </li>
                  <li><b>Party Size:</b> <?php echo $res['size']?> </li>
                  <li><b>Table:</b> <?php echo $res['table_name']?></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

