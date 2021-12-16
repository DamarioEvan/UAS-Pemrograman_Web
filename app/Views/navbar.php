<?php 
  $session = session();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
      <a class="navbar-brand" href="#">SEPUTAR OTOMOTIF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <?php if($session->get('isLoggedIn')):?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=site_url('home/index') ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?=site_url('barang/index') ?>">Daftar Mobil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?=site_url('barang/create') ?>">Tambah Mobil <span class="sr-only">(current)</span></a>
            
          </li>
           <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('transaksi/index')?>">Transaksi</a>
          </li>
           <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('user/index')?>">User</a>
          </li>  
         
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('etalase/index')?>">Katalog <span class="sr-only">(current)</span></a>
            </li>
          <?php endif ?>
        </ul>

          <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
            <?php if($session->get('isLoggedIn')):?>
              <li class="nav-item ">
                <a class="btn btn-danger" href="<?= site_url('auth/logout')?>">Logout</a>
              </li>
              <?php else : ?>
              <li class="nav-item ">
                <a class="btn btn-light" href="<?= site_url('auth/login')?>">Login</a>
              </li>&nbsp;
              <li class="nav-item ">
                <a class="btn btn-light" href="<?= site_url('auth/register')?>">Register</a>
              </li>
              <?php endif ?>
              
            </ul>
          </div>
      </div>
    </nav>
