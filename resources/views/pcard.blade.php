<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-gradient bg-gradient-to-br from-theme-blue to-theme-pink flex items-center justify-center">
<div class="box-wrapper border border-gray-300 w-1/2 h-4/5 p-10 relative ">
    <div class=" w-6 h-6 border border-gray-100 rounded-full absolute top-0 left-0"></div>
    <div class=" w-10 h-10   absolute top-0 right-0">
        <div class=" w-full h-full rounded-full border border-gray-100  absolute top-0 left-0"> 
            <div class=" w-6 h-6 rounded-full border-2 border-gray-100  absolute top-5 left-5">   </div> 
        </div>
    </div>
    <!-- card section-->
    <div class="card bg-white w-full h-full rounded-2xl flex  shadow-theme-1 overflow-hidden">
       <!-- left side-->
        <div class="left-side w-1/2 bg-gradient-to-tr from-theme-pink to-theme-blue   rounded-2xl scale-105 shadow-theme-2">
            <div class="log w-20 text-white absolute left-6 top-0">   
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.013 512.013"><path d="M287.757 225.794l-31.808 8.352-88.256 23.104c-31.168 7.712-58.432 17.984-84.704 8.992-35.712-15.424-35.072-55.552-8.448-98.24C27.469 206.85-57.235 331.074 57.325 343.618c14.592 1.92 40.576-3.2 68.8-15.072l129.824-53.28 256.064-104.704-224.256 55.232z"/></svg>
            </div>
            <div class="number absolute -right-10 top-0 mt-8 bg-gradient bg-gradient-to-bl from-theme-blue to-theme-pink text-transparent bg-clip-text text-shadow">
                <span class="text-10xl font-bold leading-none font-sans">32</span>
            </div>
            <div class="shoe absolute bottom-12 left-0">
                <img src="/images/shoe.png" alt="shoekkkkkkkkkkkkkkkkkk">
            </div>
            <div class="plus w-6 h-6 relative top-44 rounded-full bg-theme-pink left-6 cursor-pointer transform hover:scale-125 transition-all p-2 ">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path></svg>
            </div>
            <div class="plus w-6 h-6 rounded-full bg-theme-blue absolute bottom-28  right-2 cursor-pointer transform hover:scale-125 transition-all p-2  ">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path></svg>
            </div>
            <div class="dotcircle w-full absolute bg-red-200 bottom-16 flex justify-center space-x-2">
                <span class="w-4 h-4 rounded-full bg-white hover:bg-gray-300 block"></span>
                <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-300 block"></span>
                <span class="w-4 h-4 rounded-full bg-gray-300 hover:bg-gray-300 block"></span>
                
            </div>
        </div>
        <!-- right side-->
,       <div class="right-side w-1/2  bg-orange-300 ">
            <div class="tex-logo flex justify-end ">
                <img src="/images/text-logo.png" alt="" >
            </div>
        </div>
    
    </div>
</div>    

</body>
</html>