@extends('backoffice.layout')
@section('title') Modifier une Formation @endsection
@section('css')
@endsection
@section('formationsopen') menu-open @endsection
@section('displayformations') style="display:block;" @endsection
@section('listeformationsactive') class="active" @endsection
@section('headtitle') Modifier une Formation @endsection
@section('breadcrumb')
    <li>
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
    <li>
        <a href="{{route('backoffice.formation.index')}}">
            <i class="fa fa-graduation-cap"></i> Liste des formations
        </a>
    </li>
    <li class="active" >
        <a href="{{route('backoffice.formation.edit',['id' => $formation->id])}}">
            Modifier une Formation
        </a>
    </li>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="container-fluid">
                <div class="form-wizard">
                    <form action="{{route('backoffice.formation.update',['id' => $formation->id])}}" method="post" role="form">
                        @csrf
                        @method('PUT')
                        <fieldset class="wizard-fieldset">
                            <legend>Infos Formation</legend>
                            <div class="form-group">
                                <label for="name">Nom*</label>
                                <input @if($formation->type == "continue") disabled @endif type="text" value="{{$formation->name}}" class="form-control" required id="name" name="name" />
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <legend>Spécialités</legend>
                            <div class="specialites-container">
                                @foreach($formation->specialites as $s)
                                    <div data-id="hs-{{$loop->iteration}}" class="f_spec">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="house_name_service_{{$loop->iteration}}">Nom de la spécialité</label>
                                                    <input required type="text" class="form-control form-control-sm servicename" value="{{$s->name}}" name="specialites[{{$loop->iteration}}][name]" id="house_name_service_{{$loop->iteration}}" data-id="{{$loop->iteration}}" />
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="margin-top: 22px; font-size: 25px;">
                                                <a style="cursor: pointer;" class="text-center" onclick="deleteService('{{$loop->iteration}}')"><i style="color:red;" class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-center add-service-conainer" style="padding-bottom: 15px;">
                                <button type="button" onclick="addService()" class="btn btn-primary">Ajouter Spécialité</button>
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <a href="{{route('backoffice.formation.index')}}" class="btn btn-primary">Retour</a>
                                    <button type="submit" class="btn btn-success">Modifier</button>
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
    <script>
        function addService() {
            var id = $('.f_spec:last').attr('data-id');
            var count = 1;
            if(id) {
                id = id.split('-')[1];
                count = parseInt(id) + 1;
                $('.f_spec:last').after(`<div data-id="hs-` + count + `" class="f_spec"> <div class="row"> <div class="col-md-10"> <div class="form-group"> <label for="house_name_service_` + count + `">Nom de la spécialité</label> <input required type="text" class="form-control form-control-sm servicename" name="specialites[` + count + `][name]" id="house_name_service_` + count + `" data-id="` + count + `" /> </div> </div> <div class="col-md-2" style="margin-top: 22px; font-size: 25px;"> <a style="cursor: pointer;" class="text-center" onclick="deleteService(` + count + `)"><i style="color: red" class="fa fa-trash"></i></a> </div> </div> </div>`);
            } else {
                $('.specialites-container').append(`<div data-id="hs-` + count + `" class="f_spec"> <div class="row"> <div class="col-md-10"> <div class="form-group"> <label for="house_name_service_` + count + `">Nom de la spécialité</label> <input required type="text" class="form-control form-control-sm servicename" name="specialites[` + count + `][name]" id="house_name_service_` + count + `" data-id="` + count + `" /> </div> </div> <div class="col-md-2" style="margin-top: 22px; font-size: 25px;"> <a style="cursor: pointer;" class="text-center" onclick="deleteService(` + count + `)"><i style="color: red" class="fa fa-trash"></i></a> </div> </div> </div>`);
            }
        }

        function deleteService(el) {
            $('div[data-id="hs-' + el + '"]').remove();
        }
    </script>
@endsection
