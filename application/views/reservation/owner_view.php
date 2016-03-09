<div class='container-fluid'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='well owner_panel'>
        <h1 class='text-center'>Today's reservations</h1>
        <h2 class='text-center'>
          
          <a href='<?php echo $base_url?>index.php/reservation/customer_view' class="btn btn-success btn-fab"><span style='margin: 14px 0 0 2px'class="glyphicon glyphicon-plus"></span></a><br><br>
        </h2>
        <div class='row'>
        <?php foreach ($reservations as $res): ?>
          <div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
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
                  <a href='<?php echo $base_url?>index.php/reservation/delete?id=<?php echo $res['res_id']?>' class='pull-right'><span class='glyphicon glyphicon-trash'></span></a>
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

