
var bouncer = new Bouncer('[data-validate]', {
    disableSubmit: true,
    customValidations: {
        valueMismatch: function (field) {

            // Look for a selector for a field to compare
            // If there isn't one, return false (no error)
            var selector = field.getAttribute('data-bouncer-match');
            if (!selector) return false;

            // Get the field to compare
            var otherField = field.form.querySelector(selector);
            if (!otherField) return false;

            // Compare the two field values
            // We use a negative comparison here because if they do match, the field validates
            // We want to return true for failures, which can be confusing
            return otherField.value !== field.value;

        }
    },
    messages: {
        valueMismatch: function (field) {
            var customMessage = field.getAttribute('data-bouncer-mismatch-message');
            return customMessage ? customMessage : 'Please make sure the fields match.'
        }
    }
});

document.addEventListener('bouncerFormInvalid', function (event) {
    console.log(event.detail.errors);
    console.log(event.detail.errors[0].offsetTop);
    window.scrollTo(0, event.detail.errors[0].offsetTop);
}, false);

document.addEventListener('bouncerFormValid', function (event) {
    console.log(event);
    var form = event.target;
    form.submit();
}, false);
