<?php
    $this->title = 'Detail Data Pemeriksaan';
    use yii\bootstrap4\Html;
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <strong style="font-size: 24px;">Data Pemeriksaan</strong>
            <span class="float-right" style="font-size: 20px;"><strong>ID : </strong><?= $data->id_pemeriksaan ?></span>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">Pasien :</h6>
                    <div>
                        <strong><?= $data->pasien->nama_pasien ?></strong>
                    </div>
                    <div>
                        Tanggal Lahir : <?= $data->pasien->ttl_pasien ?>
                    </div>
                    <div>
                        Jenis Kelamin : 
                        <?php if($data->pasien->jenis_kelamin_pasien == 0): ?>
                            Perempuan
                        <?php else: ?>
                            Laki - Laki
                        <?php endif; ?>
                    </div>
                    <div>
                        Alamat : <?= $data->pasien->alamat_pasien ?>
                    </div>
                    <div>
                        No. telp : <?= $data->pasien->telepon_pasien ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">Pegawai :</h6>
                    <div>
                        <strong><?= $data->pegawai->users->nama_user ?></strong>
                    </div>
                    <div>
                        Email : <?= $data->pegawai->email_pegawai ?>
                    </div>
                    <div>
                        No. Telp : <?= $data->pegawai->telepon_pegawai ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3"></h6>
                    <div>
                        Lokasi Rujukan : <strong><?= $data->wilayah->nama_wilayah ?></strong>
                    </div>
                </div>
            </div>
            <div class="row mb-4" style="border: solid 1px #6c757d; padding: 5px;">
                <div class="col-sm-6">
                    <strong>Hasil Pemeriksaan :</strong><br>
                    <?= $data->tindakan->nama_tindakan ?>
                </div>
                <div class="col-sm-6">
                    <strong>Keterangan (tambahan) :</strong><br>
                    <?= $data->keterangan ?>
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Item</th>
                            <th>Deskripsi</th>
                            <th class="right">Harga / Item</th>
                            <th class="center">Jumlah</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">1</td>
                            <td class="left strong">Pendaftaran</td>
                            <td class="left">Biaya pendaftaran pasien</td>

                            <td class="right">Rp. 10000</td>
                            <td class="center">1</td>
                            <td class="right">Rp.10000</td>
                        </tr>
                        <tr>
                            <td class="center">2</td>
                            <td class="left strong">Dokter</td>
                            <td class="left">Biaya pemeriksaan</td>

                            <td class="right">Rp. 30000</td>
                            <td class="center">1</td>
                            <td class="right">Rp.30000</td>
                        </tr>
                        <tr>
                            <td class="center">3</td>
                            <td class="left">Obat</td>
                            <td class="left"><?= $data->obat->nama_obat ?></td>

                            <td class="right">Rp.<?= $data->obat->harga_obat ?></td>
                            <td class="center">1</td>
                            <td class="right">Rp.<?= $data->obat->harga_obat ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="right">
                                    : 
                                    Rp.<?php
                                        $a = 40000; 
                                        $b = $data->obat->harga_obat;
                                        echo $a + $b;                             
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    : 
                                    <strong>
                                        Rp.<?php
                                            $a = 40000; 
                                            $b = $data->obat->harga_obat;
                                            echo $a + $b;                             
                                        ?>
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>