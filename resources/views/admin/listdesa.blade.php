<html>
<head>
    <link href="{{ asset('css/listdesa.css') }}" rel="stylesheet">
    <!-- Include library Chart.js atau Highcharts -->
</head>
<body>
    <h1>Data Desa dan Grafik Jumlah Penduduk</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Desa</th>
                <th>Jumlah Penduduk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($desaData as $desa)
                <tr>
                    <td>{{ $desa->nama }}</td>
                    <td>{{ $desa->jumlah_penduduk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tampilkan pie chart di sini -->
    {!! $chart->html() !!}
</body>
</html>
