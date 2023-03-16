<?php

function sendResponse($result, $message)
{
    $response = [
        'success' => true,
        'data'    => $result,
        'message' => $message,
    ];
    return response()->json($response, 200);
}

/**
 * return error response.
 *
 * @return \Illuminate\Http\Response
 */
function sendError($msg, $code = 404, $errorMessages = [], $type = 'error')
{
    $response = [
        'success' => false,
        'message' => $msg,
        'type' => $type,
    ];

    if(!empty($errorMessages)){
        if($type == 'validation'){
            $response['errors'] = webErrors($errorMessages);
        }elseif($type == 'api_validation'){
            $response['errors'] = apisErrors($errorMessages);
            $response['type']   = 'validation';
        }else{
            $response['errors'] = $errorMessages;
        }
    }
    return response()->json($response, $code);
}


function apisErrors($errors = [])
{
    $error = [];
    if(!is_array($errors)){
        $errors = $errors->toArray();
    }

    foreach ($errors as $value)
    {
        $arr = explode(" ",$value);
        if(count($arr) >= 2 )
            $error[$arr[1]] = str_replace("_", " ", $value);
    }
    return $error;
}

function webResponse($success, $code, $reply, $extra = [])
{
    $response = [
        'status' => $code,
        'success' => $success,
        'message' => '',
        'errors' => [],
        'result' => [],
        'extra' => $extra ? $extra : new ArrayObject(),
    ];

    if ($code == 201) {
        $response['result'] = $reply;
    } elseif ($code == 406 ||  $code == 400 ) {
        $response['errors'] = webErrors($reply);
    } else {
        $response['message'] = $reply;
    }
    return response()->json($response);
}

function webErrors($errors = [])
{
    $error = [];
    if(!is_array($errors)){
        $errors = $errors->toArray();
    }

    foreach ($errors as $key => $value)
    {
        $error[$key] = $value[0];
    }
    return $error;
}

function geterrormsg($errors = [])
{
    $error = 'Please fillout requied fields.';

    if(!is_array($errors)){
        $errors = $errors->toArray();
    }

    foreach ($errors as $key => $value)
    {
        if($value[0] =='The email has already been taken.'){
            $error ='The email has already been taken.';
        } ;
    }
    return $error;
}

function games()
{
    return [
        'Apex Legends' => 'Apex Legends',
        'MWII' => 'MWII',
        'Warzone 2.0' => 'Warzone 2.0'
    ];
}

function gameMode()
{
    return [
        '1v1 Duo’s KR' => '1v1 Duo’s KR',
        '2v2 Quad’s KR' => '2v2 Quad’s KR',
        '1v1/2v2/3v3/4v4 SND' => '1v1/2v2/3v3/4v4 SND',
        'FFA Private Match Trickshot' => 'FFA Private Match Trickshot',
    ];
}

function UserRole($role=null)
{

    $roles = [
        '1'=>'Super Admin',
        '2' =>'Admin',
        '3'=>'Nomal User',
    ];

    if($role != null){
        return $roles[$role];
    }else{
        return $roles;
    }
}

function max_players()
{
    return [
        '32'=>'32',
        '64'=>'64',
        '96'=>'96',
        '128'=>'128',
    ];
}

function credit_entry()
{
    return [
        '5'=>'5',
        '10'=>'10'
    ];
}

function platform()
{
    return [
        'Crossplay'=>'Crossplay',
        'Xbox/PSN'=>'Xbox/PSN',
    ];
}

function max_teams()
{
    return [
        '32'=>'32',
        '64'=>'64',
        '96'=>'96',
        '128'=>'128',
    ];
}

function UserLocale($role=null)
{

    $roles = [
        '1' =>'en',
        '2'=>'fr',
        '3'=>'gr',
    ];

    if($role != null){
        return $roles[$role];
    }else{
        return $roles;
    }
}

function region()
{
    return [
        'Alabama'=>'Alabama',
        'Alaska'=>'Alaska',
        'Arizona'=>'Arizona',
        'Arkansas'=>'Arkansas',
        'California'=>'California',
        'Colorado'=>'Colorado',
        'Connecticut'=>'Connecticut',
        'Delaware'=>'Delaware',
        'District of Columbia'=>'District of Columbia',
        'Florida'=>'Florida',
        'Georgia'=>'Georgia',
        'Hawaii'=>'Hawaii',
        'Idaho'=>'Idaho',
        'Illinois'=>'Illinois',
        'Indiana'=>'Indiana',
        'Iowa'=>'Iowa',
        'Kansas'=>'Kansas',
        'Kentucky'=>'Kentucky',
        'Louisiana'=>'Louisiana',
        'Maine'=>'Maine',
        'Montana'=>'Montana',
        'Nebraska'=>'Nebraska',
        'Nevada'=>'Nevada',
        'New Hampshire'=>'New Hampshire',
        'New Jersey'=>'New Jersey',
        'New Mexico'=>'New Mexico',
        'New York'=>'New York',
        'North Carolina'=>'North Carolina',
        'North Dakota'=>'North Dakota',
        'Ohio'=>'Ohio',
        'Oklahoma'=>'Oklahoma',
        'Oregon'=>'Oregon',
        'Maryland'=>'Maryland',
        'Massachusetts'=>'Massachusetts',
        'Michigan'=>'Michigan',
        'Minnesota'=>'Minnesota',
        'Mississippi'=>'Mississippi',
        'Missouri'=>'Missouri',
        'Pennsylvania'=>'Pennsylvania',
        'Rhode Island'=>'Rhode Island',
        'South Carolina'=>'South Carolina',
        'South Dakota'=>'South Dakota',
        'Tennessee'=>'Tennessee',
        'Texas'=>'Texas',
        'Utah'=>'Utah',
        'Vermont'=>'Vermont',
        'Virginia'=>'Virginia',
        'Washington'=>'Washington',
        'West Virginia'=>'West Virginia',
        'Wisconsin'=>'Wisconsin',
        'Wyoming'=>'Wyoming',
    ];
}

function playPerTeam()
{
  return ["1" =>"1","2" => "2","3"=>"3","4"=>"4"];
}

function uploadImage($image, $folder)
{
    Storage::disk('local')->put('public/'.$folder, $image);
    $name = $folder.'/'.$image->hashName();
    return $name;
}

function uploadLargeFile($sourceFile, $folder)
{
    $disk = Storage::disk('s3');
    $filename = $folder.'/'.$sourceFile->hashName();

    $disk->put('public/'.$filename, fopen($sourceFile, 'r+'));
    dd($filename);
    return $filename;
}

function stringToDateTime($string, $format='Y-m-d H:i:s')
{
   return date($format, strtotime($string));
//    $date = date($format, strtotime($string));
//    return \Carbon\Carbon::parse($date);
}

function currencies()
{
    return ['USD' =>'USD'];
}

function make_slug($value,$mode='-')
{
    return \Str::slug($value, $mode);
}

function enDeCryptString($str,$type = 'encrypt')
{
    if($type == 'decrypt'){
        return \Crypt::decryptString($str);
    }
    return \Crypt::encryptString($str);
}

function socialLinks()
{
    return [
        'discord_invite_link',
        'twitch_username',
        'email_address',
        'website_link',
        'facebook_username',
        'youtube_username',
        'twitter_username',
        'instagram_username',
        'smashcast_username'
    ];
}


function socialLinksIcons($name)
{
    $links = [
        'discord_invite_link' => 'fa fa-twitch',
        'twitch_username'=> 'fa fa-twitch',
        'email_address'=> 'fa fa-twitch',
        'website_link'=> 'fa fa-twitch',
        'facebook_username'=> 'fa fa-twitch',
        'youtube_username'=> 'fa fa-twitch',
        'twitter_username'=> 'fa fa-twitch',
        'instagram_username'=> 'fa fa-twitch',
        'smashcast_username'=> 'fa fa-twitch',
    ];

    return $links[$name];
}

function contactWith($set=null)
{
    $con = [
        'discord' =>  'Discord',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'email'  => 'Email',
        'curse' => 'Curse',
        'teamspeak' => 'Teamspeak',
        'irc' => 'Irc',
        'twitch' => 'Twitch',
        'custom' => 'Custom',
    ];

    if($set !== null){
        return $con[$set];
    }

    return $con;
}

function contactWithTitle($set=null)
{
    $con = [
        'discord' => ['data-title' => 'Enter your non-expiring Discord invite link'],
        'facebook' => ['data-title' => 'Enter your Facebook URL'],
        'twitter' => ['data-title' => 'Enter your Twitter (@) handle'],
        'email'  => ['data-title' => 'Enter your email address'],
        'curse' => ['data-title' => 'Enter your Curse Voice invite link'],
        'teamspeak' => ['data-title' => 'Enter your Teamspeak address'],
        'irc' => ['data-title' => 'Enter your server and channel name'],
        'twitch' => ['data-title' => 'Enter your twitch.tv URL'],
        'custom' => ['data-title' => ''],
    ];

    if($set !== null){
        return $con[$set];
    }

    return $con;
}

?>
