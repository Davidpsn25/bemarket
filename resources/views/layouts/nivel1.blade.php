

@extends('layouts.painel')

@section('conteudo')


    
     
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">

<h1>AFFILIATES LIST: {{ Auth::user()->name }} </h1>
<h1>NIVEL 1</h1>
<table style=  'font-size:90%' class="table table-striped">
    <tr>
        <td>ID MASTER</td>
        <td>NAME MASTER</td>
        <td>NUMERO DA CORRETORA</td>
        <td>WEEK</td>
        <td>ID AFFILIATE</td>
        <td>DATE INI AFFILIATE</td>
        <td>NAME AFFILIATE</td>
        <td>AMOUNT USD</td>
    </tr>
    <tr>
    @foreach ($valor_nv1 as $dat)
        <td>{{$dat->ID_MASTER}}</td>
        <td>{{ Auth::user()->name }}</td>
        <td>{{$dat->LOGIN_MASTER}}</td>
        <td>{{$dat->SEMANAS_NIVEL1}}</td>
        <td>{{$dat->ID_INDICADO}}</td>
        <td>{{$dat->DT_N_INDICADO}}</td>
        <td>{{$dat->NOME_INDICADO}}</td>
        <td>{{$dat->VALOR_LIQ}}</td>
    </tr>
        @endforeach
    
</table>
            </div>
          </div>
        </div>
     
    
</body>

@endsection