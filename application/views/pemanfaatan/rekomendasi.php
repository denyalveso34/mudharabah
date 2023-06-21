<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Permohonan </h4>
<div class="card-body">
	<form>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-name">1.	Nama Pemohon</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="basic-default-name" placeholder="Isikan Nama Anda" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-company">2.	NPWP</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="basic-default-company" placeholder="Isikan Alamat Lengkap Anda" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-company">3.	Alamat Kantor</label>
			<div class="col-sm-10">
				<input type="text" id="basic-default-company" class="form-control" placeholder="Isikan Peruntukan Permohonan" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-message">4.	Nomor Telepon	</label>
			<div class="col-sm-10">
				<textarea id="basic-default-message" class="form-control" placeholder="Isikan Lokasi Permohonan"></textarea>
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-name">5.	Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="basic-default-name" placeholder="Isikan Nama Anda" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-company">6.	Status Penanaman Modal</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="basic-default-company" placeholder="Isikan Alamat Lengkap Anda" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-company">7.	Kode Klasifikasi Baku Lapangan</label>
			<div class="col-sm-10">
				<input type="text" id="basic-default-company" class="form-control" placeholder="Isikan Peruntukan Permohonan" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-message">8.	Judul KLBI</label>
			<div class="col-sm-10">
				<textarea id="basic-default-message" class="form-control" placeholder="Isikan Lokasi Permohonan"></textarea>
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-name">9.	Skala Usaha</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="basic-default-name" placeholder="Isikan Nama Anda" />
			</div>
		</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-form-label" for="basic-default-message">10.	Lokasi Usaha</label>
										<div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label" for="basic-default-message">a. Alamat</label>
                                            <textarea id="basic-default-message" class="form-control" 
												placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                            <label class="col-sm-2 col-form-label" for="basic-default-message">b. Kelurahan	</label>
                                            <textarea id="basic-default-message" class="form-control" 
												placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                            <label class="col-sm-2 col-form-label" for="basic-default-message">c.	Kecamatan</label>
                                            <textarea id="basic-default-message" class="form-control" 
												placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                            <label class="col-sm-2 col-form-label" for="basic-default-message">d.	Kota	</label>
                                            <textarea id="basic-default-message" class="form-control" 
												placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                            <label class="col-sm-2 col-form-label" for="basic-default-message">e.	Provinsi</label>
                                            <textarea id="basic-default-message" class="form-control" 
												placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                                
                </div>                                  
             </div>	
	<hr class="m-0" />

	</form>
    <label class="col-sm-2 col-form-label" for="basic-default-message">11. Lihat Koordinat Pada Peta</label>
                                        <button class ="btn btn-label-primary " onclick="getLocation()">Lihat Koordinat</button>
                                                    <p id="map-pu"></p>

                                                            <script>
                                                                var x = document.getElementById("map-pu");
                                                                var lat = position.coords.latitude;
                                                                var lng = position.coords.longitude;


                                                                function getLocation() {
                                                                    if (navigator.geolocation) {
                                                                        navigator.geolocation.getCurrentPosition(showPosition);
                                                                    } else {
                                                                        x.innerHTML = "Browser Anda Belum Support Geolocation";
                                                                    }
                                                                }

                                                                function showPosition(position) {
                                                                    x.innerHTML = "<br>Latitude: " + position.coords.latitude +
                                                                        "<br>Longitude: " + position.coords.longitude;
                                                                }
                                                            </script>
                                                            <div class="col-sm-5">
                                                            <label class="col-sm-2 col-form-label" for="basic-default-message">Latitude</label>
                                                            <textarea id="basic-default-message" class="form-control" 
                                                                placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                                            <label class="col-sm-2 col-form-label" for="basic-default-message">Longitude</label>
                                                            <textarea id="basic-default-message" class="form-control" 
                                                                placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
</div>
<br>
                                            <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-name">12.	Luas tanah yang dimohon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Isikan Nama Anda" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-name">13.	Penggunaan tanah saat ini</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Isikan Nama Anda" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-name">14.	Rencana teknis bangunan dan/ atau rencana induk kawasan </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="basic-default-name" placeholder="Isikan Nama Anda" />
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="basic-default-message">15. Status Tanah</label>
                                                        <div class="col-sm-10">
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Intensitas Pemanfaatan Ruang"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Persyaratan Khusus"></textarea>
                                                                <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Intensitas Pemanfaatan Ruang"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Persyaratan Khusus"></textarea>
                                                                <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Intensitas Pemanfaatan Ruang"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Persyaratan Khusus"></textarea>
                                                                <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Ketentuan Intensitas Pemanfaatan Ruang"></textarea>
                                                            <textarea id="basic-default-message" class="form-control"
                                                                placeholder="Isikan Persyaratan Khusus"></textarea>
                                                                    
                                                        </div>
                                                    </div>

</div>
</div>
</div>
</div>
