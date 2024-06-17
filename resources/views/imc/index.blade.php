<x-layout>
    <h1>IMC</h1>
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Peso</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="peso">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Altura</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="altura">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<label>RESULTADO</label><br>
<label>IMC: {{$resultado["imc"]}}</label><br>
<label>FAIXA: {{$resultado["faixa"]}}</label><br>
<br><br><br>
</x-layout>