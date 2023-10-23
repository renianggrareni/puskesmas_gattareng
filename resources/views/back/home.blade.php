@extends('layouts.back.app')
@section('content')
    <div class="container-fluid">
        <h1>Statistik Pendaftaran Pasien</h1>
        <p>Diagram pie menampilkan jumlah pasien per desa asal beserta persentase.</p>
        <div class="row">
            <div class="col-md-12">
                <div style="height: 60vh; width: 100%;">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p>Diagram barchart menampilkan jumlah pasien perbulan beserta persentase</p>
                <div style="height: 60vh; width: 100%;">
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var labels = {!! json_encode($labels) !!};
        var dataValues = {!! json_encode($data) !!};
        var backgroundColors = generateRandomColors(labels.length);

        const totalPasien = dataValues.reduce((a, b) => a + b, 0);
        const percentages = dataValues.map(value => ((value / totalPasien) * 100).toFixed(2) + '%');

        const pieData = {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: backgroundColors,
            }]
        };

        const pieConfig = {
            type: 'pie',
            data: pieData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var label = data.labels[tooltipItem.index];
                            var value = data.datasets[0].data[tooltipItem.index];
                            var percentage = percentages[tooltipItem.index];
                            return label + ': ' + value + ' (' + percentage + ')';
                        }
                    }
                }
            },
        };

        const pieChart = new Chart(
            document.getElementById('pieChart'),
            pieConfig
        );

        var labelsBar = {!! json_encode($labelsBar) !!};
        var dataValuesBar = {!! json_encode($dataValuesBar) !!};

        const barData = {
            labels: labelsBar,
            datasets: [{
                label: 'Jumlah Pasien',
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna biru
                borderColor: 'rgba(54, 162, 235, 1)', // Warna biru
                borderWidth: 1,
                data: dataValuesBar,
            }]
        };

        const barConfig = {
            type: 'bar',
            data: barData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const barChart = new Chart(
            document.getElementById('barChart'),
            barConfig
        );

        // Fungsi untuk menghasilkan warna acak untuk setiap sektor pie
        function generateRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {
                colors.push(getRandomColor());
            }
            return colors;
        }

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
@endsection
