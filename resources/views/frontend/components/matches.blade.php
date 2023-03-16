<section class="cash_matches section_panel">
    <div class="container">
        <h4 class="title">
            <img src="{{url('assets/frontend/images/cash_icon.png')}}"> MATCHES
        </h4>
        <div class="px_games_holder">
            @foreach ($cashmatches as $key => $item)
            <div class="game_item">
                <div class="image">
                    <img src="{{url('assets/frontend/images/game_'.($key+1).'.png')}}" alt="img">
                </div>
                <div class="game_title">
                    <a href="#">APEX LEGEND</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
 </section>
