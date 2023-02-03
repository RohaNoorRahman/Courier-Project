<x-master>
    <div class="dashboard-bg  w-full">
        <div class="flex items-center justify-between mx-6 my-6 ">
            <div class="main w-full">
                <div class="flex w-full">
                    <div class="profile min-w-[482px] bg-white h-auto">
                        <div class="flex justify-between mb-2.5 py-6 px-8 border-gray-100 border-b">
                            <div class="flex justify-center items-center">
                                <div>
                                    <img src="{{'assets/img/Iconly/'}}/profilepic.svg" alt="">
                                </div>
    
                                <div class="ml-3.5">
                                    <h1 class="font-size-22 font-bold">Ratul Ahmed</h1>
                                    <h1 class="text-gray-300 text-lg">Admin</h1>
                                </div>
                            </div>
                            <button class="px-[19px] py-3.5 base-color text-white font-[500] text-[13px]">Edit Profile</button>
                        </div>
                        <div>
                            <div class="grid grid-cols-2 gap-4 p-7">
                                <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">First Name</h2>
                                    <h1 class="text-base font-bold mb-2.5">Ratul</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Last Name</h2>
                                    <h1 class="text-base font-bold mb-2.5">Ahmed</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Date of Birth</h2>
                                    <h1 class="text-base font-bold mb-2.5">27/08/2001</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Date of Joining</h2>
                                    <h1 class="text-base font-bold mb-2.5">2/09/2022</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Mobile Number</h2>
                                    <h1 class="text-base font-bold mb-2.5">017 00 000 000</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Email Address</h2>
                                    <h1 class="text-base font-bold mb-2.5">rahmed357@gmail.com</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">NID Card Number</h2>
                                    <h1 class="text-base font-bold mb-2.5">5118284645637</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Profile ID Number</h2>
                                    <h1 class="text-base font-bold mb-2.5">#924862547</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Address</h2>
                                    <h1 class="text-base font-bold mb-2.5">Bheramara, Kushtia</h1>
                                </div>
                                <div class="border-gray-100 border-b   min-w-[164px] mb-8">
                                    <h2 class="text-[13px] text-gray-600">Hub</h2>
                                    <h1 class="text-base font-bold mb-2.5">Bheramara</h1>
                                </div>
                            </div>
                            <div class="mt-2 flex justify-center mb-10">
                                <a class="py-[23px] px-[137.5px] border border-gray-300 inline-block mx-auto" href="">See All Details</a>
                            </div>
                        </div>
    
    
                    </div>
                    <div class="summery-recent-activity w-full  ml-6 ">
                        <div class="min-h-[325px] bg-white mb-[22px]">
                            <div class="flex justify-between p-[22px] ">
                                <h1 class="text-black text-lg font-bold w-[250px]">Weekly Transaction Summary</h1>
                                <div class="flex items-center min-w-max bg-white border-2 border-[#F5F5F5] ml-[11px] pr-3 ">
                                    <input class="border-none date-ranger " placeholder="last 12 month" type="date" value="Last 12 Month">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 2.75H2.5C1.67157 2.75 1 3.42157 1 4.25V13.25C1 14.0784 1.67157 14.75 2.5 14.75H11.5C12.3284 14.75 13 14.0784 13 13.25V4.25C13 3.42157 12.3284 2.75 11.5 2.75Z" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 1.25V4.25" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4 1.25V4.25" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 7.25H13" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.25 10.25H7" stroke="#5329FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 10.25V12.5" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div id="stackedChart"></div>
                            </div>
                        </div>
                        <div class="bg-white">
                            <div class="flex justify-between p-[22px]  border-gray-100 border-b">
                                <h1 class="text-black text-lg font-bold w-[250px]">Weekly Transaction Summary</h1>
                                <div class="flex items-center min-w-max bg-white border-2 border-[#F5F5F5] ml-[11px] pr-3">
                                    <input class="border-none date-ranger" placeholder="last 12 month" type="date" value="Last 12 Month">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 2.75H2.5C1.67157 2.75 1 3.42157 1 4.25V13.25C1 14.0784 1.67157 14.75 2.5 14.75H11.5C12.3284 14.75 13 14.0784 13 13.25V4.25C13 3.42157 12.3284 2.75 11.5 2.75Z" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 1.25V4.25" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4 1.25V4.25" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 7.25H13" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.25 10.25H7" stroke="#5329FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 10.25V12.5" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
    
                            <div class="p-7 ">
                                <div class="flex-col items-center ">
                                    <div class="flex items-center">
                                        <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] ">
                                            <img src="{{'assets/img/Iconly/Light'}}/clock.svg" alt="">
                                        </div>
                                        <p>Order #3256857ddd Got <span class="font-bold">Cancelled</span></p>
                                    </div>
                                    <div class="h-[20px] border-l-2 border-gray-100 ml-[18px]"></div>
                                    <div class="flex items-center">
                                        <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] ">
                                            <img src="{{'assets/img/Iconly/Light'}}/clock.svg" alt="">
                                        </div>
                                        <p>Order #3256857 Got <span class="font-bold">Cancelled</span></p>
                                    </div>
                                    <div class="h-[20px] border-l-2 border-gray-100 ml-[18px]"></div>
                                    <div class="flex items-center">
                                        <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] ">
                                            <img src="{{'assets/img/Iconly/Light'}}/clock.svg" alt="">
                                        </div>
                                        <p>Order #3256857 Got <span class="font-bold">Cancelled</span></p>
                                    </div>
                                    <div class="h-[20px] border-l-2 border-gray-100 ml-[18px]"></div>
                                    <div class="flex items-center ">
                                        <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] ">
                                            <img src="{{'assets/img/Iconly/Light'}}/clock.svg" alt="">
                                        </div>
                                        <p>Order #3256857 Got <span class="font-bold">Cancelled</span></p>
                                    </div>
                                    <div class="h-[20px] border-l-2 border-gray-100 ml-[18px]"></div>
                                    <div class="flex items-center  mb-[30px]">
                                        <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] ">
                                            <img src="{{'assets/img/Iconly/Light'}}/clock.svg" alt="">
                                        </div>
                                        <p>Order #3256857 Got <span class="font-bold">Cancelled</span></p>
                                    </div>
                                    <a class="px-4 py-[7px] base-color text-[11px] font-bold text-white" href="">view all activity</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
    


</x-master>
