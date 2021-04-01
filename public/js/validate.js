$(document).ready(function() {
    $("form").validate();

    $("form").submit(function(e) {


        e.preventDefault();

        $('.champ + label +div').text('');

        $('.champ').removeClass('is-invalid');




        var formdata = new FormData(this);

        var fields = [];

        var errors = 0;

        $(".champ").each(function(index, element) {

            if ($(this).val() == "") {

                $(this).addClass("is-invalid");

                $(this).next().append("<div class='invalid-feedback'>Ce champ est requis</div>");

                errors++;

            } else fields.push($(this).val());

        });

        if (errors > 0) {

            toastr.warning("Completer tous les champs", "Mon cher!");

            fields = [];

        } else {

            $.ajax({

                type: $(this).attr('method'),

                url: $(this).attr('action'),

                data: formdata,

                contentType: false,

                cache: false,

                processData: false,

                beforeSend: function() {

                    $('button[type=submit]').attr('disabled', 'disabled').html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>Loading...");

                },

                success: function(response) {

                    if (response.status === "success") {


                        location.href = "../" + response.back;
                    }

                },

                error: function(data) {

                    $.each(data.responseJSON.errors, function(key, value) {

                        var input = 'form .champ[name=' + key + ']';

                        $(input).addClass('is-invalid');

                        $(input + " + label + div").html(value[0]);

                    });

                }

            });

        }

    });

});