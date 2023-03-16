@extends('layouts.frontend.app')
@section('content')
  <!-- Hero Section -->
  <section class="hero-section profile-page" id="user-profile-page">

    <div class="hero-image">
        <img alt="banner-image" src="{{url('assets/frontend/images/cm-banner.png')}}" style="opacity: 0;">
    </div>

    <div class="container profile-page-container">
        <div class="profile-header-data">
            <div class="profile-header-data-left">
                <div class="profile-avatar"><img src="{{url('assets/frontend/images/user-profile-img.png')}}" class="circle"></div>
            </div>
            <div class="profile-header-data-middle">
                <div class="user-status hidden-xs">
                    <img src="{{url('assets/frontend/images/elite-member-desktop.png')}}" class="user-status-elite">
                </div>
                <div class="profile-header-name">
                    Exjob11
                </div>
                <div class="profile-header-text">
                    Profile views: 26257
                </div>
                <div class="profile-header-text">
                    Joined 08/02/2023
                    <img src="{{url('assets/frontend/images/latam.png')}}">
                </div>
                <div class="profile-header-gamertags hidden-xs">
                    <div>
                        Game ID:
                    </div>
                    <div>
                        <div class="profile-gamertag">
                            <a href="" target="_blank">
                                <img src="{{url('assets/frontend/images/epic-id-white.svg')}}">
                                MJscam_
                            </a>
                        </div>
                        <div class="profile-gamertag">
                            <a href="" target="_blank">
                                <img src="{{url('assets/frontend/images/actia-svg.svg')}}">
                                johnhopper#7569512
                            </a>
                        </div>
                    </div>
                </div>

                <button type="button" class="primary_btn wallet btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i mi-name="account_balance_wallet" class="material-icons navigation-icon"></i>WALLET</button>
                <div class="modal fade bd-example-modal-lg wallet-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="wallet-top-up position-relative border border-rounded border-rounded-top border-bottom-none bg-navy-500 gutter-10 border-navy-400">
                                <div flex="" column="" row-lg="" layout="space-between center">
                                    <div class="title" flex="" row="" layout="space-between center">
                                        <h2 class="text-18px text-white" grow="" translate=""><span>Top Up Your Wallet</span></h2>
                                        <div class="store-close close-button hidden-desktop">
                                            <i class="material-icons md-24 mi-highlight-off"></i>
                                        </div>
                                    </div>
                                    <div class="bf-wallet">
                                        <div class="wallet" flex="" row="" layout="space-between center">
                                            <div grow="" flex="" row="" layout="start center">
                                                <div class="ml-5 mr-15 icon-container">
                                                    <i class="material-icons mi-account-balance-wallet text-gray"></i>
                                                </div>
                                                <p class="text-gray mr-5 mb-0" translate=""><span>Wallet</span></p>
                                            </div>
                                            <div class="mr-25 balance" flex="" row="" layout="end center">
                                                <p class="animated text-highlight-300 mb-0" translate=""><span>0 coins</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="divider">
                                <div class="mb-10 mt-10" flex="" column="" row-lg="" layout="start stretch">
                                    <div class="mb-10">
                                        <div class="text-gray text-12px mb-5" translate="">
                                            <span>Select Your Currency</span>
                                        </div>
                                        <div class="store-currency" flex="" row="" layout="center baseline">
                                            <div class="bf-select full-width">
                                                <div class="bf-select full-width border-bottom border-gray-400 border-color-animated">
                                                    <p class="text-gray text-10px font-500 text-uppercase"></p>
                                                    <select class="form-control ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" name="Currency">
                                                        <option value="usd">usd</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-right border-navy-400 ml-20 mr-20"></div>
                                    <div grow="">
                                        <div class="text-gray text-12px mb-5" translate=""><span>Select a Top Up</span></div>
                                        <div flex="" column="" row-lg="" layout="space-between center">
                                            @foreach ($creditplans as $plan)
                                                <div class="GetCredits offer border border-rounded border-navy-400 bg-navy-400 gutter-10 mr-10 hover-border-secondary"
                                                flex="" row="" grow="" layout="start center" data-amount="{{$plan->price}}" data-plan="{{$plan->id}}">
                                                    <div class="coin border-circle gutter-20 bg-highlight-300 h-0" flex="" row="" layout="center center">
                                                        <div class="pixal-icon-mini-logo coin-logo"></div>
                                                    </div>
                                                    <div class="ml-10">
                                                        <p class="text-highlight-300 text-18px mb-0">{{$plan->credits}} Coins</p>
                                                        <p class="text-white text-14px mb-0">${{$plan->price}} USD</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @include('frontend.components.paypalbutton');
                                    </div>
                                </div>
                                <div class="payment-selection-container"></div>
                                <div class="credit-card-container hidden-mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-header-data-right hidden-xs">
                <div class="profile-actions-container"></div>
            </div>
        </div>
        <div id="pw-mobile-video" class="visible-xs " style="padding: 10px 0px;"></div>
        <div class="ad-desktop-wide left-ad">
            <div id="top-skyscraper" style="padding: 0px;">
                <div data-pw-desk="sky_atf" id="pw-160x600_atf" class="pw-tag" style="max-width: 300px; margin: auto;" data-google-query-id="CIWRl9C8rf0CFf3ruwgdyfkF9w">
                    <div id="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-160x600_0__container__" style="border: 0pt none;">
                        <iframe id="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-160x600_0" name="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-160x600_0" title="3rd party ad content" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="ad" tabindex="0" style="border: 0px; vertical-align: bottom;" data-google-container-id="2" data-load-complete="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad-desktop-wide right-ad">
            <div id="bottom-skyscraper" style="padding: 0px;">
                <div data-pw-desk="sky_btf" id="pw-160x600_btf" class="pw-tag" style="max-width: 300px; margin: auto;" data-google-query-id="CPPFmdC8rf0CFe7uuwgd4KQOmA">
                    <div id="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-160x600_1__container__" style="border: 0pt none;">
                        <iframe id="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-160x600_1" name="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-160x600_1" title="3rd party ad content" width="160" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="ad" tabindex="0" style="border: 0px; vertical-align: bottom;" data-google-container-id="3" data-load-complete="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="user-rank-mobile hidden-lg hidden-md">
                <img src="{{url('assets/frontend/images/rank_royalty-04.png')}}" class="rank-image">
                <div class="rank-data">
                    <div>
                        <span>RANK</span>
                        19
                    </div>
                    <div>
                        165,420 XP
                    </div>
                </div>
            </div>
            <div class="col-xs-12 profile-page-stats-block-wrapper">
                <div class="profile-page-stats-block">
                    <div class="stats-col-wrapper hidden-xs hidden-sm">
                        <div class="stats-col-container">
                            <img src="{{url('assets/frontend/images/rank_royalty-04.png')}}" class="rank-image">
                            <div class="stat-contents profile-page-stat-contents">
                                <div class="stat-header">Rank</div>
                                <h3>
                                    19
                                </h3>
                                <div class="stat-small-desc">
                                    165,420 XP
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stats-col-wrapper career-wrapper">
                        <div class="stats-col-container">
                            <div class="stat-contents profile-page-stat-contents">
                                <div class="stat-header">Earnings</div>
                                <h3>$12662.00</h3>
                                <div class="stat-small-desc">
                                    RANKED #1031
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stats-col-wrapper">
                        <div class="stats-col-container">
                            <div class="stat-contents profile-page-stat-contents">
                                <div class="stat-header">Record</div>
                                <h3>
                                    1294 W - 241 L
                                </h3>
                                <div class="stat-small-desc">
                                    84% WIN RATE
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stats-col-wrapper recent-matches">
                        <div class="stats-col-container">
                            <div class="stat-contents">
                                <div class="stat-header">Recent Matches</div>
                                <h3 class="profile-page-recent-matches win-first">
                                    <span>W</span>
                                    <span>W</span>
                                    <span>L</span>
                                    <span>W</span>
                                    <span>W</span>
                                </h3>
                                <div class="stat-small-desc profile-page-recent-matches win-first ">
                                    <span>
                                        <span class="diamond win"></span>
                                        <span class="dots"></span>
                                        <span class="xp">+10XP</span>
                                    </span>
                                    <span>
                                        <span class="diamond win"></span>
                                        <span class="dots"></span>
                                        <span class="xp">+10XP</span>
                                    </span>
                                    <span>
                                        <span class="diamond loss"></span>
                                        <span class="dots"></span>
                                        <span class="xp">-13XP</span>
                                    </span>
                                    <span>
                                        <span class="diamond win"></span>
                                        <span class="dots"></span>
                                        <span class="xp">+10XP</span>
                                    </span>
                                    <span>
                                        <span class="diamond win"></span>
                                        <span class="dots"></span>
                                        <span class="xp">+10XP</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="top-leaderboard" class="hidden-xs " style="padding: 10px 0px;">
            <div data-pw-desk="leaderboard_atf" id="leaderboard_atf" class="pw-tag" style="max-height: 250px; max-width: 970px; margin: auto;" data-google-query-id="CM6cmtC8rf0CFdWC_Qcd018OlA">
                <div id="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-desktop_leaderboard_0__container__" style="border: 0pt none;">
                    <iframe id="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-desktop_leaderboard_0" name="google_ads_iframe_/154013155,21703424915/1024313/72726/1024313-72726-desktop_leaderboard_0" title="3rd party ad content" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="ad" tabindex="0" style="border: 0px; vertical-align: bottom;" data-google-container-id="1" data-load-complete="true"></iframe>
                </div>
            </div>
        </div>
        <div class="user-profile-trophies-wrapper">
            <div class="profile-trophies-container">
                <div class="single-trophy-container">
                    <div class="trophy-image"><img src="{{url('assets/frontend/images/elite-trophy.svg')}}"></div>
                    <div class="trophy-info">
                        <div class="trophy-name elite">
                            Elite Trophies
                        </div>
                        <div class="trophy-count">
                            0
                        </div>
                    </div>
                </div>
                <div class="single-trophy-container">
                    <div class="trophy-image"><img src="{{url('assets/frontend/images/gold-trophy.svg')}}"></div>
                    <div class="trophy-info">
                        <div class="trophy-name gold">
                            Gold Trophies
                        </div>
                        <div class="trophy-count">
                            0
                        </div>
                    </div>
                </div>
                <div class="single-trophy-container">
                    <div class="trophy-image"><img src="{{url('assets/frontend/images/silver-trophy.svg')}}"></div>
                    <div class="trophy-info">
                        <div class="trophy-name silver">
                            Silver Trophies
                        </div>
                        <div class="trophy-count">
                            0
                        </div>
                    </div>
                </div>
                <div class="single-trophy-container">
                    <div class="trophy-image"><img src="{{url('assets/frontend/images/bronze-trophy.svg')}}"></div>
                    <div class="trophy-info">
                        <div class="trophy-name bronze">
                            Bronze Trophies
                        </div>
                        <div class="trophy-count">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-trophies-container">
                <div class="single-trophy-container">
                    <div class="trophy-image milestone-image">
                        <img src="{{url('assets/frontend/images/tournament1.png')}}">
                    </div>
                    <div class="trophy-info milestone-info">
                        <div class="milestone-name">Gladiator I</div>
                        <div class="milestone-description">Win Tournament Matches</div>
                        <div class="milestone-progress">
                            <span>0</span>
                            <div data-v-11662e68="" class="milestone-progress-bar">
                                <div data-v-11662e68="" class="missions-progress-bar-container"><!---->
                                    <div data-v-11662e68="" class="missions-progress-bar-track"></div>
                                    <div data-v-11662e68="" class="missions-progress-bar-progress" style="width: 0%;"></div>
                                </div>
                            </div>
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="single-trophy-container">
                    <div class="trophy-image milestone-image">
                        <img src="{{url('assets/frontend/images/wager1000.png')}}">
                    </div>
                    <div class="trophy-info milestone-info">
                        <div class="milestone-name">Cash Shark V</div>
                        <div class="milestone-description">Win Cash Matches</div>
                        <div class="milestone-progress">
                            <span>7275</span>
                            <div data-v-11662e68="" class="milestone-progress-bar">
                                <div data-v-11662e68="" class="missions-progress-bar-container">
                                    <div data-v-11662e68="" class="missions-progress-bar-complete"></div>
                                </div>
                            </div>
                            <span>7275</span>
                        </div>
                    </div>
                </div>
                <div class="single-trophy-container">
                    <div class="trophy-image milestone-image">
                        <img src="{{url('assets/frontend/images/ladder1.png')}}">
                    </div>
                    <div class="trophy-info milestone-info">
                        <div class="milestone-name">Ascendant I</div>
                        <div class="milestone-description">Win XP Matches</div>
                        <div class="milestone-progress"><span>0</span>
                            <div data-v-11662e68="" class="milestone-progress-bar">
                                <div data-v-11662e68="" class="missions-progress-bar-container">
                                    <div data-v-11662e68="" class="missions-progress-bar-track"></div>
                                    <div data-v-11662e68="" class="missions-progress-bar-progress" style="width: 0%;"></div>
                                </div>
                            </div> <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="single-trophy-container">
                    <div class="trophy-image milestone-image">
                        <img src="{{url('assets/frontend/images/streak100.png')}}">
                    </div>
                    <div class="trophy-info milestone-info">
                        <div class="milestone-name">
                            <span>
                                On Fire V
                            </span>
                            <span>
                                Highest: 67
                            </span>
                        </div>
                        <div class="milestone-description">Win consecutive Matches</div>
                        <div class="milestone-progress">
                            <span>2</span>
                            <div data-v-11662e68="" class="milestone-progress-bar">
                                <div data-v-11662e68="" class="missions-progress-bar-container">
                                    <div data-v-11662e68="" class="missions-progress-bar-track"></div>
                                    <div data-v-11662e68="" class="missions-progress-bar-progress" style="width: 2%;"></div>
                                </div>
                            </div>
                            <span>100</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-gamertags-mobile visible-xs">
            <div class="profile-tab">
                <div class="profile-tab-section">
                    <span class="profile-section-header">Game ID</span>
                    <div class="profile-gamertag-row">
                        <div class="gamertag-image" style="background-color: rgb(107, 20, 195);">
                            <a href="" target="_blank">
                                <img src="{{url('assets/frontend/images/epic-id-white.svg')}}">
                            </a>
                        </div>
                        <div class="gamertag-info">
                            <div class="gamertag-name">
                                <a href="" target="_blank">
                                    RScarz_
                                </a>
                            </div>
                            <div class="gamertag-display-name">
                                <span>
                                    EPIC Display Name
                                </span>
                            </div>
                        </div>
                        <div class="border-gamertag-row"></div>
                    </div>
                    <div class="profile-gamertag-row">
                        <div class="gamertag-image" style="background-color: rgb(111, 111, 111);">
                            <a href="" target="_blank">
                                <img src="{{url('assets/frontend/images/actia-svg.svg')}}">
                            </a>
                        </div>
                        <div class="gamertag-info">
                            <div class="gamertag-name">
                                <a href="" target="_blank">
                                    Lindinha#3835523
                                </a>
                            </div>
                            <div class="gamertag-display-name">
                                <span>
                                    Activision ID (with #s if applicable)
                                </span>
                            </div>
                        </div>
                        <div class="border-gamertag-row"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="profile-page-tabs-panel">
                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialTabs,MaterialRipple">
                    <div class="tabs mdl-tabs__tab-bar">
                        <ul class="nav nav-tabs">
                            <li class="col">
                                <a href="#games" class="mdl-tabs__tab profile-page-tabs tabs-autoselect active" data-toggle="tab">
                                <i class="pxlico pxlico-games"></i><br>
                                Games
                                <span class="mdl-tabs__ripple-container mdl-js-ripple-effect" data-upgraded=",MaterialRipple">
                                    <span class="mdl-ripple is-animating" style="width: 545.25px; height: 545.25px; transform: translate(-50%, -50%) translate(94px, 27px);"></span>
                                </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="#achievements" class="mdl-tabs__tab profile-page-tabs tabs-autoselect" data-toggle="tab">
                                <i class="pxlico pxlico-achievements"></i><br>
                                Achievements
                                <span class="mdl-tabs__ripple-container mdl-js-ripple-effect" data-upgraded=",MaterialRipple">
                                    <span class="mdl-ripple is-animating" style="width: 655.21px; height: 655.21px; transform: translate(-50%, -50%) translate(161px, 34px);"></span>
                                </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="#teams" class="mdl-tabs__tab profile-page-tabs tabs-autoselect" data-toggle="tab">
                                <i class="pxlico pxlico-teams"></i><br>
                                Teams
                                <span class="mdl-tabs__ripple-container mdl-js-ripple-effect" data-upgraded=",MaterialRipple">
                                    <span class="mdl-ripple is-animating" style="width: 543.25px; height: 543.25px; transform: translate(-50%, -50%) translate(155px, 32px);"></span>
                                </span>
                                </a>
                            </li>
                            <li class="col">
                                <a href="#scheduled-matches" class="mdl-tabs__tab profile-page-tabs tabs-autoselect" data-toggle="tab">
                                <i class="pxlico pxlico-schedule"></i><br>
                                Scheduled
                                <span class="mdl-tabs__ripple-container mdl-js-ripple-effect" data-upgraded=",MaterialRipple">
                                    <span class="mdl-ripple is-animating" style="width: 605.387px; height: 605.387px; transform: translate(-50%, -50%) translate(172px, 43px);"></span>
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="games" class="tab-pane fade in active mdl-tabs__panel tabs-content-autoselect show">
                            <div class="row game-panels-container">
                                <div class="col-xs-12  all-games-header-container">
                                    <h5>All Games</h5>
                                </div>
                                <div class="col-xs-12 ">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row game-panel-row">
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1662765837653.png')}}" class="game-logo">
                                            </div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span> <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(219, 188, 104);">
                                                                Expert
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer">
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        1054 / 140
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        88%
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $3274.2
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        24305
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        57
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1668639945116.png')}}" class="game-logo">
                                            </div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span> <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(191, 191, 191);">
                                                                Amateur
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        230 / 97
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        70%
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $375.63
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        3725
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        24
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1638942125107.png')}}" class="game-logo"></div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span> <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(219, 188, 104);">
                                                                Expert
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        8 / 3
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        73%
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $5761.78
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row"><span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        66540
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        36
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button">
                                                    <a href="/stats-tracker/warzone" class="stats-tracker-button width-100">
                                                        <button type="button" class="mdl-button mdl-js-button css-ripple-effect dark-button-secondary button-small width-100 indent margin-button css-ripple-activated" data-upgraded=",MaterialButton">
                                                            View Game Stats
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1629850951905.png')}}" class="game-logo">
                                            </div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span>
                                                    <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(219, 188, 104);">
                                                                Expert
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" ><button type="button" class="skill-level-explainer-button dynamic">
                                                            <i class="material-icons">help_outline</i>
                                                        </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        2 / 1
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        67%
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span> <span class="stats-value">
                                                        $2291.97
                                                    </span></div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        30600
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        63
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1556199999.png')}}" class="game-logo">
                                            </div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span> <span class="stats-value">
                                                        <div class="elo-skill-level-block"><span
                                                                class="elo-skill-level" style="background-color: rgb(191, 191, 191);">
                                                                Amateur
                                                            </span></div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button"
                                                                class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $97.43
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        520
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        6
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images"><img src="{{url('assets/frontend/images/1615320656143.png')}}" class="game-logo"></div>
                                            <div class="stats-info">
                                                <div class="stats-row"><span class="stats-title">
                                                        Skill Level
                                                    </span>
                                                    <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span
                                                                class="elo-skill-level" style="background-color: rgb(254, 157, 103);">
                                                                Novice
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span></div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $24.44
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row"><span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        60
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        2
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1556200205.png')}}"
                                                    class="game-logo"></div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span> <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(254, 157, 103);">
                                                                Novice
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span> <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row"><span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $26.63
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src={{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row"><span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        110
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        3
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images"><img src="{{url('assets/frontend/images/1556199707.png')}}" class="game-logo"></div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title"> Skill Level </span>
                                                    <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(191, 191, 191);">
                                                                Amateur
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title"> Record </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title"> Win Percentage </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span
                                                        class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $33.32
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        100
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        2
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1600484216248.png')}}" class="game-logo">
                                            </div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span>
                                                    <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(219, 188, 104);">
                                                                Expert
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $776.6
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        12115
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        58
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button">
                                                    <a href="/stats-tracker/cold-war" class="stats-tracker-button width-100">
                                                        <button type="button" class="mdl-button mdl-js-button css-ripple-effect dark-button-secondary button-small width-100 indent css-ripple-activated" data-upgraded=",MaterialButton">
                                                            View Game Stats
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 game-panel">
                                        <div class="game-box-component">
                                            <div class="game-images">
                                                <img src="{{url('assets/frontend/images/1605643104769.png')}}" class="game-logo">
                                            </div>
                                            <div class="stats-info">
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Skill Level
                                                    </span>
                                                    <span class="stats-value">
                                                        <div class="elo-skill-level-block">
                                                            <span class="elo-skill-level" style="background-color: rgb(254, 157, 103);">
                                                                Novice
                                                            </span>
                                                        </div>
                                                        <div class="skill-level-explainer" >
                                                            <button type="button" class="skill-level-explainer-button dynamic">
                                                                <i class="material-icons">help_outline</i>
                                                            </button>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Record
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Win Percentage
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Earnings
                                                    </span>
                                                    <span class="stats-value">
                                                        $0
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Trophies
                                                    </span>
                                                    <div class="trophies-container">
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/elite-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/gold-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/silver-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                        <div class="trophy-column">
                                                            <img src="{{url('assets/frontend/images/bronze-trophy.svg')}}" class="trophy-image">
                                                            <span class="trophy-value">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr >
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Points
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-row">
                                                    <span class="stats-title">
                                                        Best Streak
                                                    </span>
                                                    <span class="stats-value">
                                                        N/A
                                                    </span>
                                                </div>
                                                <div class="stats-tracker-button-placeholder hide-game-button"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="achievements" class="tab-pane fade mdl-tabs__panel tabs-content-autoselect">
                            <div class="col-xs-12 achievements-header">
                                <h5>Missions</h5>
                                <p>Awarded for completing specially assigned time sensitive objectives.</p>
                            </div>
                            <div achievements-count="5">
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 custom-achievements-container">
                                    <div class="custom-achievements">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-left"> </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-right">
                                            <span>
                                                <i mi-name="info" class="material-icons"></i>
                                            </span>
                                        </div>
                                        <div class="custom-achievements-icon-background" style="background-image: url(&quot;/theme/pxl2/src/images/prize_bg.png&quot;);">
                                            <img src="{{url('assets/frontend/images/1670766658600.png')}}" class="custom-achievements-icon">
                                        </div>
                                        <div class="custom-achievements-name">Wrap Em' Up</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 custom-achievements-container">
                                    <div class="custom-achievements">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-left">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-right">
                                            <span>
                                                <i mi-name="info" class="material-icons"></i>
                                            </span>
                                        </div>
                                        <div class="custom-achievements-icon-background" style="background-image: url(&quot;/theme/pxl2/src/images/prize_bg.png&quot;);">
                                            <img src="{{url('assets/frontend/images/1670766664979.png')}}" class="custom-achievements-icon">
                                        </div>
                                        <div class="custom-achievements-name">Hanging ‘round the mistletoe </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 custom-achievements-container">
                                    <div class="custom-achievements">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-left">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-right">
                                            <span>
                                                <i mi-name="info" class="material-icons"></i>
                                            </span>
                                        </div>
                                        <div class="custom-achievements-icon-background" style="background-image: url(&quot;/theme/pxl2/src/images/prize_bg.png&quot;);">
                                            <img src="{{url('assets/frontend/images/1670766628815.png')}}" class="custom-achievements-icon">
                                        </div>
                                        <div class="custom-achievements-name">Santa's Helper</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 custom-achievements-container">
                                    <div class="custom-achievements">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-left">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fav-right">
                                            <span>
                                                <i mi-name="info" class="material-icons"></i>
                                            </span>
                                        </div>
                                        <div class="custom-achievements-icon-background" style="background-image: url(&quot;/theme/pxl2/src/images/prize_bg.png&quot;);">
                                            <img src="{{url('assets/frontend/images/1670766554334.png')}}" class="custom-achievements-icon">
                                        </div>
                                        <div class="custom-achievements-name">Santa's Sleigh</div> <!---->
                                        <!----> <!---->
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 missions-show-all-button">
                                    <button class="mdl-button mdl-js-button css-ripple-effect button-large dark-button-secondary show-all-mission-transparent css-ripple-activated" data-upgraded=",MaterialButton">
                                        Show<span> All</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xs-12 achievements-header">
                                <h5>Tournament Trophies</h5>
                            </div>
                            <div data-v-58201355="" achievements-count="0"> </div>
                        </div>
                        <div id="teams" class="tab-pane fade mdl-tabs__panel tabs-content-autoselect">
                            <div class="row team-panels-container">
                                <div class="row team-filters-container">
                                    <div class="col-xs-12 filter-container col-sm-4 ">
                                        <select class="mdl-textfield mdl-select-custom mdl-select-filters">
                                            <option value="null">All Team Sizes</option>
                                            <option value="SINGLE">SINGLES</option>
                                            <option value="DOUBLE">DOUBLES</option>
                                            <option value="TEAMS">SQUADS</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 filter-container col-sm-4 ">
                                        <select class="mdl-textfield mdl-select-custom mdl-select-filters">
                                            <option value="null">All Games</option>
                                            <option value="121">MWII Cross-Platform</option>
                                            <option value="131">WZ2 Cross-Platform</option>
                                            <option value="87">Warzone Cross-Platform</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 filter-container last">
                                        <select class="mdl-textfield mdl-select-custom mdl-select-filters">
                                            <option value="null">All Types</option>
                                            <option value="LADDER">XP Matches</option>
                                            <option value="TOURNAMENT">Tournaments</option>
                                            <option value="WAGERMATCH">Cash Matches</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="pw-mobile-video" class="visible-xs " style="padding: 10px 0px;"></div>
                                <div class="team-panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="team-panel">
                                        <div class="cover-container hidden-xs" style="background-image: url(&quot;images/1662765837296.png&quot;);">
                                            <div class="platform-background" style="background-color: rgb(0, 0, 0);"><img src="{{url('assets/frontend/images/crossplatform.png')}}">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <div class="mobile-game-platform-logos visible-xs">
                                                <img src="{{url('assets/frontend/images/1662765837653.png')}}" class="game-logo">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}" class="platform-logo">
                                            </div>
                                            <div class="team-name">
                                                <a id="team-panel-5989935" href="/team/5989935/fantasticgnu2230">FantasticGnu2230</a>
                                                <div for="team-panel-5989935" class="mdl-tooltip mdl-tooltip--large">
                                                    FantasticGnu2230
                                                </div>
                                            </div>
                                            <div class="checkbox-actions"></div>
                                            <div class="game-and-platform">
                                                Call of Duty: Modern Warfare II | Cross-Platform
                                            </div>
                                            <div class="team-type-stats">
                                                <i class="pxlico pxlico-team-group"></i>
                                                <span>&nbsp;Squads</span>
                                                &nbsp;| 4W - 0L
                                            </div>
                                            <div class="team-actions">
                                                <a href="/team/5989935/fantasticgnu2230">
                                                    <button class="mdl-button mdl-js-button mdl-button--raised css-ripple-effect dark-button-secondary button-small left-button">
                                                        View Team
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="team-panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="team-panel">
                                        <div class="cover-container hidden-xs" style="background-image: url(&quot;images/1668474860590.png&quot;);">
                                            <div class="platform-background" style="background-color: rgb(0, 0, 0);">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <div class="mobile-game-platform-logos visible-xs">
                                                <img src="{{url('assets/frontend/images/1668639945116.png')}}" class="game-logo">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}" class="platform-logo">
                                            </div>
                                            <div class="team-name">
                                                <a id="team-panel-5906703" href="/team/5906703/jxcob22wz2">Jxcob22WZ2</a>
                                                <div for="team-panel-5906703" class="mdl-tooltip mdl-tooltip--large">
                                                    Jxcob22WZ2
                                                </div>
                                            </div>
                                            <div class="checkbox-actions"></div>
                                            <div class="game-and-platform">
                                                Warzone 2 | Cross-Platform
                                            </div>
                                            <div class="team-type-stats">
                                                <i mi-name="person" class="material-icons"></i>
                                                <span>&nbsp;Singles</span>
                                                &nbsp;| 85W - 28L
                                            </div>
                                            <div class="team-actions">
                                                <a href="/team/5906703/jxcob22wz2">
                                                    <button class="mdl-button mdl-js-button mdl-button--raised css-ripple-effect dark-button-secondary button-small left-button">
                                                        View Team
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="team-panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="team-panel">
                                        <div class="cover-container hidden-xs" style="background-image: url(&quot;images/1662765837296.png&quot;);">
                                            <div class="platform-background" style="background-color: rgb(0, 0, 0);">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <div class="mobile-game-platform-logos visible-xs">
                                                <img src="{{url('assets/frontend/images/1662765837653.png')}}" class="game-logo">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}" class="platform-logo">
                                            </div>
                                            <div class="team-name"><a id="team-panel-5664358" href="/team/5664358/maniacos">MANIACOS</a>
                                                <div for="team-panel-5664358" class="mdl-tooltip mdl-tooltip--large">
                                                    MANIACOS
                                                </div>
                                            </div>
                                            <div class="checkbox-actions"></div>
                                            <div class="game-and-platform">
                                                Call of Duty: Modern Warfare II | Cross-Platform
                                            </div>
                                            <div class="team-type-stats">
                                                <i mi-name="group" class="material-icons"></i>
                                                <span>&nbsp;Doubles</span>
                                                &nbsp;| 169W - 35L
                                            </div>
                                            <div class="team-actions">
                                                <a href="/team/5664358/maniacos">
                                                    <button class="mdl-button mdl-js-button mdl-button--raised css-ripple-effect dark-button-secondary button-small left-button">
                                                        View Team
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="team-panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="team-panel">
                                        <div class="cover-container hidden-xs" style="background-image: url(&quot;images/1662765837296.png&quot;);">
                                            <div class="platform-background" style="background-color: rgb(0, 0, 0);">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <div class="mobile-game-platform-logos visible-xs">
                                                <img src="{{url('assets/frontend/images/1662765837653.png')}}" class="game-logo">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}" class="platform-logo">
                                            </div>
                                            <div class="team-name">
                                                <a id="team-panel-5582555" href="/team/5582555/controlequebrado">Controlequebrado</a>
                                                <div for="team-panel-5582555" class="mdl-tooltip mdl-tooltip--large">
                                                    Controlequebrado
                                                </div>
                                            </div>
                                            <div class="checkbox-actions"></div>
                                            <div class="game-and-platform">
                                                Call of Duty: Modern Warfare II | Cross-Platform
                                            </div>
                                            <div class="team-type-stats">
                                                <i mi-name="person" class="material-icons"></i>
                                                <span>&nbsp;Singles</span>
                                                &nbsp;| 908W - 117L
                                            </div>
                                            <div class="team-actions">
                                                <a href="/team/5582555/controlequebrado">
                                                    <button class="mdl-button mdl-js-button mdl-button--raised css-ripple-effect dark-button-secondary button-small left-button">
                                                        View Team
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="team-panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="team-panel">
                                        <div class="cover-container hidden-xs" style="background-image: url(&quot;images/1638942140619.png&quot;);">
                                            <div class="platform-background" style="background-color: rgb(0, 0, 0);">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <div class="mobile-game-platform-logos visible-xs">
                                                <img src="{{url('assets/frontend/images/1638942125107.png')}}" class="game-logo">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}" class="platform-logo">
                                            </div>
                                            <div class="team-name">
                                                <a id="team-panel-4693397" href="/team/4693397/controlequebrado1">controlequebrado1</a>
                                                <div for="team-panel-4693397" class="mdl-tooltip mdl-tooltip--large">
                                                    controlequebrado1
                                                </div>
                                            </div>
                                            <div class="checkbox-actions"></div>
                                            <div class="game-and-platform">
                                                Modern Warfare: Warzone | Cross-Platform
                                            </div>
                                            <div class="team-type-stats">
                                                <i mi-name="person" class="material-icons"></i>
                                                <span>&nbsp;Singles</span>
                                                &nbsp;| 2623W - 536L
                                            </div>
                                            <div class="team-actions">
                                                <a href="/team/4693397/controlequebrado1">
                                                    <button class="mdl-button mdl-js-button mdl-button--raised css-ripple-effect dark-button-secondary button-small left-button">
                                                        View Team
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="team-panel-container col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="team-panel">
                                        <div class="cover-container hidden-xs" style="background-image: url(&quot;images/1662765837296.png&quot;);">
                                            <div class="platform-background" style="background-color: rgb(0, 0, 0);">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}">
                                            </div>
                                        </div>
                                        <div class="team-info">
                                            <div class="mobile-game-platform-logos visible-xs">
                                                <img src="{{url('assets/frontend/images/1662765837653.png')}}" class="game-logo">
                                                <img src="{{url('assets/frontend/images/crossplatform.png')}}" class="platform-logo">
                                            </div>
                                            <div class="team-name"><a id="team-panel-6009512" href="/team/6009512/jxcob22mwii">Jxcob22MWII</a>
                                                <div for="team-panel-6009512" class="mdl-tooltip mdl-tooltip--large">
                                                    Jxcob22MWII
                                                </div>
                                            </div>
                                            <div class="checkbox-actions"></div>
                                            <div class="game-and-platform">
                                                Call of Duty: Modern Warfare II | Cross-Platform
                                            </div>
                                            <div class="team-type-stats">
                                                <i mi-name="person" class="material-icons"></i>
                                                <span>&nbsp;Singles</span>
                                                &nbsp;| 0W - 0L
                                            </div>
                                            <div class="team-actions">
                                                <a href="/team/6009512/jxcob22mwii">
                                                    <button class="mdl-button mdl-js-button mdl-button--raised css-ripple-effect dark-button-secondary button-small left-button">
                                                        View Team
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="scheduled-matches" class="tab-pane fade mdl-tabs__panel tabs-content-autoselect">
                            <div class="row"></div>
                            <div class="row"></div>
                            <div class="no-matches-found-info">No matches found</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </section>

@endsection
@push('scripts')

@endpush
