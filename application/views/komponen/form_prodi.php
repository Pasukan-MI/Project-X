<?php echo form_open_multipart("C_prodi/upload_data");?>
                 <div class="row">
                 <div class="col-lg-12">
                     <div class="box box-danger">
                        <div class="box-header">
                          <h3 class="box-title">Ketentuan</h3>
                        </div>
                        <div class="box-body">
                       <ul>
                           <li>Formulir hanya dapat di isi sekali</li>
                           <li>Dokumen yang di upload harus berformat *.pdf</li>
                       </ul>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="box box-warning">
                        <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6">
                                Nama Prodi : <?php echo $prodi;?>
                            </div>
                            <div class="col-lg-6">
                                Nama Fakultas : <?php echo $fakultas;?>
                            </div>
                        </div>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                 </div>
             </div>
              
              <div class="row">
                  <div class="col-lg-6">
                       <div class="box box-primary">
                        <div class="box-header">
                          <h3 class="box-title">Dokumen Organisasi Mutu</h3>
                        </div>
                        <div class="box-body no-padding">
                          <table class="table table-striped">
                              <tr>
                                  <td>1.</td>
                                  <td>SK SJMF terbaru</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="mutu-1">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>SK TPMA terbaru</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="mutu-2">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3.</td>
                                  <td>Manual Mutu/std/kebijakan</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="mutu-3">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4.</td>
                                  <td>Dokumen Evaluasi diri (SE) 2014/2015</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="mutu-4">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5.</td>
                                  <td>Laporan kegiatan SJMF dan TPMA 2014/2015</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="mutu-5">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6.</td>
                                  <td>Dokumen PTK Aima siklus 6 yang lalu</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="mutu-6">
                                      </div>
                                  </td>
                              </tr>
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
                          <table class="table table-striped">
                              <tr>
                                  <td>1.</td>
                                  <td>Contoh GBPP</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="akademik-1">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2.</td>
                                  <td>Contoh SAP</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="akademik-2">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3.</td>
                                  <td>Hasil evaluasi kinerja dosen 2014/2015</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="akademik-3">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4.</td>
                                  <td>Hasil evaluasi kepuasan mahasiswa 2014/2015</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="akademik-4">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5.</td>
                                  <td>Daftar aktivitas penelitian dan pengabdian</td>
                                  <td>
                                      <div class="form-group">
                                          <input type="file" name="akademik-5">
                                      </div>
                                  </td>
                              </tr>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="box">
                          <div class="box-body">
                              <center>
                                  <input class="btn btn-primary" type="submit" value="Submit Form">
                              </center>
                         </div><!-- /.box-body -->
                      </div>
                  </div>
              </div>
          </form>
        