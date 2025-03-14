<!DOCTYPE html>
<html>

<?php echo $__env->make('layouts.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body class="hold-transition sidebar-mini">

  <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sistem Informasi Puskesmas pamulang</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <hr>
      <h4 class="m-2">Antrian Saat Ini</h4>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align:center">Poli Umum</h3>
                <hr>
                <h4 style="text-align:center">13/15</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3 style="text-align:center">Poli KIA</h3>
                <hr>
                <h4 style="text-align:center">13/15</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="text-align:center">Poli Gigi</h3>
                <hr>
                <h4 style="text-align:center">10/25</h4>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <?php if(auth()->check() && auth()->user()->hasRole('pasien')): ?>
        <div class="row">
          <h4 class="m-2">Nomor Antrian Anda</h4>

          <!-- right col -->
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-blue" style="width: 15rem;">
            <div class="inner">
              <h3 style="text-align:center">Poli Gigi</h3>
              <hr>
              <h4 style="text-align:center">16</h4>
            </div>
            <a href="#" class="small-box-footer bg-danger">Batal</a>
          </div>
        </div>
        <?php endif; ?>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('layouts.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>


</html><?php /**PATH C:\laragon\www\PUSKESMAS\resources\views/layouts/master.blade.php ENDPATH**/ ?>