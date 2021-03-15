@extends('layouts.layout')
@section('content')
<div class="container">
        <canvas id="c"></canvas>
        <div class="ui-menu">
            <div class="ui-menu-header">
                <span>TOOLS</span>
            </div>
            <ul id="ui-navigation" class="ui-navigation">
                <li class="selected"><div>Turbine 1</div></li>
            </ul>
            <div class="ui-menu-footer">
                <img src="./assets/img/footer-logo.svg" alt="logo">
            </div>
        </div>
    </div>
@endsection('content')