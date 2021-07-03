@extends('backoffice.layout')
@section('title') Liste des Demandes @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('backoffice/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- iziToast alert -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/bower_components/iziToast/dist/css/iziToast.min.css')}}">
@endsection
@section('demandesopen') menu-open @endsection
@section('displaydemandes') style="display:block;" @endsection
@section('listedemandesactive') class="active" @endsection
@section('headtitle') Liste des demandes @endsection
@section('breadcrumb')
    <li>
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
    <li class="active" >
        <a href="{{route('backoffice.demande.index')}}">
            <i class="fa fa-sticky-note"></i> Liste des demandes
        </a>
    </li>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="container-fluid">
                <div class="row" style="margin-bottom: 2em">
                    <div class="col-md-12">
                        <a href="{{ route('backoffice.demande.ajout') }}" class="btn btn-primary" ><i class="fa fa-plus-square-o fa-fw"></i> Créer une nouvelle demande </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        @if($demandes->count() == 0)
                            <div class="alert alert-warning">
                                Aucun Demande trouvée...
                            </div>
                        @else
                            <div class="box-body table-responsive no-padding">
                                <table id="demandetable" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Réference</th>
                                        <th>Nom Complet</th>
                                        <th>Email</th>
                                        <th>Etape</th>
                                        <th>Etat</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($demandes as $demande)
                                        <tr>
                                            <td>{{ $demande->id }}</td>
                                            <td>{{ $demande->prenom }} {{ $demande->nom }}</td>
                                            <td>{{ $demande->email }}</td>
                                            <td>{{ $demande->step > 5 ? 'Finalisée' : $demande->step.' /5' }}</td>
                                            <td>
                                                @switch($demande->etat)
                                                    @case('en_cours')
                                                    <small class="label bg-primary">
                                                        En cours
                                                    </small>
                                                    @break
                                                    @case('refuse')
                                                    <small class="label bg-red">
                                                        Refusée
                                                    </small>
                                                    @break
                                                    @case('accepte')
                                                    <small class="label bg-green">
                                                        Acceptée
                                                    </small>
                                                    @break
                                                @endswitch
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-sm" onclick="toggleAccept({{$demande->id}})"><i class="fa fa-check"> </i> Accepter </button>
                                                <button class="btn btn-warning btn-sm" onclick="toggleDeny({{$demande->id}})"><i class="fa fa-close"> </i> Refuser </button>
                                                <a href="{{route('backoffice.demande.edit',['id' => $demande->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"> </i>Mise à jour</a>
                                                <button class="btn btn-danger btn-sm" value="show" onclick="toggleSupp({{ $demande->id }})"><i class="fa fa-trash">
                                                    </i> Supprimer
                                                </button>
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
                    <h3>Etes vous sûr de Supprimer cette Demande !!?</h3>
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
    <div class="modal modal-success fade" id="modalaccept">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Acceptation</h4>
                </div>
                <div class="modal-body">
                    <h3>Etes vous sûr d'accepter cette Demande !!?</h3>
                    <small>un email d'acceptation sera envoyée</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Annuler</button>
                    <form action="" id="acceptlink" method="post">
                        <input type="hidden" name="_method" value="put">
                        @csrf
                        <button type="submit" class="btn btn-outline">Accepter</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal modal-warning fade" id="modaldeny">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Refus</h4>
                </div>
                <div class="modal-body">
                    <h3>Etes vous sûr de refuser cette Demande !!?</h3>
                    <small>un email de refus sera envoyée</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Annuler</button>
                    <form action="" id="denylink" method="post">
                        <input type="hidden" name="_method" value="put">
                        @csrf
                        <button type="submit" class="btn btn-outline">Refuser</button>
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
        $('#demandetable').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'pageLength': 5
        });
        function toggleSupp(id) {
            $('#deletelink').attr('action','{{ route('backoffice.demande.destroy') }}'+'/'+id);
            $("#modalsupp").modal('show');
        }
        function toggleAccept(id) {
            $('#acceptlink').attr('action','{{ route('backoffice.demande.accept') }}'+'/'+id);
            $("#modalaccept").modal('show');
        }
        function toggleDeny(id) {
            $('#denylink').attr('action','{{ route('backoffice.demande.deny') }}'+'/'+id);
            $("#modaldeny").modal('show');
        }
    </script>
@endsection
