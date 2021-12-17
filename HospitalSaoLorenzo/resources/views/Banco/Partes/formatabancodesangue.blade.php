@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <strong>Atenção!</strong> {{ $error }}
        </div>
    @endforeach
@endif

@csrf
<div class="form-group row">
    <div class="col-md-2">
        Tipo:
        <select name="tipo" class="form-control form-control-user">
            <option name="tipo" value="A+" @if (!empty($bancodesangue))  {{ $bancodesangue->tipo == 'A+' ? 'selected' : '' }} @endif> A+ </option>
            <option name="tipo" value="B+" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'B+' ? 'selected' : '' }} @endif> B+ </option>
            <option name="tipo" value="AB+" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'AB+' ? 'selected' : '' }} @endif> AB+ </option>
            <option name="tipo" value="O+" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'O+' ? 'selected' : '' }} @endif> O+ </option>
            <option name="tipo" value="A-" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'A-' ? 'selected' : '' }} @endif> A- </option>
            <option name="tipo" value="B-" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'B-' ? 'selected' : '' }} @endif> B- </option>
            <option name="tipo" value="AB-" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'AB-' ? 'selected' : '' }} @endif> AB- </option>
            <option name="tipo" value="O-" @if (!empty($bancodesangue)) {{ $bancodesangue->tipo == 'O+' ? 'selected' : '' }} @endif>O- </option>
        </select>
    </div>
    <div class="col-md-2">
        Contabilidade:
        <input type="text" class="form-control form-control-user" name="contabilidade"
            value="{{ $bancodesangue->contabilidade ?? old('contabilidade') }}"
            placeholder="Digite a quantidade de sangue em litros">

    </div>


    <div class="col-md-2">
        <br>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Confirmar
        </button>

    </div>



</div>
