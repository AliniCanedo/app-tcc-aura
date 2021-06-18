<script src="{{ asset('js/admin/jquery.mask.min.js') }}"></script>
<script>
    $(document).ready(function () {

        // jQuery Mask
        $("#zip").mask("00000-000", {selectOnFocus: true});

        var PhoneMask = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        PhoneMaskOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(PhoneMask.apply({}, arguments), options);
            }
        };

        $("#phone, .phone_mask").mask(PhoneMask, PhoneMaskOptions);
        $("#cel").mask(PhoneMask, PhoneMaskOptions);

        $('.price_mask').mask("#.##0,00", {reverse: true});

        var DocMask = function (val) {
            return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009';
        },
        DocMaskOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(DocMask.apply({}, arguments), options);
            }
        };

        $("#doc").mask(DocMask, DocMaskOptions);

        // File Input - File name
        $('.custom-file-input').on('change', function(){
            var fileName = $(this).val().split("\\").pop();
            $(this).next('.custom-file-label').html(fileName);
        })

        $('.custom-files-input').on('change', function(){
            let fileName = Array.from(this.files).map(x => x.name).join(', ')
            $(this).siblings('.custom-file-label').html(fileName);
        })

        // Password Toggler
        $('input[type="password"]').after('<i class="fal fa-eye password-toggler"></i>');
        $('.password-toggler').click(function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            var input = $(this).closest('div').find('input');
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
            } else {
                input.attr('type', 'password');
            }
        });

        // ZIP/CEP Address API
        function clear_address() {
            $('#address').val('')
            $('#number').val('')
            $('#complement').val('')
            $('#district').val('')
            $('#city').val('')
            $('#state').val('')
        }

        $('#zip').blur(function() {
            var cep = $(this).val().replace(/\D/g, '')
            if (cep != "") {
                var validacep = /^[0-9]{8}$/
                if(validacep.test(cep)) {

                    $('#address').val("...")
                    $('#district').val("...")
                    $('#city').val("...")
                    $('#state').val("...")

                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(data) {
                        if (!("erro" in data)) {
                            $('#address').val(data.logradouro)
                            $('#district').val(data.bairro)
                            $('#city').val(data.localidade)
                            $('#state').val(data.uf)
                            $('#number').focus()
                        }
                        else {
                            clear_address()
                            Swal.fire({
                                title: 'Atenção',
                                text: "O CEP digitado não foi encontrado.",
                                icon: 'warning',
                            })
                        }
                    });
                }
                else {
                    clear_address();
                    Swal.fire({
                        title: 'Atenção',
                        text: "O CEP digitado é inválido.",
                        icon: 'warning',
                    })
                }
            }
            else {
                clear_address();
            }
        })
    });
</script>
