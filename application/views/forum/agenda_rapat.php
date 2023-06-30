<!-- Users List Table -->
<!-- <div class="card">
	<div class="card-header border-bottom">
		<h5 class="card-title">Agenda Rapat FPR</h5>
		<div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
			<div class="col-md-4 user_role"></div>
			<div class="col-md-4 user_plan"></div>
			<div class="col-md-4 user_status"></div>
		</div>
	</div>
	<div class="card-datatable table-responsive">
		<table class="datatables-users table border-top">
			<thead>
				<tr>
					<th>Seksi / SUB KOORDINATOR SUB-SUBSTANSI</th>
					<th>Agenda Rapat</th>
					<th>Tanggal Rapat</th>
					<th>Materi Rapat</th>
					<th>Undangan Rapat</th>
					<th>Link Rapat</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach ($pr_agenda->result() as $pragenda) { ?>
					<tr>
						<td><?=$pragenda->bidang;?></td>
						<td><?=$pragenda->judul_kegiatan;?></td>
						<td><?=$pragenda->tanggal_kegiatan;?></td>
						                      
					</tr>
					<?php } ?>
					
					<?php foreach ($pm_agenda->result() as $pmagenda) { ?>
					<tr>
						<td><?=$pmagenda->bidang;?></td>
						<td><?=$pmagenda->nama_kegiatan;?></td>
						<td><?=$pmagenda->tanggal_kegiatan;?></td>
						                      
					</tr>
					<?php } ?>

					<?php foreach ($pg_agenda->result() as $pgagenda) { ?>
					<tr>
						<td><?=$pgagenda->bidang;?></td>
						<td><?=$pgagenda->nama_kegiatan;?></td>
						<td><?=$pgagenda->tanggal_kegiatan;?></td>
                           
					</tr>

					<?php } ?>
				</tbody>
		</table>
	</div>
	
</div> -->
<!DOCTYPE html>
<html>
<head>
  <!-- Tambahkan link ke Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="<?= $this->config->item('img')?>icons/unicons/wallet.png" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart">
              <canvas id="incomeChartCanvas"></canvas>
            </div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek">
                  <canvas id="expensesOfWeekCanvas"></canvas>
                </div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Generate random data for example
    function generateRandomData(length) {
      var data = [];
      for (var i = 0; i < length; i++) {
        data.push(Math.floor(Math.random() * 100));
      }
      return data;
    }

    // Initialize income chart
    var incomeChartCanvas = document.getElementById("incomeChartCanvas");
    var incomeChart = new Chart(incomeChartCanvas, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
          {
            label: "Income",
            data: generateRandomData(6),
            backgroundColor: "rgba(75, 192, 192, 0.2)",
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 1,
            fill: true,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
      },
    });

    // Initialize expenses of week chart
    var expensesOfWeekCanvas = document.getElementById("expensesOfWeekCanvas");
    var expensesOfWeekChart = new Chart(expensesOfWeekCanvas, {
      type: "bar",
      data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
        datasets: [
          {
            label: "Expenses",
            data: generateRandomData(7),
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 1,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  </script>
</body>
</html>
