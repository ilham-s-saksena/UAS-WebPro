<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoAlfa Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<section class="bg-gray-50 dark:bg-gray-900 antialiased h-screen">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 h-screen">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-gray-50">IndoAlfa Group</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl ">Adalah Sebuah Perusahaan dimana kami bekerja sama dan membuat persaingan pasar menjadi sedikit dan berkesempatan menjadi penguasa pasar! Nguhahahahahahahaaa.....</p>
            <a href="{{ url('dataBarang') }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 ">
                Lihat Data Barang
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="{{ url('dataBarang') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-gray-100 dark:hover:text-gray-900">
                Dashboard
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <div class="w-full h-full bg-center bg-contain bg-no-repeat" style="background-image: url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png')"></div>
        </div>                
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>
</html>