<div class="row">
    <div class="card shadow col-md-12 col-xs-12">
        <div class="card-body">
            <center>
                <h4>Laporan Penjualan Bulan <span id="bulan"><?= $bulan_lap ?></span></h4>
                <h6><?= date('d F Y') ?></h6>
            </center>
        </div>

    <hr />

        <div class="card-body">
            <table id="table" class="table table-condensed table-collapse table-striped">
                <thead>
                    <tr>
                        <th>Tanggal Transaksi</th>
                        <th>Jumlah</th>
                        <th>Nominal</th>
                        <th>Sisa</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $v) {
                        ?>
                        <tr>
                            <td><?= $v->tanggal ?></td>
                            <td><?= $v->qty ?></td>
                            <td><?= $v->nominal ?></td>
                            <td><?= $v->sisa ?></td>
                            <td><?= $v->keterangan ?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>