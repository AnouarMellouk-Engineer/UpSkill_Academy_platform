@php
   $pages = [
        'Home',
        'Courses',
        'About Us',
        'Contact'
    ];

   $medias = [
        '<svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
        '<svg class="w-5 h-5"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>',
        '<svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube-icon lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>',
        '<svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>'
   ]
@endphp

<nav class=" flex justify-between items-center px-5 py-7  shadow-sm md:py-4 md:px-7 " id="navigation">
    <h1><a href="#" class=" text-2xl text-blue-500 font-bold ">Courses<span class=" text-amber-300">Name</span></a></h1>
    <!-- absolute nav -->
    <div class="absolute top-0 right-0  z-40 bg-white md:static" >
            <div class="fixed top-0 z-40 translate-x-full h-[100vh] w-1/2 bg-white shadow-md  px-3 py-5  duration-300  opacity-100 md:static md:translate-x-0 md:w-auto md:h-auto md:shadow-none " id='nav'>
                <div class="flex justify-between items-center pb-4 border-b-2 border-gray-700 mb-7 md:hidden">
                    <h1><a href="#" class="  text-blue-500 font-medium ">Courses<span class=" text-amber-300">Name</span></a></h1>
                    <div class="px-2 py-2 rounded-full hover:bg-gray-100 duration-300 cursor-pointer"  id="closeIcon">
                        <svg  class=" h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </div>
                </div>
                <ul class=" flex flex-col gap-8 md:flex-row  md:items-center ">
                    @foreach ($pages as $page)
                        <li class=" border-b-1 border-gray-200 cursor-pointer hover:text-amber-300 hover:border-amber-300 duration-300 hover:pl-2 font-medium md:border-none md:hover:pl-0 ">
                            <a href="#">
                                {{$page}}
                            </a>
                        </li>
                    @endforeach
                    <li class="border-b-1 border-gray-200 text-sm text-gray-500 mt-8 mb-5 font-medium md:hidden">
                        Stay In Contact
                    </li>
                </ul>
                <ul class="flex justify-between md:hidden">
                    @foreach ($medias as $media)
                        <li>
                            <a href="#" class="block py-2.5 px-2.5 hover:bg-amber-200 rounded-full duration-300 ">
                                {!!$media!!}
                            </a>
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>
    <div class=" relative lg:flex lg:items-center lg:gap-8 ">
        <div class=" flex items-center gap-6">
            <svg  class=" cursor-pointer w-5 h-5 hover:text-amber-300 duration-300" id='registreIcon' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                <path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/>
            </svg>
            <svg  class=" cursor-pointer w-5 h-5 hover:text-amber-300 duration-300 md:hidden" id='menu' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify-icon lucide-align-justify"><path d="M3 12h18"/><path d="M3 18h18"/><path d="M3 6h18"/></svg>
        </div>
        <ul class="  absolute top-10 right-5 bg-white rounded-lg  py-4 px-5 flex flex-col gap-6 items-start w-[200px] shadow-xs hidden lg:right-52" id='list'>
            <li >
                <a href="#" class=" flex items-center gap-2.5 hover:text-amber-300 duration-300">
                    <p class=" text-sm">Log In</p>
                    <svg  class=" h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in-icon lucide-log-in"><path d="m10 17 5-5-5-5"/><path d="M15 12H3"/><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/></svg>
                </a>
            </li>
            <li>
                <a href="#" class=" flex items-center gap-2.5  hover:text-amber-300 duration-300">
                    <p class=" text-sm">Sign In</p>
                    <svg class=" h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                </a>
            </li>
        </ul>
        <button class="  hidden lg:block  ">
            <a href="#" class="block lg:flex items-center gap-3 rounded-md px-4 py-3  bg-linear-to-t from-sky-500 to-indigo-500 hover:text-white duration-300 ">
                <p class=" font-medium">New Acount</p>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
            </a>
        </button>
    </div>
</nav>
