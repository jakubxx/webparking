@extends('layouts.full')

@section('site')

    @include('panel/components/navbar')

    <section class="dashboard-section settings">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="top">
                        <h2>
                            Ustawienia
                            <img src="{{asset('img/settings.svg')}}" alt="sex"/>
                        </h2>
                        <div class="clearfix"></div>
                        <p class="description">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="settings-box">
                        <div class="top-left">
                            <h2>
                                Twoje Dane
                                <img src="{{asset('img/employer.png')}}" alt="sex"/>
                            </h2>
                            <div class="clearfix"></div>
                            <p class="description">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                        </div>
                        <div class="clearfix"></div>

                        <form>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Imię</label>
                                        <input disabled type="text" value="{{ $user_data->first_name }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nazwisko</label>
                                        <input disabled type="text" value="{{ $user_data->second_name }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">PESEL</label>
                                        <input disabled type="text" value="{{ $user_data->pesel }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NIP</label>
                                        <input disabled type="text" value="{{ $user_data->nip }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Adres Zamieszkania</label>
                                        <input disabled type="text" value="{{ $user_data->address }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Kod Pocztowy</label>
                                        <input disabled type="text" value="{{ $user_data->post_code }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Miasto</label>
                                        <input disabled type="text" value="{{ $user_data->city }}" autocomplete="off" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    @if($user_data->sex == 0)
                                        <div class="form-group label-floating">
                                            <label class="control-label">Płeć</label>
                                            <input disabled type="text" value="Kobieta" autocomplete="off" class="form-control">
                                        </div>
                                    @else
                                        <div class="form-group label-floating">
                                            <label class="control-label">Płeć</label>
                                            <input disabled type="text" value="Mężczyzna" autocomplete="off" class="form-control">
                                        </div>
                                    @endif
                                </div>

                            </div>

                        </form>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="settings-box">
                                <div class="top-left">
                                    <h2>
                                        Zmień Hasło
                                        <img src="{{asset('img/lock.svg')}}" alt="password"/>
                                    </h2>
                                    <div class="clearfix"></div>
                                    <p class="description">
                                        Pamiętaj że, hasło powinno zawierać zróżnicowaną wielkość
                                        liter, cyfry oraz znaki specjalne. Optymalna długość hasła to 8
                                        znaków.
                                    </p>
                                </div>
                                <form id="changePasswordForm" class="change-password-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="currentPassword">Stare Hasło</label>
                                                <input type="password" autocomplete="off" class="form-control" id="currentPassword" name="currentPassword" placeholder="Stare Hasło">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="newPassword">Nowe Hasło</label>
                                                <input type="password" autocomplete="off" class="form-control" id="newPassword" name="newPassword" placeholder="Nowe Hasło">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="newPassword_confirmation">Powtórz Nowe Hasło</label>
                                                <input type="password" autocomplete="off" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation" placeholder="Powtórz Nowe Hasło">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button class="btn change-btn change-password-btn" type="submit">Zmień Hasło</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>

        $("#changePasswordForm").validate({
            rules: {
                currentPassword: {
                    required: true
                },
                newPassword: {
                    required: true,
                    minlength: 8
                },
                newPassword_confirmation: {
                    equalTo: "#newPassword"
                }
            },
            messages: {
                password: " Enter Password",
                confirmpassword: " Enter Confirm Password Same as Password"
            },
            submitHandler: function (form) {

                $.ajax({
                    type: 'post',
                    url: 'changePassword',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'current-password': $(".change-password-form input[name='currentPassword']").val(),
                        'new-password': $(".change-password-form input[name='newPassword']").val(),
                        'new-password_confirmation': $(".change-password-form input[name='newPassword_confirmation']").val()
                    },
                    success: function(data) {
                        toastr.success(data.message);
                    },
                    error: function (data) {
                        toastr.error('Hasła podane przez Ciebie się nie zgadzają');
                    }
                });
                return false;
            }
        });

    </script>

@endsection
