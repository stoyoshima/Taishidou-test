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

                <!-- エラー表示 -->
                @if ($errors->any())
                <div class="text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}<li>
                        @endforeach
                    <ul>
                </div>
                @endif

                <h1>見学予約ページ</h1>
                <!-- 入力項目 -->
                <form method="POST" action="{{route('contact.store')}}">
                    @csrf
                <div>
                    <div class="ml-10 mr-10 flex">
                        <div class="container mx-auto ml-10 mr-10">
                            <div class="ml-40 mt-5 mb-5 text-center w-62 ">
                                <p class="py-7 text-left"><span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>氏名</p>
                                <p class="py-6 text-left"><span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>電話番号</p>
                                <p class="py-6 text-left"><span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>見学希望日</p>
                                <p class="py-7 text-left"><span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>見学時間</p>
                                <p class="py-7 text-left"><span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>お子さまの年齢または<br>その他該当するものを選択してください<br>※複数選択可</p>
                                <p class="py-6 text-left"><span class="bg-gray-300 mr-3 rounded-md p-1">任意</span>ご相談やご質問</p>
                            </div>
                        </div>
                        <div class="container mx-auto ml-0 mr-10">
                            <div class="ml-5 mt-5 mb-5text-left">
                                <input type="text" name="your_name" class="py-4 pt-5 m-1 mb-3 rounded-md w-60  border-2 border-red-200" placeholder="例）山田　花子">
                                <br>
                                <input type="text" name="tel" class="py-4 m-1 mb-3 rounded-md w-60 border-2 border-red-200" placeholder="08011117777">
                                <br>
                                <input type="date" name="date" class="py-4 m-1 mb-3 rounded-md w-60 border-2 border-red-200 text-slate-500">
                                <br>
                                <select name="time" class="py-4 m-1 rounded-md w-60 border-2 border-red-200 text-slate-500">
                                <option value="">選択してください</option>
                                <option value="10:00~11:00">10:00~11:00</option>
                                <option value="15:00~16:00">15:00~16:00</option>
                                </select>
                                <div class="pt-6 w-80">
                                    <input type="checkbox" name="ages[]" value="0歳" class="m-1 rounded-md border-2 border-red-200">0歳
                                    <input type="checkbox" name="ages[]" value="1歳" class="m-1 rounded-md border-2 border-red-200">1歳
                                    <input type="checkbox" name="ages[]" value="2歳" class="m-1 rounded-md border-2 border-red-200">2歳
                                    <input type="checkbox" name="ages[]" value="3歳" class="m-1 rounded-md border-2 border-red-200">3歳
                                    <input type="checkbox" name="ages[]" value="4歳" class="m-1 rounded-md border-2 border-red-200">4歳
                                    <input type="checkbox" name="ages[]" value="5歳" class="m-1 rounded-md border-2 border-red-200">5歳
                                    <input type="checkbox" name="ages[]" value="妊娠中" class="m-1 rounded-md border-2 border-red-200">妊娠中
                                    <input type="checkbox" name="ages[]" value="その他" class="m-1 rounded-md border-2 border-red-200">その他
                                </div>
                                <div class="pt-12 w-80">
                                    <textarea name="contact" class="py-6 m-1 rounded-md w-60 border-2 border-red-200"></textarea>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="text-center">
                    <x-button class="px-20 py-4 bg-cyan-300 mt-20 hover:bg-cyan-400">予約する</x-button>
                </div>
                </div> 
                </form>
            </div>
        </div>
    </div>
</x-app-layout>