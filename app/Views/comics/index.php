<?= $this->extend('layout/template'); ?>
<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">DAFTAR KOMIK</h2>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="<?= base_url() ?>/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $k["judul"]; ?></td>
                            <td><a class="btn btn-success" href="/comics/<?= $k['slug']; ?>">Detail</a></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>