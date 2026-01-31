@extends('user.layouts.app')

@section('title', 'About Us')

@section('content')


  
    @include('user.layouts.enquire')

    
@endsection

@section('scripts')
<script>

    $(document).ready(function() {
    $('#enquireForm').submit(function(e) {
        e.preventDefault(); // prevent page reload

        var form = $(this);
        var url = enquireSubmitUrl; // use the variable passed from Blade
        var formData = form.serialize();

        $('.loading').show();
        $('.error-message').hide();
        $('.sent-message').hide();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            success: function(response) {
                $('.loading').hide();
                $('.sent-message').show();
                form.trigger("reset"); // clear the form
            },
            error: function(xhr) {
                $('.loading').hide();
                if(xhr.status === 422){
                    var errors = xhr.responseJSON.errors;
                    var errorHtml = '';
                    $.each(errors, function(key, value){
                        errorHtml += value[0] + '<br>';
                    });
                    $('.error-message').html(errorHtml).show();
                } else {
                    $('.error-message').html('Something went wrong. Try again!').show();
                }
            }
        });
    });
});

</script>
@endsection