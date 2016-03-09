<div class='container-fluid'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='well owner_panel'>
        <a href='<?php echo $base_url?>index.php/table/table_view' class="btn btn-raised btn-primary pull-right">Manage Tables</a><br><br>
        <h1 class='text-center'>Today's Reservations</h1>
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
                  <a class='pull-right' href='#'><span class='glyphicon glyphicon-trash' data-toggle="modal" data-target="#myModal<?php echo $res['res_id']?>"></span></a>
                </ul>
                  
                  
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $res['res_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete this reservation?</h4>
                      </div>
                      <div class="modal-body">
                        <li><b>Time:</b> <?php echo $res['start_time']?></li>
                        <li><b>First Name:</b> <?php echo $res['customer_fname']?></li>
                        <li><b>Second Name:</b> <?php echo $res['customer_lname']?></li>
                        <li><b>Tel:</b> <?php echo $res['customer_phone']?> </li>
                        <li><b>Email:</b> <?php echo $res['customer_email']?> </li>
                        <li><b>Party Size:</b> <?php echo $res['size']?> </li>
                        <li><b>Table:</b> <?php echo $res['table_name']?></li>
                      </div>
                      <div class="modal-footer">
                        <a href='<?php echo $base_url?>index.php/reservation/delete?id=<?php echo $res['res_id']?>'><button type="button" class="btn btn-info">Yes</button></a>
                        <button href='#' class="btn btn-info" type="button" data-dismiss="modal">No</button>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  
                
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>