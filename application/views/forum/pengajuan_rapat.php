<!-- Users List Table -->
<!-- <div class="card">
	<div class="card-header border-bottom">
		<h5 class="card-title text-center">Pengajuan Rapat FPR</h5>
		<div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
			<div class="col-md-4 user_role"></div>
			<div class="col-md-4 user_plan"></div>
			<div class="col-md-4 user_status"></div>
		</div>
	</div> -->
	<!-- <div class="card-datatable text-center table-responsive">
		<table class="datatables-users table border-top">
			<thead>
				<tr>

				</tr>
			</thead>
			<tbody> -->
				<!--  view agenda Perencanaan -->
				<!-- <td>
					<div class="card-datatable text-center table-responsive">
						<div class="card">
							<div class="card-body text-center">
								<i class='mb-3 bx bx-md bx-credit-card'></i>
								<h5>Agenda Perencanaan</h5>
								<p>lihat agenda pengajuan rapat forum</p>
								<a href="<?=base_url('forum/pengajuan_perencanaan')?>"> -->
									<!-- Basic Dropdowns -->
									<!-- <div class="card-body">
										<div class="demo-inline-spacing">
											<div class="btn-group">
												<button type="button" class="btn btn-primary dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
												<ul class="dropdown-menu">
													<li>
														<a class="dropdown-item" href="javascript:void(0);">Action</a>
													</li>
													<li>
														<a class="dropdown-item" href="javascript:void(0);">Another action</a>
													</li>
													<li>
														<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
													</li>
													<li>
														<hr class="dropdown-divider">
													</li>
													<li>
														<a class="dropdown-item" href="javascript:void(0);">Separated link</a>
													</li>
												</ul>
											</div>

										</div>
									</div> -->
									<!--/ Basic Dropdowns -->

									<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Data Perencanaan </button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Data Pengaduan </button>
								</a>
							</div>
						</div>
					</div>
				</td> -->

				<!--  view agenda -->
				<!-- <td>
					<div class="card-datatable text-center table-responsive">
						<div class="card">
							<div class="card-body text-center">
								<i class='mb-3 bx bx-md bx-credit-card'></i>
								<h5>Agenda Pemanfaatan</h5>
								<p> lihat agenda pengajuan rapat forum</p>
								<a href="<?=base_url('forum/pengajuan_pemanfaatan')?>">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Pengajuan KKPR </button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Prngajuan SPPR </button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Pengajuan Informasi </button>
								</a>
							</div>
						</div>
					</div>
				</td> -->

				<!--  view agenda -->
				<!-- <td>
					<div class="card-datatable text-center table-responsive">
						<div class="card">
							<div class="card-body text-center">
								<i class='mb-3 bx bx-md bx-credit-card'></i>
								<h5>Agenda Pengendalian</h5>
								<p> lihat agenda pengajuan rapat forum</p>
								<a href="<?=base_url('forum/pengajuan_pengendalian')?>">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Pengajuan Pengendalian </button>
								</a>
							</div>
						</div>
					</div>
				</td> -->


			<!-- </tbody>
		</table>
	</div>

</div> -->

<div class="col-12 mb-4">
    <small class="text-light fw-semibold">Form Pengajuan Pemodalan</small>
    <div class="bs-stepper vertical wizard-modern wizard-modern-vertical wizard-modern-vertical-icons-example mt-2">
      <div class="bs-stepper-header">
        <div class="step" data-target="#account-details-vertical-modern">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">
              <i class="bx bx-detail"></i>
            </span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Identitas Pemodal</span>
              <span class="bs-stepper-subtitle">Isi Identitas Lengkap Pemodal</span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#personal-info-vertical-modern">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">
              <i class="bx bx-user"></i>
            </span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Personal Info</span>
              <span class="bs-stepper-subtitle">Add personal info</span>
            </span>
          </button>
        </div>
        <div class="line"></div>
        <div class="step" data-target="#social-links-vertical-modern">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">
              <i class="bx bxl-instagram"></i>
            </span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Social Links</span>
              <span class="bs-stepper-subtitle">Add social links</span>
            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <form onSubmit="return false">
          <!-- Account Details -->
          <div id="account-details-vertical-modern" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">FORM AJUKAN PEMODAL</h6>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="username-modern-vertical">Nama Pemodal</label>
                <input type="text" id="email-modern-vertical" class="form-control" placeholder="john.doe" aria-label="john.doe" value="<?php echo $users['name']; ?>" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="email-modern-vertical">Email Pemodal</label>
                <input type="text" id="email-modern-vertical" class="form-control" placeholder="john.doe" aria-label="john.doe" value="<?php echo $users['email']; ?>" />
              </div>
               <div class="col-sm-6">
                <label class="form-label" for="nik">NIK</label>
                <input type="text" id="nik" class="form-control" placeholder="Masukkan NIK" oninput="readNIK()" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="provinsi">Provinsi</label>
                <input type="text" id="provinsi" class="form-control" placeholder="Provinsi"/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="kota">Kab/Kota</label>
                <input type="text" id="kota" class="form-control" placeholder="Kab/Kota" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="kecamatan">Kecamatan</label>
                <input type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="tanggal">Tanggal Lahir</label>
                <input type="text" id="tanggal" class="form-control" placeholder="Tanggal Lahir" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="bulan">Bulan Lahir</label>
                <input type="text" id="bulan" class="form-control" placeholder="Bulan Lahir" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="tahun">Tahun Lahir</label>
                <input type="text" id="tahun" class="form-control" placeholder="Tahun Lahir" />
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev" disabled>
                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next">
                  <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                  <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- Personal Info -->
          <div id="personal-info-vertical-modern" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Personal Info</h6>
              <small>Enter Your Personal Info.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="first-name-modern-vertical">First Name</label>
                <input type="text" id="first-name-modern-vertical" class="form-control" placeholder="John" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="last-name-modern-vertical">Last Name</label>
                <input type="text" id="last-name-modern-vertical" class="form-control" placeholder="Doe" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="country-vertical-modern">Country</label>
                <select class="select2" id="country-vertical-modern">
                  <option>UK</option>
                  <option>USA</option>
                  <option>Spain</option>
                  <option>France</option>
                  <option>Italy</option>
                  <option>Australia</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="language-vertical-modern">Language</label>
                <select class="selectpicker w-auto" id="language-vertical-modern" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple>
                  <option>English</option>
                  <option>French</option>
                  <option>Spanish</option>
                </select>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-primary btn-prev">
                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next">
                  <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                  <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- Social Links -->
          <div id="social-links-vertical-modern" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Social Links</h6>
              <small>Enter Your Social Links.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="twitter-vertical-modern">Twitter</label>
                <input type="text" id="twitter-vertical-modern" class="form-control" placeholder="https://twitter.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="facebook-vertical-modern">Facebook</label>
                <input type="text" id="facebook-vertical-modern" class="form-control" placeholder="https://facebook.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="google-vertical-modern">Google+</label>
                <input type="text" id="google-vertical-modern" class="form-control" placeholder="https://plus.google.com/abc" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="linkedin-vertical-modern">Linkedin</label>
                <input type="text" id="linkedin-vertical-modern" class="form-control" placeholder="https://linkedin.com/abc" />
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-primary btn-prev">
                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-success btn-submit">Submit</button>
              </div>
            </div>
          </div>

         <script src="<?=$this->config->item('js').'nik-ktp.js';?>"></script>
        </form>
      </div>
    </div>
  </div>
  
  <!-- /Modern Vertical Icons Wizard -->
  