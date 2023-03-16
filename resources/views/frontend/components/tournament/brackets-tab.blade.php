<div id="brackets" class="tab-pane fade">
    <div class="tab-title bg-gray">
        CREATE
    </div>
    <div class="tab-inner-content">
        <div id="accordion1">
            <div class="card">
                <div class="card-header" id="heading1">
                    <h5 class="m-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <span class="weight-300 d-block">Create an Elimination Bracket</span>
                            Single or double elimination schedule
                        </button>
                    </h5>
                </div>

                <div id="collapse1" class="collapse text-info-sec" aria-labelledby="heading1" data-parent="#accordion1">
                    <div class="card-body">
                        <div class="org-info">
                            <!-- @if(isset($tournament))
                            {{Form::model($tournament, ['route' => ['', '$tournament->id']])}}
                            @else
                            {{Form::open(['route' => ''])}}
                            @endif
                            {{Form::token()}} -->
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" translate="">Bracket Name</label>
                                <!-- <input type="text" placeholder="TOURNAMENT NAME" class="border-bottom"> -->
                                {{Form::text('tournament_name','',['class' => 'border-bottom', 'placeholder' => 'TOURNAMENT NAME'])}}
                            </span>
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Start Date (dd/mm/yyyy)</span>
                                    </div>
                                    <!-- <input type="date" placeholder="TOURNAMENT NAME" class="border-bottom text-white"> -->
                                    {{Form::date('tournament_start_date', '',['class' => 'border-bottom text-white'])}}
                                </span>
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Start Time</span>
                                    </div>
                                    <!-- <input type="time" placeholder="TOURNAMENT NAME" class="border-bottom text-white"> -->
                                    {{Form::time('tournament_start_time', '',['class' => 'border-bottom text-white'])}}
                                </span>
                            </div>
                        </div>

                        <div class="org-item-holder mt-5">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">MATCH CHECK IN
                                    <i class="fa fa-question-circle" data-placement="right" data-title="Players will be asked to check in to each match. Once they do, if their opponent does not check in within the allotted time, the player will automatically get the win for the match and the opponent will be dropped from the tournament."></i>
                                </label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <!-- <input type="radio" id="option-21" checked="" name="selector" onclick="show11();"> -->
                                        {{Form::radio('selector','', true,['id' => 'option-21','onclick' => 'show11()'] )}}
                                        <label for="option-21">Off</label>
                                        <!-- <input type="radio" id="option-22" value="_enable5" name="selector" onclick="show12();"> -->
                                        {{Form::radio('selector','',['id' => 'option-22', 'onclick' => 'show12()'])}}
                                        <label for="option-22">On</label>
                                    </div>
                                </form>
                            </span>
                            <!-- <span class="org-item">
                                <div id="show_enable5" class="mycheck" style="display: none;">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Check-in Start Time</label>
                                    <div class="inner-main-holder">
                                        <input type="checkbox">
                                        <span class="min-info">Check-In Timer</span>
                                        <input type="number" class="border-bottom bg-0">
                                    </div>
                                </div>
                            </span> -->
                        </div>

                        <div class="org-item-holder mt-5">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Bracket Style</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <!-- <input type="radio" id="option-23" checked="" name="selector" onclick="show13();"> -->
                                        {{Form::radio('selector', '', 'true',['id' => 'option-23',  'onclick' => 'show13()'])}}
                                        <label for="option-23">Double Elimination</label>
                                        <!-- <input type="radio" id="option-24" value="_enable6" name="selector" onclick="show14();"> -->
                                        {{Form::radio('selector', '', ['id' => 'option-24', 'onclick' => 'show14()'])}}
                                        <label for="option-24">Single Elimination</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item d-flex align-items-center">
                                <div id="show_enable6" class="mycheck" style="display: none;">
                                    <div class="inner-main-holder" style="min-height: 33.5px;">
                                        <!-- <input type="checkbox"> -->
                                        {{Form::checkbox('', '')}}
                                        <span class="min-info">Enable Third Place Match</span>
                                    </div>
                                </div>
                            </span>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Bracket Size (# of teams)</span>
                                    </div>
                                    <input type="number"  class="border-bottom text-white">
                                </span>
                            </div>
                        </div>

                        <div class="btn-holder acc_btn">
                            <button class="primary_s_invert_btn" data-toggle="modal" data-target="#myModal">Cancel</button>
                            <button class="primary_s_btn" data-toggle="modal" data-target="#myModal">Add</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading2">
                    <h5 class="m-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <span class="weight-300 d-block">Create a Round Robin Bracket</span>
                            Single round robin schedule
                        </button>
                    </h5>
                </div>
                <div id="collapse2" class="collapse text-info-sec" aria-labelledby="heading2" data-parent="#accordion1">
                    <div class="card-body">
                        <div class="org-info">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" translate="">Bracket Name</label>
                                <input type="text" placeholder="BRACKET NAME" class="border-bottom">
                            </span>
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Start Date</span>
                                    </div>
                                    <input type="date" placeholder="TOURNAMENT NAME" class="border-bottom text-white">
                                </span>
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Start Time</span>
                                    </div>
                                    <input type="time" placeholder="TOURNAMENT NAME" class="border-bottom text-white">
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span># of groups</span>
                                    </div>
                                    <input type="number"  class="border-bottom text-white">
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span># of teams per group</span>
                                    </div>
                                    <input type="number"  class="border-bottom text-white">
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="form-group">
                                        <label class="text-gray text-10px font-500 text-uppercase">Match Style</label>
                                        <select class="select form-control border-bottom bg-0 text-14px text-white" >
                                            <option>Match Style</option>
                                            <option>Best of</option>
                                            <option># of games per match</option>
                                        </select>
                                    </div>
                                </span>
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Number of Games</span>
                                    </div>
                                    <input type="number"  class="border-bottom text-white">
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Show seeds on bracket
                                        <i class="fa fa-question-circle" data-placement="right" data-title="If this is set to On, seed numbers for participants will be publicly visible on the bracket page."></i>
                                    </label>
                                    <form class="org-rBtn">
                                        <div class="radio-group">
                                            <input type="radio" id="option-19" checked="" name="selector">
                                            <label for="option-19">Off</label>
                                            <input type="radio" id="option-20" name="selector">
                                            <label for="option-20">On</label>
                                        </div>
                                    </form>
                                </span>
                            </div>
                        </div>

                        <div class="btn-holder acc_btn">
                            <button class="primary_s_invert_btn" data-toggle="modal" data-target="#myModal">Cancel</button>
                            <button class="primary_s_btn" data-toggle="modal" data-target="#myModal">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="heading3">
                    <h5 class="m-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <span class="weight-300 d-block">Create a Swiss Bracket</span>
                            Single swiss schedule
                        </button>
                    </h5>
                </div>
                <div id="collapse3" class="collapse text-info-sec" aria-labelledby="heading3" data-parent="#accordion1">
                    <div class="card-body">
                        <div class="org-info">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" translate="">Bracket Name</label>
                                <input type="text" placeholder="BRACKET NAME" class="border-bottom">
                            </span>
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Start Date</span>
                                    </div>
                                    <input type="date" placeholder="TOURNAMENT NAME" class="border-bottom text-white">
                                </span>
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Start Time</span>
                                    </div>
                                    <input type="time" placeholder="TOURNAMENT NAME" class="border-bottom text-white">
                                </span>
                            </div>
                        </div>
                        <div class="org-item-holder mt-5">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">MATCH CHECK IN
                                    <i class="fa fa-question-circle" data-placement="right" data-title="Players will be asked to check in to each match. Once they do, if their opponent does not check in within the allotted time, the player will automatically get the win for the match and the opponent will be dropped from the tournament."></i>
                                </label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-30" checked="" name="selector" onclick="show15();">
                                        <label for="option-30">Off</label>
                                        <input type="radio" id="option-31" value="_enable7" name="selector" onclick="show16();">
                                        <label for="option-31">On</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item">
                                <div id="show_enable7" class="mycheck" style="display: none;">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Check-in Start Time</label>
                                    <div class="inner-main-holder">
                                        <input type="checkbox">
                                        <span class="min-info">Check-In Timer</span>
                                        <input type="number" class="border-bottom bg-0">
                                    </div>
                                </div>
                            </span>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Show seeds on bracket
                                        <i class="fa fa-question-circle" data-placement="right" data-title="If this is set to On, seed numbers for participants will be publicly visible on the bracket page."></i>
                                    </label>
                                    <form class="org-rBtn">
                                        <div class="radio-group">
                                            <input type="radio" id="option-25" checked="" name="selector">
                                            <label for="option-25">Off</label>
                                            <input type="radio" id="option-26" name="selector">
                                            <label for="option-26">On</label>
                                        </div>
                                    </form>
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Bracket Size (# of teams)</span>
                                    </div>
                                    <input type="number"  class="border-bottom text-white">
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span># of rounds</span>
                                    </div>
                                    <select class="select form-control border-bottom bg-0 text-14px text-white">
                                        <option>Select the number of rounds</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Match score calculation</span>
                                    </div>
                                    <select class="select form-control border-bottom bg-0 text-14px text-white">
                                        <option>Select a match style</option>
                                        <option>Best of</option>
                                        <option># of games per match</option>
                                    </select>
                                </span>
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span># of games</span>
                                    </div>
                                    <select class="select form-control border-bottom bg-0 text-14px text-white">
                                        <option></option>
                                        <option>1</option>
                                        <option>3</option>
                                        <option>5</option>
                                        <option>7</option>
                                        <option>9</option>
                                        <option>11</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="org-info">
                            <div class="org-item-holder mt-5">
                                <span class="org-item">
                                    <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                        <span>Standings tiebreaker method
                                            <i class="fa fa-question-circle" data-placement="right" data-title="If you'd like your tournament to use the same tiebreaker system as the Hearthstone Championship Tour, select HCT. Otherwise, select Default to use the system popularized by Magic the Gathering and Pokémon."></i>
                                        </span>
                                    </div>
                                    <select class="select form-control border-bottom bg-0 text-14px text-white">
                                        <option>Tiebreaker method</option>
                                        <option>Default Tiebreaker</option>
                                        <option>HCT Tiebreaker</option>
                                    </select>
                                </span>
                            </div>
                        </div>

                        <div class="btn-holder acc_btn">
                            <button class="primary_s_invert_btn" data-toggle="modal" data-target="#myModal">Cancel</button>
                            <button class="primary_s_btn" data-toggle="modal" data-target="#myModal">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
