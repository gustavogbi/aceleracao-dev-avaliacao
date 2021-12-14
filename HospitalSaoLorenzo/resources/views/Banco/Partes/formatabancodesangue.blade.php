
@csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="tipo" value="{{ $bancodesangue->tipo ?? old('tipo')}}" 
                                    placeholder="Tipo">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"name="contabilidade" value="{{ $bancodesangue->contabilidade ?? old('contabilidade')}}"
                                    placeholder="Contabilidade">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                           Confirmar
                        </button>