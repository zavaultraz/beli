@extends('front.layouts.app')
@section('content')

<body class="bg-belibang-black font-poppins text-white">
    <x-nav></x-nav>

    <header class="w-full pt-[74px] pb-[103px] relative z-0">
        <div class="container max-w-[1130px] mx-auto flex flex-col items-center justify-center z-10">
            <div class="flex flex-col gap-4 mt-7 z-10">
                <p class="bg-[#2A2A2A] font-semibold text-belibang-grey rounded-[4px] p-[8px_16px] w-fit">
                    {{ $product->category->name }}
                </p>
                <h1 class="font-semibold text-[55px]">{{ $product->name }}
                </h1>
            </div>
        </div>
        <div class="background-image w-full h-full absolute top-0 overflow-hidden z-0">
            <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-cover" alt="hero image">
        </div>
        <div class="w-full h-1/3 absolute bottom-0 bg-gradient-to-b from-belibang-black/0 to-belibang-black z-0"></div>
        <div class="w-full h-full absolute top-0 bg-belibang-black/95 z-0"></div>
    </header>

    <section id="DetailsContent" class="container max-w-[1130px] mx-auto mb-[32px] relative -top-[70px]">
        <div class="flex flex-col gap-8">
            <div class="w-[1130px] h-[700px] flex shrink-0 rounded-[20px] overflow-hidden">
                <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-cover" alt="hero image">
            </div>
            <div class="flex gap-8 relative -mt-[93px]">
                <div
                    class="flex flex-col p-[30px] gap-5 bg-[#181818] rounded-[20px] w-[700px] shrink-0 mt-[90px] h-fit">
                    <div class="flex flex-col gap-4">
                        <p class="font-semibold text-xl">About</p>
                        <p class="text-belibang-grey leading-[30px]">{{ $product->about }}</p>
                        <div class="flex items-center gap-[10px] mt-1">
                        </div>
                    </div>
                    <div class="flex flex-row flex-wrap gap-4 items-center">
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">bank</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">finance</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">mobile</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">money</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">personal</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">scan</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">template</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">transfer</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">ui
                            kit</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">UX</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">wallet</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">wallet</a>
                    </div>
                </div>
                <div class="flex flex-col w-[366px] gap-[30px] flex-nowrap overflow-y-visible">
                    <div class="p-[2px] bg-img-purple-to-orange rounded-[20px] flex w-full h-fit">
                        <div class="w-full p-[28px] bg-[#181818] rounded-[20px] flex flex-col gap-[26px]">
                            <div class="flex flex-col gap-3">
                                <p
                                    class="font-semibold text-4xl bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                <div class="flex flex-col gap-[10px]">
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('assets/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">100% Original Content</p>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('assets/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">Lifetime Support</p>
                                    </div>

                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('assets/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">Comprehensive Documentation</p>
                                    </div>
                                </div>
                            </div>
                            <a
                                class="bg-[#2D68F8] text-center font-semibold p-[12px_20px] rounded-full hover:bg-[#083297] active:bg-[#062162] transition-all duration-300">Check
                                out</a>
                        </div>
                    </div>
                    <div class="w-full p-[30px] bg-[#181818] rounded-[20px] flex flex-col gap-4 h-fit">
                        <div class="flex justify-between items-center">
                            <div class="flex gap-3 items-center">
                                <div class="w-12 h-12 rounded-full overflow-hidden flex shrink-0">
                                    <img src="{{ Storage::url($product->creator->avatar) }}" alt="icon">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold">{{ $product->creator->name }}</p>
                                    <p class="text-[#595959] text-sm leading-[18px]">
                                        <span class="font-semibold mr-1">{{ $product->creator->products->count() }}</span>
                                        Product
                                    </p>
                                </div>
                            </div>
                            <a href="">
                                <img src="{{ asset('assets/images/icons/arrow-right.svg') }}" alt="icon">
                            </a>
                        </div>
                        <p class="text-sm leading-[24px] text-belibang-grey">{{ $product->creator->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="NewProduct" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-[32px]">More Product</h2>
        <div class="grid grid-cols-4 gap-[22px] ">
            @forelse ($randomProduct as $product)
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="assets/images/thumbnails/img1.png" class="w-full h-full object-cover" alt="thumbnail">
                    <p class="backdrop-blur bg-black/30 rounded-[4px] p-[4px_8px] absolute top-3 right-[14px] z-10">Rp
                        {{ number_format($product->price, 0, ',', '.') }}
                    </p>
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="" class="font-semibold line-clamp-2 hover:line-clamp-none">{{$product->name}}</a>
                        <p
                            class="bg-[#2A2A2A] font-semibold text-xs text-belibang-grey rounded-[4px] p-[4px_6px] w-fit">
                            {{ $product->category->name }}
                        </p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <div class="w-6 h-6 flex shrink-0 items-center justify-center rounded-full overflow-hidden">
                            <img src="{{ Storage::url($product->creator->avatar) }}" class="w-full h-full object-cover"
                                alt="logo">
                        </div>
                        <a href="" class="font-semibold text-xs text-belibang-grey">{{ $product->creator->name }}</a>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-white">No product available.</p>
            @endforelse
        </div>
    </section>

    <section id="Testimonial" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">Customers Are Happy <br>With Our Products</h2>
            <div class="flex gap-[14px] items-center">
                <button class="btn-prev w-10 h-10 shrink-0 rounded-full overflow-hidden rotate-180">
                    <img src="{{ asset('assets/images/icons/circle-arrow-r.svg') }}" alt="icon">
                </button>
                <button class="btn-next w-10 h-10 shrink-0 rounded-full overflow-hidden">
                    <img src="{{ asset('assets/images/icons/circle-arrow-r.svg') }}" alt="icon">
                </button>
            </div>
        </div>
        <div class="w-full overflow-x-hidden no-scrollbar">
            <div class="testi-carousel" data-flickity>
                <div class="flex w-[calc((100vw-1130px-20px)/2)] shrink-0"></div>
                @forelse ($random as $testimonial)
                <div class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('assets/images/backgrounds/Testimonials-image.png')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-[6px]">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if($i <=$testimonial->rating)
                                    <img src="{{ asset('assets/images/icons/star.svg') }}" alt="star">
                                    @else
                                    <img src="{{ asset('assets/images/icons/star-outline.svg') }}" alt="star">
                                    @endif
                                    @endfor
                            </div>
                            <p class="leading-[26px]">{{ $testimonial->content }}</p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="{{ $testimonial->avatar ? asset('storage/' . $testimonial->avatar) : asset('assets/images/photos/default-avatar.png') }}" class="w-full h-full object-cover" alt="photo">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    {{ $testimonial->name }}
                                </p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">{{ $testimonial->occupation }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="flex justify-center w-full">
                    <p class="text-center text-white">No testimonial available.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>


    <footer class="bg-[#181818] py-[34px]">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[66px]">
            <div class="flex justify-between">
                <div class="flex flex-col justify-between">
                    <div class="flex shrink-0">
                        <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="logo">
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Connect with us</p>
                        <div class="flex items-center gap-5">
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('assets/images/logos/dribbble.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('assets/images/logos/facebook.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('assets/images/logos/apple.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="{{ asset('assets/images/logos/figma.svg')}}" class="w-6 h-6" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-[72px]">
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Browse</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">All Products</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Templates</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Ebooks</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Courses</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Fonts</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Platform</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">All-Access Pass</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Become an author</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Affiliate program</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Terms & Licensing</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Customer service</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">FAQ</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Orders</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Payments</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">refunds</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Contact us</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">About us</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Company</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Careers</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[10px] text-[#595959]">© 2024, Belibang LLC.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        $('.testi-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
        });

        // previous
        $('.btn-prev').on('click', function() {
            $('.testi-carousel').flickity('previous', true);
        });

        // next
        $('.btn-next').on('click', function() {
            $('.testi-carousel').flickity('next', true);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            menuButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event
                    .target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>