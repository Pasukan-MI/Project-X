    <div class="col-md-4">
                  <div class="login-box-body shadow">
                    <h3 class="custom">Sign in ke AIMA </h3>
                    <form action="<?php echo base_url('index.php/C_admin/proses_login');?>" method="post">
                      <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </select>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                       <div class="row">
                        <div class="col-md-6">
                          <span style="color:#FB6772;">
                              <?php
                              if($this->session->flashdata('pesan') != null){
                                echo $this->session->flashdata('pesan');
                              }
                              ?>
                          </span>
                        </div><!-- /.col -->
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                          <input type="submit" class="btn btn-primary btn-block btn-flat" value="Masuk">
                        </div><!-- /.col -->
                      </div>
                    </form>
            <br>
                  Belum Terdaftar? <a href="#">Daftar Terlebih Dahulu</a>

                  </div><!-- /.login-box-body -->
                  <br>
                    <img src="<?php echo base_url("assets/dist/img/bjm-logo.png");?>" class="shadow" height="190">
            </div>
        