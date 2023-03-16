<div id="setup-tab" class="tab-pane fade active show">
    <ul class="nav nav-tabs">
        <li class="col"><a class="active" data-toggle="tab" id="tournament-basic-tab">BASICS</a></li>
        <li class="col"><a data-toggle="tab"  id="tournament-info-tab">INFO</a></li>
        <li class="col"><a data-toggle="tab"  id="tournament-settings-tab">SETTINGS</a></li>
    </ul>

        @if(isset($tournament))
        {{ Form::model($tournament, ['route' => ['addTournamentEdit', $tournament->id], 'method' => 'patch','files'=> true]) }}
        @else
            {{ Form::open(['route' => 'addTournamentPost','files'=> true,'id'=>'formtest']) }}
        @endif
        @csrf
    <div class="tab-content">
        <!-- Basics Tab -->
        <div id="tournament-basic" class="tab-pane fade in active">
            <div class="basic-tab tournament-details-tab-bracket table-responsive">
                <div class="section-holder">
                    <h4 class="text-24 font-400">Required Fields</h4>
                    <hr class="divider">
                    <div flex="" column="" row-lg="" layout="space-between center">
                        <div class="full-width mw-49-desktop">
                            <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                <span>Selected Game</span>
                            </div>
                            <div class="text-white text-14px font-400">Clash Royale</div>
                            {{ Form::hidden('game',1) }}
                        </div>
                    </div>
                    <div class="org-info">
                        <span class="org-item">
                            {{ Form::text('name',old('name'),['class'=>'border-bottom','placeholder'=>'TOURNAMENT NAME','required'=>true]) }}
                        </span>
                        <div class="org-item-holder mt-5">
                            <span class="org-item">
                                <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                    <span>Start Date (dd/mm/yyyy)</span>
                                </div>
                                {{ Form::date('start_date',old('start_date'),['class'=>'border-bottom','placeholder'=>'START DATE','required'=>true]) }}
                            </span>
                            <span class="org-item">
                                <div class="text-gray text-10px font-500 text-uppercase" translate="">
                                    <span>Start Time</span>
                                </div>
                                {{ Form::time('start_time',old('start_time'),['class'=>'border-bottom','placeholder'=>'START TIME','required'=>true]) }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="section-holder">
                    <h4 class="text-24 font-400">Optional Fields</h4>
                    <hr class="divider">

                    <div class="optional-fields">
                        <div class="full-width mw-49-desktop pt-20 pt-0-desktop">
                            <div class="form-group">
                                <label class="text-gray text-10px font-500 text-uppercase" for="defect">Select a Tournament to Clone From</label>
                                @php
                                    $defects = array(
                                        '' => 'Select',
                                        'No' => 'I do not want to clone this tournament',
                                        'Yes' => 'I have a template code'
                                         )
                                @endphp
                                {{Form::select('defect',$defects,old('defect'),['id' =>'defect', 'class' =>'select form-control border-bottom bg-0 text-14px text-white'])}}
                            </div>

                            <div id="extra" name="extra" style="display: none">
                                <label class="text-gray text-10px font-500 text-uppercase" for="template_code">Template Code</label>

                                {{ Form::text('template_code',old('template_code'),['class'=>'form-control border-bottom bg-0 text-14px text-white','placeholder'=>'Template Code']) }}

                            </div>

                            <span class="org-item mt-5 d-block">
                                <label class="text-gray text-10px font-500 text-uppercase" for="about">About</label>
                                {{ Form::textarea('about',old('about'),['class'=>'','placeholder'=>'About',"maxlength" => "10000","rows" => "6"]) }}
                            </span>

                            <span class="org-item mt-5 d-block">
                                <label class="text-gray text-10px font-500 text-uppercase" for="header_banner">Header Image</label>
                                <div class="px-image-uploader org-edit-header-uploader" place-holder-text="Header Background">
                                    <div class="drop-box">
                                        <div class="placeholders">
                                        <div class="ph-text">
                                            <div>
                                                <div class="fade-over camera-icon pb-10"><i class="fa fa-camera fade-over-icon"></i></div>
                                                <div class="text-gray text-10px font-500 text-uppercase" for="header_banner">Header Background</div>
                                                <div class="bfy-upload-dimensions-text">1150px x 380px</div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    {{Form::file('header_banner', $attributes = array("id" => "header_banner"))}}
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="btn-holder">
                <button class="primary_btn button-large" id="basicNext">Next</button>
            </div> --}}
        </div>
        <!-- Info Tab -->
        <div id="tournament-info" class="tab-pane fade">
            <div class="current_match_tab">
                <label class="text-gray text-10px font-500 text-uppercase mb-20" for="desc">How will your players contact you?</label>
                <div class="tournament-info-tab">
                    {{Form::select('contact_with',contactWith(),old('contact_with'),['id' =>'myselection', 'class' =>'select form-control border-bottom bg-0 text-14px text-white', 'required' =>true],contactWithTitle())}}
                    <div class="contact_link_div" style="display: none;">
                        {{ Form::text('contact_link',old('contact_link'),['class'=>'form-control border-bottom bg-0 text-14px text-white','placeholder'=>'Enter your non-expiring Discord invite link','required'=>true]) }}
                    </div>
                </div>
            </div>

            <div class="col-md-12 float-none">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="m-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Contact Details
                            </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse text-info-sec" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            {{ Form::textarea('contact_details',old('contact_details'),['class'=>'','placeholder'=>'Contact Details',"maxlength" => "10000","rows" => "6"]) }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="m-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Critical Rules
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse text-info-sec" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                {{ Form::textarea('critical_rules',old('critical_rules'),['class'=>'','placeholder'=>'Critical Rules',"maxlength" => "10000","rows" => "6"]) }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="m-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Rules
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse text-info-sec" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                {{ Form::textarea('rules',old('rules'),['class'=>'','placeholder'=>'Rules',"maxlength" => "10000","rows" => "6"]) }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="m-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Prizes
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse text-info-sec" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                {{ Form::textarea('prizes',old('prizes'),['class'=>'','placeholder'=>'Prizes',"maxlength" => "10000","rows" => "6"]) }}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="m-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Schedule
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse text-info-sec" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                {{ Form::textarea('schedule',old('schedule'),['class'=>'','placeholder'=>'Schedule',"maxlength" => "10000","rows" => "6"]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="btn-holder">
                <button class="primary_btn button-large invert-btn" data-toggle="modal" data-target="#myModal">Back</button>
                <button class="primary_btn button-large" data-toggle="modal" data-target="#myModal">Next</button>
            </div> --}}
        </div>
        <!-- settings Tab -->
        <div id="tournament-settings" class="tab-pane fade">
            <div class="tournament_item rules_tab">
                <div class="setting-tab">
                    <div class="section-holder">
                        <h4 class="text-24 font-400">Required Fields</h4>
                        <hr class="divider">
                        <div class="tournament-info-tab">
                            <div class="setting-tab-holder">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Tournament Format</label>
                                @php
                                   $option =[
                                    "" => "Select",
                                    "one" => "1v1",
                                    "terms" => "Pre-Made Teams",
                                    "draft" => "Free Agent Draft",
                                    "agents" => "Pre-Mades & Free Agents",
                                   ];
                                @endphp
                                {{Form::select('game_mode',$option,old('game_mode'),['id' =>'game_mode', 'class' =>'select form-control border-bottom bg-0 text-14px text-white', 'required' =>true])}}
                            </div>
                            <div id="show_terms" class="myDiv1" style="display: none;">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Minimum Players Per Team</label>
                                <input class="form-control border-bottom bg-0 text-14px text-white" name="play_per_team" type="number" value="" required>
                            </div>
                        </div>

                        <div class="tournament-info-tab">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">CHECK-IN</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-one" checked="" name="selector" onclick="show1();">
                                        <label for="option-one">Disabled</label>
                                        <input type="radio" id="option-two" value="_enable" name="selector" onclick="show2();">
                                        <label for="option-two">Enabled</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item">
                                <div id="show_enable" class="mycheck" style="display: none;">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Check-in Start Time</label>
                                    <div class="inner-main-holder">
                                        <select class="select form-control border-bottom bg-0 text-14px text-white">
                                            <option>15</option>
                                            <option>30</option>
                                            <option>60</option>
                                        </select>
                                        <span class="min-info">minutes before registration close</span>
                                    </div>
                                </div>
                            </span>
                        </div>

                        <div class="tournament-info-tab">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Match Score Reporting</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-three" checked="" name="selector" onclick="show3();">
                                        <label for="option-three">Admins Only</label>
                                        <input type="radio" id="option-four" value="_enable1" name="selector" onclick="show4();">
                                        <label for="option-four">Admins & Players</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item">
                                <div class="mycheck">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Require Screenshots</label>
                                    <form class="org-rBtn">
                                        <div class="radio-group" id="show_enable1" style="pointer-events: none; cursor: not-allowed; opacity: 0.5;">
                                            <input type="radio" id="option-1" checked="" name="selector">
                                            <label for="option-1">Not Required</label>
                                            <input type="radio" id="option-2" name="selector">
                                            <label for="option-2">Required</label>
                                        </div>
                                    </form>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="section-holder">
                        <h4 class="text-24 font-400">Advanced Fields</h4>
                        <hr class="divider">


                        <div class="tournament-info-tab">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Maximum Team Size</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-3" checked="" name="selector" onclick="show5();">
                                        <label for="option-3">None</label>
                                        <input type="radio" id="option-4" value="_enable2" name="selector" onclick="show6();">
                                        <label for="option-4">Capped</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item">
                                <div id="show_enable2" class="mycheck" style="display: none;">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Max Players Per Team</label>
                                    <input class="form-control border-bottom bg-0 text-14px text-white" type="number" value="0">
                                </div>
                            </span>
                        </div>

                        <div class="tournament-info-tab">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Participant Points</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-5" checked="" name="selector">
                                        <label for="option-5">DISABLED</label>
                                        <input type="radio" id="option-6" name="selector">
                                        <label for="option-6">ENABLED</label>
                                    </div>
                                </form>
                            </span>
                        </div>

                        <div class="tournament-info-tab">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Registration Participant Limit</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-7" checked="" name="selector" onclick="show7();">
                                        <label for="option-7">Unlimited</label>
                                        <input type="radio" id="option-8" value="_enable3" name="selector" onclick="show8();">
                                        <label for="option-8">Limited</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item">
                                <div id="show_enable3" class="mycheck" style="display: none;">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Limit</label>
                                    <input class="form-control border-bottom bg-0 text-14px text-white" type="number" value="0">
                                </div>
                            </span>
                        </div>

                        <div class="tournament-info-tab">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Country Flags on Brackets </label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-9" checked="" name="selector">
                                        <label for="option-9">Off</label>
                                        <input type="radio" id="option-10" name="selector">
                                        <label for="option-10">On</label>
                                    </div>
                                </form>
                            </span>
                        </div>

                        <div class="tournament-info-tab countery-selection-holder">
                            <span class="org-item">
                                <label class="text-gray text-10px font-500 text-uppercase" for="desc">Registration Regions</label>
                                <form class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-11" checked="" name="selector" onclick="show9();">
                                        <label for="option-11">All</label>
                                        <input type="radio" id="option-12" value="_enable4" name="selector" onclick="show10();">
                                        <label for="option-12">Specific Regions</label>
                                    </div>
                                </form>
                            </span>
                            <span class="org-item">
                                <div id="show_enable4" class="mycheck" style="display: none;">
                                    <label class="text-gray text-10px font-500 text-uppercase" for="desc">Regions Allowed</label>
                                    <div class="select-countries">
                                        <label class="check-inner-holder">Select All <input type="checkbox" id="checkCountries"> <span class="checkmark"></span></label>
                                        <div class="target-countries">
                                            <label class="check-inner-holder">Afghanistan <input type="checkbox" name="country[]" id="country-1" value="Afghanistan"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Albania<input type="checkbox" name="country[]" id="country-1" value="Albania"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Algeria<input type="checkbox" name="country[]" id="country-1" value="Algeria"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">American Samoa<input type="checkbox" name="country[]" id="country-1" value="American Samoa"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Andorra<input type="checkbox" name="country[]" id="country-1" value="Andorra"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Angola<input type="checkbox" name="country[]" id="country-1" value="Angola"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Anguilla<input type="checkbox" name="country[]" id="country-1" value="Anguilla"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Antarctica<input type="checkbox" name="country[]" id="country-1" value="Antarctica"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Antigua and Barbuda<input type="checkbox" name="country[]" id="country-1" value="Antigua and Barbuda"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Argentina<input type="checkbox" name="country[]" id="country-1" value="Argentina"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Armenia<input type="checkbox" name="country[]" id="country-1" value="Armenia"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Aruba<input type="checkbox" name="country[]" id="country-1" value="Aruba"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Australia<input type="checkbox" name="country[]" id="country-1" value="Australia"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Austria<input type="checkbox" name="country[]" id="country-1" value="Austria"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Azerbaijan<input type="checkbox" name="country[]" id="country-1" value="Azerbaijan"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bahamas<input type="checkbox" name="country[]" id="country-1" value="Bahamas"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bahrain<input type="checkbox" name="country[]" id="country-1" value="Bahrain"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bangladesh<input type="checkbox" name="country[]" id="country-1" value="Bangladesh"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Barbados<input type="checkbox" name="country[]" id="country-1" value="Barbados"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Belarus<input type="checkbox" name="country[]" id="country-1" value="Belarus"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Belgium<input type="checkbox" name="country[]" id="country-1" value="Belgium"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Belize<input type="checkbox" name="country[]" id="country-1" value="Belize"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Benin<input type="checkbox" name="country[]" id="country-1" value="Benin"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bermuda<input type="checkbox" name="country[]" id="country-1" value="Bermuda"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bhutan<input type="checkbox" name="country[]" id="country-1" value="Bhutan"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bolivia<input type="checkbox" name="country[]" id="country-1" value="Bolivia"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bosnia and Herzegovina<input type="checkbox" name="country[]" id="country-1" value="Bosnia and Herzegovina"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Botswana<input type="checkbox" name="country[]" id="country-1" value="Botswana"><span class="checkmark"></span></label>
                                            <label class="check-inner-holder">Bouvet Island<input type="checkbox" name="country[]" id="country-1" value="Bouvet Island"><span class="checkmark"></span></label>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="section-holder">
                        <h4 class="text-24 font-400">Player Registration Fields </h4>
                        <hr class="divider">
                        <p>
                            <span>
                                Add additional registration fields that participants will be required to fill in before they can join your tournament.
                                You will be able to see the submitted information from your tournament's admin portal.
                            </span>
                        </p>
                        <div class="tournament-info-tab play-register-section">
                            <div class="left-side-field-sec">
                                <ul>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">+
                                                <span>
                                                    <span>Add New </span>
                                                    <i class="fa fa-angle-down dropdown-carat"></i>
                                                </span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Public Field</a>
                                            <a class="dropdown-item" href="#">Private Field</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mt-20 static-row">
                                        <span class="field-privacy">Public</span>
                                    <i class="fa fa-eye"></i>
                                    <span class="key-label">In Game Name</span>
                                    </li>
                                    <li>
                                        <div class="add-new-fields">
                                        <span class="field-privacy">
                                            Public
                                        </span>
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        <div class="bf-text-input" flex="" row="" layout="start stretch">
                                            <input type="text" name="new-reg-field" class="new-input-field border-bottom bg-0">
                                        </div>
                                        <a class="field-btn" href="#">
                                            <i class="fa fa-trash-o" data-title="Delete" bs-tooltip=""></i>
                                        </a>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                            <div class="custom-field-info">
                                <p>
                                <span>Be careful to set the correct privacy options when collecting information from players. You should collect </span><strong>only</strong><span> the information you need to run the tournament successfully.</span>
                                </p>
                                <p class="field-description minimize"><span>Public fields should only be used to collect information visible to all tournament participants, such as a Discord name.</span></p>
                                <p class="field-description minimize"><span>Private fields should be used to collect more sensitive information only visible to you as the tournament organizer, such as a player's mobile number or email.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            {{-- <div class="btn-holder">
                <button class="primary_btn button-large invert-btn" data-toggle="modal" data-target="#myModal">Back</button>
                <button class="primary_btn button-large" data-toggle="modal" data-target="#myModal">Finish</button>
            </div> --}}
        </div>
        <div class="btn-holder">
            <button type="button" class="primary_btn button-large invert-btn" id="setupTabGoToBackTab" style="display:none">Back</button>
            <button class="primary_btn button-large" type="submit">Next</button>
        </div>
    </div>
    {{ Form::close() }}
</div>
@push('styles')
    <style>
        .error {
            color: burlywood;
        }
        /* #setup-tab .nav.nav-tabs .col.active{
            border-bottom: 2px solid #7af098;
        } */
    </style>
@endpush
@push('scripts')
<script src="{{url('assets/frontend/js/jquery.validate.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#formtest').validate();

        $('body').on('change', '#game_mode', function(e) {
            var title = $('option:selected', this).data('title');
            var valuu = $('option:selected', this).val();

            if(valuu == '' || valuu == 'one'){
                $('#show_terms').css('display','none');
            }else{
                $('#show_terms').css('display','block');
            }
        });

        $('body').on('change', '#myselection', function(e) {
            var title = $('option:selected', this).data('title');
            var valuu = $('option:selected', this).val();

            if(valuu == '' || valuu == 'custom'){
                $('.contact_link_div').css('display','none');
            }else{
                $('.contact_link_div').css('display','block');
            }
            $('.contact_link_div input').attr('placeholder',title);
        });

        $('body').on('submit', '#formtest', function(e) {
            e.preventDefault();
            if ($('#formtest').validate('check')) {
                if($("#tournament-basic").hasClass('active')){

                    $("#setup-tab .nav.nav-tabs .col a").removeClass('active');
                    $("#tournament-info-tab").addClass('active');
                    $("#setup-tab .tab-pane").removeClass('show active');
                    $("#tournament-info").addClass('show active');
                    $('#setupTabGoToBackTab').css('display','block');

                }else if($("#tournament-info").hasClass('active')){

                    $("#setup-tab .nav.nav-tabs .col a").removeClass('active');
                    $("#tournament-settings-tab").addClass('active');
                    $("#setup-tab .tab-pane").removeClass('show active');
                    $("#tournament-settings").addClass('show active');
                    $('#setupTabGoToBackTab').css('display','block');
                }else{
                    addTournament('formtest');
                }

            }
        });

        $('body').on('click', '#setupTabGoToBackTab', function(e) {

            if($("#tournament-settings").hasClass('active')){

                $("#setup-tab .nav.nav-tabs .col a").removeClass('active');
                $("#tournament-info-tab").addClass('active');
                $("#setup-tab .tab-pane").removeClass('show active');
                $("#tournament-info").addClass('show active');

            }else if($("#tournament-info").hasClass('active')){

                $("#setup-tab .nav.nav-tabs .col a").removeClass('active');
                $("#tournament-basic-tab").addClass('active');
                $("#setup-tab .tab-pane").removeClass('show active');
                $("#tournament-basic").addClass('show active');
                $('#setupTabGoToBackTab').css('display','none');
            }else{
                $(this).css('display','none');
            }
        });
    });

    function addTournament (formid)
    {
        var form = $('#'+formid)[0];
        $.ajax({
            type: $(form).attr('method'),
            url: $(form).attr('action'),
            data: new FormData(form),
            processData: false,
            contentType: false,
            success: function(response) {
            },
            error: function(response, err) {
            //hideLoader();
                var jsonresponse = response.responseJSON;

                if(jsonresponse.type == "validation"){
                    $.each(jsonresponse.errors, function(i, v) {
                        var error = '<small class="form-text text-danger">'+ v +'</small>';
                        var split = i.split('.');
                        console.log(split);
                        if (split[2]) {
                            var ind = split[0] + '[' + split[1] + ']' + '[' + split[2] + ']';
                            form.find("[name='" + ind + "']").addClass('border border-danger');
                            form.find("[name='" + ind + "']").parent().append(error);
                        } else if (split[1]) {
                            var ind = split[0] + '[' + split[1] + ']';
                            form.find("[name='" + ind + "']").addClass('border border-danger');
                            form.find("[name='" + ind + "']").parent().append(error);
                        } else {
                            if(form.find("[name='" + i + "[]']").length >0)
                            {
                                form.find("[name='" + i + "[]']").addClass('border border-danger');
                                form.find("[name='" + i + "[]']").parent().append(error);
                            }else{
                                form.find("[name='" + i + "']").addClass('border border-danger');
                                form.find("[name='" + i + "']").parent().append(error);
                            }

                        }
                    });
                }else{
                    alertMessage(response.message,function(){
                        return false
                    });
                }
                console.log('An error occurred.');
            }
        });

    }
</script>
@endpush
