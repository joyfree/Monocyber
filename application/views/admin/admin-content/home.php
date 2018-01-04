        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admin <small>Dasboard</small></h3>
                <?php
                if($this->session->flashdata('flash') != null){
                  ?>
                  <h3>========================<br><?=$this->session->flashdata('flash')?><br>========================</h3>
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
                    <h2>Visi Perusahaan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                     <?=$visimisi->visi?>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Misi Perusahaan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                     <p><?=$visimisi->misi?></p>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            

            <div class="row">

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Table <small>Karyawan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>


                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <form action="<?=base_url();?>Admin/delete_karyawan" Method="POST">
                      <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead>
                            <tr class="headings">
                              <th class="column-title">Select </th>
                              <th class="column-title">NIP </th>
                              <th class="column-title">Nama </th>
                              <th class="column-title">Jabatan </th>
                              <th class="column-title">Tanggal Lahir </th>
                              <th class="column-title no-link last"><span class="nobr">Action</span>
                              </th>
                              <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                              </th>
                            </tr>
                          </thead>

                          <tbody>
                           <?php
                           foreach ($karyawan as $karyawan) {
                             ?>
                             <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="id<?=$karyawan->no?>" value="<?=$karyawan->no?>">
                              </td>
                              <td class=" "><?=$karyawan->nip?></td>
                              <td class=" "><?=$karyawan->nama?></td>
                              <td class=" "><?=$karyawan->jabatan?><i class="success fa fa-long-arrow-up"></i></td>
                              <td class=" "><?=$karyawan->tanggal_lahir?></td>

                              <td class=" last"><a class="btn btn-primary" href="<?=base_url();?>Admin/beranda/form_editKaryawan/<?=$karyawan->no?>">Edit</a>
                              </td>
                            </tr>
                            <?php

                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-warning">Delete</button>
                      </div>
                    </div>
                  </form>


                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- /page content -->
