<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 shandow-box">
  
   
  
  </div>
  <div class="col-md-4"></div>
</div>


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        
        <h4 class="modal-title"> <span class="glyphicon glyphicon-off"></span> <?= TITULO ?></h4>
      </div>

        <form method="post" action="exe/exe_login.php">
                <div class="modal-body">         

                    <div class="form-group input-group">
                        <span class="input-group-addon"> <span class="glyphicon glyphicon-envelope"></span> </span>
                        <input class="form-control" type="email" name="user_email">
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon"> <span class="glyphicon glyphicon-lock"></span> </span>
                        <input class="form-control" type="password" name="user_senha">
                    </div>

                                
                </div>
                       
                <div class="modal-footer">
                <button class="btn btn-primary btn-lg btn-block" > 
                    <span class="glyphicon glyphicon-log-in"></span> Efetuar Login </button>
                </div>
        </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
