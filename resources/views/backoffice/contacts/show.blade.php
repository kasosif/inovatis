<div class="row">
    <div class="col-md-6">
        <p><b>Nom</b> </p>
        <p><b>Email</b></p>
        <p><b>Telephone</b> </p>
        <p><b>Pays</b> </p>

    </div>
    <div class="col-md-6">
        <p>{{$contact->nom}}</p>
        <p>{{$contact->email}}</p>
        <p>{{$contact->telephone}}</p>
        <p>{{$contact->pays}}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <b>Programme</b> : <br>
        <p>
            {{$contact->programme}}
        </p>
    </div>
</div>
