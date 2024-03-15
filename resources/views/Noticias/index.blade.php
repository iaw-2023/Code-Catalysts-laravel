@extends('dashboard')

@section('title', 'Ultimas Noticias')

@section('content')
    <h2>Ultimas Transferencias</h2>
    <ul class="news-list">
        @foreach($noticias['data'] as $noticia)
            <li class="news-item">
                <div class="player-info">
                    <strong class="player-name">Jugador:</strong> {{ $noticia['player']['name'] }}
                </div>
                <div class="news-details">
                    <span class="amount">Monto:</span> {{ $noticia['amount'] ?? 'N/A' }}<br>
                    <span class="date">Fecha:</span> {{ $noticia['date'] }}<br>
                    <span class="from-team">Equipo del que se va:</span> {{ $noticia['fromteam']['name'] }}<br>
                    <span class="to-team">Equipo al que se va:</span> {{ $noticia['toteam']['name'] }}
                </div>
            </li>
        @endforeach
    </ul>
    
    <style>
        .news-list {
            list-style-type: none;
            padding: 0;
        }

        .news-item {
            background-color: #f5f5f5;
            padding: 20px;
            margin-bottom: 20px;
            margin-right: 20px;
            margin-left: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .player-info {
            margin-bottom: 10px;
        }

        .player-name {
            font-weight: bold;
            font-size: 1.2em;
        }

        .amount,
        .date,
        .from-team,
        .to-team {
            display: block;
            margin-bottom: 5px;
            color: #777;
            font-size: 0.9em;
        }

        .amount {
            color: #337ab7;
        }

        .news-details {
            font-size: 0.9em;
        }
    </style>
@endsection