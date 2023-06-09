@extends('layouts.frontend.app')

@section('content')
    <div class="brackets">
    </div>
@endsection

@push('styles')

@endpush
@push('scripts')
<script src="{{url('assets/frontend/js/brackets.min.js')}}"></script>

<script>
$( document ).ready(function() {
    var rounds,titles;

    $.ajax({
      url: "{{route('getBrackets',7)}}",
      type: "get",
     // data: "",

      success:{

      }
   });

    rounds = [


        //-- ronda 1
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111, url: 'http://www.google.com' },
                player2: { name: "Player 211", ID: 211 }
            },

            {
                player1: { name: "Player 112", winner: true, ID: 112 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 213", ID: 213 }
            },

            {
                player1: { name: "Player 114", winner: true, ID: 114 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115, url: 'goggle.com' },
                player2: { name: "Player 215", ID: 215 }
            },

            {
                player1: { name: "Player 116", winner: true, ID: 116 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 217", ID: 217 }
            },

            {
                player1: { name: "Player 118", winner: true, ID: 118 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 2
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 212", ID: 212 }
            },

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 214", ID: 214 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 216", ID: 216 }
            },

            {
                player1: { name: "Player 117", winner: true, ID: 117 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 3
        [

            {
                player1: { name: "Player 111", winner: true, ID: 111 },
                player2: { name: "Player 113", ID: 113 }
            },

            {
                player1: { name: "Player 115", winner: true, ID: 115 },
                player2: { name: "Player 218", ID: 218 }
            },
        ],

        //-- ronda 4
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
                player2: { name: "Player 218", winner: true, ID: 218 },
            },
        ],
        //-- Champion
        [

            {
                player1: { name: "Player 113", winner: true, ID: 113 },
            },
        ],

    ];

    titles = ['Ronda 1', 'Ronda 2', 'Ronda 3', 'Ronda 4', 'Ronda 5'];


    ;(function($){

        $(".brackets").brackets({
            titles: titles,
            rounds: rounds,
            color_title: 'black',
            border_color: '#00F',
            color_player: 'black',
            bg_player: 'white',
            color_player_hover: 'white',
            bg_player_hover: 'blue',
            border_radius_player: '10px',
            border_radius_lines: '10px',
        });

    })(jQuery);
});
</script>

@endpush
