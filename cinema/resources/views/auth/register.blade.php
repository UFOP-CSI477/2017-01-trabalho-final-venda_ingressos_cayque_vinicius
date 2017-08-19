@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="cpf" class="col-md-4 control-label">CPF</label>
                          <div class="col-md-6">
                            <input id="cpf" type="text" class="form-control" name="cpf" value="" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="estado" class="col-md-4 control-label">Estado</label>
                          <div class="col-md-6">
                            <select name="estado" class="form-control">
                              <option value="">Selecione...</option>
                            	<option value="AC">Acre</option>
                            	<option value="AL">Alagoas</option>
                            	<option value="AP">Amapá</option>
                            	<option value="AM">Amazonas</option>
                            	<option value="BA">Bahia</option>
                            	<option value="CE">Ceará</option>
                            	<option value="DF">Distrito Federal</option>
                            	<option value="ES">Espírito Santo</option>
                            	<option value="GO">Goiás</option>
                            	<option value="MA">Maranhão</option>
                            	<option value="MT">Mato Grosso</option>
                            	<option value="MS">Mato Grosso do Sul</option>
                            	<option value="MG">Minas Gerais</option>
                            	<option value="PA">Pará</option>
                            	<option value="PB">Paraíba</option>
                            	<option value="PR">Paraná</option>
                            	<option value="PE">Pernambuco</option>
                            	<option value="PI">Piauí</option>
                            	<option value="RJ">Rio de Janeiro</option>
                            	<option value="RN">Rio Grande do Norte</option>
                            	<option value="RS">Rio Grande do Sul</option>
                            	<option value="RO">Rondônia</option>
                            	<option value="RR">Roraima</option>
                            	<option value="SC">Santa Catarina</option>
                            	<option value="SP">São Paulo</option>
                            	<option value="SE">Sergipe</option>
                            	<option value="TO">Tocantins</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="cidade" class="col-md-4 control-label">Cidade</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="cidade" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="rua" class="col-md-4 control-label">Rua</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="rua" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="numero" class="col-md-4 control-label">Numero</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="numero" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="cep" class="col-md-4 control-label">CEP</label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="cep" value="">
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
