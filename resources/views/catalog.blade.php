<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <!-- ini penting -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- end ini penting -->

    <title>NARACADEMY</title>
  </head>
  <body>
    <div class="container mx-auto">
      <div class="flex items-center gap-x-12 py-10">
        <div id="logo" class="flex flex-col">
          <span class="font-extrabold uppercase text-3xl text-secondary"
            >NARACADEMY</span
          >
          <span class="text-grey tracking-wider">Build Future Career Today</span>
        </div>
        <span
          class="border-r border-gray-100 h-14 w-[1px] relative flex"
        ></span>
        <ul class="flex gap-x-8 mr-auto">
          <li class="">
            <a href="{{ route('landing') }}" class="text-navy ">Home</a>
          </li>
          <li class="">
            <a href="{{ route('catalog') }}" class="text-purple font-bold">Catalog</a>
          </li>
          <li class="">
            <a href="https://stingy-droplet-bb0.notion.site/Learn-From-Expert-Become-Pro-086e766248bf4e2c99667e4fcf697bb0" class="text-navy">Pricing</a>
          </li>
          <li class="">
            <a href="#" class="text-navy">About</a>
          </li>
        </ul>

        @if(Auth::user())
        <ul class="flex gap-x-4">
          <li class="">
            <a href="{{ route('dashboard') }}" class="bg-secondary text-white rounded-full py-4 px-10"
              >Hello, {{ Auth::user()->name }}</a
            >
          </li>
        </ul>
        @endauth
        @guest
        <ul class="flex gap-x-4">
          <li class="">
            <a href="{{ route('dashboard') }}" class="bg-secondary text-white rounded-full py-4 px-14"
              >Login</a
            >
          </li>
          <li class="">
            <a href="{{ route('register') }}" class="bg-primary text-white rounded-full py-4 px-10"
              >Create Account</a
            >
          </li>
        </ul>
        @endguest

      </div>
    </div>
    <hr class="border-gray-100 mb-[70px]" />
    <div class="container mx-auto mb-[70px]">
        <div class="flex flex-col">
          <h2 class="text-3xl font-extrabold mb-5">What's Popular</h2>
          <div class="grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
            <div class="flex flex-col p-[10px] rounded-[30px] bg-soft-purple overflow-hidden relative">
                <div class="w-full relative mb-6">
                  <span
                    class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-shadow/20 blur-[100px] w-[75%] h-40"
                  ></span>
                </div>
                <div class="mb-3 px-6">
                  <p>
                      Learn All
                  </p>
                </div>
                <h6 class="font-semibold text-lg px-6 mb-6 pr-20">
                    Website Development
                </h6>
                <a href="#" class="absolute inset-0 z-30"><!-- link here --></a>
            </div>
            <div class="flex flex-col p-[10px] rounded-[30px] bg-soft-purple overflow-hidden relative">
                <div class="w-full relative mb-6">
                  <span
                    class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-shadow/20 blur-[100px] w-[75%] h-40"
                  ></span>
                </div>
                <div class="mb-3 px-6">
                  <p>
                      Learn All
                  </p>
                </div>
                <h6 class="font-semibold text-lg px-6 mb-6 pr-20">
                    Product Design
                </h6>
                <a href="#" class="absolute inset-0 z-30"><!-- link here --></a>
            </div>
            <div class="flex flex-col p-[10px] rounded-[30px] bg-soft-purple overflow-hidden relative">
                <div class="w-full relative mb-6">
                  <span
                    class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-shadow/20 blur-[100px] w-[75%] h-40"
                  ></span>
                </div>
                <div class="mb-3 px-6">
                  <p>
                      Learn All
                  </p>
                </div>
                <h6 class="font-semibold text-lg px-6 mb-6 pr-20">
                    Mobile Development
                </h6>
                <a href="#" class="absolute inset-0 z-30"><!-- link here --></a>
            </div>
            <div class="flex flex-col p-[10px] rounded-[30px] bg-soft-purple overflow-hidden relative">
                <div class="w-full relative mb-6">
                  <span
                    class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-shadow/20 blur-[100px] w-[75%] h-40"
                  ></span>
                </div>
                <div class="mb-3 px-6">
                  <p>
                      Learn All
                  </p>
                </div>
                <h6 class="font-semibold text-lg px-6 mb-6 pr-20">
                    Digital Marketing
                </h6>
                <a href="#" class="absolute inset-0 z-30"><!-- link here --></a>
            </div>
          </div>
        </div>
    </div>
    <div class="container mx-auto mb-[70px]">
      <div class="flex flex-col">
        <h2 class="text-3xl font-extrabold mb-5">Popular in Website Development</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-4 gap-8">

          <!-- start column course -->
          @foreach($courses_website_development as $item_courses)
          <div class="flex flex-col p-[10px] rounded-[30px] bg-soft-purple overflow-hidden relative">
            <div class="w-full relative mb-6">
              <span
                class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-shadow/20 blur-[100px] w-[75%] h-40"
              ></span>
              <div class="overflow-hidden rounded-[30px]">
                <img
                  src="{{ Storage::url($item_courses->thumbnail) }}"
                  alt="image1"
                  class="w-full h-full object-cover relative z-20"
                />
              </div>
            </div>
            <div class="mb-3 px-6">
              <span
                class="bg-purple text-white rounded-lg px-2 py-1 text-[8px] font-bold inline-flex"
                >UI UX DESIGN</span
              >
            </div>
            <h6 class="font-semibold text-lg px-6 mb-6 pr-20">
                {{ $item_courses->title }}
            </h6>
            <a href="{{ route('details', $item_courses->slug) }}" class="absolute inset-0 z-30"><!-- link here --></a>
          </div>
          @endforeach
          <!-- end column course -->

          
        </div>
      </div>
    </div>

    <div class="container mx-auto mb-[70px]">
      <div class="flex flex-col">
        <h2 class="text-3xl font-extrabold mb-5">Popular in Product Design</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-4 gap-8">


          <!-- start column course -->
          @foreach($courses_product_design as $item_courses)
          <div class="flex flex-col p-[10px] rounded-[30px] bg-soft-purple overflow-hidden relative">
            <div class="w-full relative mb-6">
              <span
                class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-shadow/20 blur-[100px] w-[75%] h-40"
              ></span>
              <div class="overflow-hidden rounded-[30px]">
                <img
                  src="{{ Storage::url($item_courses->thumbnail) }}"
                  alt="image1"
                  class="w-full h-full object-cover relative z-20"
                />
              </div>
            </div>
            <div class="mb-3 px-6">
              <span
                class="bg-purple text-white rounded-lg px-2 py-1 text-[8px] font-bold inline-flex"
                >UI UX DESIGN</span
              >
            </div>
            <h6 class="font-semibold text-lg px-6 mb-6 pr-20">
                {{ $item_courses->title }}
            </h6>
            <a href="{{ route('details', $item_courses->slug) }}" class="absolute inset-0 z-30"><!-- link here --></a>
          </div>
          @endforeach
          <!-- end column course -->


        </div>
      </div>
    </div>
  </body>
</html>
