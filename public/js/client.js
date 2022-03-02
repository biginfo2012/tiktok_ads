var stripe = Stripe('pk_test_51KXRutG66jKF9JhDmwmmC2oUims5myDA4Sjvm6BsAUDrP0Cp0z1wuchuND7Uir2f8ex1o0uLOrnvf0I3dvzJJ1XQ005sueam8B');
var elements = stripe.elements();
var style = {
    base: {
        iconColor: '#000000',
        color: '#090101',
        lineHeight: '38px',
        fontWeight: 300,
        fontFamily: 'Helvetica Neue',
        fontSize: '16px',

        '::placeholder': {
            color: '#8d9195',
        },
    },
};
var card = elements.create('card', {style: style});
card.mount('#card-element');

function setOutcome(result) {
    var errorElement = document.querySelector('.error');
    errorElement.classList.remove('visible');

    if (result.error) {
        errorElement.textContent = result.error.message;
        errorElement.classList.add('visible');
    }
}

card.on('change', function(event) {
    setOutcome(event);
});

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the customer that there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});

function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}
