@extends('paw-user.masternofooter')

@php
use Carbon\Carbon;
@endphp

@section('title', 'Paw Care - Activity')

@push('aditional-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/style-pawcare.css">
@endpush

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="font-weight-bold mb-4">My Activity</h3>
            <div class="card">
                <div class="card-body">
                    @foreach($appointments as $appointment)
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="font-weight-bold mb-0">{{$appointment->nama_klinik}}</h5>
                                    <p class="mb-0">{{auth()->user()->name}}'s {{ $appointment->kategori }}</p>
                                    <p class="font-weight-bold mb-0">{{ $appointment->complaint }}</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="text-muted">
                                                <i class="material-icons" style="font-size: 14px;">calendar_today</i>
                                                <small>{{ $appointment->jadwal }}, {{Carbon::parse($appointment->tanggal_jadwal)->isoFormat('dddd, DD MMMM YYYY')}}</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right">
                                        <span class="badge {{ $appointment->status === 'Approved' ? 'badge-success' : 'badge-warning' }}">
                                            {{ $appointment->status }}
                                        </span>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="text-muted">
                                                    <i class="material-icons" style="font-size: 14px;">calendar_today</i>
                                                    <small>{{Carbon::parse($appointment->waktu_pembuatan)->format('H:i')}},</small>
                                                </span>
                                                <br>
                                                <span class="text-muted">
                                                    <small>{{Carbon::parse($appointment->tanggal_pembuatan)->isoFormat('dddd, DD MMMM YYYY')}}</small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('aditional-js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush