@extends('layouts.frontend.app')
@section('content')
  <!-- Hero Section -->
  <section class="score-record-holder">
    <div class="container">
        <div class="highlight-panel">
            <span class="p-admin">Admin</span>
            <span><input type="checkbox"> Highlight this match on the bracket</span>
        </div>
        <div class="sr-main-panel">
            <div class="round-info-holder text-center">
                <h4 class="title-info">
                    Bracket
                </h4>
                <p>teeee</p>
                <h4 class="title-info">
                    Round 1 Match 1
                </h4>
            </div>
            <div class="score-info-holder">
                <div class="score-user-info">
                    <span class="name-icon">{{substr($match->Ateam_name,0,1)}}</span>
                    <span class="player-name">{{$match->Ateam_name}}</span>
                    <span class="player-status">{{$match->Ateam_ready ? 'READY' : 'NOT READY'}}</span>
                    <span class="player-speed">SPEED #1</span>
                </div>
                <div class="score-info">
                    <h4 class="score">{{($match->team_a == $match->won_team) ? 1 : 0 }}</h4>
                    <div class="best-one">Best of 1</div>
                    <h4 class="score">{{($match->team_b == $match->won_team) ? 1 : 0 }}</h4>
                </div>
                <div class="score-user-info text-right">
                    <span class="name-icon">{{substr($match->Bteam_name,0,1)}}</span>
                    <span class="player-name">{{$match->Bteam_name}}</span>
                    <span class="player-status">{{$match->Bteam_ready ? 'READY' : 'NOT READY'}}</span>
                    <span class="player-speed">SPEED #4</span>
                </div>
            </div>
            <div class="report-btn-holder">
                <button class="report-issue-btn">Report Match Issue</button>
                <button class="report-score-btn" data-toggle="modal" data-target="#wonModal">Report Score</button>
            </div>
            <div class="ss-upload-holder">
                <div class="ss-upload">
                    <form class="updloadSreenshort" id="teamAform" method="POST" action="{{route('updloadSreenshort')}}" enctype="multipart/form-data">
                        <div class="upload-file-holder">
                            @csrf
                            <input type="hidden" name="tournament_id" value="{{$tournament->id}}">
                            <input type="hidden" name="tournament_match_id" value="{{$match->id}}">
                            <input type="hidden" name="team_id" value="1">
                            <input type="file" name="image" data-form="teamAform">
                            <img class="viewimage" alt="img" src=""/>
                            <p>Game 1 Result Screenshot</p>
                            <i mi-name="file_upload" class="material-icons navigation-icon"></i>
                        </div>
                    </form>
                </div>
                <p>Game 1</p>

                <div class="ss-upload right">
                    <form class="updloadSreenshort" id="teamBform" method="POST" action="{{route('updloadSreenshort')}}" enctype="multipart/form-data">
                        <div class="upload-file-holder">
                            @csrf
                            <input type="hidden" name="tournament_id" value="{{$tournament->id}}">
                            <input type="hidden" name="tournament_match_id" value="{{$match->id}}">
                            <input type="hidden" name="team_id" value="2">
                            <input type="file" name="image" data-form="teamBform">
                            <img class="viewimage" alt="img" src=""/>
                            <p>Game 1 Result Screenshot Not Uploaded</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section class="chat-section">
    <div class="container">
        <div class="chat_box_holder mt-4">
            <div class="chat_box_wrapper">
            <h6 class="text-center">Chat Box</h6>
                {{-- @include('frontend.components.chat') --}}
                <nav>
                    <div class="nav nav-tabs" id="chat-tabs" role="tablist">
                      <a class="nav-item nav-link active" id="nav-ReqAdmin-tab" data-toggle="tab" href="#nav-ReqAdmin" role="tab" aria-controls="nav-ReqAdmin" aria-selected="true">Request Admin</a>
                      <a class="nav-item nav-link" id="nav-Dispute-tab" data-toggle="tab" href="#nav-Dispute" role="tab" aria-controls="nav-Dispute" aria-selected="false">Dispute</a>
                      <a class="nav-item nav-link" id="nav-Advantage-tab" data-toggle="tab" href="#nav-Advantage" role="tab" aria-controls="nav-Advantage" aria-selected="false">Advantage</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-ReqAdmin" role="tabpanel" aria-labelledby="nav-ReqAdmin-tab">
                        @include('frontend.components.chat')
                    </div>
                    <div class="tab-pane fade" id="nav-Dispute" role="tabpanel" aria-labelledby="nav-Dispute-tab">

                    </div>
                    <div class="tab-pane fade" id="nav-Advantage" role="tabpanel" aria-labelledby="nav-Advantage-tab">

                    </div>
                </div>

                {{-- <table class="table-bordered table-dark">
                    <thead>
                    <tr><th>Request Admin</th>
                    <th>Dispute</th>
                    <th>Advantage</th>
                    </tr></thead>
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
                <div class="text-box_holder">
                    <input type="text" placeholder="Chat with us...">
                    <div class="chat-butn-holder">
                        <button><i mi-name="image" class="material-icons navigation-icon mr-2"></i></button>
                        <button><i mi-name="send" class="material-icons navigation-icon"></i></button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
  </section>

  <div class="modal fade" id="wonModal" tabindex="-1" role="dialog" aria-labelledby="wonModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color: #1f2029;">
        <div class="modal-header">
          <h5 class="modal-title" id="wonModalLabel">Who won Game 1?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="wonModalform" class="wonModalform" method="POST" action="{{route('updateWonTeam')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="match_id" value="{{$tournament->id}}">
            <div class="modal-body">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="won_team" id="TeamA" value="1" autocomplete="off" checked> Team A
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="won_team" id="TeamB" value="2" autocomplete="off"> Team B
                    </label>
                </div>
            </div>
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </form>
      </div>
    </div>
  </div>

 @endsection
 @push('styles')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>

    .send-msg{
        /* padding: 10px 84px 10px 10px; */
        border-color: #ffffff20;
        width: 100%;
        background-color: transparent;
        border: 1px solid #fff;
    }
    .chat-box {
        display: grid;
    }
    .chat-right-hand{
        float: right;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        background: rgb(117, 48, 238);
        padding: 8px;
        margin: 5px 0px;
        border-radius: 8px;
        color: white;
        min-width: 50%;
        max-width: 100%;
        align-self: flex-end;
        font-size: 12px;
    }
    .chat-left-hand{
        float: left;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        background: rgb(56, 167, 248);
        padding: 8px;
        margin: 5px 0px;
        border-radius: 8px;
        color: white;
        min-width: 50%;
        max-width: 100%;
        align-self: flex-start;
        font-size: 12px;
    }
 </style>
 @endpush
 @push('scripts')
 <script>
    $(document).ready(function(){

        $('body').on('change', '.wonModalform input[name=won_team]', function(e) {
            var formid = '#wonModalform';

            $.ajax({
                type: $(formid).attr('method'),
                url: $(formid).attr('action'),
                data: new FormData($(formid)[0]),
                processData: false,
                contentType: false,
                success: function(response) {
                },
                error: function(response, err) {
                }
            });
        });

        $('body').on('change', '.updloadSreenshort input[type=file]', function(e) {
            var formid = '#'+ $(this).data('form');

            $(formid+' .viewimage').attr('src',URL.createObjectURL(e.target.files[0]));

            $.ajax({
                type: $(formid).attr('method'),
                url: $(formid).attr('action'),
                data: new FormData($(formid)[0]),
                processData: false,
                contentType: false,
                success: function(response) {
                },
                error: function(response, err) {
                }
            });
        });

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
        // var link = {{route('geTorganizationView')}};
        // window.location.href = link;
    }

    function backtab (tab){
        $(".nav-link").removeClass('active');
        $("#"+tab+"-tab").addClass('active');
        $(".tab-pane").removeClass('show active');
        $("#"+tab).addClass('show active');
    }

 </script>
 @endpush
