<h1>{{$titulo}}</h1>
<br>
Lista de esportes 
<br/>
@foreach($esportes as $esporte)
<ul>
    <li>{{$esporte}}</li>
</ul>
@endforeach