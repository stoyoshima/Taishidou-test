<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css読み込み -->
    <!-- @vite('resources/css/app.css') -->
</head>
<body>
    <div class="flex justify-around p-10 ">
        <div>
                <form method="GET" action="{{ route('contact.index') }}">
                    <x-button class="bg-pink-300 hover:bg-pink-400">
                        TOPページ戻る
                    </x-button>  
                </form>
            </div>
            <div>
                <form method="GET" action="{{ route('contact.show') }}">
                    <x-button class="bg-gray-300 hover:bg-gray-500">
                        見学予約一覧
                    </x-button>  
                </form>
            </div>
        </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-2xl text-center pb-6">見学予約フォーム</h1>
                <!-- 入力フォーム -->
                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <div class="ml-10 mr-10 flex">
                            <div class="container mx-auto ml-10 mr-10">
                                <div class="ml-60 w-62">
                                    <div class="w-auto h-28 flex">
                                        <div class="w-80 my-auto">
                                            <div class="text-left">
                                                <span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>氏名
                                            </div>
                                            @error('your_name')
                                            <li class="pt-1 text-left text-red-600">{{ $message }}</li>
                                            @enderror
                                        </div>
                                        <div class="w-80 my-auto">
                                            <input type="text" name="your_name" class="py-4 pt-5 m-1 mb-3 rounded-md w-60  border-2 border-red-200" placeholder="例）山田　花子">
                                        </div>
                                    </div>
                                    <div class="w-auto h-28 flex">
                                        <div class="w-80 my-auto">
                                            <div class="text-left">
                                                <span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>電話番号
                                            </div>
                                            @error('tel')
                                            <li class="pt-1 text-left text-red-600">{{ $message }}</li>
                                            @enderror
                                        </div>
                                        <div class="w-80 my-auto">
                                            <input type="text" name="tel" class="py-4 m-1 mb-3 rounded-md w-60 border-2 border-red-200" placeholder="08011117777">
                                        </div>
                                    </div>
                                    <div class="w-auto h-28 flex">
                                        <div class="w-80 my-auto">
                                            <div class="text-left">
                                                <span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>見学希望日
                                            </div>
                                            @error('date')
                                            <li class="pt-1 text-left text-red-600">{{ $message }}</li>
                                            @enderror
                                        </div>
                                        <div class="w-80 my-auto">
                                            <input type="date" name="date" class="py-4 m-1 mb-3 rounded-md w-60 border-2 border-red-200 text-slate-500">
                                        </div>
                                    </div>
                                    <div class="w-auto h-28 flex">
                                        <div class="w-80 my-auto">
                                            <div class="text-left">
                                                <span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>見学希望時間
                                            </div>
                                            @error('time')
                                            <li class="pt-1 text-left text-red-600">{{ $message }}</li>
                                            @enderror
                                        </div>
                                        <div class="w-80 my-auto">
                                            <select name="time" class="py-4 m-1 rounded-md w-60 border-2 border-red-200 text-slate-500">
                                                <option value="">選択してください</option>
                                                <option value="10:00~11:00">10:00~11:00</option>
                                            <option value="15:00~16:00">15:00~16:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-auto h-28 flex">
                                        <div class="w-80 my-auto">
                                            <div class="text-left">
                                                <span class="bg-yellow-300 mr-3 rounded-md p-1">必須</span>お子さまの年齢または<br>その他該当するものを選択してください<br>※複数選択可
                                            </div>
                                            @error('ages')
                                            <li class="pt-1 text-left text-red-600">{{ $message }}</li>
                                            @enderror
                                        </div>
                                        <div class="w-80 my-auto">
                                            <input type="checkbox" name="ages[]" value="0歳" class="m-1 rounded-md border-2 border-red-200">0歳
                                            <input type="checkbox" name="ages[]" value="1歳" class="m-1 rounded-md border-2 border-red-200">1歳
                                            <input type="checkbox" name="ages[]" value="2歳" class="m-1 rounded-md border-2 border-red-200">2歳
                                            <input type="checkbox" name="ages[]" value="3歳" class="m-1 rounded-md border-2 border-red-200">3歳
                                            <input type="checkbox" name="ages[]" value="4歳" class="m-1 rounded-md border-2 border-red-200">4歳
                                            <input type="checkbox" name="ages[]" value="5歳" class="m-1 rounded-md border-2 border-red-200">5歳
                                            <input type="checkbox" name="ages[]" value="妊娠中" class="m-1 rounded-md border-2 border-red-200">妊娠中
                                            <input type="checkbox" name="ages[]" value="その他" class="m-1 rounded-md border-2 border-red-200">その他
                                        </div>
                                    </div>
                                    <div class="w-auto h-28 flex">
                                        <div class="w-80 my-auto">
                                            <div class="text-left">
                                                <span class="bg-gray-300 mr-3 rounded-md p-1">任意</span>ご相談やご質問
                                            </div>
                                        </div>
                                        <div class="w-80 my-auto">
                                            <textarea name="contact" class="py-6 m-1 rounded-md w-60 border-2 border-red-200"></textarea>
                                        </div>
                                    </div>           
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <x-button class="px-20 py-4 bg-cyan-200 mt-20 hover:bg-cyan-400">予約する</x-button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>
