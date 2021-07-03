# Demande d'inscription : <br>

Cher <b>{{$data['prenom']}} {{$data['nom']}}</b>, <br>

<p>Nous sommes heureux de vous informez que votre demande de préinscription de la date "{{date('d M, Y', strtotime($data['created_at']))}}"
à été acceptée ! </p>

Plateforme {{ config('app.name') }}
