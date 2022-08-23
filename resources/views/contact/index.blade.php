<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <div class="mx-32 my-20">
                        <!-- 見学予約ページへ -->
                        <form method="GET" action="{{ route('welcome') }}">
                                <x-button class="bg-red-300 hover:bg-red-400">
                                    TOPページへ戻る
                                </x-button>   
                            </form>
                        </div>
                        <div class="mx-32 my-20">
                            <form method="GET" action="{{ route('contact.show') }}">
                                <x-button class="bg-gray-400 hover:bg-gray-500">
                                    見学予約一覧はこちら
                                </x-button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>