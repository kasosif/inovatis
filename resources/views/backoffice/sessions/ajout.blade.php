@extends('backoffice.layout')
@section('title') Ajouter une Session @endsection
@section('css')
@endsection
@section('sessionsopen') menu-open @endsection
@section('displaysessions') style="display:block;" @endsection
@section('ajoutsessionsactive') class="active" @endsection
@section('headtitle') Ajouter une Session @endsection
@section('breadcrumb')
    <li>
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
    <li class="active" >
        <a href="{{route('backoffice.session.ajout')}}">
            <i class="fa fa-files-o"></i> Ajouter une Session
        </a>
    </li>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="container-fluid">
                <div class="form-wizard">
                    <form action="{{route('backoffice.session.store')}}" method="post" role="form" id="preregistration-form">
                        @csrf
                        <fieldset class="wizard-fieldset">
                            <legend>Infos Session</legend>
                            <div class="form-group">
                                <label for="name">Session*</label>
                                <input type="text" class="form-control" required id="name" name="name" />
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <a href="{{route('backoffice.session.index')}}" class="btn btn-primary">Retour</a>
                                    <button type="submit" class="btn btn-success">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
@endsection
