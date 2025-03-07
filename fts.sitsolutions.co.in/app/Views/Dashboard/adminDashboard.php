<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8" />
        <title>FTS - डॅशबोर्ड</title>


        <?php echo view('Include/header'); ?>    
        
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">डॅशबोर्ड</h4>
                            </div>
                        </div>

                        <!-- start row -->
                        <div class="row">
                            <div class="col-md-12 col-xl-7">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h5 class="card-title text-black mb-0">फाईल सारांश</h5>

                                            <div class="ms-auto"> 
                                                <button class="btn btn-sm bg-light border dropdown-toggle fw-medium text-black" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This Month<i class="mdi mdi-chevron-down ms-1 fs-14"></i></button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">This Month</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="sales-overview" class="apex-charts"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xl-5">
                                <div class="row g-3">
                                    
                                    <div class="col-md-6 col-xl-6">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="widget-first">
        
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="p-2 border border-primary border-opacity-10 bg-primary-subtle rounded-pill me-2">
                                                            <div class="bg-primary rounded-circle widget-size text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#ffffff" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-dark fs-15">एकूण फाईल</p>
                                                    </div>
       
                                                    <div class="justify-content-between align-items-center">
                                                        <h3 class="mb-0 fs-22 text-black me-3"><?=sizeof($all_files);?></h3>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="col-md-6 col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="widget-first">
        
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="p-2 border border-dark border-opacity-10 bg-dark-subtle rounded-pill me-2">
                                                            <div class="bg-dark rounded-circle widget-size text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9H6.659c-1.006 0-1.51 0-1.634-.309c-.125-.308.23-.672.941-1.398L8.211 5M5 15h12.341c1.006 0 1.51 0 1.634.309c.125.308-.23.672-.941 1.398L15.789 19" color="#ffffff"/></svg>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-dark fs-15">प्रलंबित फाईल</p>
                                                    </div>
                                                    
        
                                                    <div class="justify-content-between align-items-center">
                                                        <h3 class="mb-0 fs-22 text-black me-3"><?=sizeof($pen_files);?></h3>
        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-xl-6">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="widget-first">
        
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="p-2 border border-secondary border-opacity-10 bg-secondary-subtle rounded-pill me-2">
                                                            <div class="bg-secondary rounded-circle widget-size text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-dark fs-15">मंजूर फाईल </p>
                                                    </div>
        
                                                    <div class="justify-content-between align-items-center">
                                                        <h3 class="mb-0 fs-22 text-black me-3"><?=sizeof($apr_files);?></h3>
                                                        
                                                    </div>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-6 col-xl-6">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="widget-first">
        
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="p-2 border border-danger border-opacity-10 bg-danger-subtle rounded-pill me-2">
                                                            <div class="bg-danger rounded-circle widget-size text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#ffffff" d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15"/></svg>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-dark fs-15">नाकारलेले फाईल </p>   
                                                    </div>
        
                                                    <div class="justify-content-between align-items-center">
                                                        <h3 class="mb-0 fs-22 text-black me-3"><?=sizeof($rej_files);?></h3>
                                                        
                                                    </div>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-6">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="widget-first">
        
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="p-2 border border-primary border-opacity-10 bg-primary-subtle rounded-pill me-2">
                                                            <div class="bg-primary rounded-circle widget-size text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#ffffff" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-dark fs-15">एकूण विभाग</p>
                                                    </div>
       
                                                    <div class="justify-content-between align-items-center">
                                                        <h3 class="mb-0 fs-22 text-black me-3"><?=sizeof($all_files);?></h3>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="col-md-6 col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="widget-first">
        
                                                    <div class="d-flex align-items-center mb-2">
                                                        <div class="p-2 border border-dark border-opacity-10 bg-dark-subtle rounded-pill me-2">
                                                            <div class="bg-dark rounded-circle widget-size text-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9H6.659c-1.006 0-1.51 0-1.634-.309c-.125-.308.23-.672.941-1.398L8.211 5M5 15h12.341c1.006 0 1.51 0 1.634.309c.125.308-.23.672-.941 1.398L15.789 19" color="#ffffff"/></svg>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-dark fs-15">एकूण कर्मचारी</p>
                                                    </div>
                                                    
        
                                                    <div class="justify-content-between align-items-center">
                                                        <h3 class="mb-0 fs-22 text-black me-3"><?=sizeof($pen_files);?></h3>
        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end start -->

                        <!-- Start Monthly Sales -->
                        <!--<div class="row">-->

                           

                        <!--    <div class="col-md-6 col-xl-6">-->
                        <!--        <div class="card">-->
                        <!--            <div class="card-header">-->
                        <!--                <div class="d-flex align-items-center">-->
                        <!--                    <h5 class="card-title text-black mb-0">Your Recent Perfomance</h5>-->
                        <!--                </div>-->
                        <!--            </div>-->

                        <!--            <div class="card-body">-->
                        <!--                <div id="browservisiting" class="apex-charts"></div>-->

                        <!--                <div class="text-center fw-medium my-3">78% increase in company growth.</div>-->

                        <!--                <div class="d-flex gap-3 justify-content-between">-->
                        <!--                    <div class="d-flex">-->
                        <!--                        <div class="bg-primary-subtle rounded-2 p-1 me-2 border border-dashed border-primary">-->
                        <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">-->
                        <!--                                <path fill="#287F71" d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15"/>-->
                        <!--                            </svg>-->
                        <!--                        </div>-->
                        <!--                        <div class="d-flex flex-column">-->
                        <!--                            <small><script>document.write(new Date().getFullYear() - 1)</script></small>-->
                        <!--                            <h6 class="mb-0 fs-15">$32.5k</h6>-->
                        <!--                        </div>-->
                        <!--                    </div>-->

                        <!--                    <div class="d-flex">-->
                        <!--                        <div class="bg-success-subtle rounded-2 p-1 me-2 border border-dashed border-success">-->
                        <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">-->
                        <!--                                <path fill="#2786f1" d="M12 12V2c5.523 0 10 4.477 10 10z" opacity="0.25"/><path fill="#2786f1" d="m12 12l5 8.66A10.01 10.01 0 0 0 22 12z" opacity="0.5"/><path fill="#2786f1" d="M17 20.66L12 12V2c-5.523.002-9.999 4.48-9.997 10.003c.002 5.523 4.48 9.999 10.004 9.997A10 10 0 0 0 17 20.662l.003-.005l-.004.003z"/>-->
                        <!--                            </svg>-->
                        <!--                        </div>-->
                        <!--                        <div class="d-flex flex-column">-->
                        <!--                            <small><script>document.write(new Date().getFullYear() - 2)</script></small>-->
                        <!--                            <h6 class="mb-0 fs-15">$41.2k</h6>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->

                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                            
                        <!--     <div class="col-xl-6">-->
                        <!--        <div class="card overflow-hidden">-->
                        <!--            <div class="card-header">-->
                        <!--                <div class="d-flex align-items-center">-->
                        <!--                    <h5 class="card-title text-black mb-0">Product Activity</h5>-->
                        <!--                </div>-->
                        <!--            </div>-->

                        <!--            <div class="card-body">-->
                        <!--                <div class="row">-->
                        <!--                    <div class="col-xxl-6">-->
                        <!--                        <div id="productactivity" class="apex-charts"></div>        -->
                        <!--                    </div>-->

                        <!--                    <div class="col-xxl-6 align-self-center">-->
                        <!--                        <h3 class="fs-18 fw-semibold text-black mb-3">Data Statistic</h3>-->
                        <!--                        <ul class="list-unstyled mb-0">-->
                                                    
                        <!--                            <li class="list-item mb-2 align-self-center">-->
                        <!--                                <div class="d-flex align-items-center justify-content-between fs-15">-->
                        <!--                                    <div class="">-->
                        <!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" class="me-0"><path fill="#2786f1" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>-->
                        <!--                                        <span class="text-black fw-normal">To Be Packed </span> -->
                        <!--                                    </div>-->
                        <!--                                    <p class="mb-0 text-muted">157.880</p>-->
                        <!--                                </div>-->
                        <!--                            </li>-->

                        <!--                            <li class="list-item mb-2 align-self-center">-->
                        <!--                                <div class="d-flex align-items-center justify-content-between fs-15">-->
                        <!--                                    <div class="">-->
                        <!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="#f59440" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>-->
                        <!--                                        <span class="text-black fw-normal">Process Delivery </span>-->
                        <!--                                    </div>-->
                        <!--                                    <p class="mb-0 text-muted">198.254</p>-->
                        <!--                                </div>-->
                        <!--                            </li>-->

                        <!--                            <li class="list-item text-black align-self-center fs-15">-->
                        <!--                                <div class="d-flex align-items-center justify-content-between fs-15">-->
                        <!--                                    <div class="">-->
                        <!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="#522c8f" d="M4 8a4 4 0 1 1 8 0a4 4 0 0 1-8 0m4-2.5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></svg>-->
                        <!--                                        <span class="text-black fw-normal">Delivery Done</span>-->
                        <!--                                    </div>-->
                        <!--                                    <p class="mb-0 text-muted">142.278</p>-->
                        <!--                                </div>-->
                        <!--                            </li>-->

                        <!--                        </ul>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->

                                

                        <!--    </div>-->
                        <!--</div>-->
                        <!-- End Monthly Sales -->

                    </div> <!-- container-fluid -->
                </div> <!-- content -->

               <?php echo view('Include/footer'); ?>   
               
<script>
    var options = {
        series: [{
            name: "प्रलंबित फाईल",
            data: [<?php echo sizeof($pen_files); ?>, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        }, {
            name: "मंजूर फाईल",
            data: [<?php echo sizeof($apr_files); ?>, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        }],
        chart: {
            type: "bar",
            height: 353,
            parentHeightOffset: 0,
            stacked: !0,
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "30%",
                startingShape: "rounded",
                endingShape: "rounded",
                borderRadius: 4
            }
        },
        dataLabels: {
            enabled: !1
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        grid: {
            show: !0,
            padding: {
                top: -18,
                right: 0,
                bottom: 0
            },
            strokeDashArray: 4,
            xaxis: {
                lines: {
                    show: !0
                }
            },
            yaxis: {
                lines: {
                    show: !1
                }
            }
        },
        legend: {
            position: "bottom"
        },
        fill: {
            opacity: 1
        },
        colors: ["#287F71", "#dee2e6"]
    },
    chart = new ApexCharts(document.querySelector("#sales-overview"), options);
chart.render();
options = {
    chart: {
        height: 300,
        type: "radialBar"
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
                name: {
                    fontSize: "13px",
                    color: void 0,
                    offsetY: 25
                },
                value: {
                    offsetY: -15,
                    fontSize: "25px",
                    color: "#343a40",
                    formatter: function(e) {
                        return e + "%"
                    }
                }
            }
        }
    },
    fill: {
        gradient: {
            enabled: !0,
            shade: "dark",
            shadeIntensity: .2,
            inverseColors: !1,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 65, 91]
        }
    },
    stroke: {
        dashArray: 7
    },
    colors: ["#287F71", "#22c55e"],
    series: [78],
    labels: ["Growth"]
};
(chart = new ApexCharts(document.querySelector("#browservisiting"), options)).render();
options = {
    series: [{
        name: "Top Lead",
        data: [80, 50, 30, 40, 100, 20]
    }, {
        name: "Cold Lead",
        data: [20, 30, 40, 80, 20, 80]
    }, {
        name: "Qualified",
        data: [44, 76, 78, 13, 43, 10]
    }],
    chart: {
        type: "radar",
        height: 323,
        parentHeightOffset: 0,
        dropShadow: {
            enabled: !0,
            blur: 1,
            left: 1,
            top: 1
        },
        toolbar: {
            show: !1
        }
    },
    stroke: {
        width: 1
    },
    fill: {
        opacity: .1
    },
    markers: {
        size: 3,
        hover: {
            size: 4
        }
    },
    yaxis: {
        stepSize: 20
    },
    tooltip: {
        y: {
            formatter: function(e) {
                return e
            }
        }
    },
    legend: {
        show: !0
    },
    xaxis: {
        categories: ["2019", "2020", "2021", "2022", "2023", "2024"],
        labels: {
            show: !0,
            style: {
                colors: ["#001b2f", "#001b2f", "#001b2f", "#001b2f", "#001b2f", "#001b2f"],
                fontSize: "13px"
            }
        }
    },
    colors: ["#287F71", "#963b68", "#2786f1"],
    dataLabels: {
        enabled: !1,
        background: {
            enabled: !0
        }
    }
};
(chart = new ApexCharts(document.querySelector("#deals-statistics"), options)).render();
options = {
    chart: {
        height: 200,
        type: "donut"
    },
    plotOptions: {
        pie: {
            donut: {
                size: "75%"
            }
        }
    },
    dataLabels: {
        enabled: !1
    },
    stroke: {
        show: !0,
        width: 2,
        colors: ["transparent"]
    },
    series: [35, 35, 30],
    legend: {
        show: !1,
        position: "bottom",
        horizontalAlign: "center",
        verticalAlign: "middle",
        floating: !1,
        fontSize: "14px",
        offsetX: 0,
        offsetY: 0
    },
    labels: ["Mobile", "Tablet", "Desktop"],
    colors: ["#963b68", "rgba(150, 59, 104, .5)", "rgba(150, 59, 104, .18)"]
};
(chart = new ApexCharts(document.querySelector("#productactivity"), options)).render();
</script>