<!-- BAGIAN HEAD -->
<div class="parallax" style="background-image:url('<?= base_url("assets/headerwebsd3.png") ?>'); width: auto; height: 400px;">
    <center>
        <div style="display: table; height: 400px; overflow: hidden;">
            <div style="display: table-cell; vertical-align: middle;">
                <div>
                    <center>
                        <h1 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  "> PROFIL KARYAWAN </h1>
                        <hr>
                        <h3 style="color:white;    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  ">PARA KARYAWAN DAN GURU SD AL-IRSYAD 02 CILACAP</h3>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>

<div style="background-color:white; width: auto; padding:100px;">
    <div style="display:table; margin: 0 auto;" class="row">
        <?php foreach ($profil as $p) : ?>
            <div class="col-lg-6 row profil" id="warnain" style="width:500px; height:400px; margin: 50px; ">
                <div class="col-lg-12 profil-gray" id="iniwarnain">
                    <img src="<?= base_url("karyawan"); ?>/<?= $p["gambar"]; ?>" alt="Profil Karyawan" style="width:500px; height:400px;overflow:hidden;">
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-primary" style="width:auto; height:50px; width:500px;"></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- AKHIR BAGIAN HEAD -->