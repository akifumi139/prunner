<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タイムライン</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="bg-gray-800 text-white w-1/4 p-4">
            <div class="flex justify-between mb-10">
                <h1 class="text-2xl font-semibold p-2">Prunner</h1>
                <form action="" method="post">
                    @csrf
                    <button type="submit" class="flex items-center w-full p-2 text-sm  rounded hover:bg-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        <span class="ms-1">ログアウト</span>
                    </button>
                </form>
            </div>
            <div class="flex justify-between items-center">
                <a href="#"
                    class="p-2 border-gray-800 hover:border-white border-t border-l border-r rounded-t">プロジェクト一覧</a>
                <a href=""
                    class="flex items-center p-2 rounded-t-lg bg-emerald-600 hover:bg-emerald-800 font-semibold text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <span class="ms-1">追加</span>
                </a>
            </div>
            <hr class="mb-2">
            <ul class="bg-gray-700 rounded py-1">
                <li>
                    <a href="#" class="block ps-2 p-2 rounded hover:bg-gray-300 hover:text-gray-800">プロジェクトA</a>
                </li>
                <li>
                    <a href="#" class="block ps-2 p-2 rounded hover:bg-gray-300 hover:text-gray-800">プロジェクトB</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="p-5 bg-blue-300">
                <h2 class="ps-3 text-2xl font-semibold">プロジェクトA</h2>
            </div>
            <div class="overflow-y-auto h-5/6">
                <div class="p-1">
                    <div class="max-w-xl mx-auto mt-2">
                        <div class="bg-white rounded shadow">
                            <div class="px-4 py-2 border-b">
                                <span class="font-semibold text-gray-800">Prunner管理者</span>
                                <span class="text-gray-600">@owner</span>
                            </div>
                            <div class="p-4">
                                <p class="text-gray-800">
                                    ここに投稿を書こう
                                    改行は適当
                                </p>
                            </div>
                            <div class="flex items-center justify-between p-2 px-4">
                                <a href="#" class="text-blue-500 hover:text-blue-700">ブックマークする</a>
                                <a href="#" class="text-blue-500 hover:text-blue-700">返信する</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-3">
                <a href="#"
                    class="p-3 rounded bg-orange-400 hover:bg-orange-600 text-white text-2xl font-semibold tracking-wider flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    投稿する
                </a>
            </div>
        </main>
    </div>
</body>

</html>