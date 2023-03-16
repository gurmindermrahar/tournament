<section class="pixel_Tournaments section_panel">
    <div class="container">
        <h4 class="title">
            <img src="{{url('assets/frontend/images/tournament_icon.png')}}"> TOURNAMENTS
        </h4>
        <div class="px_tournaments_holder">
            @if(count($tournaments))
                @foreach ($tournaments as $item)
                    <div class="tournament_item">
                        <div class="head_content">
                        <div class="top_head">
                            <div class="title">{{strtoupper($item->game)}}</div>
                            <span>${{$item->cash_prize}}</span>
                        </div>
                        <div class="head_info">
                            <span><strong>{{date('Y-m-d H:m', strtotime($item->start_time)); }}</strong></span>
                            <span><strong>Entry/Player</strong>{{$item->credit_entry}} Credits</span>
                            <span><strong><i mi-name="alarm" class="material-icons navigation-icon"></i> {{ \Carbon\Carbon::parse($item->start_time)->diffForHumans() }}</strong></span>
                        </div>
                        </div>
                        <div class="middle_content">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <p>{{$item->game_mode}}</p>
                                    <p>
                                    <label>Type:</label>
                                    <span>{{$item->type}}</span>
                                    </p>
                                </div>
                                <div class="col-md-6 col-xs-6 right-info">
                                    <p>
                                    <label>Region:</label>
                                    <span>{{$item->region}}</span>
                                    </p>
                                    <p>
                                    <label>Platform:</label>
                                    <span>{{$item->platform}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="foot_content">
                        <a href="{{route('getTournamentDetails',$item->id)}}"> <button>View Tournament <i mi-name="keyboard_arrow_right" class="material-icons navigation-icon"></i> </button> </a>
                        </div>
                    </div>
                @endforeach
            @else
                No Tournaments
            @endif


            {{-- <div class="tournament_item">
                <div class="head_content">
                <div class="top_head">
                    <div class="title">CALL OF DUTY : WARZONE 2.0</div>
                    <span>$50</span>
                </div>
                <div class="head_info">
                    <span><strong>12:00 PM</strong></span>
                    <span><strong>Entry/Player</strong>5 Credits</span>
                    <span><strong><i mi-name="alarm" class="material-icons navigation-icon"></i> 32 mins</strong></span>
                </div>
                </div>
                <div class="middle_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <p>1v1 Duos Kill Race</p>
                            <p>
                            <label>Type:</label>
                            <span>Best of 1</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 right-info">
                            <p>
                            <label>Region:</label>
                            <span>NA</span>
                            </p>
                            <p>
                            <label>Platform:</label>
                            <span>Cross Play</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="foot_content">
                <button>View Tournament <i mi-name="keyboard_arrow_right" class="material-icons navigation-icon"></i> </button>
                </div>
            </div>
            <div class="tournament_item">
                <div class="head_content">
                <div class="top_head">
                    <div class="title">CALL OF DUTY :  MWII</div>
                    <span>$50</span>
                </div>
                <div class="head_info">
                    <span><strong>12:00 PM</strong></span>
                    <span><strong>Entry/Player</strong>5 Credits</span>
                    <span><strong><i mi-name="alarm" class="material-icons navigation-icon"></i> 32 mins</strong></span>
                </div>
                </div>
                <div class="middle_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <p>1v1 SND</p>
                            <p>
                            <label>Type:</label>
                            <span>Best of 1</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 right-info">
                            <p>
                            <label>Region:</label>
                            <span>NA</span>
                            </p>
                            <p>
                            <label>Platform:</label>
                            <span>Cross Play</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="foot_content">
                <button>View Tournament <i mi-name="keyboard_arrow_right" class="material-icons navigation-icon"></i> </button>
                </div>
            </div>
            <div class="tournament_item">
                <div class="head_content">
                <div class="top_head">
                    <div class="title">CALL OF DUTY : MWII</div>
                    <span>$50</span>
                </div>
                <div class="head_info">
                    <span><strong>12:00 PM</strong></span>
                    <span><strong>Entry/Player</strong>5 Credits</span>
                    <span><strong><i mi-name="alarm" class="material-icons navigation-icon"></i> 32 mins</strong></span>
                </div>
                </div>
                <div class="middle_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <p>1v1 Kill Race | Shoot House</p>
                            <p>
                            <label>Type:</label>
                            <span>Best of 1</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 right-info">
                            <p>
                            <label>Region:</label>
                            <span>NA</span>
                            </p>
                            <p>
                            <label>Platform:</label>
                            <span>Cross Play</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="foot_content">
                <button>View Tournament <i mi-name="keyboard_arrow_right" class="material-icons navigation-icon"></i> </button>
                </div>
            </div>
            <div class="tournament_item">
                <div class="head_content">
                <div class="top_head">
                    <div class="title">LEAGUE OF LEGENDS: TFT</div>
                    <span>$50</span>
                </div>
                <div class="head_info">
                    <span><strong>12:00 PM</strong></span>
                    <span><strong>Entry/Player</strong>5 Credits</span>
                    <span><strong><i mi-name="alarm" class="material-icons navigation-icon"></i> 32 mins</strong></span>
                </div>
                </div>
                <div class="middle_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <p>1v1 Singles Better Placement</p>
                            <p>
                            <label>Type:</label>
                            <span>Best of 1</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 right-info">
                            <p>
                            <label>Region:</label>
                            <span>NA</span>
                            </p>
                            <p>
                            <label>Platform:</label>
                            <span>Cross Play</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="foot_content">
                <button>View Tournament <i mi-name="keyboard_arrow_right" class="material-icons navigation-icon"></i> </button>
                </div>
            </div>
            <div class="tournament_item">
                <div class="head_content">
                <div class="top_head">
                    <div class="title">FORTNITE</div>
                    <span>$50</span>
                </div>
                <div class="head_info">
                    <span><strong>12:00 PM</strong></span>
                    <span><strong>Entry/Player</strong>5 Credits</span>
                    <span><strong><i mi-name="alarm" class="material-icons navigation-icon"></i> 32 mins</strong></span>
                </div>
                </div>
                <div class="middle_content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <p>1v1 Duos Kill Race</p>
                            <p>
                            <label>Type:</label>
                            <span>Best of 1</span>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-6 right-info">
                            <p>
                            <label>Region:</label>
                            <span>NA</span>
                            </p>
                            <p>
                            <label>Platform:</label>
                            <span>Cross Play</span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="foot_content">
                <button>View Tournament <i mi-name="keyboard_arrow_right" class="material-icons navigation-icon"></i> </button>
                </div>
            </div> --}}

        </div>
    </div>
 </section>
