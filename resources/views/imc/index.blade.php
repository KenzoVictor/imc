<x-layout>
    <h1 class="centertxt">IMC</h1>
    <form method="post" action="/imc/calcularImc">
      @csrf
  <div class="form-group"
  >
    <label for="exampleInputEmail1">Peso</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="peso" name="peso">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Altura</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="altura" name="altura">
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-primary centerThing">Calcular</button>
  </div>
</form>

<label >RESULTADO</label><br>
<label>IMC: {{$resultado["imc"]}}</label><br>
<label>FAIXA: {{$resultado["faixa"]}}</label><br>
<br><br><br>
</x-layout>