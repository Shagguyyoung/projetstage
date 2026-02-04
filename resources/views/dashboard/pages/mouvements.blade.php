@extends('dashboard.layouts.dashboard')

@section('title', 'Mouvement')

@section('content')
<div class="p-6 space-y-6">

    <!-- Boutons actions en <a> -->
    <div class="flex flex-wrap items-center gap-4">

    <a href="{{ route('Re-inscrit', ['ecole' => request('ecole')]) }}"
       class="bg-[rgb(179,28,121)] hover:bg-[rgba(153, 39, 109, 1)] text-white font-medium px-4 py-2 rounded-lg shadow-sm transition inline-block">
        Ré-inscription {{ $ecoleName ?? '' }}
    </a>

    <a href="{{ route('Report', ['ecole' => request('ecole')]) }}"
       class="bg-[rgb(179,28,121)] hover:bg-[rgba(153, 39, 109, 1)] text-white font-medium px-4 py-2 rounded-lg shadow-sm transition inline-block">
        Report {{ $ecoleName ?? '' }}
    </a>

    <a href="{{ route('Abandon', ['ecole' => request('ecole')]) }}"
       class="bg-[rgb(179,28,121)] hover:bg-[rgba(153, 39, 109, 1)] text-white font-medium px-4 py-2 rounded-lg shadow-sm transition inline-block">
        Abandon {{ $ecoleName ?? '' }}
    </a>

</div>



</div>
@endsection
