
<h1>{{$modo}} SERVICIO</h1>

<label for="Servicio"> Servicio </label>
<br> 
<input type="text" name="servicio" value="{{ isset($servicio->servicio)?$servicio->servicio:'' }}"id="servicio">
<br>
<input type="submit" value="{{$modo}} Servicio">

<a href="{{ url('/servicio')}}">Volver a servicios</a>

<br>