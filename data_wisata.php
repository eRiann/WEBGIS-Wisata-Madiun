<?php include "header.php"; ?>
<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Data Wisata
        </h1>
        <p class="text-white link-nav">Halaman ini memuat informasi Tempat Wisata di Kabupaten Madiun</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 info-left">
        <img class="img-fluid" src="img/about/info-img.jpg" alt="">
      </div>

      <div class="col-lg-30 into-right" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">

            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th width="30%">Nama Wisata</th>
                    <th width="30%">Alamat</th>
                    <th width="20%">Harga Tiket</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $data = file_get_contents('http://localhost/SIG-WISATA/ambildata.php');
                  $no = 1;
                  if (json_decode($data, true)) {
                    $obj = json_decode($data);
                    foreach ($obj->results as $item) {
                  ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $item->nama_wisata; ?></td>
                        <td><?php echo $item->alamat; ?></td>
                        <td>Rp. <?php echo $item->harga_tiket; ?></td>
                        <td class="ctr">
                          <div class="btn-group">
                            <a href="detail.php?id_wisata=<?php echo $item->id_wisata; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                              <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                          </div>
                        </td>
                      </tr>
                  <?php $no++;
                    }
                  } else {
                    echo "data tidak ada.";
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>