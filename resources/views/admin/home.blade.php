@extends('layouts.app')
@section('title', 'Admin Home')

@section('content')
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Sequi quae, fugit at, numquam ad libero atque, eaque
        explicabo tempore, expedita nostrum iure earum. Ipsam, repellendus, tenetur. Temporibus minus beatae et.</p>
    <div class="card">
        <div class="card-body">
            <canvas id="myChart" width="100"></canvas>
        </div>
    </div>
@endsection

@section('javacript-includes')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
@endsection
@section('javascript')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Respostas por categoria mais respondida', 'Perguntas por categoria com melhor avaliação',
                    'Perguntas por classificação com melhor avaliação '
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 159, 64, 0.2)'

                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)'

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
