@extends('layouts.frontend.app')
@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-image">
       <img alt="banner-image" src="{{url('assets/frontend/images/add-tournament-bg.png')}}">
    </div>
 </section>
 <!-- Online Tournament Info -->
 <section class="cash_match_info section_panel">
    <div class="container">
        <div class="tournament-details-page-switcher">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="col nav-item" role="presentation">
                    <a class="nav-link active" id="basic-tab" data-toggle="tab" data-target="#basic" role="tab" aria-controls="basic" aria-selected="true">
                    <!--<i class="cmgico cmgico-bracket"></i>-->BASICS
                    </a>
                </li>
                <li class="col nav-item" role="presentation">
                    {{-- <a class="nav-link" id="cInfo-tab" data-toggle="tab" data-target="#cInfo" role="tab" aria-controls="cInfo" aria-selected="false"> --}}
                    <a class="nav-link" id="cInfo-tab"  role="tab" aria-controls="cInfo" aria-selected="false">
                    <!--<i class="cmgico cmgico-games"></i>--> CONTACT INFO
                    </a>
                </li>
                <li class="col nav-item" role="presentation">
                    {{-- <a class="nav-link" id="staff-tab" data-toggle="tab" data-target="#staff" role="tab" aria-controls="staff" aria-selected="false"> --}}
                    <a class="nav-link" id="staff-tab"  role="tab" aria-controls="staff" aria-selected="false">
                    <!--<i class="cmgico cmgico-rules"></i>-->STAFF
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div id="basic" class="tab-pane fade show active" role="tabpanel" aria-labelledby="basic-tab">
                    <form method="POST" class="al" action="{{route('createOrgPost')}}" enctype="multipart/form-data" id="createOrganizationForm">
                        <input type="hidden" name="org_id">
                        @csrf
                        <div class="basic-tab tournament-details-tab-bracket table-responsive">
                            <h4 class="h-titile">What is an Organization?</h4>
                            <p class="m-content">
                                An organization houses all of your tournaments. Once it's created, you can assign admins to the organization to help you manage all your tournaments.
                                Your players will be able to find tournaments from your organization homepage, so be sure to make it look nice!<br>
                                If you don’t have images on hand, or need some time to think about the wording, you can always return to edit from your organization page.<br>
                                Once you have filled in the necessary information on this page, click create so you can check out your new organization page,
                                and proceed to the creation of your first tournament.
                            </p>
                            <div class="org-info">
                                <span class="org-item">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Name Your Organization">
                                </span>
                                <span class="org-item">
                                    <label for="type">TYPE</label>
                                    <div class="org-rBtn">
                                    <div class="radio-group">
                                        <input type="radio" id="option-one" checked name="type" value="personal">
                                        <label for="option-one">Personal</label>
                                        <input type="radio" id="option-two" name="type" value="business">
                                        <label for="option-two">Business</label>
                                    </div>
                                </div>
                                </span>
                                <span class="org-item">
                                    <label for="name">Logo</label>
                                    <div name="upload" class="logo-upload-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-container upload-file-panel">
                                                <div class="file-upload-icon-holder">
                                                <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                                <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                                <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                                                </div>
                                                <div class="file-upload-main-file">
                                                <p id="namefile">100px x 100px</p>
                                                <button type="button" id="btnup" class="btn btn-primary btn-lg">Browse for your pic!</button>
                                                <input type="file" value="" name="logo" id="fileup">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </span>
                                <span class="org-item">
                                <label for="name">Description</label>
                                <textarea rows="3" maxlength="10000" name="description" placeholder="Describe your organization here."></textarea>
                                </span>
                                <span class="org-item">
                                    <label for="name">Header Image</label>
                                    <bf-image-uploader class="org-edit-header-uploader" place-holder-text="Header Background">
                                    <div class="drop-box">
                                        <div class="placeholders">
                                            <div class="ph-text">
                                                <div>
                                                <div class="fade-over camera-icon pb-10"><i class="fa fa-camera fade-over-icon"></i></div>
                                                <div class="bfy-uploader-placeholder-text text-28px font-200 cursor-pointer">Header Background</div>
                                                <div class="bfy-upload-dimensions-text">1150px x 380px</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="file" value="" name="headerImage" id="header-image">
                                    </bf-image-uploader>
                                </span>
                            </div>
                        </div>
                        <div class="btn-holder">
                            <button class="primary_btn button-large" type="submit">Next</button>
                        </div>
                    </form>
                </div>

                <div id="cInfo" class="tab-pane fade" role="tabpanel" aria-labelledby="cInfo-tab">
                    <form method="POST" class="al" action="{{route('createOrgContactPost')}}" enctype="multipart/form-data" id="createOrganizationContactForm">
                            <input type="hidden" name="org_id">
                            @csrf
                        <div class="current_match_tab contatc-info d-flex w-100">
                            <div class="ng-transclude">
                                {{-- <div class="form-group has-left-icon">
                                    <div class="icon-box">
                                    <div class="bf-icon" icon="socialIcons" image-url="images/discord.svg">
                                        <div class="bf-image icon-background" ratio="1/1" ng-if="$ctrl.imageUrl" image-url="$ctrl.imageUrl" style="padding-top: 100%;">
                                            <div class="animated actual-image fade-in" role="img" alt="" aria-label="" battlefy-background-image="images/discord.svg" style="background-image: url(&quot;images/discord.svg&quot;); background-size: cover;"></div>
                                            <!---->
                                            <img class="dummy-image" ng-src="images/discord.svg" src="images/discord.svg">
                                            <div class="animated image-loader ng-hide">
                                                <i class="bfy-icon-mini-logo"></i>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <input type="text" id="searchId" class="form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Discord Invite Link">
                                </div>
                                <div class="form-group has-left-icon">
                                    <div class="icon-box"><i class="fa fa-twitch"></i></div>
                                    <input type="text" id="searchId" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="Your Twitch Username">
                                </div> --}}

                                @foreach (socialLinks() as $link)
                                    <div class="form-group has-left-icon">
                                        <div class="icon-box">
                                            <i class="{{socialLinksIcons($link)}}"></i>
                                        </div>
                                        <input type="text" id="searchId" name="links[{{$link}}]" class="form-control" placeholder="Profile Link">
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="btn-holder">
                            <button class="primary_btn button-large invert-btn"  onclick="backtab('basic');">Back</button>
                            <button class="primary_btn button-large">Next</button>
                        </div>
                    </form>
                </div>
                <div id="staff" class="tab-pane fade" role="tabpanel" aria-labelledby="staff-tab">
                    <form method="POST" class="al" action="{{route('createOrgPost')}}" enctype="multipart/form-data" id="createOrganizationContactForm">
                        <input type="hidden" name="org_id">
                            @csrf
                        <div class="tournament_item rules_tab">
                            <div class="ng-transclude">
                                <div class="role-breakdown">
                                    <div class="role-details">
                                    <i class="fa fa-user role-icon"></i> <span translate=""><strong>Owner</strong><span> created the
                                    organization and can edit anything about the organization. No one can change this
                                    role.</span></span>
                                    </div>
                                    <div class="role-details">
                                    <i class="fa fa-user role-icon"></i> <span translate=""><strong>Admins</strong><span> can do everything the
                                    owner can except delete the organization or remove other admins.</span></span>
                                    </div>
                                    <div class="role-details">
                                    <i class="fa fa-user role-icon"></i> <span translate=""><strong>Moderators</strong><span> can create and
                                    edit tournaments for the organization, but cannot make changes to the organization
                                    itself.</span></span>
                                    </div>
                                    <div class="role-details">
                                    <i class="fa fa-user role-icon"></i> <span translate=""><strong>Bracket Managers</strong><span> can report
                                    and resolve disputes by changing scores in the organization's tournaments.</span></span>
                                    </div>
                                </div>
                                <div class="bf-org-edit-setup-staff-role">
                                    <div class="table-flex">
                                    <div class="table-row header">
                                        <div class="td-username"><span>Username</span>
                                        </div>
                                        <div class="td-role"><span>Role</span></div>
                                        <div class="td-buttons"></div>
                                    </div>
                                    <div class="table-row">
                                        <div data-th="Username" class="td-username username-63e368f23e5a2e51d907373e">majorweproinc-1</div>
                                        <div data-th="Role" class="td-role">
                                            <div class="role-data">
                                                Owner
                                            </div>
                                            <div class="cog-btn">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additional-row table-row">
                                        <div data-th="Username" class="td-username">
                                            <input type="text" class="form-control username-input ng-pristine ng-untouched ng-valid ng-empty" name="usernameInput" id="usernameInput" placeholder="Username To Add">
                                        </div>
                                        <div data-th="Role" class="td-role">
                                            <div class="role-data">
                                                <div class="dropdown-container">
                                                <div class="custom-select" style="width:200px;">
                                                    <select>
                                                        <option value="0">Admin</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Moderator</option>
                                                        <option value="3">Bracket Manager</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="cog-btn">
                                                <button class="btn">
                                                <i class="fa fa-plus"></i>
                                                <span> Add</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="btn-holder">
                            <button class="primary_btn button-large invert-btn" onclick="backtab('cInfo');" >Back</button>
                            <button class="primary_btn button-large" onclick="finish()">Finish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>
 @endsection
 @push('styles')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/> --}}
    {{-- <link rel="stylesheet" href="{{url('assets/css/mdb.min.css')}}"/> --}}
 @endpush
 @push('scripts')
 <script>
    $(document).ready(function(){
        $('body').on('submit', '#createOrganizationForm', function(e) {
            event.preventDefault();
            var form = $('#createOrganizationForm');
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                $("[name='org_id']").val(response.data.id);
                $(".nav-link").removeClass('active');
                $("#cInfo-tab").addClass('active');
                $(".tab-pane").removeClass('show active');
                $("#cInfo").addClass('show active');
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
        });

        $('body').on('submit', '#createOrganizationContactForm', function(e) {
            event.preventDefault();
            var form = $('#createOrganizationContactForm');
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                $(".nav-link").removeClass('active');
                $("#staff-tab").addClass('active');

                $(".tab-pane").removeClass('show active');
                $("#staff").addClass('show active');
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
        });

     });

    function finish (){
        var link = "{{route('geTorganizationView')}}";
        window.location.href = link;
    }

    function backtab (tab){
        $(".nav-link").removeClass('active');
        $("#"+tab+"-tab").addClass('active');
        $(".tab-pane").removeClass('show active');
        $("#"+tab).addClass('show active');
    }

 </script>
 @endpush
