@extends('layouts.frontend.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-12">
         <div class="game_details_inner">
            <div class="game_details_thumb_inner slick__activation slick_navigation slick-initialized slick-slider">
               <img width="1170" height="540" src="{{url('assets/frontend/images/game-details-thumb.webp')}}" alt="">
               {{-- <div class="slick-list draggable">
                  <div class="slick-track" style="opacity: 1; width: 5880px; transform: translate3d(-1176px, 0px, 0px);">
                     <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1176px;">
                        <div>
                           <div class="game_details_thumb" style="width: 100%; display: inline-block;">
                              <img width="1170" height="540" src="https://htmldemo.net/bonx/bonx/assets/img/others/game-details-thumb.webp" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1176px;">
                        <div>
                           <div class="game_details_thumb" style="width: 100%; display: inline-block;">
                              <img width="1170" height="540" src="https://htmldemo.net/bonx/bonx/assets/img/others/game-details-thumb.webp" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 1176px;">
                        <div>
                           <div class="game_details_thumb" style="width: 100%; display: inline-block;">
                              <img width="1170" height="540" src="https://htmldemo.net/bonx/bonx/assets/img/others/game-details-thumb.webp" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1" style="width: 1176px;">
                        <div>
                           <div class="game_details_thumb" style="width: 100%; display: inline-block;">
                              <img width="1170" height="540" src="https://htmldemo.net/bonx/bonx/assets/img/others/game-details-thumb.webp" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 1176px;">
                        <div>
                           <div class="game_details_thumb" style="width: 100%; display: inline-block;">
                              <img width="1170" height="540" src="https://htmldemo.net/bonx/bonx/assets/img/others/game-details-thumb.webp" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>

            <div class="game_details_content bottom">
               <div class="game_details_content_step">
                  <h2>Description:</h2>
                  <div class="game_details_desc">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap electro
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap electro
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                     </p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap electro
                        recently with desktop publishing software like including versions.
                     </p>
                  </div>
               </div>
               <div class="col-xs-12">
                  <div class="tournament-details-tab-prizes-content">
                     <h2>Prize Claim</h2>
                     <p>Prize claims must be completed within 24 hours of the end of the tournament otherwise risk penalty of the prize.
                        Claims can take up to 72 hours to be processed.
                     </p>
                     <p>Players who reside in any of the below states are not eligible to receive and/or claim any prizes from CheckMate Gaming;</p>
                     <ul>
                        <li>Arizona</li>
                        <li>Hawaii</li>
                        <li>Iowa</li>
                        <li>Mississippi</li>
                        <li>Montana</li>
                        <li>Nevada</li>
                        <li>South Dakota</li>
                     </ul>
                     <h2>Legal Disclaimer</h2>
                     <h3>General Online Tournament Rules</h3>
                     <p>
                        CheckMate Gaming organizes online tournaments with these stated official rules. Each tournament, rules,
                        prize rules, dates and any other specific information/details may be provided at the time of each tournament.
                        A participant agrees to abide by these final and obligatory rules and choices of CheckMate Gaming
                        staff/partners when participating in any online tournament.
                     </p>
                     <h4>Tournament Dates</h4>
                     <p>Each individual tournament will be held on the scheduled dates provided by CheckMate Gaming LLC.</p>
                     <h4>How to Enter a Tournament</h4>
                     <p>In order to participate in a CheckMate Gaming tournament you must be a registered participant. Tournament registration is open until all tournament spots are filled – the number of spots per each individual tournament is stated on the tournament page within the website.</p>
                     <p>For a tournament entry to be considered valid, participants must provide all necessary/requested information. Incomplete or more than one entries will see the participant as disqualified - one entry per person per tournament. All entries become the property of CheckMate Gaming and will not be acknowledged or returned. Please note that CheckMate Gaming is not responsible for any lost, late, incomplete, or misdirected entries.</p>
                     <h4>Eligibility &amp; Limitations</h4>
                     <p>All participants must be legal residents of the United States of America, unless otherwise stated. Participants must be at least eighteen years of age as of the entry date. Children under the age of eighteen years are not permitted to register on this site for any tournaments or competitions. CheckMate Gaming will not knowingly collect information from children under age 18. CheckMate Gaming reserves the right to request proof of age of winners as a condition precedent to prize award, by providing a copy of the winner's government-issued photo ID document and/or requiring submission to Checkmate Gaming of an affidavit of eligibility upon a form prescribed by Checkmate Gaming.</p>
                     <p>Only one (1) prize per household per tournament.</p>
                     <p>VOID IN ARIZONA, IOWA, MISSISSIPPI, MONTANA, NEVADA, SOUTH DAKOTA AND WHERE OTHERWISE PROHIBITED BY LAW.</p>
                     <h4>Further Conditions</h4>
                     <p>CheckMate Gaming LLC. is not responsible for any incorrect/inaccurate information, whether caused by users of the site or by any of the equipment/programming associated with the site or in any tournament. Moreover by any technical or human error, which may have occurred in the registration process, tournament entries or in connection with any tournament including, technical limitations or other events that may result in the disqualification or loss of ranking status of any participant in any tournament. CheckMate Gaming does not assume any responsibility for errors, interruptions, deletions, defects/delays, or site/tournament communication line failures. Additionally CheckMate Gaming does not take any responsibility for any theft or destruction of unauthorized access to or modification of any registration entries.</p>
                     <p>CheckMate Gaming and its employees, affiliates, sponsors, partners, suppliers, will not be responsible or accountable for any indirect, incidental, consequential or punitive damages of any kind in any event.</p>
                     <h4>Publicity</h4>
                     <p>All participating participants give CheckMate Gaming and its affiliates permission to use names, nick-names, gamer tags, and likeness in promotional associations of this and other tournaments, and waive any claims of royalty or right for such use, unless otherwise agreed upon or where prohibited.</p>
                     <h4>Decisions &amp; Conduct</h4>
                     <p>By participating in the Tournament, participants agree to abide the rules of each specific Tournament. Participants further agree to be bound by the decisions made by CheckMate Gaming, its employees, its volunteers, and other personnel. Participants who fail to abide by posted rules and gain unfair advantage, or obtain winner status using fraudulent means will be disqualified. Inappropriate or unsportsmanlike behavior is prohibited. All decisions concerning disputes are final.</p>
                     <h4>Prize(s)</h4>
                     <p>Prize(s) that may be awarded to eligible winner(s) are limited to one prize package per winner. A description of the prizes will be provided for each individual tournament. Prizes are non-transferable and not exchangeable for other prizes. In the case of an unavailable prize, in its sole discretion, sponsors reserve the right to substitute a prize of equal/greater value. All taxes, gratuities and unspecified expenses are the sole responsibility of winner. Winners assume all liability for use of their prize(s).</p>
                     <p>Each winner must submit a Prize Claim within seven days after the tournament has ended. Prior to receipt of prize, winners are required to follow CheckMate Gaming’s instructions and provide any necessary/relevant forms. If a winner has not followed the proper instructions or has not submitted any of the necessary/correct forms or discards his/her prize within 14 days after the tournaments end date, the winner will be considered noncompliant with these Official Rules and requirements, and such prizes will be forfeited.</p>
                     <h4>Taxes</h4>
                     <p>Each winner is solely responsible for any and all applicable taxes. Participants who win over $600 in prizes will receive an <strong>IRS Form</strong> at the end of the calendar year and a copy of the form will be filed with the <strong>IRS</strong>.</p>
                     <h4>Miscellaneous</h4>
                     <p>CheckMate Gaming reserves the right to cancel and/or reschedule a tournament to a later date and time if for any reason a tournament is unable to be operated at its scheduled time/date.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
