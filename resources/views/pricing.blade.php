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
        border: solid 1px;
        border-radius: 1.15em;
        background: ghostwhite;
    }

    .llista__content {
        background: ghostwhite;
        text-align: left;
    }

    .llsita__list{
        list-style: none;
    }
    .llsita__list li{
        list-style: none;
        text-indent: -1.4em;
        margin: 1em 2em;
    }

    .llista__header{
        border-bottom: solid 1px;
        -webkit-border-top-left-radius: 1em;
        -webkit-border-top-right-radius: 1em;
        -moz-border-radius-topleft: 1em;
        -moz-border-radius-topright: 1em;
        border-top-left-radius: 1em;
        border-top-right-radius: 1em;

    }
    .llista__header--color1{
        background-color: #00AA00;
    }
    .llista__boto--color1{
        background-color: #00AA00;
    }

    .llista__preu{
        background-color: #7a869d;
        border: solid 2px red;
        border-radius: 2em;
        margin: 1em;
    }

    .llista__boto{
        border-top: solid 1px;
        -webkit-border-bottom-left-radius: 1em;
        -webkit-border-bottom-right-radius: 1em;
        -moz-border-radius-bottomleft: 1em;
        -moz-border-radius-bottomright: 1em;
        border-bottom-left-radius: 1em;
        border-bottom-right-radius: 1em;
    }

</style>

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="taulapreus_row">

           <div class="llista">
               <div class="llista__header llista__header--color1"> Cuota 1</div>
               <div class="llista__content">
                   <ul class="llsita__list">
                       <li>Pellentesque odio nisi, euismod in.</li>
                       <li>Host multiple sites under one account.</li>
                       <li>each with separate control panels.</li>
                       <li>Starting at</li>
                   </ul>
               </div>
               <div class="llista__preu">5€/mes</div>
               <div class="llista__boto llista__boto--color1"> <i class="fa fa-credit-card"></i> Adquirir</div>


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