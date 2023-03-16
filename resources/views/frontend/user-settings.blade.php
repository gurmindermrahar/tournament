@extends('layouts.frontend.app')
@section('content')
<div style="background: #000; height: 500px;">
    <div class="container">
        <h1>Settings</h1>
    </div>
    <div id="exTab1" class="container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab">ACCOUNT</a>
            </li>
            <li><a href="#2a" data-toggle="tab">CONNECTIONS</a></li>
            <li><a href="#3a" data-toggle="tab">PRIVACY</a></li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                {{-- <h3>Content's background color is the same for the tab</h3> --}}
                <div class="card">
                    <div class="card-body">
                        <div class="bio-row">
                            <p><span>Email </span>: {{$user->email}}</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Password </span>: <button class="ChnagePassword">Chnage password</button></p>
                        </div>
                        <div class="row ChnagePasswordForm d-none">
                            <form method="POST" action="{{ route('userChangePassword') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="new_password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="new_password" type="password" class="form-control" name="new_password" required>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Change Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('userChangeSetting') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required >
                            </div>
                            <div class="form-group">
                                <label for="timezone" class="">{{ __('Timezone') }}</label>
                                <select id="timezone" name="timezone" class="form-control" required>
                                    <option value="Pacific/Midway">(UTC-12:00) Midway Island, American Samoa</option><option value="Pacific/Honolulu">(UTC-10:00) Hawaii</option><option value="America/Anchorage">(UTC-9:00) Alaska</option><option value="America/Los_Angeles">(UTC-08:00) Pacific Time (US and Canada)</option><option value="America/Phoenix">(UTC-07:00) Arizona</option><option value="America/Chihuahua">(UTC-07:00) Chihuahua, La Paz, Mazatlan</option><option value="America/Denver">(UTC-07:00) Mountain Time (US and Canada)</option><option value="America/Belize">(UTC-06:00) Central America</option><option value="America/Chicago">(UTC-06:00) Central Time (US and Canada)</option><option value="America/Mexico_City">(UTC-06:00) Guadalajara, Mexico City, Monterrey</option><option value="America/Regina">(UTC-06:00) Saskatchewan</option><option value="America/Bogota">(UTC-05:00) Bogota, Lima, Quito</option><option value="America/Jamaica">(UTC-05:00) Kingston, George Town</option><option value="America/New_York">(UTC-05:00) Eastern Time (US and Canada)</option><option value="America/Indiana/Indianapolis">(UTC-05:00) Indiana (East)</option><option value="America/Caracas">(UTC-04:30) Caracas</option><option value="America/Asuncion">(UTC-04:00) Asuncion</option><option value="America/Halifax">(UTC-04:00) Atlantic Time (Canada)</option><option value="America/Cuiaba">(UTC-04:00) Cuiaba</option><option value="America/Manaus">(UTC-04:00) Georgetown, La Paz, Manaus, San Juan</option><option value="America/St_Johns">(UTC-03:30) Newfoundland and Labrador</option><option value="America/Sao_Paulo">(UTC-03:00) Brasilia</option><option value="America/Buenos_Aires">(UTC-03:00) Buenos Aires</option><option value="America/Cayenne">(UTC-03:00) Cayenne, Fortaleza</option><option value="America/Godthab">(UTC-03:00) Greenland</option><option value="America/Montevideo">(UTC-03:00) Montevideo</option><option value="America/Bahia">(UTC-03:00) Salvador</option><option value="America/Santiago">(UTC-04:00) Santiago</option><option value="America/Noronha">(UTC-02:00) Mid-Atlantic</option><option value="Atlantic/Azores">(UTC-01:00) Azores</option><option value="Atlantic/Cape_Verde">(UTC-01:00) Cape Verde Islands</option><option value="Europe/London">(UTC+00:00) Dublin, Edinburgh, Lisbon, London</option><option value="Africa/Casablanca">(UTC+00:00) Casablanca</option><option value="Africa/Monrovia">(UTC+00:00) Monrovia, Reykjavik</option><option value="Europe/Amsterdam">(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option><option value="Europe/Belgrade">(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option><option value="Europe/Brussels">(UTC+01:00) Brussels, Copenhagen, Madrid, Paris</option><option value="Europe/Warsaw">(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option><option value="Africa/Algiers">(UTC+01:00) West Central Africa</option><option value="Africa/Windhoek">(UTC+02:00) Windhoek</option><option value="Europe/Athens">(UTC+02:00) Athens, Bucharest</option><option value="Asia/Beirut">(UTC+02:00) Beirut</option><option value="Africa/Cairo">(UTC+02:00) Cairo</option><option value="Asia/Damascus">(UTC+02:00) Damascus</option><option value="EET">(UTC+02:00) Eastern Europe</option><option value="Africa/Harare">(UTC+02:00) Harare, Pretoria</option><option value="Europe/Helsinki">(UTC+02:00) Helsinki, Kiev, Riga, Sofia, Tallinn, Vilnius</option><option value="Asia/Istanbul">(UTC+02:00) Istanbul</option><option value="Asia/Jerusalem">(UTC+02:00) Jerusalem</option><option value="Europe/Kaliningrad">(UTC+02:00) Kaliningrad</option><option value="Africa/Tripoli">(UTC+02:00) Tripoli</option><option value="Asia/Amman">(UTC+02:00) Amman</option><option value="Asia/Baghdad">(UTC+03:00) Baghdad</option><option value="Asia/Kuwait">(UTC+03:00) Kuwait, Riyadh</option><option value="Europe/Minsk">(UTC+03:00) Minsk</option><option value="Europe/Moscow">(UTC+03:00) Moscow, St. Petersburg, Volgograd</option><option value="Africa/Nairobi">(UTC+03:00) Nairobi</option><option value="Asia/Tehran">(UTC+03:30) Tehran</option><option value="Asia/Muscat">(UTC+04:00) Abu Dhabi, Muscat</option><option value="Asia/Baku">(UTC+04:00) Baku</option><option value="Europe/Samara">(UTC+04:00) Izhevsk, Samara</option><option value="Indian/Mauritius">(UTC+04:00) Port Louis</option><option value="Asia/Tbilisi">(UTC+04:00) Tbilisi</option><option value="Asia/Yerevan">(UTC+04:00) Yerevan</option><option value="Asia/Kabul">(UTC+04:30) Kabul</option><option value="Asia/Tashkent">(UTC+05:00) Tashkent, Ashgabat</option><option value="Asia/Karachi">(UTC+05:00) Islamabad, Karachi</option><option value="Asia/Kolkata">(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi</option><option value="Asia/Colombo">(UTC+05:30) Sri Jayawardenepura</option><option value="Asia/Katmandu">(UTC+05:45) Kathmandu</option><option value="Asia/Almaty">(UTC+06:00) Astana</option><option value="Asia/Dhaka">(UTC+06:00) Dhaka</option><option value="Asia/Novosibirsk">(UTC+07:00) Novosibirsk</option><option value="Asia/Rangoon">(UTC+06:30) Yangon (Rangoon)</option><option value="Asia/Bangkok">(UTC+07:00) Bangkok, Hanoi, Jakarta</option><option value="Asia/Krasnoyarsk">(UTC+07:00) Krasnoyarsk</option><option value="Asia/Chongqing">(UTC+08:00) Beijing, Chongqing, Hong Kong SAR, Urumqi</option><option value="Asia/Irkutsk">(UTC+08:00) Irkutsk</option><option value="Asia/Kuala_Lumpur">(UTC+08:00) Kuala Lumpur, Singapore</option><option value="Australia/Perth">(UTC+08:00) Perth</option><option value="Asia/Taipei">(UTC+08:00) Taipei</option><option value="Asia/Ulaanbaatar">(UTC+08:00) Ulaanbaatar</option><option value="Asia/Tokyo">(UTC+09:00) Osaka, Sapporo, Tokyo</option><option value="Asia/Seoul">(UTC+09:00) Seoul</option><option value="Asia/Yakutsk">(UTC+09:00) Yakutsk</option><option value="Australia/Adelaide">(UTC+10:30) Adelaide</option><option value="Australia/Darwin">(UTC+09:30) Darwin</option><option value="Australia/Brisbane">(UTC+10:00) Brisbane</option><option value="Australia/Canberra">(UTC+11:00) Canberra, Melbourne, Sydney</option><option value="Pacific/Guam">(UTC+10:00) Guam, Port Moresby</option><option value="Australia/Hobart">(UTC+11:00) Hobart</option><option value="Asia/Magadan">(UTC+10:00) Magadan</option><option value="Asia/Vladivostok">(UTC+10:00) Vladivostok, Magadan</option><option value="Asia/Srednekolymsk">(UTC+11:00) Chokirdakh</option><option value="Pacific/Guadalcanal">(UTC+11:00) Solomon Islands, New Caledonia</option><option value="Asia/Anadyr">(UTC+12:00) Anadyr, Petropavlovsk-Kamchatsky</option><option value="Pacific/Auckland">(UTC+13:00) Auckland, Wellington</option><option value="Pacific/Fiji">(UTC+12:00) Fiji Islands, Kamchatka, Marshall Islands</option><option value="Pacific/Tongatapu">(UTC+13:00) Nuku'alofa</option><option value="Pacific/Apia">(UTC+14:00) Samoa</option>
                                </select>
                            </div>
                            <label>Mailing Preferences</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="mailing_preferences" id="mailing_preferences">
                                <label class="form-check-label" for="mailing_preferences">I want to receive news about cool tournaments and promotional emails.</label>
                            </div>
                            <label>Notification Sounds</label>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="notification_sounds" id="notification_sounds">
                                <label class="form-check-label" for="notification_sounds">I want sounds to play when new matches, and match checkins are ready.</label>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save Change') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2a">
                <p>Connecting your game and social media accounts to your Battlefy account is easy. Doing so will allow you to register for tournaments in games you love.</p>
            </div>
            <div class="tab-pane" id="3a">
                <p>Battlefy follows data privacy best practices, like data minimization, meaning we only collect personal data that's necessary to provide you with the best esports experience.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
@endpush
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $( ".ChnagePassword" ).click(function() {
        if($('.ChnagePasswordForm').hasClass('d-none')){
            $('.ChnagePasswordForm').removeClass('d-none');
        }else{
            $('.ChnagePasswordForm').addClass('d-none');
        }
    });
</script>
@endpush
