@extends('backoffice.layout')
@section('title') Dashboard @endsection
@section('css') @endsection
@section('dashactive') class="active" @endsection
@section('headtitle') Tableau de bord @endsection
@section('breadcrumb')
    <li class="active" >
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        {{$nbcontacts}}
                    </h3>

                    <p>Contacts</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a  href="{{ route('backoffice.contact.index') }}" class="small-box-footer">
                    Consulter <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>
                        {{$nbdemandes}}
                    </h3>

                    <p>Demandes d'inscription</p>
                </div>
                <div class="icon">
                    <i class="ion-social-usd-outline"></i>
                </div>
                <a href="{{ route('backoffice.demande.index') }}" class="small-box-footer">
                    Consulter <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>
@endsection
@section('js') @endsection
