@extends('layouts.full')

@section('site')

    @include('panel/components/navbar')

    <section class="dashboard-section start">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <div class="top">
                        <h2>
                            Parking
                            <img src="{{asset('img/parking.png')}}" alt="sex"/>
                        </h2>
                        <div class="clearfix"></div>
                        <p class="description">
                            Poniższa tabela pokazuje Twoich pacjentów oraz ich dane. Pamiętaj, że są to wrażliwe dane
                            osobowe. Chroń dane swoich pacjentów, nie pozwól by dostęp do konta visiter.pl miały osoby
                            trzecie.
                        </p>
                    </div>

                    @if($count_parkings > 0)
                    <div class="table-responsive">
                        <table class="table table-striped patient-table">
                        <thead>
                        <tr>
                            <th>@sortablelink('start_hour', 'Godzina wjazdu')</th>
                            <th>@sortablelink('start_img', 'Zdjęcie wjazdu')</th>
                            <th>@sortablelink('end_hour', 'Godzina wyjazdu')</th>
                            <th>@sortablelink('end_img', 'Zdjęcie wyjazdu')</th>
                            <th>@sortablelink('registration', 'Rejestracja')</th>
                            <th class="text-right">Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{ csrf_field() }}
                        @foreach($parkings_list as $key => $parking)
                                <tr class="parking{{ $parking->id }}">
                                <td>{{ $parking->start_hour }}</td>
                                <td><img src="{{ $parking->start_img }}" alt="img" class="table-img" data-img="{{ $parking->start_img }}"/></td>
                                <td>{{ $parking->end_hour }}</td>
                                <td><img src="{{ $parking->end_img }}" alt="img" class="table-img" data-img="{{ $parking->end_img }}"/></td>
                                <td>{{ $parking->registration }}</td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" data-toggle="tooltip" data-placement="top" title="Usuń" class="btn delete-parking delete-btn" data-id="{{ $parking->id }}">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>

                        {{ $parkings_list->links() }}
                    </div>
                    @else
                        <div class="empty-block">
                            <p>Nie znaleziono żadnych parkingów.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if($count_parkings > 0)
        @include('panel.modals.deleteParking')
        @include('panel.modals.viewImg')
    @endif

@endsection



