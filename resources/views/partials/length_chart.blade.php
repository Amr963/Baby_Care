<div id="lengthTooltip" class="position-fixed bg-success text-white p-2 rounded text-end"
    style="display: none; top: 20px; right: 20px; max-width: 150px;"></div>
<canvas id="scatterPlot2" class="w-100 h-100"></canvas>

<script>
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
                            tooltip.style.top = y - 25 + 'px';
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
