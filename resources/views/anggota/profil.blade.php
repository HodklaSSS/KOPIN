@extends('adminlte::page')

@section('title', 'PROFILE')

@section('content')
    <div class="row">
        <div class="col-auto">
                <img src="{{asset('assets/DSC_0448.JPG')}}" alt="" height="200px" width="150px">
        </div>
        <div class="col-auto">
                NO ANGGOTA  : {{$user->id}} <br>
                NAMA    : {{$user->name}} <br>
                Alamat  : OKOK <br>
                STATUS  : ANGGOTA <br>
        </div>
        <div class="col-auto" style="margin-left: 500px">STATUS PINJAMAN</div>
    </div>
@stop
