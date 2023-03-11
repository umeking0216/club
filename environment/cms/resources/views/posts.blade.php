<!-- resources/views/books.blade.php -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <form action="{{ route('post_index') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-gray-100 text-gray-900">{{ __('Dashboard') }}</x-button>
            </form>
        </h2>
    </x-slot>
    
    
    <!--ここからお試し-->
    
    

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <form action="{{ url('posts') }}" method="POST" class="w-full max-w-lg" enctype="multipart/form-data">
                @csrf
                  <div class="flex flex-col px-2 py-2">
                   <!-- カラム１ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                       タイトル
                      </label>
                      <input name="title" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                    </div>
                    <!-- カラム２ -->
                    <div class="w-full md:w-1/1 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        本文
                      </label>
                      <input name="body" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="">
                    </div>
                    <!-- カラム３ -->
                    <div class="w-full md:w-1/1 px-3 mb-2 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        写真
                      </label>
                      <input name="images" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" placeholder="">
                    </div>
                    
                  <!-- カラム５ -->
                  <div class="flex flex-col">
                      <div class="text-gray-700 text-center px-4 py-2 m-2">
                             <x-button class="bg-blue-500 rounded-lg">送信</x-button>
                      </div>
                   </div>
            </form>
</div>

    <!--下エリア[START]-->
  <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
         <!-- 現在の本 -->
        @if (count($posts) > 0)
            @foreach ($posts as $post)
            <x-collection id="{{ $post->id }}">
                <h2>{{ $post->title }}</h2>
                <img src="{{ '/storage/' . $post['images']}}" class='w-10 mb-3'/>
                <p>{{ $post->body }}</p>
            </x-collection>
            
            @endforeach
        @endif
    <div>
     {{ $posts->links()}}
    </div>
    </div>
    <!--右側エリア[[END]-->       

</div>
 <!--全エリア[END]-->

</x-app-layout>

