$(document).ready(function() {
    
    Stripe.setPublishableKey('pk_test_N6Nuq5UYPRrtoRZVP90TYCC1');
    
    var $form = $("#clientForm");

    $form.submit(function (e) {
        e.preventDefault();
        Stripe.card.createToken($form, function(status,response) {

            if (response.error) {
                $form.find(".errorMsg").remove();
                $("#clientID").prepend('<h3 class="errorMsg">ERROR'+ response.error.message +'</h3>');
            }
            else {
                var token = response.id;
                $("#clientID").prepend('<h3 class="errorMsg">'+token+'</h3>');

                $form.append($('<input type="hidden" name="stripeToken" style="display:none;" />').val(token));

                $form.get(0).submit();
            }});
    }); 
    
    // 
    
    
    
});



