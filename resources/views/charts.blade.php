<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

    <title>Charts</title>
</head>
<body style="display: flex; flex-direction: row;">
    <canvas id="first__chart" width="400" height="200"></canvas>
    <canvas id="second__chart" width="400" height="200"></canvas>
    <canvas id="third__chart" width="400" height="200"></canvas>

    <script type="text/javascript">
        var ctx1 = document.getElementById("first__chart");
        var first__chart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ["Back-end", "Front-end", "Full-stack", "codes on php"],
                datasets: [
                    {
                        label: 'Workers',
                        data: [40, 20, 15, 8],
                        backgroundColor:[
                            'black',
                            'green',
                            'blue',
                            'red'
                        ],
                    }
                ]
            },
            options: {
                responsive: false,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    ]
                }
            }
        });

        var ctx2 = document.getElementById("second__chart");
        var second__chart = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ["php it is not language", "I don't understand"],
                datasets: [
                    {
                        label: 'Why I do not like php...',
                        data: [10, 90],
                        backgroundColor:[
                            'red',
                            'green',
                        ],
                    }
                ]
            },
            options: {
                responsive: false,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    ]
                }
            }
        });

        var ctx3 = document.getElementById("third__chart");
        var third__chart = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                datasets: [
                    {
                        label: 'how many times do I do push-ups a day',
                        data: [15, 15, 20, 25, 25, 30, 30],
                        fill: false,
                        borderColor: 'red',
                        lineTension: 0.1
                    }
                ]
            },
            options: {
                responsive: false,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    ]
                }
            }
        });
    </script>
</body>
</html>