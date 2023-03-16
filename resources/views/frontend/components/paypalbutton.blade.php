<div id="smart-button-container" style="display:none;">
    <div style="text-align: center;">
    <input type="hidden" id="plan-amount" value="0" />
    <input type="hidden" id="plan-id" value="0" />
    <div id="paypal-button-container"></div>
    </div>
</div>

@push('scripts')
<script src="https://www.paypal.com/sdk/js?client-id=AUSm0y3tlS53X3ck5_Vo7aqHmJQwgfuytLKoUD-6Ef7rdiaCuDTPEEk1t6boZ0MQl8PCJOSEvAar6AiG&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    $( "body .GetCredits" ).on( "click", function() {
        $('#smart-button-container').css('display','block');
        $('#plan-amount').val($(this).data('amount'));
        $('#plan-id').val($(this).data('plan'));
    });

  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',

      },

      createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{"reference_id":$('#plan-id').val(),"amount":{"currency_code":"USD","value":$('#plan-amount').val()}}]
        });
      },

      onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {

          // Full available details
          console.log('Capture result', orderData, 'stringify',orderData);

          saveOrder(JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          //actions.redirect("{{route('userProfile')}}");
          location.reload();
        });
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();

    function saveOrder(data) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('createCoinOrder')}}",
            type: 'POST',
            data: {
                order:data
            },
            dataType: 'json',
            success: function (data) {
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
</script>
@endpush
