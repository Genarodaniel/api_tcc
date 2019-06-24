@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
     <!-- <div class="col-md-8">
         <div class="card">
            <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
               @endif
            </div>
         </div>
      -->
      <div class="col-md-5">
      <div class="card">
         <div class="card-header">Condomios</div>
         <div class="card-body"><div class="col-md-12">
         <button type="submit" class="btn btn-primary">Cadastrar novo</button>
         <button type="submit" class="btn btn-primary">Listar</button>
         </div>
      </div></div>
      <div class="card">
         <div class="card-header">Utensílios</div>
         <div class="card-body"><div class="col-md-12">
         <button type="submit" class="btn btn-primary">Cadastrar novo</button>
         <button type="submit" class="btn btn-primary">Listar</button>
         </div>
      </div></div>
      <div class="card">
         <div class="card-header">Horários</div>
         <div class="card-body"><div class="col-md-12">
         <label for="user_type" class="col-md-8 col-form-label text-md-right">Utensilios</label>
         <select name="horarios" id ="horarios" class="form-control"></select></br>
         <button type="submit" class="btn btn-primary">Cadastrar novo</button>
         <button type="submit" class="btn btn-primary">Listar</button>
         </div>
      </div></div>
   </div>
   
   </div>
</div>
@endsection