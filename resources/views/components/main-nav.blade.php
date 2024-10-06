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
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Healthy">
            <div class="font-semibold text-lg {{ $category == 'Healthy' ? 'text-blue-500' : ''}}">Healthy</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Programming">
            <div class="font-semibold text-lg {{ $category == 'Programming' ? 'text-blue-500' : ''}}">Programming</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Technology">
            <div class="font-semibold text-lg {{ $category == 'Technology' ? 'text-blue-500' : ''}}">Technology</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/News">
            <div class="font-semibold text-lg {{ $category == 'News' ? 'text-blue-500' : ''}}">News</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Society">
            <div class="font-semibold text-lg {{ $category == 'Society' ? 'text-blue-500' : ''}}">Society</div>
        </a>
    </div>
</div>