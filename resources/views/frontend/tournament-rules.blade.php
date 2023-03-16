@extends('layouts.frontend.app')
@section('content')
  <div class="tournament_rules_page page_wrapper">
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-image">
        <img alt="banner-image" src="images/product_bg_banner.webp">
      </div>
    </section>
    <!-- Tournament Games Section -->
    <section class="pixel_Tournaments section_panel">
      <div class="container">
        <div class="px_tournaments_holder">
          <div class="tournament_item">
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
                        <li>
                            Participants that miss the check-in timer due to a technical issue must contact an Admin directly through the Match Chat or
                            Discord within 5 minutes after receiving a loss. After this additional 5 minutes grace period, the match will not be reset
                             even ifan Admin is contacted.
                        </li>
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
                    The team in the upper side of the bracket (or left side of the match page) will play on the blue side. The team in the lower side of
                    the bracket (or right side of the match page) will play on the red side.
                  </li>
                </ul>

                <p>Additional Rules :</p>
                <ul>
                  <li>All matches will be played using the tournament code that Battlefy provides. To get the code, navigate to the bracket and then click
                     on the match that you’re supposed to play. Then copy the code and paste it into the League of Legends game client by clicking
                      play, then selecting custom  game, then selecting the trophy icon.
                    </li>
                  <li>Team members may be invited to the room as well.</li>
                  <li>Players may enter the room in any order</li>
                  <li>Pick and Bans will be handled exclusively ingame. Usage of 3rd party programs/websites for Picks and Bans is not allowed.</li>
                  <li>
                    Picks and Bans do not follow Major League format, players are allowed to pick champions without any specific role order or player
                    order.
                </li>
                  <li>
                    Every team that wishes to participate, needs to complete tournament check-in during the 60 minute check-in period, just before the
                    event start time. Teams are also required to check in to each match. They will have 10 minutes to do so.
                </li>
                  <li>
                    Teams will have only 10 minutes to join the game room once it has been created. If a team doesn’t complete 5 players in this time, the
                    team may be disqualified. If your opponent doesn’t show up or doesn’t start the match in under these 10 minutes, please contact
                     tournament admins by clicking the Report Match Issue button.
                </li>
                  <li>
                    If a team suffers a disconnection, the player will be given 10 minutes to reconnect to the game (the team with the disconnection can
                     request for a pause). If they have not reconnected in that time, the team will have to continue playing without that player.
                    </li>
                  <li>
                    Teams can have 1 substitute. Players, including the substitute, will only be considered team members if they are part of the Team
                    Roster on Battlefy for this specific Tournament. Once the tournament starts, Battlefy will not update changes in teams. Players
                     can only play in one team per tournament.
                </li>
                  <li>
                    Teams are not allowed to use Place Holders unless authorized by an admin. If the champion select needs to be restarted due to a bug,
                     the same champions and bans must be kept. Matches can be restarted only if there’s a bug or if the server is unstable, followed by
                     authorization from a Tournament admin. The players must pause the game and contact tournament admins by clicking the Report Match
                     Issue button, then wait for an answer on how to proceed.
                    </li>
                  <li>
                    If it is apparent that any manipulations of in-game software is occurring, that team will be banned permanently from any future Zotac
                     events, and any/all information we have regarding this will be forwarded to the Game's Publisher. Battlefy will also be notified for
                      future events. If a team is caught abusing glitches, bugs, etc., to gain an advantage, they will be auto-disqualified.
                    </li>
                  <li>
                    Any cheating allegations must be followed by concrete evidence provided promptly by the accusing team, pertinent to their match.
                     Failure to provide concrete/relevant evidence and/or delay in providing requested information will be considered a malicious delay
                     for the event and may result in the accusing team's disqualification.
                    </li>
                  <li>
                    Both Match Chat and Discord chat usage must be made with proper respect to the other players and Tournament Administration. This
                     includes but is not limited to: good manners and sportsmanship and respect to tournament admins and rules.
                </li>
                  <li>Tournament admin decisions are final regarding disputes.</li>
                </ul>
              </div>
              <div class="agree_rules">
                  <input type="checkbox"> I have read and agree to all the rules
              </div>
              <div class="rules_btn">
                <a id="tournament-join" href="#">
                  <button type="button" class="btn btn-default Continue_btn" id="continue_btn_modal" data-toggle="modal" data-target="#myModal" disabled>Continue</button>
                </a>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">

                      <div id="modal-item-1" class="modal_item">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title mt-0">
                            <img alt="user-image" src="images/profile.webp">
                            Pixel Esports - Leagues/Tournaments
                            <p><button>Follow</button> 1 Followers</p>
                          </h4>
                        </div>
                        <form action="{{route('joinTournament',$tournament->id)}}" method="POST" id="join_tournaments">
                            @csrf
                            <input type="hidden" name="agree_rules" id="agree_rules_field">
                            <div class="modal-body">
                                <h4>Select a Team</h4>
                                <p>Select a Team or <a href="#"> Create a New Team </a></p>
                                <div class="existing_team_holder">
                                    <ul>
                                        @if(count($user->teams))
                                        @foreach ($user->teams as $team)
                                            <li><input type="checkbox" name="team_id" value="{{$team->id}}">{{$team->title}}</li>
                                        @endforeach
                                    @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" id="step_two" class="btn btn-default Continue_btn">Next</button>
                            </div>
                        </form>
                      </div>
                      <div id="modal-item-2" class="modal_item" style="display: none;">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title mt-0">
                            Custom Fields
                          </h4>
                        </div>
                        <div class="modal-body">
                          <p>DISCORD NAME</p>
                          <div class="field_holder">
                            <p>
                                <input type="text">
                                <span>Public <i mi-name="visibility_on" class="material-icons navigation-icon password-eye-icon"></i></span>
                            </p>
                            <p class="m-0">Must include the # and number ( <a href="#">Beginners Guide to Discord</a> )</p>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default Continue_btn">Next</button>
                        </div>
                      </div>
                      <div id="modal-item-3" class="modal_item" style="display: none;">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title mt-0">
                            Create New Team
                          </h4>
                        </div>
                            <form action="{{route('CreateNewTeam')}}" method="POST" id="CreateNewTeam">
                                @csrf
                                <input type="hidden" name="agree_rules" id="agree_rules_field">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="team_name" name="title"  placeholder="Team Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="captain_name" name="captain_name"  placeholder="Captain Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="logo" name="logo">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="create_team" class="btn btn-default Continue_btn">Craete</button>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
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

@push('scripts')
<script>
    $(document).ready(function(){

        $('.agree_rules input[type="checkbox"]').click(function() {
            if ($(this).is(':checked')) {
                $('#agree_rules_field').val('yes');
                $('#continue_btn_modal').removeAttr("disabled");
            }else{
                $('#continue_btn_modal').attr("disabled", true);
            }
        });

        $('body').on('submit', '#join_tournaments', function(e) {
            event.preventDefault();
            var form = $('#join_tournaments');
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    alertMessage(response.message,function(){
                        window.location.href = response.redirect;
                    });
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
                    $('.__modal_message').html(jsonresponse.message);
                    $('.__modal').modal('show');
                }
                console.log('An error occurred.');
            }
            });
        });
    });


</script>
@endpush
