@extends('layout.master')
@section('title', 'Books')

@section('mainContent')

<div class="container-fluid p-0">
    {{-- <div class="row m-0">ضيف لبدك تعرضو هون</div> --}}
    <div class="row m-0 ">
        <div class="col-md-6 p-1">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    الوزن المناسب لطفلك على حسب عمره
                </div>
                <div class="card-body">
                    <div id="yearTooltip" class="position-fixed bg-danger text-white p-2 rounded text-end"
                        style="display: none; top: 20px; right: 20px; max-width: 150px;"></div>
                    <div id="monthTooltip" class="position-fixed bg-primary text-white p-2 rounded text-end"
                        style="display: none; top: 60px; right: 20px; max-width: 150px;"></div>
                    <canvas id="scatterPlot" class="w-100 h-100"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-1">
            <div class="card h-100">
                <div class="card-header bg-success text-white">
                    الطول المناسب لطفلك على حسب عمره
                </div>
                <div class="card-body">
                    <div id="lengthTooltip" class="position-fixed bg-success text-white p-2 rounded text-end"
                        style="display: none; top: 20px; right: 20px; max-width: 150px;"></div>
                    <canvas id="scatterPlot2" class="w-100 h-100"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var agesData = <?php echo json_encode($ages); ?>;
        var weightsKgData = <?php echo json_encode($weightsKg); ?>;
        var yearData = [];
        var monthData = [];


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

        //
        var chartData = {
            // x 
            labels: ['عند الولادة', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
            // y
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
                        stepSize: 10
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
                        stepSize: 10
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
                                tooltip.style.left = x - 150 + 'px';
                                tooltip.style.top = y + 50 + 'px';
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
                                tooltip.style.left = x - 130 + 'px';
                                tooltip.style.top = y + 200 + 'px';
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
                backgroundColor: 'rgba(40, 167, 69)',
                borderColor: 'rgba(40, 167, 69)',
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
                        stepSize: 10
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
                        stepSize: 10
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
                                tooltip.style.left = x + 550 + 'px';
                                tooltip.style.top = y  + 'px';
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
@endsection