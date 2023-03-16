<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
<script>
    const appId = "{{env('YOUR_SANDBOX_APPLICATION_ID')}}";
    const locationId = "{{env('YOUR_SANDBOX_LOCATION_ID')}}";

    async function initializeCard(payments) {
        const card = await payments.card();
        await card.attach('#card-container');
        return card;
    }

     // Call this function to send a payment token, buyer name, and other details
     // to the project server code so that a payment can be created with
     // Payments API
     async function createPayment(token) {
       const body = JSON.stringify({
         locationId,
         sourceId: token,
         _token : "{{csrf_token()}}"
       });
       const paymentResponse = await fetch('/payment', {
         method: 'POST',
         headers: {
           'Content-Type': 'application/json',
         },
         body,
       });
       if (paymentResponse.ok) {
           alert('payment successfully');
         return paymentResponse.json();
       }
       const errorBody = await paymentResponse.text();
       throw new Error(errorBody);
     }

     // This function tokenizes a payment method.
     // The ‘error’ thrown from this async function denotes a failed tokenization,
     // which is due to buyer error (such as an expired card). It is up to the
     // developer to handle the error and provide the buyer the chance to fix
     // their mistakes.
     async function tokenize(paymentMethod) {
       const tokenResult = await paymentMethod.tokenize();
       if (tokenResult.status === 'OK') {
         return tokenResult.token;
       } else {
         let errorMessage = `Tokenization failed-status: ${tokenResult.status}`;
         if (tokenResult.errors) {
           errorMessage += ` and errors: ${JSON.stringify(
             tokenResult.errors
           )}`;
         }
         throw new Error(errorMessage);
       }
     }

     // Helper method for displaying the Payment Status on the screen.
     // status is either SUCCESS or FAILURE;
     function displayPaymentResults(status) {
       const statusContainer = document.getElementById(
         'payment-status-container'
       );
       if (status === 'SUCCESS') {
         statusContainer.classList.remove('is-failure');
         statusContainer.classList.add('is-success');
       } else {
         statusContainer.classList.remove('is-success');
         statusContainer.classList.add('is-failure');
       }

       statusContainer.style.visibility = 'visible';
     }


    document.addEventListener('DOMContentLoaded', async function () {
        if (!window.Square) {
            throw new Error('Square.js failed to load properly');
        }
        const payments = window.Square.payments(appId, locationId);
        let card;
        try {
            card = await initializeCard(payments);
        } catch (e) {
            console.error('Initializing Card failed', e);
            return;
        }

        async function handlePaymentMethodSubmission(event, paymentMethod) {
           event.preventDefault();

           try {
             // disable the submit button as we await tokenization and make a
             // payment request.
             cardButton.disabled = true;
             const token = await tokenize(paymentMethod);
             const paymentResults = await createPayment(token);
             displayPaymentResults('SUCCESS');

             console.debug('Payment Success', paymentResults);
           } catch (e) {
             cardButton.disabled = false;
             displayPaymentResults('FAILURE');
             console.error(e.message);
           }
         }

         const cardButton = document.getElementById(
           'card-button'
         );
         cardButton.addEventListener('click', async function (event) {
           await handlePaymentMethodSubmission(event, card);
         });

    });


</script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
