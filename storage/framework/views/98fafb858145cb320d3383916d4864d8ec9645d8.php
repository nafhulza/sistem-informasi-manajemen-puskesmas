<head>
  <script>
    #sinolo {
      width: 35 % ;
      float: left;
    }
    #sinolo input {
      width: 45 % ;
      border: none;
      text - align: center;
    }
    #sinolo button {
      width: 25 % ;
      font - size: 10 px;
      padding: 8 px 0 px;
    }
  </script>
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4  ">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    
    <span class="brand-text font-weight-light">SIMPUS PAMULANG</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
      <div class="info">
        <?php if(auth()->guard()->check()): ?>
        <a class="d-block"><?php echo e(Auth::user()->name); ?></a>

        <?php endif; ?>

      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/" class="nav-link">
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('nakes.index')); ?>" class="nav-link">
            <p>
              Lihat Informasi
            </p>
            <br>
            <p>
              Tenaga Kesehatan
            </p>
          </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create nakes')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('nakes.create')); ?>" class="nav-link">
            <p>
              Tambah Informasi
            </p>
            <br>
            <p>
              Nakes
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit nakes')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('nakes.edit')); ?>" class="nav-link">
            <p>
              Sunting Informasi
            </p>
            <br>
            <p>
              Nakes
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit pasien')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('pasien.index')); ?>" class="nav-link">
            <p>
              Lihat Informasi
            </p>
            <br>
            <p>
              Pasien
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create pasien')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('pasien.create')); ?>" class="nav-link">
            <p>
              Tambah Data
            </p>
            <br>
            <p>
              Pasien
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit petugas')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('petugas.index')); ?>" class="nav-link">
            <p>
              Lihat Informasi
            </p>
            <br>
            <p>
              Petugas
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create petugas')): ?>
        <li class="nav-item">
          <a href="<?php echo e(route('petugas.create')); ?>" class="nav-link">
            <p>
              Tambah Data
            </p>
            <br>
            <p>
              Petugas
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create antrian')): ?>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Antrian
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a data-toggle="modal" data-target="#exampleModalUmum" href="#exampleModalUmum" class="nav-link" data-backdrop="false">
                <i class="far fa-circle nav-icon"></i>
                <p>Poli Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="modal" data-target="#exampleModalKIA" href="#exampleModalKIA" class="nav-link" data-backdrop="false">
                <i class="far fa-circle nav-icon"></i>
                <p>Poli KIA</p>
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="modal" data-target="#exampleModalGigi" href="#exampleModalGigi" class="nav-link" data-backdrop="false">
                <i class="far fa-circle nav-icon"></i>
                <p>Poli Gigi</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit antrian')): ?>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Atur Antrian
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a data-toggle="modal" data-target="#antrianModalUmum" href="#exampleModalUmum" class="nav-link" data-backdrop="false">
                <i class="far fa-circle nav-icon"></i>
                <p>Poli Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="modal" data-target="#antrianModalKIA" href="#antrianModalKIA" class="nav-link" data-backdrop="false">
                <i class="far fa-circle nav-icon"></i>
                <p>Poli KIA</p>
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="modal" data-target="#antrianModalGigi" href="#exampleModalGigi" class="nav-link" data-backdrop="false">
                <i class="far fa-circle nav-icon"></i>
                <p>Poli Gigi</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
          <a data-toggle="modal" data-target="#modalLogin" href="#modalLogin" class="nav-link" data-backdrop="false">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Login
            </p>
          </a>
        </li>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item">
          
          <a class="nav-link" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
          <?php echo csrf_field(); ?>
        </form>
        <?php endif; ?>
      </ul>
    </nav>
    <div class="modal fade" id="exampleModalUmum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poli Umum</h5>
            <button href="/" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Ambil nomor antrian?</p>
          </div>
          <div class="modal-footer">
            <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
            <a href="/" type="button" class="btn btn-primary">Ok</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalKIA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poli KIA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Ambil nomor antrian?</p>
          </div>
          <div class="modal-footer">
            <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
            <a href="/" type="button" class="btn btn-primary">Ok</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalGigi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Poli Gigi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Ambil nomor antrian?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
          <a href="/" type="button" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalUbahPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../../index.html" method="post">
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password Lama">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password Baru">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Masukkan Kembali Password Baru">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Ok</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input-group mb-3">
              <input name="email" type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="password" type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="antrianModalUmum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Poli Umum</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="sinolo" style="position:">
          <div class="d-flex justify-content-center">
            <input type="text" name="" value="" style="text-align:center">
          </div>
          <div class="d-flex justify-content-center">
            <button id="dec" class="btn btn-danger fa fa-minus pull-left">-</button>
            <button id="inc" class="btn btn-primary fa fa-plus pull-right">+</button>
            <button id="res" class="btn btn-info fa fa-plus pull-right">Reset</button>
          </div>
        </div>
        <div class="modal-footer">
          <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a href="/" type="button" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="antrianModalKIA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Poli KIA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="sinolo" style="position:">
          <div class="d-flex justify-content-center">
            <input type="text" name="" value="" style="text-align:center">
          </div>
          <div class="d-flex justify-content-center">
            <button id="dec" class="btn btn-danger fa fa-minus pull-left">-</button>
            <button id="inc" class="btn btn-primary fa fa-plus pull-right">+</button>
            <button id="res" class="btn btn-info fa fa-plus pull-right">Reset</button>
          </div>
        </div>
        <div class="modal-footer">
          <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a href="/" type="button" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="antrianModalGigi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Poli Gigi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="sinolo" style="position:">
          <div class="d-flex justify-content-center">
            <input type="text" name="" value="" style="text-align:center">
          </div>
          <div class="d-flex justify-content-center">
            <button id="dec" class="btn btn-danger fa fa-minus pull-left">-</button>
            <button id="inc" class="btn btn-primary fa fa-plus pull-right">+</button>
            <button id="res" class="btn btn-info fa fa-plus pull-right">Reset</button>
          </div>
        </div>
        <div class="modal-footer">
          <button href="/" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a href="/" type="button" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  <!-- /.sidebar -->
  <script>
    var x = 1;
    $("#sinolo input").attr('value', x);
    $("#inc").click(function() {
      $("#sinolo input").attr('value', ++x);
    });
    $("#dec").click(function() {
      $("#sinolo input").attr('value', --x);
    });
    $("#res").click(function() {
      $("#sinolo input").attr('value', 0);
    });
  </script>
  </div>
</aside><?php /**PATH C:\laragon\www\PUSKESMAS\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>