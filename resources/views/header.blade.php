
@section('header')
<h1>Pineapple Drone</h1>
<img src="{{assert('/image_acceuil/Icone.png')}}" alt="logo" width="80" height="80">
<div class="topnav">
    <label>
        <input type="text" placeholder="Search..">
    </label>
</div>
<div id="webapp_cover">
    <div id="menu_button">
        <input type="checkbox" id="menu_checkbox">
        <label for="menu_checkbox" id="menu_label">
            <div id="menu_text_bar">Menu</div>
        </label>
    </div>
</div>
<div class="User"><img src="{{assert('resources/img/user.svg')}}" alt="logo" width="60" height="60"> </div>
<div class="Cart"><img src="{{assert('resources/img/list-interface-symbol.svg')}}" alt="logo" width="60" height="60"> </div>
@stop

@extends('layout')


