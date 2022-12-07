<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PKM KD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('ses_nama'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url() ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <?php if ($this->session->userdata('ses_level') == 1) { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPasien') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanDokter') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPerawat') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Perawat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanBidan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bidan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanBalita') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Balita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPranata') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pranata</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanKesmas') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kesmas</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?php echo base_url('HalamanPoli') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Poli</p>
                </a>
              </li> -->
            </ul>
          </li>
          
           
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Pelayanan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanPelayanan') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Daftar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanPemeriksaan') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pemeriksaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanImunisasi') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Daftar Imunisasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanImunisasi/riwayat_keseluruhan') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Imunisasi</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Kegiatan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanVaksin') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Vaksin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanPosyandu') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Posyandu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('HalamanPromkes') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Promkes</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php } elseif ($this->session->userdata('ses_level') == 2) {} ?>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPelayanan/formlaporan_pelayanan') ?>" target="_blank" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Pelayanan</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPemeriksaan/formlaporan_umum') ?>" target="_blank" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Poli Umum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPemeriksaan/formlaporan_gigi')?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Poli Gigi</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPemeriksaan/formlaporan_anak')?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Poli Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPemeriksaan/formlaporan_kiakb') ?>" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Poli KIA & KB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPemeriksaan/formlaporan_tb') ?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Poli TB (tuberculosis)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPemeriksaan/formlaporan_lab') ?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Poli LAB</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanVaksin/formlaporan') ?>" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Vaksin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPosyandu/formlaporan_posyandu') ?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Posyandu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanPromkes/formlaporan_promkes') ?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Promkes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanImunisasi/formlaporan_imunisasi') ?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Imunisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('HalamanImunisasi/formlaporan_jadwalimunisasi') ?>" target="_blank" class="nav-link">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Laporan Jadwal Imunisasi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('Auth/logout') ?>" class="nav-link">
              <i class="nav-icon fa fa-reply"></i>
              <p>
                Logout
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>