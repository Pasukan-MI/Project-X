<?php 
$kode = $this->session->userdata('username');
$table = "data_prodi";
?>              
              <div class="row">
                  <div class="col-lg-6">
                       <div class="box box-primary">
                        <div class="box-header">
                          <h3 class="box-title">Dokumen Organisasi Mutu</h3>
                        </div>
                        <div class="box-body no-padding">
                          <table class="table table-striped table-bordered">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Dokumen</th>
                                     <th>Status</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                  <td>1.</td>
                                  <td>SK SJMF terbaru</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-mutu-1', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>SK TPMA terbaru</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-mutu-2', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3.</td>
                                  <td>Manual Mutu/std/kebijakan</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-mutu-3', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4.</td>
                                  <td>Dokumen Evaluasi diri (SE) 2014/2015</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-mutu-4', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5.</td>
                                  <td>Laporan kegiatan SJMF dan TPMA 2014/2015</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-mutu-5', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6.</td>
                                  <td>Dokumen PTK Aima siklus 6 yang lalu</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-mutu-6', $table);?>
                                  </td>
                              </tr>
                             </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                  </div>
                  <div class="col-lg-6">
                       <div class="box box-success">
                        <div class="box-header">
                          <h3 class="box-title">Dokumen Akademik</h3>
                        </div>
                        <div class="box-body no-padding">
                          <table class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Dokumen</th>
                                     <th>Status</th>
                                 </tr>
                             </thead>
                             <tbody>
                              <tr>
                                  <td>1.</td>
                                  <td>Contoh GBPP</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-akademik-1', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>Contoh SAP</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-akademik-2', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3.</td>
                                  <td>Hasil evaluasi kinerja dosen 2014/2015</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-akademik-3', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4.</td>
                                  <td>Hasil evaluasi kepuasan mahasiswa 2014/2015</td>
                                  <td>
                                      <?php echo $this->M_data->cekStatus($kode, 'doc-akademik-4', $table);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5.</td>
                                  <td>Daftar aktivitas penelitian dan pengabdian</td>
                                  <td>
                                     <?php echo $this->M_data->cekStatus($kode, 'doc-akademik-5', $table);?>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                  </div>
              </div>