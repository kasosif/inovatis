<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Inovatis - reprendre la préinscription ">
    <meta name="description" content="Inovatis - reprendre la préinscription ">
    <title>Inovatis - reprendre la préinscription </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css">
    <style>
        body {
            background-color: #ffffff;
            color: #444444;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 300;
            margin: 0;
            padding: 0;
        }
        .wizard-content-left {
            background-blend-mode: darken;
            background-color: rgba(0, 0, 0, 0.45);
            background-image: url("{{asset('images/form-wizard-bg-2.webp')}}");
            background-position: center center;
            background-size: cover;
            height: 100vh;
            padding: 30px;
        }
        .wizard-content-left h1 {
            color: #ffffff;
            font-size: 38px;
            font-weight: 600;
            padding: 12px 20px;
            text-align: center;
        }

        .form-wizard {
            color: #888888;
            padding: 30px;
        }
        .form-wizard .wizard-form-radio {
            display: inline-block;
            margin-left: 5px;
            position: relative;
        }
        .form-wizard .wizard-form-radio input[type="radio"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            background-color: #dddddd;
            height: 25px;
            width: 25px;
            display: inline-block;
            vertical-align: middle;
            border-radius: 50%;
            position: relative;
            cursor: pointer;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:focus {
            outline: 0;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:checked {
            background-color: #1b2e51;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: #ffffff;
            border-radius: 50%;
            left: 1px;
            right: 0;
            margin: 0 auto;
            top: 8px;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
            content: "";
            display: inline-block;
            webkit-animation: click-radio-wave 0.65s;
            -moz-animation: click-radio-wave 0.65s;
            animation: click-radio-wave 0.65s;
            background: #000000;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
            border-radius: 50%;
        }
        .form-wizard .wizard-form-radio input[type="radio"] ~ label {
            padding-left: 10px;
            cursor: pointer;
        }
        .form-wizard .form-wizard-header {
            text-align: center;
        }
        .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
            background-color: #1b2e51;
            color: #ffffff;
            display: inline-block;
            min-width: 100px;
            min-width: 120px;
            padding: 10px;
            text-align: center;
        }
        .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
            color: #ffffff;
            opacity: 0.6;
            text-decoration: none;
        }
        .form-wizard .wizard-fieldset {
            display: none;
        }
        .form-wizard .wizard-fieldset.show {
            display: block;
        }
        .form-wizard .wizard-form-error {
            display: none;
            background-color: #d70b0b;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 2px;
            width: 100%;
        }
        .form-wizard .form-wizard-previous-btn {
            background-color: #b4a169;
        }
        .form-wizard .form-control {
            font-weight: 300;
            height: auto !important;
            padding: 15px;
            color: #888888;
            background-color: #f1f1f1;
            border: none;
        }
        .form-wizard .form-control:focus {
            box-shadow: none;
        }
        .form-wizard .form-group {
            position: relative;
            margin: 25px 0;
        }
        .form-wizard .wizard-form-text-label {
            position: absolute;
            left: 10px;
            top: 16px;
            transition: 0.2s linear all;
        }
        .form-wizard .focus-input .wizard-form-text-label {
            color: #d65470;
            top: -18px;
            transition: 0.2s linear all;
            font-size: 12px;
        }
        .form-wizard .form-wizard-steps {
            margin: 30px 0;
        }
        .form-wizard .form-wizard-steps li {
            width: 20%;
            float: left;
            position: relative;
        }
        .form-wizard .form-wizard-steps li::after {
            background-color: #f3f3f3;
            content: "";
            height: 5px;
            left: 0;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            border-bottom: 1px solid #dddddd;
            border-top: 1px solid #dddddd;
        }
        .form-wizard .form-wizard-steps li span {
            background-color: #dddddd;
            border-radius: 50%;
            display: inline-block;
            height: 40px;
            line-height: 40px;
            position: relative;
            text-align: center;
            width: 40px;
            z-index: 1;
        }
        .form-wizard .form-wizard-steps li:last-child::after {
            width: 50%;
        }
        .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
            background-color: #1b2e51;
            color: #ffffff;
        }
        .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
            background-color: #1b2e51;
            left: 50%;
            width: 50%;
            border-color: #1b2e51;
        }
        .form-wizard .form-wizard-steps li.activated::after {
            width: 100%;
            border-color: #1b2e51;
        }
        .form-wizard .form-wizard-steps li:last-child::after {
            left: 0;
        }
        .form-wizard .wizard-password-eye {
            position: absolute;
            right: 32px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        @keyframes click-radio-wave {
            0% {
                width: 25px;
                height: 25px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                width: 60px;
                height: 60px;
                margin-left: -15px;
                margin-top: -15px;
                opacity: 0.0;
            }
        }
        @media screen and (max-width: 767px) {
            .wizard-content-left {
                height: auto;
            }
        }

    </style>
</head>
<body>
<section class="wizard-section">
    <div class="row no-gutters">
        <div class="col-lg-6 col-md-6">
            <div class="wizard-content-left d-flex justify-content-center align-items-center">
                <h1>Formulaire de Pré-inscription</h1>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-wizard">
                <form action="" method="post" role="form">
                    @csrf
                    <fieldset class="wizard-fieldset show">
                        <h5>Reprendre Inscription / Voir Etat</h5>
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger">

                                    {{$message}}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="email" class="form-control wizard-required" id="email" name="email" required>
                            <label for="email" class="wizard-form-text-label">Email Utilisé*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="form-wizard-submit float-right">Valider</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.js"></script>
<script>
    function loader() {
        return Swal.fire({
            title: 'Chargement...',
            html: 'Veuillez Patientez',
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading();
            }
        });
    }
    jQuery(document).ready(function() {
        // click on next button
        jQuery('.form-wizard-next-btn').click(function() {
            var swal = loader();
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function(){
                var thisValue = jQuery(this).val();

                if( thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                }
                else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if( nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show","400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
                jQuery(document).find('.wizard-fieldset').each(function(){
                    if(jQuery(this).hasClass('show')){
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                            if(jQuery(this).attr('data-attr') == formAtrr){
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                            }else{
                                jQuery(this).removeClass('active');
                            }
                        });
                    }
                });
            }
            swal.close()
        });
        jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();
                if( thisValue == "" ) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                }
                else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });
        // focus on input field check empty or not
        jQuery(".form-control").on('focus', function(){
            var tmpThis = jQuery(this).val();
            if(tmpThis == '' ) {
                jQuery(this).parent().addClass("focus-input");
            }
            else if(tmpThis !='' ){
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function(){
            var tmpThis = jQuery(this).val();
            if(tmpThis == '' ) {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            }
            else if(tmpThis !='' ){
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
    });

</script>
</body>
</html>
