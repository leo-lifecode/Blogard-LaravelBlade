<?php
use Carbon\Carbon;

$date = Carbon::today();
$dateToday = $date->translatedFormat('l');
$dateMonth = $date->translatedFormat('F d, Y');
?>

<div class=" py-5 ps-8 border-b-2 border-slate-300 flex items-center text-slate-400 font-medium w-full scrulbar {{ $class ?? ''}}">
    <div class="pe-8 border-r-2 border-slate-300">
        <div class="font-semibold text-2xl text-black">{{$dateToday}}</div>
        <div>{{$dateMonth}}</div>
    </div>
    @foreach ($categories as $category) 
        <div class="py-5 px-8 flex shrink-0">
            <a href="/category/{{ $category->slug }}">
                <div class="font-semibold text-lg {{ request()->is('category/' . $category->slug) ? 'text-blue-500' : ''}}">{{ $category->name }}</div>
            </a>
        </div>
    @endforeach
</div>