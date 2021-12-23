<!-- Detail Tiket Modal-->

<div class="modal fade" id="tiketModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Data Dateil Tiket</h5>

        <button class="close" type="button" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

          <div class="table-responsive">

            <table  class="table m-table table-sm table-striped table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0">

              <thead style="background-color:#dd4b39;">

                <tr>

                  <th>No</th>

                  <th>Incident</th>

                  <th>Jenis Tiket</th>

                  <th>Status Manja</th>

                  <th>Status Tiket</th>

                </tr>

              </thead>

              <tbody>


                <tr>

                <?php $num = 1;?>

                  <td width="50">

                    <?php echo $num++ ?>

                  </td>

                  <td>

                    Under Maintenence

                  </td>

                  <td>

                    Under Maintenence

                  </td>

                  <td>

                    Under Maintenence

                  </td>

                  <td>

                    Under Maintenence

                  </td>


                </tr>


              </tbody>

            </table>

          </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>

      </div>

    </div>

  </div>

</div>

<!-- Detail Teknisi Modal-->

<div class="modal fade" id="teknisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Data Dateil Teknisi</h5>

        <button class="close" type="button" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">�</span>

        </button>

      </div>

      <div class="modal-body">

          <div class="table-responsive">

            <table  class="table m-table table-sm table-striped table-bordered  table-hover" id="dataTable" width="100%" cellspacing="0">

              <thead style="background-color:#dd4b39;">

                <tr>

                  <th>No</th>

                  <th>Crew</th>

                  <th>Nama</th>

                  <th>Sto</th>

                </tr>

              </thead>

              <tbody>

                <?php $num = 1;?>

                <tr>

                  <td width="50">

                    <?php echo $num++ ?>

                  </td>

                  <td>

                    Under Maintenence

                  </td>

                  <td>

                    Under Maintenence

                  </td>

                  <td>

                    Under Maintenence

                  </td>

                </tr>

              </tbody>

            </table>

          </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>

      </div>

    </div>

  </div>

</div>



<!-- Logout Delete Confirmation-->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Apakah Kamu Yakin?</h5>

        <button class="close" type="button" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">�</span>

        </button>

      </div>

      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>

      <div class="modal-footer">

        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>

      </div>

    </div>

  </div>

</div>





