@extends('layouts.full')

@section('site')

    @include('panel/components/navbar')

    <section class="dashboard-section start">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <h2>
                        Witaj, {{{ $user_data->first_name }}} {{{ $user_data->second_name }}}
                    </h2>
                    <p class="description">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    </p>
                </div>

                <div class="col-lg-6 col-md-12">
                    <img src="{{asset('img/start.png')}}" class="img-fluid start-img" alt="logo">
                </div>

            </div>
        </div>
    </section>

@endsection




