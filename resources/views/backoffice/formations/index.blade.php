@extends('backoffice.layout')
@section('title') Liste des formations @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('backoffice/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- iziToast alert -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/bower_components/iziToast/dist/css/iziToast.min.css')}}">
@endsection
@section('formationsopen') menu-open @endsection
@section('displayformations') style="display:block;" @endsection
@section('listeformationsactive') class="active" @endsection
@section('headtitle') Liste des formations @endsection
@section('breadcrumb')
    <li>
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
    <li class="active" >
        <a href="{{route('backoffice.formation.index')}}">
            <i class="fa fa-calendar"></i> Liste des formations
        </a>
    </li>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        @if($formations->count() == 0)
                            <div class="alert alert-warning">
                                Aucune Formation trouvée...
                            </div>
                        @else
                            <div class="box-body table-responsive no-padding">
                                <table id="formationstable" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Réference</th>
                                        <th>Nom</th>
                                        <th>Nb spécialites</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($formations as $s)
                                        <tr>
                                            <td>{{ $s->id }}</td>
                                            <td>{{ $s->name }}</td>
                                            <td>{{ $s->specialites()->count() }} spécialité(s)</td>
                                            <td>
                                                <a href="{{route('backoffice.formation.edit',['id' => $s->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"> </i>Mise à jour</a>
                                                @if($s->type == "initiale")
                                                    <button class="btn btn-danger btn-sm" value="show" onclick="toggleSupp({{ $s->id }})"><i class="fa fa-trash">
                                                        </i> Supprimer Formation
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('modals')
    <div class="modal modal-danger fade" id="modalsupp">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Operation de Suppression</h4>
                </div>
                <div class="modal-body">
                    <h3>Etes vous sûr de Supprimer cette Formation !!?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Annuler</button>
                    <form action="" id="deletelink" method="post">
                        <input type="hidden" name="_method" value="delete">
                        @csrf
                        <button type="submit" class="btn btn-outline">Supprimer</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('js')

    <script src="{{ asset('backoffice/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backoffice/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- iziToast -->
    <script src="{{asset('backoffice/bower_components/iziToast/dist/js/iziToast.min.js')}}" type="text/javascript"></script>
    <script>
        @if ($message = Session::get('success'))
        iziToast.success({
            title: 'Success',
            message: '{{ $message }}',
            position: 'topCenter'
        });
        @endif
        $('#formationstable').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'pageLength': 5
        });
        function toggleSupp(id) {
            $('#deletelink').attr('action','{{ route('backoffice.formation.destroy') }}'+'/'+id);
            $("#modalsupp").modal('show');
        }
    </script>
@endsection
