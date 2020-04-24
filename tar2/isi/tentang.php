<?php
include '../koneksi.php';
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>COVID-19</h1>
                </div>
                <div class="card-body">
                    <form action="proses-kembali.php" method="post">
                        <div class="form-group">
                            <label for=""><h3>Apa Itu COVID-19</h3></label>
                        	<label for="">Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.</label>
                        </div>
                        <div class="form-group">
                        	<label for=""><h3>Gejala Orang Yang Terkena COVID-19</h3></label>
                        	<label for="">Secara umum, ada 3 gejala umum yang bisa menandakan seseorang terinfeksi virus Corona, yaitu:
                        				<li>Demam (Suhu tubuh diatas 38 derajat celcius)</li>
                        				<li>Batuk</li>
                        				<li>Sesak Napas</li>
                        	</label>
                        </div>
                        <div>
                        	<label for=""><h3>Penyebab Orang Terkena COVID-19</h3></label>
                        	<label for="">Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus, yaitu kelompok virus yang menginfeksi sistem pernapasan. Pada sebagian besar kasus, coronavirus hanya menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu. Akan tetapi, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti pneumonia, Middle-East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS).</label>
                        	<label for="">Seseorang dapat tertular COVID-19 melalui berbagai cara, yaitu:</label>
                        	<label for="">
                        		<li>Tidak sengaja menghirup percikan ludah (droplet) yang keluar saat penderita COVID-19 batuk atau bersin</li>
                        		<li>Memegang mulut atau hidung tanpa mencuci tangan terlebih dulu setelah menyentuh benda yang terkena cipratan ludah penderita COVID-19</li>
                        		<li>Kontak jarak dekat dengan penderita COVID-19</li>
                        	</label>
                        </div>
                        <div>
                        	<label for=""><h3>Pengobatan COVID-19</h3></label>
                        	<label for="">Infeksi virus Corona atau COVID-19 belum bisa diobati, tetapi ada beberapa langkah yang dapat dilakukan dokter untuk meredakan gejalanya dan mencegah penyebaran virus, yaitu:</label>
                        	<label for="">
                        		<li>Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan</li>
                        		<li>Memberikan obat pereda demam dan nyeri yang aman dan sesuai kondisi penderita</li>
                        		<li>Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan istirahat yang cukup</li>
                        		<li>Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh</li>
                        	</label>
                        </div>
                        <div>
                        	<button type="submit" class="btn btn-success" name="kembali">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>