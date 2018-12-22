<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaraSchool</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{ asset('dashboard/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->

</head>

<body class="adminbody">
    <div id="main">
        @include('layouts.partial.topnav')
        @include('layouts.partial.sidenav')
        @yield('content')
        @include('layouts.partial.footer')
    </div>

    <script src="{{ asset('dashboard/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/moment.min.js') }}"></script>

    <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('dashboard/js/detect.js') }}"></script>
    <script src="{{ asset('dashboard/js/fastclick.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.nicescroll.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dashboard/js/pikeadmin.js') }}"></script>


    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- Counter-Up-->
    <script src="{{ asset('dashboard/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/counterup/jquery.counterup.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // data-tables
            $('#example1').DataTable();

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        } );
    </script>

    <script>
        var ctx1 = document.getElementById("lineChart").getContext('2d');
        var lineChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: '#3EB9DC',
                    data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
                }, {
                    label: 'Dataset 2',
                    backgroundColor: '#EBEFF3',
                    data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
                }]

            },
            options: {
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }
        });


        var ctx2 = document.getElementById("pieChart").getContext('2d');
        var pieChart = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Red",
                    "Orange",
                    "Yellow",
                    "Green",
                    "Blue"
                ]
            },
            options: {
                responsive: true
            }

        });


        var ctx3 = document.getElementById("doughnutChart").getContext('2d');
        var doughnutChart = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Red",
                    "Orange",
                    "Yellow",
                    "Green",
                    "Blue"
                ]
            },
            options: {
                responsive: true
            }

        });
    </script>
<!-- END Java Script for this page -->

</body>
</html>