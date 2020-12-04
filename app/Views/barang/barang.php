<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4>Data Keuangan</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>Tanggal</th>
                        <th>Debet</th>
                        <th>Kredit</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>kas1</td>
                        <td>2017-01-09</td>
                        <td>Rp. 20000 </td>
                        <td>Rp. 69</td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>