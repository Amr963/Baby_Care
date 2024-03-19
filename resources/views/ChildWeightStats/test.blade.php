<!-- ChildWeightStats.index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children's Weight</title>
    <!-- تضمين Bootstrap CSS -->
    {{--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- تضمين مكتبة Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row"> {{-- First row --}}

            <div class="col position-relative">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        الوزن المناسب لطفلك على حسب عمره
                    </div>
                    <div class="card-body">
                        <div id="yearTooltip" class="position-fixed bg-danger text-white p-2 rounded text-end"
                            style="display: none; top: 20px; right: 20px; max-width: 150px;"></div>
                        <div id="monthTooltip" class="position-fixed bg-primary text-white p-2 rounded text-end"
                            style="display: none; top: 60px; right: 20px; max-width: 150px;"></div>
                        <canvas id="scatterPlot" class="flex-grow-1 mr-2"></canvas>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col position-relative">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        الطول المناسب لطفلك على حسب عمره
                    </div>
                    <div class="card-body">
                        <div id="lengthTooltip" class="position-fixed bg-danger text-white p-2 rounded text-end"
                            style="display: none; top: 20px; right: 20px; max-width: 150px;"></div>
                        <canvas id="scatterPlot2" class="flex-grow-1 mr-2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // تعريف البيانات
        var agesData = <?php echo json_encode($ages); ?>;
        var weightsKgData = <?php echo json_encode($weightsKg); ?>;
        var yearData = [];
        var monthData = [];

        // تقسيم البيانات إلى مجموعتين
        for (var i = 0; i < agesData.length; i++) {
            if (agesData[i].age_category === 'year') {
                yearData.push({
                    x: agesData[i]['age'],
                    category: agesData[i]['age_category'],
                    y: weightsKgData[i],
                });
            } else {
                monthData.push({
                    x: agesData[i]['age'],
                    category: agesData[i]['age_category'],
                    y: weightsKgData[i],
                });
            }
        }

        // تكوين بيانات الخطوط
        var chartData = {
            labels: ['عند الولادة', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
            datasets: [{
                    label: 'العمر (بالسنة)',
                    data: yearData,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    pointHoverBackgroundColor: 'white',
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 3,
                    pointRadius: 6,
                    clip: true,
                    pointStyle: 'rectRounded',
                    fill: false,
                    category: 'year'
                },
                {
                    label: 'العمر (بالشهر)',
                    data: monthData,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    pointHoverBackgroundColor: 'white',
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 3,
                    pointRadius: 6,
                    clip: true,
                    pointStyle: 'rectRounded',
                    fill: false,
                    category: 'month'
                }
            ]
        };

        // تكوين خيارات الرسم
        var options = {
            responsive: true,
            layout: {
                padding: {
                    left: 50,
                    right: 50,
                },
            },
            interaction: {
                mode: 'index',
                intersect: false,
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'عمر الطفل'
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                },
                y: {
                    grace: 1,
                    title: {
                        display: true,
                        text: 'الوزن (كيلوغرام)'
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            },
            plugins: {
                tooltip: {
                    enabled: false,
                }
            },
        };

        // الحصول على سياق الرسم
        var ctx = document.getElementById('scatterPlot').getContext('2d');

        // تكوين المخطط
        var myChart = new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: options,
        });

        // تسجيل التول تيب الخاص بالعمر بالسنة
        Chart.register({
            id: 'customTooltipYear',
            afterDatasetsDraw: function(chart, args) {
                const {
                    ctx,
                    data
                } = chart;
                const datasets = data.datasets;

                let isAnyActive = false;

                datasets.forEach(function(dataset, i) {
                    const meta = chart.getDatasetMeta(i);
                    if (!meta.hidden) {
                        meta.data.forEach(function(element, index) {
                            // إذا كانت النقطة محددة
                            if (element.active && dataset.category === 'year') {
                                isAnyActive = true;
                                const {
                                    x,
                                    y
                                } = element.tooltipPosition();
                                // تحديث التول تيب
                                const tooltip = document.getElementById('yearTooltip');
                                tooltip.innerHTML = '<div class="bg-' + dataset.borderColor
                                    .substring(4) +
                                    ' text-white rounded p-2">' +
                                    '<h5>' + dataset.label + '</h5>' +
                                    '<p>العمر: ' + data.labels[index] + '</p>' +
                                    '<p>الوزن: ' + dataset.data[index].y + ' كجم</p>' +
                                    '</div>';
                                tooltip.style.display = 'block';
                                tooltip.style.left = x + 'px';
                                tooltip.style.top = y + 'px';
                            }
                        });
                    }
                });

                if (!isAnyActive) {
                    const tooltip = document.getElementById('yearTooltip');
                    tooltip.style.display = 'none';
                }
            }
        });

        // تسجيل التول تيب الخاص بالعمر بالشهر
        Chart.register({
            id: 'customTooltipMonth',
            afterDatasetsDraw: function(chart, args) {
                const {
                    ctx,
                    data
                } = chart;
                const datasets = data.datasets;

                let isAnyActive = false;

                datasets.forEach(function(dataset, i) {
                    const meta = chart.getDatasetMeta(i);
                    if (!meta.hidden) {
                        meta.data.forEach(function(element, index) {
                            // إذا كانت النقطة محددة
                            if (element.active && dataset.category === 'month') {
                                isAnyActive = true;
                                const {
                                    x,
                                    y
                                } = element.tooltipPosition();
                                // تحديث التول تيب
                                const tooltip = document.getElementById('monthTooltip');
                                tooltip.innerHTML = '<div class="bg-' + dataset.borderColor
                                    .substring(4) +
                                    ' text-white rounded p-2">' +
                                    '<h5>' + dataset.label + '</h5>' +
                                    '<p>العمر: ' + data.labels[index] + '</p>' +
                                    '<p>الوزن: ' + dataset.data[index].y + ' كجم</p>' +
                                    '</div>';
                                tooltip.style.display = 'block';
                                tooltip.style.left = x + 'px';
                                tooltip.style.top = y + 'px';
                            }
                        });
                    }
                });

                if (!isAnyActive) {
                    const tooltip = document.getElementById('monthTooltip');
                    tooltip.style.display = 'none';
                }
            }
        });

        var agesLengthData = <?php echo json_encode($age_for_length); ?>;
        var lengthData = <?php echo json_encode($length_child); ?>;
        var data = [];
        // تقسيم البيانات إلى مجموعتين
        for (var i = 0; i < agesLengthData.length; i++) {
            data.push({
                x: agesLengthData[i]['age'],
                y: lengthData[i]['length_child'],
            });
        }
        // تكوين بيانات الخطوط
        var chartData1 = {
            labels: ['عند الولادة', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
            datasets: [{
                label: 'الطول بالنسبة الى العمر',
                data: data,
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                pointHoverBackgroundColor: 'white',
                pointHoverRadius: 10,
                pointHoverBorderWidth: 3,
                pointRadius: 6,
                clip: true,
                pointStyle: 'rectRounded',
                fill: false,
            }]
        };

        var options1 = {
            responsive: true,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                },
            },
            interaction: {
                mode: 'index',
                intersect: false,
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'عمر الطفل'
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                },
                y: {
                    grace: 1,
                    title: {
                        display: true,
                        text: 'الطول (سم)'
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            },
            plugins: {
                tooltip: {
                    enabled: false,
                }
            },
        };

        var ctx1 = document.getElementById('scatterPlot2').getContext('2d');
        var myChart2 = new Chart(ctx1, {
            type: 'line',
            data: chartData1,
            options: options1,
        });

        Chart.register({
            id: 'customTooltipLengthForAge',
            afterDatasetsDraw: function(myChart2, args) {
                if (myChart2.canvas.id !== 'scatterPlot2')
                    return;

                const {
                    ctx1,
                    data
                } = myChart2;
                const datasets = data.datasets;

                let isAnyActive = false;

                datasets.forEach(function(dataset, i) {
                    const meta = myChart2.getDatasetMeta(i);
                    if (!meta.hidden) {
                        meta.data.forEach(function(element, index) {
                            if (element.active) {
                                isAnyActive = true;
                                const {
                                    x,
                                    y
                                } = element.tooltipPosition();
                                const tooltip = document.getElementById('lengthTooltip');
                                tooltip.innerHTML = '<div class="bg-' + dataset.borderColor
                                    .substring(4) +
                                    ' text-white rounded p-2" style="z-index: 1000;">' +
                                    '<h5>' + dataset.label + '</h5>' +
                                    '<p>العمر: ' + data.labels[index] + '</p>' +
                                    '<p>الطول: ' + dataset.data[index].y + ' سم</p>' +
                                    '</div>';
                                tooltip.style.display = 'block';
                                tooltip.style.left = x + 500 + 'px';
                                tooltip.style.top = y - 100 + 'px';
                            }
                        });
                    }
                });

                if (!isAnyActive) {
                    const tooltip = document.getElementById('lengthTooltip');
                    tooltip.style.display = 'none';
                }
            }
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>