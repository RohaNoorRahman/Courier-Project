<x-app-layout>
    <x-header></x-header>
    <div class="main-container flex">


        @include('dashboardsidebar')
            {{ $slot }}
    </div>

    <x-scripts></x-scripts>
</x-app-layout>
