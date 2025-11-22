@include('templates.head')
@include('components.navbar')
<div class="min-h-screen bg-gray-100 pt-28 pb-12">
    <div class="container mx-auto px-6">

        <div class="bg-white shadow-lg hover:shadow-xl transition-all rounded-2xl p-8 border border-gray-100 max-w-xl mx-auto">

            <div class="flex flex-col items-center text-center mb-6">
                <div class="w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 text-4xl font-bold mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        class="w-7 h-7 text-gray-700">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Jokowiwi
                </h2>
                <p class="text-gray-500 text-lg mt-1">
                    admin@example.com
                </p>
            </div>

            <div class="mt-8">
                <a href=""
                    class="w-full block text-center py-3 bg-red-500 text-white font-semibold 
                          rounded-xl hover:bg-red-600 transition shadow-md hover:shadow-lg">
                    Logout
                </a>
            </div>

        </div>

    </div>
</div>

@include('templates.end')