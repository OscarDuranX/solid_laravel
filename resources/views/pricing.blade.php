@extends('layouts.app')

@section('htmlheader_title')
    Pricing CSS!
@endsection

<style>
    .taulapreus_row{
        display: flex;
    }

    .llista{
        flex: 1;
        text-align: center;
        margin: 0.5em;
    }

</style>

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="taulapreus_row">

           <div class="llista">
               <div class="llista__header "> Cuota 1</div>
               <div>
                   <ul>
                       <li></li>
                       <li></li>
                       <li></li>
                       <li></li>
                       <li></li>
                   </ul>
               </div>
               <div>5€/mes</div>
               <div>Adquirir</div>


           </div>
           <div class="llista">
               <div class="llista__header"> Cuota 2</div>

           </div>
           <div class="llista">
               <div class="llista__header"> Cuota 3</div>

           </div>
           <div class="llista">
               <div class="llista__header"> Cuota 4</div>

           </div>
        </div>
    </div>
@endsection