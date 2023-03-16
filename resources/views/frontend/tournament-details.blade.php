@extends('layouts.frontend.app')
@section('content')
<div class="tournament_detail_page page_wrapper">
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-image">
        <img alt="banner-image" src="{{url('assets/frontend/images/product_bg_banner.webp')}}">
      </div>
    </section>
    <!-- Tournament Games Section -->
    <section class="pixel_Tournaments section_panel">
        <div class="container">
            <div class="px_tournaments_holder">
                <div class="tournament_img">
                    <img alt="product image" src="{{url('assets/frontend/images/game_2.png')}}">
                    <p>
                    <span class="g_name">MWII</span>
                    <span class="g_price">${{$tournament->cash_prize}}<sub>PRIZE</sub></span>
                    </p>
                </div>
                <div class="tournament_item">
                    <div class="head_content">
                        <div class="top_head">
                            <div class="title">{{$tournament->game_mode }}</div>
                        </div>
                        <div class="contnt_1">
                            <div class="col-md-12">
                            <div class="row">
                                <div class="left-info">
                                <p>{{$tournament->pixel_esports_profil}}</p>
                                <p>
                                    <span class="com_t">COMMUNITY TOURNAMENT</span>
                                </p>
                                </div>
                                <div class="col d-flex right-info">
                                <p>
                                    <span>{{$tournament->platform}}</span>
                                </p>
                                </div>
                            </div>

                            <div class="row registration_info">
                                <div class="left-info">
                                <p>REGISTRATION OPENS</p>
                                <p>
                                    <span class="status_info">Open Now  </span>
                                </p>
                                </div>
                                <div class="right-info">
                                <p>
                                    <span class="timing">START TIME</span>
                                    {{ \Carbon\Carbon::parse($tournament->start_time)->format('l')}}
                                </p>
                                <p class="dt_info">{{ \Carbon\Carbon::parse($tournament->start_time)->format('M dS h:i A e')}}</p>
                                </div>
                            </div>

                            <div class="row tournament-details-entry-info">
                                <ul>
                                <li>
                                    <label>ENTRY/PLAYER</label>
                                    <span class="value">{{$tournament->credit_entry}} Credits</span>
                                </li>
                                <li>
                                    <label>TEAM SIZE</label>
                                    <span class="value">{{$tournament->play_per_team}} vs {{$tournament->play_per_team}}</span>
                                </li>
                                <li>
                                    <label>MAX TEAMS</label>
                                    <span class="value">{{$tournament->max_teams}}</span>
                                </li>
                                <li>
                                    <label>ENROLLED</label>
                                    <span class="value">4</span>
                                </li>
                                <li>
                                    <label>SKILL LEVEL</label>
                                    <span class="value">All Skills</span>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tournament-details-info-footer">
                    <span class="tournament-counter">Starts in<span>
                    <span></span>
                    <span>{{ \Carbon\Carbon::parse($tournament->start_time)->diffForHumans()}}</span>
                    <div class="enroll-now-container">
                        <a href="{{route('getTournamentRulesDetails',enDeCryptString($tournament->id))}}">
                            <button class="enroll-button button-large" data-toggle="modal" data-target="#myModal">Enroll Now</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tournament-details-page-switcher">
                <ul class="nav nav-tabs">
                    <li class="col"><a data-toggle="tab" href="#bracket"><i class="cmgico cmgico-bracket"></i>BRACKET</a></li>
                    <li class="col"><a data-toggle="tab" href="#cMatch"><i class="cmgico cmgico-games"></i> CURRENT MATCH</a></li>
                    <li class="active col"><a class="active" data-toggle="tab" href="#rules"><i class="cmgico cmgico-rules"></i>RULES</a></li>
                </ul>
                <div class="tab-content">
                    <div id="bracket" class="tab-pane fade">
                        <div class="tournament-details-tab-bracket table-responsive">
                        <div  class="cmg-tournament-bracket is-expand">
                            <div   class="cmg-tournament-bracket-round">
                            <div   class="cmg-tournament-bracket-match-wrapper">
                                <div  class="cmg-tournament-bracket-match-details">
                                <div  class="match-vs"> vs </div>
                                <div  class="match-date">
                                    12:20 AM CST
                                </div>
                                <div class="match-view">
                                    <a href="#">
                                    View
                                    </a>
                                </div>
                                </div>
                                <div class="cmg-tournament-bracket-match">
                                <h5 class="round-name">Quarter-Finals</h5> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-1-5858126"><!---->
                                    <div  for="winner-bracket-tournament-bracket-team-1-5858126" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM A
                                    </div>
                                    <div  class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span  class="bracket-team-name">TEAM A </span>
                                        <sup >1</sup>
                                        </a>
                                    </div>
                                    <div class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-1-5858199"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-1-5858199" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM B
                                    </div>
                                    <div  class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span  class="bracket-team-name"> TEAM B </span>
                                        <sup >8</sup>
                                        </a>
                                    </div> <!---->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-match-details">
                                <div class="match-vs"> vs </div>
                                <div class="match-date">
                                    12:20 AM CST
                                </div>
                                <div class="match-view"><a
                                    href="#">
                                    View
                                    </a></div>
                                </div>
                                <div class="cmg-tournament-bracket-match"><!----> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-1-5707464"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-1-5707464" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM C
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo"><img
                                        src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#"><span  class="bracket-team-name"> TEAM C </span>
                                        <sup >5</sup>
                                        </a>
                                    </div> <!---->
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-1-5858101"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-1-5858101" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM D
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM D </span>
                                        <sup >4</sup>
                                        </a>
                                    </div>
                                    <div  class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-match-details">
                                <div class="match-vs"> vs </div>
                                <div class="match-date">
                                    12:20 AM CST
                                </div>
                                <div class="match-view">
                                    <a href="#">
                                    View
                                    </a>
                                </div>
                                </div>
                                <div class="cmg-tournament-bracket-match"><!----> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-1-5818872"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-1-5818872" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM E
                                    </div>
                                    <div  class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM E </span>
                                        <sup >3</sup>
                                        </a>
                                    </div> <!---->
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-1-5857290"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-1-5857290" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM F
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo"><img
                                        src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM F </span>
                                        <sup >6</sup>
                                        </a>
                                    </div>
                                    <div class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-match-details">
                                <div class="match-vs"> vs </div>
                                <div class="match-date">
                                    12:20 AM CST
                                </div>
                                <div class="match-view">
                                    <a href="#">
                                    View
                                    </a>
                                </div>
                                </div>
                                <div class="cmg-tournament-bracket-match"><!----> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-1-5854314"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-1-5854314" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM G
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM G </span>
                                        <sup>7</sup>
                                        </a>
                                    </div> <!---->
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-1-5858140"><!---->
                                    <div  for="winner-bracket-tournament-bracket-team-1-5858140" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM H
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM H </span>
                                        <sup >2</sup>
                                        </a>
                                    </div>
                                    <div  class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                </div>
                            </div> <!---->
                            </div>
                            <div class="cmg-tournament-bracket-round">
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-match-details">
                                <div class="match-vs"> vs </div>
                                <div class="match-date">
                                    12:50 AM CST
                                </div>
                                <div class="match-view"><a href="#">
                                    View
                                    </a>
                                </div>
                                </div>
                                <div class="cmg-tournament-bracket-match">
                                <h5 class="round-name">Semi-Finals</h5> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-2-5858126"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-2-5858126" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM A
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM A </span>
                                        <sup >1</sup>
                                        </a>
                                    </div>
                                    <div class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-2-5858101"><!---->
                                    <div  for="winner-bracket-tournament-bracket-team-2-5858101" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM D
                                    </div>
                                    <div  class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span  class="bracket-team-name"> TEAM D </span> <sup >4</sup></a></div> <!---->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-match-details">
                                <div class="match-vs"> vs </div>
                                <div class="match-date">
                                    1:20 AM CST
                                </div>
                                <div class="match-view"><a href="#">
                                    View
                                    </a>
                                </div>
                                </div>
                                <div class="cmg-tournament-bracket-match"><!----> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-2-5857290"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-2-5857290" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM F
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#"><span  class="bracket-team-name"> TEAM F </span>
                                        <sup >6</sup>
                                        </a>
                                    </div> <!---->
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-2-5858140"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-2-5858140" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM H
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span  class="bracket-team-name"> TEAM H </span>
                                        <sup >2</sup>
                                        </a>
                                    </div>
                                    <div  class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                </div>
                            </div> <!---->
                            </div>
                            <div class="cmg-tournament-bracket-round">
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-match-details">
                                <div class="match-vs"> vs </div>
                                <div class="match-date">
                                    1:50 AM CST
                                </div>
                                <div class="match-view"><a
                                    href="#">
                                    View
                                    </a></div>
                                </div>
                                <div class="cmg-tournament-bracket-match">
                                <h5 class="round-name">Grand Finals</h5> <!---->
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="winner-bracket-tournament-bracket-team-3-5858126"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-3-5858126" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM A
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span class="bracket-team-name"> TEAM A </span>
                                        <sup >1</sup>
                                        </a>
                                    </div>
                                    <div class="bracket-team-winner-sign"> W </div>
                                    </div>
                                </div>
                                <div class="cmg-tournament-bracket-team-wrapper" id="winner-bracket-tournament-bracket-team-3-5858140"><!---->
                                    <div for="winner-bracket-tournament-bracket-team-3-5858140" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM H
                                    </div>
                                    <div class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                    </div>
                                    <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                        <a href="#">
                                        <span  class="bracket-team-name"> TEAM H </span>
                                        <sup >2</sup>
                                        </a>
                                    </div> <!---->
                                    </div>
                                </div>
                                </div>
                            </div> <!---->
                            </div>
                            <div class="cmg-tournament-bracket-round">
                            <div class="cmg-tournament-bracket-match-wrapper">
                                <div class="cmg-tournament-bracket-team-wrapper is-match-winner" id="undefinedtournament-bracket-team-4-5858126">
                                <h5 class="round-name">Champion</h5>
                                <div for="undefinedtournament-bracket-team-4-5858126" class="mdl-tooltip mdl-tooltip--large">
                                    TEAM A
                                </div>
                                <div  class="cmg-tournament-bracket-team-logo">
                                    <img src="{{url('assets/frontend/images/trophy_icon.png')}}" alt="team_logo">
                                </div>
                                <div class="cmg-tournament-bracket-team">
                                    <div class="bracket-team-name-wrapper">
                                    <a href="/team/5858126/prettystarling7643">
                                        <span class="bracket-team-name"> TEAM A </span>
                                        <sup >1</sup>
                                    </a>
                                    </div>
                                    <div  class="bracket-team-winner-sign"> W </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div> <!---->
                        </div>
                    </div>
                    <div id="cMatch" class="tab-pane fade">
                        <div class="current_match_tab">
                        <div class="row team-info">
                            <div class="col-md-6 col-sm-12">
                            <h6>Team A</h6>
                            <ul>
                                <li>Player Name</li>
                                <li>Rank</li>
                                <li>Social</li>
                            </ul>
                            <div class="row my-4">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center"><span>Game ID</span></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center"><span>Objective</span></div>
                            </div>
                            </div>
                            <div class="col-md-6 xol-sm-12">
                            <h6>Team B</h6>
                            <ul>
                                <li>Player Name</li>
                                <li>Rank</li>
                                <li>Social</li>
                            </ul>
                            <div class="row my-4">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center"><span>Game ID</span></div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-center"><span>Objective</span></div>
                            </div>
                            </div>
                        </div>
                        <hr>
                        <div class="dicision_holder">
                            <h5>Decision</h5>
                            <div class="dicision_content m-auto">
                            <div class="trophy-img">
                                <a href="{{route('reportDashboard',enDeCryptString($tournament->id))}}">
                                <img alt="trophy-icon" src="{{url('assets/frontend/images/trophy_icon.png')}}">
                                <p class="text-center">TBD</p>
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="chat_box_holder mt-5">
                            <div class="chat_box_wrapper">
                            <h6 class="text-center">Chat Box</h6>
                            <table class="table-bordered table-dark">
                                <thead>
                                <th>Request Admin</th>
                                <th>Dispute</th>
                                <th>Advantage</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-box_holder"><input type="text" placeholder="Chat with us..."><button><i mi-name="send" class="material-icons navigation-icon"></i></button></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="rules" class="tab-pane fade in active">
                        <div class="tournament_item rules_tab">
                            <div class="head_content">
                            <div class="top_head">
                                <div class="title">Critical Rules</div>
                            </div>
                            <div class="contnt_1">
                                <ul>
                                <li>All players are recommended to join our Discord.</li>
                                <li>In case of a match or ZOTAC CUP Tournament related issue, reach out to a Tournament Admin via Discord.</li>
                                </ul>
                                <p>Tournament Format :</p>
                                <ul>
                                <li>Bracket Style: Single Elimination</li>
                                <li>Match Style: Best of 1 (Best of 3 Finals and Third Place Decider)</li>
                                <li>Match Check-In: 10 minutes
                                    <ul>
                                    <li>Participants that miss the check-in timer due to a technical issue must contact an Admin directly through the Match Chat or Discord within 5 minutes after receiving a loss. After this additional 5 minutes grace period, the match will not be reset even if an Admin is contacted.</li>
                                    </ul>
                                </li>
                                </ul>
                                <p>Match Settings :</p>
                                <ul>
                                <li>Game Mode: 5v5 Tournament Draft</li>
                                <li>Map: Summoner’s Rift</li>
                                <li>Ten minutes of pause time (technical issues only)
                                    <ul>
                                    <li>The opponent must be informed of these technical issues and the reason for the pause.</li>
                                    </ul>
                                </li>
                                <li>
                                    The team in the upper side of the bracket (or left side of the match page) will play on the blue side. The team in the lower side of the bracket (or right side of the match page) will play on the red side.
                                </li>
                                </ul>

                                <p>Additional Rules :</p>
                                <ul>
                                <li>All matches will be played using the tournament code that Battlefy provides. To get the code, navigate to the bracket and then click on the match that you’re supposed to play. Then copy the code and paste it into the League of Legends game client by clicking play, then selecting custom game, then selecting the trophy icon.</li>
                                <li>Team members may be invited to the room as well.</li>
                                <li>Players may enter the room in any order</li>
                                <li>Pick and Bans will be handled exclusively ingame. Usage of 3rd party programs/websites for Picks and Bans is not allowed.</li>
                                <li>Picks and Bans do not follow Major League format, players are allowed to pick champions without any specific role order or player order.</li>
                                <li>Every team that wishes to participate, needs to complete tournament check-in during the 60 minute check-in period, just before the event start time. Teams are also required to check in to each match. They will have 10 minutes to do so.</li>
                                <li>Teams will have only 10 minutes to join the game room once it has been created. If a team doesn’t complete 5 players in this time, the team may be disqualified. If your opponent doesn’t show up or doesn’t start the match in under these 10 minutes, please contact tournament admins by clicking the Report Match Issue button.</li>
                                <li>If a team suffers a disconnection, the player will be given 10 minutes to reconnect to the game (the team with the disconnection can request for a pause). If they have not reconnected in that time, the team will have to continue playing without that player.</li>
                                <li>Teams can have 1 substitute. Players, including the substitute, will only be considered team members if they are part of the Team Roster on Battlefy for this specific Tournament. Once the tournament starts, Battlefy will not update changes in teams. Players can only play in one team per tournament.</li>
                                <li>Teams are not allowed to use Place Holders unless authorized by an admin. If the champion select needs to be restarted due to a bug, the same champions and bans must be kept. Matches can be restarted only if there’s a bug or if the server is unstable, followed by authorization from a Tournament admin. The players must pause the game and contact tournament admins by clicking the Report Match Issue button, then wait for an answer on how to proceed.</li>
                                <li>If it is apparent that any manipulations of in-game software is occurring, that team will be banned permanently from any future Zotac events, and any/all information we have regarding this will be forwarded to the Game's Publisher. Battlefy will also be notified for future events. If a team is caught abusing glitches, bugs, etc., to gain an advantage, they will be auto-disqualified.</li>
                                <li>Any cheating allegations must be followed by concrete evidence provided promptly by the accusing team, pertinent to their match. Failure to provide concrete/relevant evidence and/or delay in providing requested information will be considered a malicious delay for the event and may result in the accusing team's disqualification.</li>
                                <li>Both Match Chat and Discord chat usage must be made with proper respect to the other players and Tournament Administration. This includes but is not limited to: good manners and sportsmanship and respect to tournament admins and rules.</li>
                                <li>Tournament admin decisions are final regarding disputes.</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
