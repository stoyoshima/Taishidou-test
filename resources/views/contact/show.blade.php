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
                    <div class="my-20 flex">
                        <div class="flex-auto w-96">
                            <p class="text-center text-2xl">見学予約一覧</p>
                        </div>
                        <div class="flex-auto w-10">
                            <form metohd="GET" acction="{{ route('contact.show') }}" class="form-inline text-center">
                                <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0  bg-cyan-300 hover:bg-cyan-400" type="submit">検索する</button>
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                <th class="px-6 py-4">id</th>
                                <th class="px-6 py-4">氏名</th>
                                <th class="px-6 py-4">電話番号</th>
                                <th class="px-6 py-4">見学日</th>
                                <th class="px-6 py-4">見学時間</th>
                                <th class="px-6 py-4">お子さまの年齢</th>
                                <th class="px-6 py-4">相談内容</th>
                                <th class="px-6 py-4">予約日時</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                <td class="border px-6 py-4">{{ $contact->id }}</td>
                                <td class="border px-6 py-4">{{ $contact->your_name }}</td>
                                <td class="border px-6 py-4">{{ $contact->tel }}</td>
                                <td class="border px-6 py-4">{{ $contact->date }}</td>
                                <td class="border px-6 py-4">{{ $contact->time }}</td>
                                <td class="border px-6 py-4">{{ $contact->ages }}</td>
                                <td class="border px-6 py-4">{{ $contact->contact }}</td>
                                <td class="border px-6 py-4">{{ $contact->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
               
                    {{ $contacts->links() }}
                    
                    <form method="GET" action="{{ route('contact.index') }}" class="mt-20 mx-px">
                        <div class="text-right">
                            <x-button class="mr-8 bg-cyan-300 hover:bg-cyan-400">戻る</x-button>
                        </div> 
                    </form>
                       
                        
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>