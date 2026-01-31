document.addEventListener('DOMContentLoaded', function () {

    $(document).on('submit', '.ajax-form', function (e) {
        e.preventDefault();
        e.stopPropagation();

        console.log('AJAX handling submit'); // MUST log

        let form = $(this);
        let url = form.data('url');

        $.ajax({
            type: 'POST',
            url: url,
            data: form.serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
 success: function (res) {
    let successMsg = form.find('.success-msg');

    successMsg
        .removeClass('d-none')
        .text(res.message);
    
    form.trigger('reset');

    setTimeout(() => {
        successMsg.addClass('d-none').text('');
    }, 4000);
},

error: function (xhr, status, error) {
    let errorMsg = form.find('.error-msg');
console.log('AJAX error response',xhr.responseText); // MUST log
    errorMsg
        .removeClass('d-none')
        .text(xhr.responseJSON?.message || 'Error occurred');

    setTimeout(() => {
        errorMsg.addClass('d-none').text('');
    }, 5000);
}

        });
    });




});
