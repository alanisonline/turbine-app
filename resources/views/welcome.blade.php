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
                <div>
                    <div>Turbine 1</div>
                    <div class="load-anim">
                        <svg class="spinner" id="Layer_1_copy" data-name="Layer 1 copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.45 11.41">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }

                                    .cls-2 {
                                        fill: none;
                                        stroke: #fed13a;
                                        stroke-miterlimit: 10;
                                        stroke-width: 0.5px;
                                    }
                                </style>
                            </defs>
                            <path class="cls-1" d="M150.61,193.69s-3.8-2.11-2-4.09,3.14-.83,3.14-.83-2.11.18-2.58,1.2C148.45,191.56,150.61,193.69,150.61,193.69Z" transform="translate(-146.04 -183.07)" />
                            <path class="cls-1" d="M156.6,187.32s.08,4.34-2.55,3.76-2.28-2.31-2.28-2.31,1.2,1.74,2.33,1.64C155.84,190.26,156.6,187.32,156.6,187.32Z" transform="translate(-146.04 -183.07)" />
                            <path class="cls-1" d="M148.09,185.32s3.72-2.24,4.53.32-.85,3.13-.85,3.13.9-1.91.25-2.83C151,184.51,148.09,185.32,148.09,185.32Z" transform="translate(-146.04 -183.07)" />
                            <path class="cls-2" d="M151.54,183.32a5.46,5.46,0,0,0,0,10.91" transform="translate(-146.04 -183.07)" />
                            <path class="cls-2" d="M152,194.23a5.46,5.46,0,0,0,0-10.91" transform="translate(-146.04 -183.07)" />
                        </svg>
                    </div>
                </div>
            </li>
        </ul>
        <div id="report"></div>
        <div class="ui-menu-footer">
            <img src="./assets/img/footer-logo.svg" alt="logo">
        </div>
    </div>
</div>
@endsection('content')