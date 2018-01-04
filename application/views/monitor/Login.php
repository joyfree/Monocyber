


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form <small>Login</small></h3>
        <?php
        if($this->session->flashdata('flash') != null){
          ?>
          <h6>========================<br><?=$this->session->flashdata('flash')?><br>========================</h6>
          <?php
        }
        ?>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

              
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <!-- start form for validation -->
          <form id="demo-form" data-parsley-validate action="<?=base_url()?>Monitor/login_auth" method="POST">
            <label for="fullname">username:</label>
            <input type="text" id="fullname" class="form-control" name="username" required />

            <label for="email">Password:</label>
            <input type="password" id="email" class="form-control" name="password" data-parsley-trigger="change" required />

            <br/>
            <input type="submit" class="btn btn-primary" name="Login" value="Login">


          </form>
          <!-- end form for validations -->

        </div>
      </div>

    </div>
  </div>


</div>
</div>
<!-- /page content -->
