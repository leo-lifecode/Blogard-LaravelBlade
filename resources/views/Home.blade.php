<x-layout>
<div class="max-w-[1400px] m-auto block ">
    <div class="flex justify-evenly bg-slate-100">
        <main class="md:w-[728px] flex flex-col h-max">
            <x-main-nav></x-main-nav>
            <article class="grid grid-cols-3 ps-8 gap-x-6 gap-y-8 mt-5">
                <x-card-article></x-card-article>
                <x-card-article></x-card-article>
                <x-card-article></x-card-article>
                <x-card-article></x-card-article>
            </article>
        </main>
     <x-aside></x-aside>
    </div>
</div>
</x-layout>