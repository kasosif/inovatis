@extends('backoffice.layout')
@section('title') Liste des contacts @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('backoffice/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- iziToast alert -->
    <link rel="stylesheet" type="text/css" href="{{asset('backoffice/bower_components/iziToast/dist/css/iziToast.min.css')}}">
@endsection
@section('contactsopen') menu-open @endsection
@section('displaycontacts') style="display:block;" @endsection
@section('listecontactsactive') class="active" @endsection
@section('headtitle') Liste des contacts @endsection
@section('breadcrumb')
    <li>
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
    <li class="active" >
        <a href="{{route('backoffice.contact.index')}}">
            <i class="fa fa-sticky-note"></i> Liste des contacts
        </a>
    </li>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        @if($contacts->count() == 0)
                        <div class="alert alert-warning">
                            Aucun Contact trouvé...
                        </div>
                        @else
                        <div class="box-body table-responsive no-padding">
                            <table id="contacttable" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Réference</th>
                                    <th>Nom Complet</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Pays</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->nom }}</td>
                                    <td>{{ $contact->telephone }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->pays }}</td>
                                    <td>
                                        <button onclick="showContact({{$contact->id}})" class="btn btn-success btn-sm"><i class="fa fa-eye fa-fw"> </i>Consulter Contact</button>
                                        <button class="btn btn-danger btn-sm" value="show" onclick="toggleSupp({{ $contact->id }})"><i class="fa fa-trash">
                                            </i> Supprimer Contact
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
    <div class="modal fade" tabindex="-1" role="dialog" id="details_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Details du Contact  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="details_body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-danger fade" id="modalsupp">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Operation de Suppression</h4>
                </div>
                <div class="modal-body">
                    <h3>Etes vous sûr de Supprimer ce Contact !!?</h3>
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
        $('#contacttable').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'pageLength': 5
        });
        function toggleSupp(id) {
            $('#deletelink').attr('action','{{ route('backoffice.contact.destroy') }}'+'/'+id);
            $("#modalsupp").modal('show');
        }
        function showContact(identifiant) {
            var url = "{{ route('backoffice.contact.show') }}" + '/' +identifiant;
            $.ajax({
                url: url,
                method: "GET",
                success: function(response) {
                    $("#details_body").html(response);
                    $("#details_modal").modal('show');
                },
                error: function(erreur) {
                    $("#details_body").html(erreur);
                    $("#details_modal").modal('show');
                }
            })
        }
    </script>
@endsection
