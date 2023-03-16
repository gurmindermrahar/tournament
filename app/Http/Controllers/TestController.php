<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;
use Square\Models\Money;
use Square\Models\Address;
use Square\Models\CreateCustomerRequest;
use Square\Models\CreatePaymentRequest;
use Laravel\Socialite\Facades\Socialite;

use App\Models\SocialConnections;
use Auth;
class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function Test(Request $request)
    {
        $client = new SquareClient([
            'accessToken' => env('SQUARE_ACCESS_TOKEN'),
            'environment' => Environment::SANDBOX,
        ]);

        try {

            $apiResponse = $client->getLocationsApi()->listLocations();

            if ($apiResponse->isSuccess()) {
                $result = $apiResponse->getResult();
                dd($result);
                // foreach ($result->getLocations() as $location) {
                //     printf(
                //         "%s: %s, %s, %s<p/>",
                //         $location->getId(),
                //         $location->getName(),
                //         $location->getAddress()->getAddressLine1(),
                //         $location->getAddress()->getLocality()
                //     );
                // }

            } else {
                $errors = $apiResponse->getErrors();
                dd($errors);
                // foreach ($errors as $error) {
                //     printf(
                //         "%s<br/> %s<br/> %s<p/>",
                //         $error->getCategory(),
                //         $error->getCode(),
                //         $error->getDetail()
                //     );
                // }
            }

        } catch (ApiException $e) {
            echo "ApiException occurred: <b/>";
            echo $e->getMessage() . "<p/>";
        }
    }

    public function defualtClient()
    {
        $client = new SquareClient([
            'accessToken' => env('SQUARE_ACCESS_TOKEN'),
            'environment' => Environment::SANDBOX,
        ]);

        return $client;
    }

    public function createCustomer()
    {
        $name = 'test';
        $email = 'test@gmail.com';
        $street_address ='xxxx';

        $customer_address = new Address();
        $customer_address->setAddressLine1($street_address);

        $customer_body = new CreateCustomerRequest();
        $customer_body->setGivenName($name);
        $customer_body->setFamilyName($email);
        $customer_body->setAddress($customer_address);
        $customer_body->setIdempotencyKey(uniqid());

        try {

            $customerId =null;

            $client = $this->defualtClient();

            $apiResponse = $client->getCustomersApi()->createCustomer($customer_body);

            if ($apiResponse->isSuccess()) {
                $result = $apiResponse->getResult();
                $customerId = $result->getCustomer()->getId();
            } else {
                $errors = $apiResponse->getErrors();
                // Your error-handling code here
            }
            return $customerId;

        } catch (ApiException $e) {
            echo $e->getMessage(); die;
        }

        return $customerId;
    }

    public function payment(Request $request)
    {
        $client = $this->defualtClient();
        $customerId = $this->createCustomer();

        $amount_money = new Money();
        $amount_money->setAmount(100);
        $amount_money->setCurrency('USD');

        // $app_fee_money = new Money();
        // $app_fee_money->setAmount(10);
        // $app_fee_money->setCurrency('USD');

        $payment_body = new CreatePaymentRequest( $request->sourceId, uniqid(),$amount_money);

        //$payment_body->setAppFeeMoney($app_fee_money);
        // $payment_body->setReferenceId('123456');
        // $payment_body->setNote('Brief description');

        $payment_body->setAutocomplete(true);
        $payment_body->setCustomerId($customerId);
        // $payment_body->setSourceId($request->sourceId);
        // $payment_body->setAmountMoney($amount_money);
        // $payment_body->setIdempotencyKey(uniqid());
        $payment_body->setLocationId($request->locationId);


        $api_response = $client->getPaymentsApi()->createPayment($payment_body);

        if ($api_response->isSuccess()) {
            $result = $api_response->getResult();
            return response()->json(["status" => 200,"message" => "payment successfully","transactionId" => $result->getPayment()->getId()]);
        } else {
            $errors = $api_response->getErrors();
            return response()->json(["status" => 200,"message" => "payment faild"]);
        }
    }

    public function socialLiteLogin($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider){
        $userSocial =   Socialite::driver($provider)->stateless()->user();
        $user = auth()->user();
       // echo "<pre>";print_r($userSocial);die;
        $savedata =[
            'user_id' => $user->id,
            'provider_name' => $provider,
            'provider_id' => $userSocial->id,
            'user_name' => $userSocial->name,
            'user_email' => $userSocial->email,
            'token' => $userSocial->token,
            'refreshToken' => $userSocial->refreshToken,
        ];

        SocialConnections::updateOrCreate(['provider_id' =>$userSocial->id,'provider_name'=>$provider],$savedata);
        return redirect('/')->with("success", "changed successfully!");
    }
}
