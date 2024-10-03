<?php
use Carbon\Carbon;

$date = Carbon::today();
$dateToday = $date->translatedFormat('l');
$dateMonth = $date->translatedFormat('F d, Y');
?>

<div class=" py-5 ps-8 border-b-2 border-slate-300 flex items-center text-slate-400 font-medium w-full scrulbar">
    <div class="pe-8 border-r-2 border-slate-300">
        <div class="font-semibold text-2xl text-black">{{$dateToday}}</div>
        <div>{{$dateMonth}}</div>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Healthy">
            <div class="font-semibold text-lg">Healthy</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Programming">
            <div class="font-semibold text-lg">Programming</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Technology">
            <div class="font-semibold text-lg">Technology</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/News">
            <div class="font-semibold text-lg">News</div>
        </a>
    </div>
    <div class="py-5 px-8 flex shrink-0">
        <a href="/category/Society">
            <div class="font-semibold text-lg">Society</div>
        </a>
    </div>
</div>