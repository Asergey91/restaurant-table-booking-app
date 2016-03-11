<div class='container-fluid'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='well owner_panel'>
        <a href='<?php echo $base_url?>index.php/reservation/owner_view' class="btn btn-raised btn-primary pull-right">Manage Reservations</a><br><br>
        <h1 class='text-center'>Your Tables</h1>
        <h2 class='text-center'>
          <span class="btn btn-warning btn-fab" data-toggle="modal" data-target="#create_modal"><span style='margin: 14px 0 0 2px'class="glyphicon glyphicon-plus"></span></a><br><br>
        </h2><br>
        
        <!-- Modal -->
          <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add a table</h4>
                </div>
                <div class="modal-body">
                  
                  <form class="form-horizontal" action="<?php echo $base_url?>index.php/table/create" method="get">
                    <fieldset>
                      <div class="form-group">
                        <label for="inputNumber" class="col-md-2 control-label">Number</label>
                        <div class="col-md-10">
                          <input type="number" class="form-control" id="inputNumber" placeholder="Table Number" name='number' required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputCap" class="col-md-2 control-label">Capacity</label>
                        <div class="col-md-10">
                          <input type="number" class="form-control" id="inputCap" placeholder="Table Capacity" name='size' required>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Add</buttton>
                    <button href='#' class="btn bbtn-default" type="button" data-dismiss="modal">Close</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        
        <div class='row'>
        <?php foreach ($tables as $tab): ?>
          <div class='col-xs-6 col-sm-3 col-md-2 col-lg-2'>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Table no. <?php echo $tab['tab_num']?></span></h3>
              </div>
              <div class="panel-body">
                <ul>
                  <li><b>Capacity:</b> <?php echo $tab['tab_size']?></li>
                  <a class='pull-right' href='#'><span class='glyphicon glyphicon-trash' data-toggle="modal" data-target="#myModal<?php echo $tab['tab_id']?>"></span></a>
                </ul>
                  
                  
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $tab['tab_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Warning!</h4>
                      </div>
                      <div class="modal-body">
                        Removing table n: <?php echo $tab['tab_num']?> with capacity: <?php echo $tab['tab_size']?><br>
                        If this is done, this will also remove all the reservations that this table is associated with
                      </div>
                      <div class="modal-footer">
                        <a href='<?php echo $base_url?>index.php/table/delete?id=<?php echo $tab['tab_id']?>'><button type="button" class="btn btn-default">Delete</button></a>
                        <button href='#' class="btn bbtn-default" type="button" data-dismiss="modal">Stahp</button>
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