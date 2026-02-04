@extends('citech.layouts.app')

@section('title', 'eme')

@section('content')

<section>
    <div class="container">
        <div class="rectangle">
            <a href="Emepsa">EME Comportemental</a>
        </div>
        <div class="rectangle">
            <a href="eme_generaliste">EME Complexité</a>
        </div>
        <div class="rectangle">
            <a href="eme_logistique">EME Logistique</a>
        </div>
        <div class="rectangle">
            <a href="eme_finance">EME Finance</a>
        </div>
        <div class="rectangle">
            <a href="eme_data">EME Data</a>
        </div>
    </div>
</section>

<style>
    .container
    {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 70px;
    }

    .rectangle
    {
        
        width: 100%;
        height: 60px;
        margin: 8px;
        background-color: #f24c21;
        border: solid black;
        border-radius: 20px;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        font-weight: 800;
        color: #fff;
    }

    a:hover
    {
        color: gray;
        transition: ease-in 0.5s;
    }
</style>
 
@endsection