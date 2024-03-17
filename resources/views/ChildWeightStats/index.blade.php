<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children's Weight</title>
    <!-- تضمين Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Children's Weight</h2>
        <canvas id="scatterPlot"></canvas>
    </div>

    <?php
    $ages_json = json_encode($ages);
    $weightsKg_json = json_encode($weightsKg);
    // dd($ages_json,$weightsKg_json);
    ?>
    <!-- تضمين مكتبة Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script>
        var agesData = <?php echo $ages_json; ?>;
        var weightsKgData = <?php echo $weightsKg_json; ?>;
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

        // تكوين بيانات الخطوط المنفصلة
        var chartData = {
            labels: ['عند الولادة', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
            datasets: [{
                    label: 'الوزن (بالسنة)',
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
                },
                {
                    label: 'الوزن (بالشهر)',
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
                }
            ]
        };

        // customTooltip : 
        let indexDataPoint;
        const customTooltip = {
            id: 'customTooltip',
            afterDatasetsDraw(chart, args, plugins) {
                const {
                    ctx,
                    data,
                    scales: {
                        x,
                        y
                    }
                } = chart;

                if (indexDataPoint === undefined) {
                    return '';
                }

                const xPos = x.getPixelForValue(data.labels[indexDataPoint.indexValue]);

                const yPos0 = chart.getDatasetMeta(indexDataPoint.highestValue).data[indexDataPoint.indexValue]
                    .y; //year
                const yPos1 = chart.getDatasetMeta(indexDataPoint.lowestValue).data[indexDataPoint.indexValue]
                    .y; //month

                tooltip(yPos0 + 30, indexDataPoint.highestValue, -1, -38);
                tooltip(yPos1, indexDataPoint.lowestValue, 1, +18);

                function tooltip(y, datasetIndex, tooltipPosition, cloudPosition) {
                    //cloud
                    ctx.beginPath();
                    ctx.fillStyle = data.datasets[datasetIndex].borderColor;
                    // ctx.roundRect(xPos - 50, y + cloudPosition, 100, 20, 10);
                    ctx.roundRect(xPos - 70, y + cloudPosition, 200, 20, 10); // زيادة عرض الشكل

                    // caret
                    ctx.moveTo(xPos, y + (13 * tooltipPosition));
                    ctx.lineTo(xPos - 5, y + (18 * tooltipPosition));
                    ctx.lineTo(xPos + 5, y + (18 * tooltipPosition));
                    ctx.closePath();
                    ctx.fill();

                    // تحديد النص للعرض
                    const age = data.labels[indexDataPoint.indexValue];

                    const category = data.datasets[datasetIndex].data[indexDataPoint.indexValue].category === 'year' ?
                        'سنوات' : 'أشهر';
                    const weight = data.datasets[datasetIndex].data[indexDataPoint.indexValue].y;

                    // text 1
                    ctx.fillStyle = 'white';
                    ctx.font = 'bold 10px sans-serif';
                    ctx.textAlign = 'left';
                    ctx.fillText('العمر: ' + age + ' ' + category, xPos - 65, y + cloudPosition +
                        10); // زيادة البعد عن اليسار

                    // text 2
                    ctx.font = 'bold 12px sans-serif';
                    ctx.textAlign = 'right';
                    ctx.fillText('الوزن: ' + weight + ' كجم', xPos + 120, y + cloudPosition +
                        10); // زيادة البعد عن اليمين

                };

            },

            afterEvent(chart, args) {
                const {
                    ctx,
                    data: chartData,
                    scales: {
                        x,
                        y,
                    }
                } = chart;
                const xCoor = args.event.x;
                const yCoor = args.event.y;
                ctx.save();
                chart.getDatasetMeta(0).data.forEach((datapoint, index) => {
                    if (datapoint.active === true && args.inChartArea) {
                        const up = (chartData.datasets[0].data[index].y >= chartData.datasets[1].data[index]
                                .y) ?
                            0 : 1;
                        const down = up > 0 ? 0 : 1;
                        indexDataPoint = {
                            indexValue: index,
                            highestValue: up,
                            lowestValue: down,
                        }
                    };
                    if (!args.inChartArea) {
                        indexDataPoint = undefined;
                    };

                });
            },
        };
        //------------------
        // إعداد محاور المخطط
        var options = {
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
        // إعداد مخطط البيانات
        var ctx = document.getElementById('scatterPlot').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: options,
            plugins: [customTooltip],
        });
    </script>
</body>

</html>