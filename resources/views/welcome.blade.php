@extends('layouts.layout')
@section('content')
<div id="content">
    <canvas id="c"></canvas>
    <div class="ui-menu">
        <div class="ui-menu-header">
            <span>Reports</span>
        </div>
        <ul id="ui-navigation" class="ui-navigation">
            <li id="showReport">
                <div>Turbine 1</div>
            </li>
        </ul>
        <div id="report"></div>
        <div class="ui-menu-footer">
            <img src="./assets/img/footer-logo.svg" alt="logo">
        </div>
    </div>
</div>
@endsection('content')