<div class="flex p-4 border-b dc-header-broder-color items-center">
    <div class="min-w-max">
        <a href="{{route('home')}}" class="flex items-center">
            <img class="mr-4" src="{{asset('assets/img')}}/logo-icon.svg" alt="">
            <h1 class="font-bold text-2xl logo-heading">{{ config('app.name') }}</h1>
        </a>
    </div>
    <div class="w-full flex justify-end dc-nav-links">

        <form class="w-5/12">
            <div class="flex items-center">
                <form action="">
                    <div class="w-[550px]">
                        <input type="search" id="search-dropdown" class="border-none block p-2.5 w-full z-20 text-sm text-gray-300 bg-gray-100 focus:ring-blue-500 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white h-[40px]" placeholder="Search" required>
                    </div>
                    <div class="flex base-color h-[40px] px-3 items-center">
                        <img src="{{'assets/img/Iconly/Light'}}/Search.svg" class="w-[20px]" alt="">
                    </div>
                </form>
            </div>
        </form>
    </div>
    <div class="notification flex items-center ml-5">
        <div class="notiicon min-w-max ml-2 px-2  border-l-2 border-gray-100">
            <a href=""> <img src="{{'assets/img/Iconly/Light'}}/notification.svg" alt=""></a>
        </div>
        <div class="min-w-max w-10 h-10 rounded-full ">
            <a href=""><img src="{{'assets/img/Iconly/'}}/profilepic.svg" alt=""></a>
        </div>
    </div>
</div>
