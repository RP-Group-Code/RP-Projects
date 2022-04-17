<style>
    .card__dasboard {
        border-radius: 1.2rem !important;
    }

    .card {
        box-shadow: 0px 11px 20px 0px rgb(0 0 0 / 20%) !important;
    }

    .card-burn .card-header {
        border-radius: 0.6rem !important;
        background-color: rgb(126, 120, 161) !important;
        color: white;

    }

    .info-box-icon,
    .info-box-text {
        color: rgb(98, 92, 134) !important;
    }

    .progress-description {
        flex-wrap: wrap !important;
        display: flex !important;
        width: 100%;
        color: #2094b1 !important
            /* background-color: rgb(98, 92, 134) !important; */

    }

    .card-burn .card-body {
        border-radius: 1rem !important;
    }

    .dashboard__header {
        background: #ffff;
        border-radius: 1.5rem !important;
    }

    .dashboard__header .dasboard__text__header {
        font-size: 1.25rem !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .dashboard__header .dasboard__littletext__header {
        font-size: 0.8rem !important;
        opacity: 0.8;
        margin: 0 !important;
        padding: 0 !important;
    }

    .tombol__newprj {
        border-radius: 2rem !important;
        font-size: 0.99rem !important;
        background-color: rgb(95, 106, 151) !important;
        border: none !important;
        color: #fff !important;
        box-shadow: 0px 2px 20px 0px rgb(145, 161, 224) !important;
    }


    .btn-purple {
        border-radius: 0.5rem !important;
        font-size: 0.96rem !important;
        background-color: rgb(176, 192, 255) !important;
        border: none !important;
        color: rgb(12, 12, 12) !important;
    }

    .btn-purple:hover {
        border-radius: 0.55rem !important;
        font-size: 0.965rem !important;
        background-color: rgb(95, 106, 151) !important;
        border: none !important;
        color: #fff !important;
        box-shadow: 0px 2px 20px 0px rgb(145, 161, 224) !important;
    }

    .tombol__newprj:hover {
        border-radius: 2rem !important;
        font-size: 0.96rem !important;
        background-color: rgb(176, 192, 255) !important;
        border: none !important;
        color: rgb(12, 12, 12) !important;
    }

</style>


@extends('layout.index')
@section('content')
    <div class="content">
        <div class="container-fluid p-4">
            <div class="content__header" style="padding-top: 20px">
                <div class="dashboard__header mb-3">
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-1 column__card">
                                            <div align="center" class="card" width="2rem">
                                                <i class="uil uil-chart-line p-2"
                                                    style="font-size:25px; font-weight: 400; color:#88CADA;"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="dasboard__text__header">Analytics Dashboard</p>
                                            <p class="dasboard__littletext__header">RP-Project Dashboard Analytics</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <button class="tombol__newprj btn mt-3">
                                            <i class="uil uil-plus"></i>
                                            New Project
                                        </button>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__dasboard card p-3">
                    <div class="pt-2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-burn shadow">
                                    <div class="card-header">
                                        <h3 class="card-title">All together</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                                                data-source="widgets.html" data-source-selector="#card-refresh-content"
                                                data-load-on-init="false">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                <i class="fas fa-expand"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        The body of the card
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-burn shadow">
                                    <div class="card-header">
                                        <h3 class="card-title">All together</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                                                data-source="widgets.html" data-source-selector="#card-refresh-content"
                                                data-load-on-init="false">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                <i class="fas fa-expand"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        The body of the card
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-burn shadow">
                                    <div class="card-header">
                                        <h3 class="card-title">All together</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                                                data-source="widgets.html" data-source-selector="#card-refresh-content"
                                                data-load-on-init="false">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                <i class="fas fa-expand"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        The body of the card
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-burn shadow">
                                    <div class="card-header">
                                        <h3 class="card-title">All together</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                                                data-source="widgets.html" data-source-selector="#card-refresh-content"
                                                data-load-on-init="false">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                                <i class="fas fa-expand"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        The body of the card
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__chart mt-5 pt-3">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box card-burn shadow">
                                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Bookmarks</span>
                                        <span class="info-box-number">41,410</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <span class="progress-description">
                                            70% Increase in 30 Days
                                        </span>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box card-burn shadow">
                                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Likes</span>
                                        <span class="info-box-number">41,410</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <span class="progress-description">
                                            10% Increase in 30 Days
                                        </span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box card-burn shadow">
                                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Events</span>
                                        <span class="info-box-number">41,410</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <span class="progress-description">
                                            30% Increase in 30 Days
                                        </span>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box card-burn shadow">
                                    <span class="info-box-icon"><i class="fas fa-comments"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Comments</span>
                                        <span class="info-box-number">41,410</span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <span class="progress-description">
                                            20% Increase in 30 Days
                                        </span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="card card-burn card__dasboard">
                            <figure class="highcharts-figure">
                                <div id="container"></div>
                            </figure>
                        </div>
                    </div>

                    <div class="card__content2 mt-5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box shadow">
                                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Message</span>
                                        <span class="info-box-number">None</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box shadow">
                                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Project</span>
                                        <span class="info-box-number">None</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box shadow">
                                    <span class="info-box-icon bg-purple"><i class="far fa-copy"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">File Pending</span>
                                        <span class="info-box-number">None</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="info-box shadow">
                                    <span class="info-box-icon bg-primary"><i class="far fa-star"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Sertifikasi</span>
                                        <span class="info-box-number">None</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card P-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Line Chart</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="lineChart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="content P-4">
                                        <table id="example" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Ruli</td>
                                                    <td>Software Engineer</td>
                                                    <td>RP Group</td>
                                                    <td>22</td>
                                                    <td>2020/20/20</td>
                                                    <td>$220.800</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Parsya Khan</td>
                                                    <td>Design Engineer</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$169.691</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gaylang Chan</td>
                                                    <td>IT Junior</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$47.691</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pares Khan</td>
                                                    <td>Design Management</td>
                                                    <td>RP Group</td>
                                                    <td>20</td>
                                                    <td>2020/20/20</td>
                                                    <td>$79.696</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nagieb Chan</td>
                                                    <td>Salesman Header</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$969</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SantoNGUS</td>
                                                    <td>IT Support</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$469</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Yohanes B</td>
                                                    <td>Junior IT Networking</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$269</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jepri A</td>
                                                    <td>Junior IT Support</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$224</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Dick Ky C</td>
                                                    <td>Junior Information Officer</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$241</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Azhar iii</td>
                                                    <td>Junior IT Support Analytics</td>
                                                    <td>RP Group</td>
                                                    <td>21</td>
                                                    <td>2020/20/20</td>
                                                    <td>$269</td>
                                                    <td>
                                                        <button class="btn btn-purple">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <script>
        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })
    </script>

    <script>
        Highcharts.getJSON(
            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/usdeur.json',
            function(data) {

                Highcharts.chart('container', {
                    chart: {
                        zoomType: 'x'
                    },
                    title: {
                        text: 'Data Pendapatan Dalam Bulan Ini'
                    },
                    subtitle: {
                        text: document.ontouchstart === undefined ?
                            'Klik dan Drag Area Yang Ingin Dilihat Lebih Dekat' : 'Pinch the chart to zoom in'
                    },
                    xAxis: {
                        type: 'datetime'
                    },
                    yAxis: {
                        title: {
                            text: 'Exchange rate'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        area: {
                            fillColor: {
                                linearGradient: {
                                    x1: 0,
                                    y1: 0,
                                    x2: 0,
                                    y2: 1
                                },
                                stops: [
                                    [0, Highcharts.getOptions().colors[0]],
                                    [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0)
                                        .get('rgba')
                                    ]
                                ]
                            },
                            marker: {
                                radius: 2
                            },
                            lineWidth: 1,
                            states: {
                                hover: {
                                    lineWidth: 1
                                }
                            },
                            threshold: null
                        }
                    },

                    series: [{
                        type: 'area',
                        name: 'USD to EUR',
                        data: data
                    }]
                });
            }
        );
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
