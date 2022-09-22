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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-10 text-center">
                        <p>以下の内容で、ご予約が完了しました。</p>
                    </div>
                    <div class="flex justify-center">
                        <table class="table-auto">
                            <thead>
                                <tr>
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
                                <tr>
                                <td class="border px-6 py-4">{{ $contact->your_name }}</td>
                                <td class="border px-6 py-4">{{ $contact->tel }}</td>
                                <td class="border px-6 py-4">{{ $contact->date }}</td>
                                <td class="border px-6 py-4">{{ $contact->time }}</td>
                                <td class="border px-6 py-4">{{ $contact->ages }}</td>
                                <td class="border px-6 py-4">{{ $contact->contact }}</td>
                                <td class="border px-6 py-4">{{ $contact->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                                
                <form method="GET" action="{{ route('contact.index') }}" class="mt-20 mx-px">
                    <div class="text-right">
                        <x-button class="mr-24 bg-cyan-200 hover:bg-cyan-400">TOPページへ戻る</x-button>
                    </div>
                </form>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>