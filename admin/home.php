<?php
include 'config.php';

if(!isset($_SESSION['login']) AND !isset($_SESSION['pass'])){
 header('Location: index.php?page=login');
}else{ ?>

<?php
include 'header.php';

include 'sidebar.php';
?>
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Courses <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-book"></i>
                      </div>
                      <div class="ps-3">
                        <?php
                        $query = $conn->query('SELECT * FROM course');
                        $res = $query->rowCount();
                        echo '<h6>'.$res.'</h6>'
                        
                        
                        ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Sales Card -->

             
              <!-- report Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card report-card">
                  <div class="card-body">
                    <h5 class="card-title">Users <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-person"></i>
                      </div>
                      <div class="ps-3">
                         <?php
                        $query = $conn->query('SELECT * FROM user');
                        $res = $query->rowCount();
                        echo '<h6>'.$res.'</h6>'
                        
                        
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End report Card -->
              <!-- report Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card report-card">
                  <div class="card-body">
                    <h5 class="card-title">Pdfs <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-book"></i>
                      </div>
                      <div class="ps-3">
                        <?php
                        $query = $conn->query('SELECT * FROM upload');
                        $res = $query->rowCount();
                        echo '<h6>'.$res.'</h6>'
                        
                        
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End report Card -->
               <!-- report Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card report-card">
                  <div class="card-body">
                    <h5 class="card-title">Specialties <span>| Today</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-book"></i>
                      </div>
                      <div class="ps-3">
                        <?php
                        $query = $conn->query('SELECT * FROM specialty');
                        $res = $query->rowCount();
                        echo '<h6>'.$res.'</h6>'
                        
                        
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End report Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Admins <span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                         <?php
                        $query = $conn->query('SELECT * FROM admin');
                        $res = $query->rowCount();
                        echo '<h6>'.$res.'</h6>'
                        
                        
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Customers Card -->

              <!-- Reports -->
              <div class="col-12">
                <div class="card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"
                      ><i class="bi bi-three-dots"></i
                    ></a>
                    <ul
                      class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                    >
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Reports <span>/Today</span></h5>

                    <!-- Line Chart -->
                    <div id="reportsChart"></div>

                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(
                          document.querySelector("#reportsChart"),
                          {
                            series: [
                              {
                                name: "Sales",
                                data: [31, 40, 28, 51, 42, 82, 56],
                              },
                              {
                                name: "report",
                                data: [11, 32, 45, 32, 34, 52, 41],
                              },
                              {
                                name: "Customers",
                                data: [15, 11, 32, 18, 9, 24, 11],
                              },
                            ],
                            chart: {
                              height: 350,
                              type: "area",
                              toolbar: {
                                show: false,
                              },
                            },
                            markers: {
                              size: 4,
                            },
                            colors: ["#4154f1", "#2eca6a", "#ff771d"],
                            fill: {
                              type: "gradient",
                              gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100],
                              },
                            },
                            dataLabels: {
                              enabled: false,
                            },
                            stroke: {
                              curve: "smooth",
                              width: 2,
                            },
                            xaxis: {
                              type: "datetime",
                              categories: [
                                "2018-09-19T00:00:00.000Z",
                                "2018-09-19T01:30:00.000Z",
                                "2018-09-19T02:30:00.000Z",
                                "2018-09-19T03:30:00.000Z",
                                "2018-09-19T04:30:00.000Z",
                                "2018-09-19T05:30:00.000Z",
                                "2018-09-19T06:30:00.000Z",
                              ],
                            },
                            tooltip: {
                              x: {
                                format: "dd/MM/yy HH:mm",
                              },
                            },
                          }
                        ).render();
                      });
                    </script>
                    <!-- End Line Chart -->
                  </div>
                </div>
              </div>
              <!-- End Reports -->
            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
            <!-- Budget Report -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"
                  ><i class="bi bi-three-dots"></i
                ></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Report <span>| General</span></h5>

                <div
                  id="budgetChart"
                  style="min-height: 400px"
                  class="echart"
                ></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    var budgetChart = echarts
                      .init(document.querySelector("#budgetChart"))
                      .setOption({
                        legend: {
                          data: ["Allocated Budget", "Actual Spending"],
                        },
                        radar: {
                          // shape: 'circle',
                          indicator: [
                            {
                              name: "Sales",
                              max: 6500,
                            },
                            {
                              name: "Administration",
                              max: 16000,
                            },
                            {
                              name: "Information Technology",
                              max: 30000,
                            },
                            {
                              name: "Customer Support",
                              max: 38000,
                            },
                            {
                              name: "Development",
                              max: 52000,
                            },
                            {
                              name: "Marketing",
                              max: 25000,
                            },
                          ],
                        },
                        series: [
                          {
                            name: "Budget vs spending",
                            type: "radar",
                            data: [
                              {
                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                name: "Allocated Budget",
                              },
                              {
                                value: [
                                  5000, 14000, 28000, 26000, 42000, 21000,
                                ],
                                name: "Actual Spending",
                              },
                            ],
                          },
                        ],
                      });
                  });
                </script>
              </div>
            </div>
            <!-- End Budget Report -->

            <!-- Website Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"
                  ><i class="bi bi-three-dots"></i
                ></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                <div
                  id="trafficChart"
                  style="min-height: 400px"
                  class="echart"
                ></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts
                      .init(document.querySelector("#trafficChart"))
                      .setOption({
                        tooltip: {
                          trigger: "item",
                        },
                        legend: {
                          top: "5%",
                          left: "center",
                        },
                        series: [
                          {
                            name: "Access From",
                            type: "pie",
                            radius: ["40%", "70%"],
                            avoidLabelOverlap: false,
                            label: {
                              show: false,
                              position: "center",
                            },
                            emphasis: {
                              label: {
                                show: true,
                                fontSize: "18",
                                fontWeight: "bold",
                              },
                            },
                            labelLine: {
                              show: false,
                            },
                            data: [
                              {
                                value: 1048,
                                name: "Search Engine",
                              },
                              {
                                value: 735,
                                name: "Direct",
                              },
                              {
                                value: 580,
                                name: "Email",
                              },
                              {
                                value: 484,
                                name: "Union Ads",
                              },
                              {
                                value: 300,
                                name: "Video Ads",
                              },
                            ],
                          },
                        ],
                      });
                  });
                </script>
              </div>
            </div>
            <!-- End Website Traffic -->
          </div>
          <!-- End Right side columns -->
        </div>
      </section>
    </main>
    <!-- End #main -->
<?php
include 'footer.html'
?>


<?php }







?>



