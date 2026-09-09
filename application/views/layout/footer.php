<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart"></i> by
                    <a href="javascript:;" class="font-weight-bold">SIMAK Team</a>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</footer>
</div>
</main>
<!-- Theme Configurator removed for cleaner portfolio view -->
<!--   Core JS Files   -->
<script src="<?= base_url('assets/') ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets/') ?>js/soft-ui-dashboard.min.js?v=1.0.7"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- JS Edit EventKBK -->
<script type="text/javascript">
    function btnEditEvent(id_event, nama_event, tanggal_event, lokasi_event, deskripsi_event, file_event) {
        const potong_data = id_event.split(", ");
        $("#id_event").val(potong_data[0]);
        $("#nama_event").val(potong_data[1]);
        $("#tanggal_event").val(potong_data[2]);
        $("#lokasi_event").val(potong_data[3]);
        $("#deskripsi_event").val(potong_data[4]);
        document.getElementById("name_file").innerHTML = potong_data[5];
        document.getElementById("link_file").href = '../../assets/uploads/' + potong_data[5];
        $('#ModalEditEvent').modal('show');
    };
</script>

<!-- JS Edit DanaKBK -->
<script type="text/javascript">
    function btnEditDana(id_dana, jumlah_dana, tanggal_pengajuan, keterangan, file_dana) {
        const potong_data = id_dana.split(", ");
        $("#id_dana").val(potong_data[0]);
        $("#jumlah_dana").val(potong_data[1]);
        $("#tanggal_pengajuan").val(potong_data[2]);
        $("#keterangan").val(potong_data[3]);
        document.getElementById("name_file").innerHTML = potong_data[4];
        document.getElementById("link_file").href = '../../assets/uploads/' + potong_data[4];
        $('#ModalEditDana').modal('show');
    };
</script>

<!-- JS Edit RiseKBK -->
<script type="text/javascript">
    function btnEditRiset(id_riset, judul_riset, peneliti, tanggal_mulai, tanggal_selesai, deskripsi_riset, file_riset) {
        const potong_data = id_riset.split(", ");
        $("#id_riset").val(potong_data[0]);
        $("#judul_riset").val(potong_data[1]);
        $("#peneliti").val(potong_data[2]);
        $("#tanggal_mulai").val(potong_data[3]);
        $("#tanggal_selesai").val(potong_data[4]);
        $("#deskripsi_riset").val(potong_data[5]);
        document.getElementById("name_file").innerHTML = potong_data[6];
        document.getElementById("link_file").href = '../../assets/uploads/' + potong_data[6];
        $('#ModalEditRiset').modal('show');
    };
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->

<!-- <script>
    var options = {
        chart: {
            type: 'bar',
            height: 300, // Sesuaikan dengan tinggi yang diinginkan
            width: '100%', // Sesuaikan dengan lebar yang diinginkan
            toolbar: {
                show: false // Hilangkan toolbar jika tidak diperlukan
            }
        },
        series: [{
            name: 'sales',
            data: [30, 40, 35, 50, 60, 70, 91, 125, 75, 25, 50, 125]
        }],
        xaxis: {
            categories: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
        }
    }

    var chart = new ApexCharts(document.getElementById("myAreaChart"), options);

    chart.render();
</script> -->

<!-- <script>
    var options = {
        series: [44, 55, 41, 17, 15],
        chart: {
            width: 380,
            type: 'donut',
        },
        plotOptions: {
            pie: {
                startAngle: -90,
                endAngle: 270
            }
        },
        dataLabels: {
            enabled: false
        },
        fill: {
            type: 'gradient',
        },
        legend: {
            formatter: function(val, opts) {
                return val + " - " + opts.w.globals.series[opts.seriesIndex]
            }
        },
        title: {
            //   text: 'Gradient Donut with custom Start-angle'
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.getElementById("myPieChart"), options);
    chart.render();
</script> -->

<script>
    // Ambil URL halaman saat ini
    var currentUrl = window.location.href;

    // Ambil semua elemen <a> di dalam menu
    var menuLinks = document.querySelectorAll('.nav-link');

    // Loop melalui setiap elemen <a>
    menuLinks.forEach(function(link) {
        // Bandingkan href dari setiap link dengan URL saat ini
        if (link.href === currentUrl) {
            // Jika cocok, tambahkan kelas active
            link.classList.add('active');

            // Ambil teks dari link yang aktif untuk dijadikan breadcrumb dan heading
            var linkText = link.innerText.trim();

            // Perbarui breadcrumb
            var breadcrumbItem = document.querySelector('.breadcrumb-item.text-sm.text-dark.active');
            if (breadcrumbItem) {
                breadcrumbItem.innerText = linkText;
            }

            // Perbarui heading
            var heading = document.querySelector('.font-weight-bolder.mb-0');
            if (heading) {
                heading.innerText = linkText;
            }
        }
    });
</script>

<!-- Resources Chart -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- DataTable -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#datatables');
</script>

<!-- Chart code -->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("ColumnChart");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: true,
            panY: true,
            wheelX: "panX",
            wheelY: "zoomX",
            pinchZoomX: true,
            paddingLeft: 0,
            paddingRight: 1
        }));

        // Add cursor
        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
        cursor.lineY.set("visible", false);

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xRenderer = am5xy.AxisRendererX.new(root, {
            minGridDistance: 25,
            minorGridEnabled: false
        });

        xRenderer.labels.template.setAll({
            rotation: 0,
            centerY: am5.p50,
            centerX: am5.p50,
            paddingTop: 10,
            fontSize: "11px",
            fill: am5.color(0x67748e)
        });

        xRenderer.grid.template.setAll({
            location: 1,
            strokeOpacity: 0.05
        });

        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            maxDeviation: 0.3,
            categoryField: "bulan",
            renderer: xRenderer,
            tooltip: am5.Tooltip.new(root, {})
        }));

        var yRenderer = am5xy.AxisRendererY.new(root, {
            strokeOpacity: 0.05
        });

        yRenderer.labels.template.setAll({
            fontSize: "11px",
            fill: am5.color(0x67748e)
        });

        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            maxDeviation: 0.3,
            renderer: yRenderer
        }));

        // Create series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
            name: "Realisasi Dana",
            xAxis: xAxis,
            yAxis: yAxis,
            valueYField: "value",
            sequencedInterpolation: true,
            categoryXField: "bulan",
            tooltip: am5.Tooltip.new(root, {
                labelText: "{categoryX}: Rp {valueY} Juta"
            })
        }));

        series.columns.template.setAll({
            cornerRadiusTL: 6,
            cornerRadiusTR: 6,
            strokeOpacity: 0,
            width: am5.percent(70)
        });
        series.columns.template.adapters.add("fill", function(fill, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        series.columns.template.adapters.add("stroke", function(stroke, target) {
            return chart.get("colors").getIndex(series.columns.indexOf(target));
        });

        // Set data: Tren realisasi anggaran kegiatan & riset KBK per bulan (dalam Juta Rupiah)
        var data = [{
            bulan: "Jan",
            value: 3.5
        }, {
            bulan: "Feb",
            value: 4.2
        }, {
            bulan: "Mar",
            value: 7.8
        }, {
            bulan: "Apr",
            value: 5.0
        }, {
            bulan: "Mei",
            value: 8.5
        }, {
            bulan: "Jun",
            value: 6.2
        }, {
            bulan: "Jul",
            value: 9.8
        }, {
            bulan: "Agu",
            value: 7.4
        }, {
            bulan: "Sep",
            value: 8.9
        }, {
            bulan: "Okt",
            value: 11.2
        }, {
            bulan: "Nov",
            value: 13.5
        }, {
            bulan: "Des",
            value: 8.0
        }];

        xAxis.data.setAll(data);
        series.data.setAll(data);

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        series.appear(1000);
        chart.appear(1000, 100);

    }); // end am5.ready()
</script>

<!-- Chart code -->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("PieChart");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(am5percent.PieChart.new(root, {
            layout: root.verticalLayout
        }));

        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(am5percent.PieSeries.new(root, {
            alignLabels: true,
            calculateAggregates: true,
            valueField: "value",
            categoryField: "category"
        }));

        series.slices.template.setAll({
            strokeWidth: 2,
            stroke: am5.color(0xffffff)
        });

        series.labelsContainer.set("paddingTop", 20);

        // Set up adapters for variable slice radius
        // https://www.amcharts.com/docs/v5/concepts/settings/adapters/
        series.slices.template.adapters.add("radius", function(radius, target) {
            var dataItem = target.dataItem;
            var high = series.getPrivate("valueHigh");

            if (dataItem) {
                var value = target.dataItem.get("valueWorking", 0);
                return radius * value / high;
            }
            return radius;
        });

        // Set data: Proporsi kegiatan dan riset aktif berdasarkan 4 bidang KBK
        series.data.setAll([{
            category: "Software Engineering",
            value: 35
        }, {
            category: "Data Science & AI",
            value: 30
        }, {
            category: "Cyber Security",
            value: 20
        }, {
            category: "Embedded & IoT",
            value: 15
        }]);

        // Create legend
        // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
        var legend = chart.children.push(am5.Legend.new(root, {
            centerX: am5.p50,
            x: am5.p50,
            marginTop: 15,
            marginBottom: 10
        }));

        legend.data.setAll(series.dataItems);

        // Play initial series animation
        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
        series.appear(1000, 100);

    }); // end am5.ready()
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function confirmDelete(url) {
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                window.location.href = url;
            } else {
                swal("Cancelled", "Your data is safe :)", "error");
            }
        });
    }
</script> -->

</body>

</html>