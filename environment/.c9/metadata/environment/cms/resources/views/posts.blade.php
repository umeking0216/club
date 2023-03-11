{"changed":true,"filter":false,"title":"posts.blade.php","tooltip":"/cms/resources/views/posts.blade.php","value":"<!-- resources/views/books.blade.php -->\n@vite(['resources/css/app.css', 'resources/js/app.js'])\n<x-app-layout>\n\n    <!--ヘッダー[START]-->\n    <x-slot name=\"header\">\n        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">\n            <form action=\"{{ route('post_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">\n                <x-button class=\"bg-gray-100 text-gray-900\">{{ __('Dashboard') }}</x-button>\n            </form>\n        </h2>\n    </x-slot>\n    \n    \n    <!--ここからお試し-->\n    \n    \n\n<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"uploadModalLabel\" aria-hidden=\"true\">\n  <form action=\"{{ url('posts') }}\" method=\"POST\" class=\"w-full max-w-lg\" enctype=\"multipart/form-data\">\n                @csrf\n                  <div class=\"flex flex-col px-2 py-2\">\n                   <!-- カラム１ -->\n                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">\n                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">\n                       タイトル\n                      </label>\n                      <input name=\"title\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">\n                    </div>\n                    <!-- カラム２ -->\n                    <div class=\"w-full md:w-1/1 px-3\">\n                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">\n                        本文\n                      </label>\n                      <input name=\"body\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">\n                    </div>\n                    <!-- カラム３ -->\n                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">\n                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">\n                        写真\n                      </label>\n                      <input name=\"images\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"file\" placeholder=\"\">\n                    </div>\n                    \n                  <!-- カラム５ -->\n                  <div class=\"flex flex-col\">\n                      <div class=\"text-gray-700 text-center px-4 py-2 m-2\">\n                             <x-button class=\"bg-blue-500 rounded-lg\">送信</x-button>\n                      </div>\n                   </div>\n            </form>\n</div>\n\n    <!--下エリア[START]-->\n  <div class=\"flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2\">\n         <!-- 現在の本 -->\n        @if (count($posts) > 0)\n            @foreach ($posts as $post)\n            <x-collection id=\"{{ $post->id }}\">\n                <h2>{{ $post->title }}</h2>\n                <img src=\"{{ '/storage/' . $post['images']}}\" class='w-10 mb-3'/>\n                <p>{{ $post->body }}</p>\n            </x-collection>\n            \n            @endforeach\n        @endif\n    <div>\n     {{ $posts->links()}}\n    </div>\n    </div>\n    <!--右側エリア[[END]-->       \n\n</div>\n <!--全エリア[END]-->\n\n</x-app-layout>\n\n","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"remove","lines":["y"],"id":228},{"start":{"row":40,"column":37},"end":{"row":40,"column":38},"action":"remove","lines":["d"]},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"remove","lines":["o"]},{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"remove","lines":["b"]}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"insert","lines":["i"],"id":229},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"insert","lines":["m"]},{"start":{"row":40,"column":37},"end":{"row":40,"column":38},"action":"insert","lines":["a"]},{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"remove","lines":["e"],"id":230}],[{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"insert","lines":["g"],"id":231},{"start":{"row":40,"column":39},"end":{"row":40,"column":40},"action":"insert","lines":["e"]},{"start":{"row":40,"column":40},"end":{"row":40,"column":41},"action":"insert","lines":["s"]}],[{"start":{"row":52,"column":0},"end":{"row":116,"column":4},"action":"remove","lines":["<!--ここまでお試し-->","","  ","    <!--ヘッダー[END]-->","            ","        <!-- バリデーションエラーの表示に使用-->","       <!--<x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>-->","        <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <!--<div class=\"flex bg-gray-100\">-->","","        <!--左エリア[START]--> ","        <!--<div class=\"text-gray-700 text-left px-4 py-4 m-2\">-->","            ","            <!--<div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">-->","                <!--<div class=\"p-6 bg-white border-b border-gray-500 font-bold\">-->","                    <!--本を管理する-->","                <!--</div>-->","            <!--</div>-->","","","            <!-- 本のタイトル -->","            <!--<form action=\"{{ url('posts') }}\" method=\"POST\" class=\"w-full max-w-lg\">-->","                <!--@csrf-->","                  <!--<div class=\"flex flex-col px-2 py-2\">-->","                   <!-- カラム１ -->","                    <!--<div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">-->","                    <!--  <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">-->","                    <!--   Book Name-->","                    <!--  </label>-->","                    <!--  <input name=\"item_name\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">-->","                    <!--</div>-->","                    <!-- カラム２ -->","                    <!--<div class=\"w-full md:w-1/1 px-3\">-->","                    <!--  <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">-->","                    <!--    金額-->","                    <!--  </label>-->","                    <!--  <input name=\"item_amount\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">-->","                    <!--</div>-->","                    <!-- カラム３ -->","                    <!--<div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">-->","                    <!--  <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">-->","                    <!--    数-->","                    <!--  </label>-->","                    <!--  <input name=\"item_number\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">-->","                    <!--</div>-->","                    <!-- カラム４ -->","                  <!--  <div class=\"w-full md:w-1/1 px-3 mb-6 md:mb-0\">-->","                  <!--    <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">-->","                  <!--      発売日-->","                  <!--    </label>-->","                  <!--    <input name=\"published\" type=\"date\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">-->","                  <!--  </div>-->","                  <!--</div>-->","                  <!-- カラム５ -->","        <!--          <div class=\"flex flex-col\">-->","        <!--              <div class=\"text-gray-700 text-center px-4 py-2 m-2\">-->","        <!--                     <x-button class=\"bg-blue-500 rounded-lg\">送信</x-button>-->","        <!--              </div>-->","        <!--           </div>-->","        <!--    </form>-->","        <!--</div>-->","        <!--左エリア[END]--> ","    "],"id":232}],[{"start":{"row":52,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["","    "],"id":233},{"start":{"row":51,"column":0},"end":{"row":52,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":56,"column":38},"end":{"row":57,"column":0},"action":"insert","lines":["",""],"id":234},{"start":{"row":57,"column":0},"end":{"row":57,"column":12},"action":"insert","lines":["            "]},{"start":{"row":57,"column":12},"end":{"row":58,"column":0},"action":"insert","lines":["",""]},{"start":{"row":58,"column":0},"end":{"row":58,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":59,"column":0},"end":{"row":60,"column":0},"action":"remove","lines":["                <x-collection id=\"{{ $post->id }}\">{{ $post->title }}</x-collection>",""],"id":235},{"start":{"row":59,"column":0},"end":{"row":60,"column":0},"action":"insert","lines":["                <x-collection id=\"{{ $post->id }}\">{{ $post->title }}</x-collection>",""]},{"start":{"row":60,"column":0},"end":{"row":60,"column":1},"action":"insert","lines":["？"]}],[{"start":{"row":60,"column":0},"end":{"row":60,"column":1},"action":"remove","lines":["？"],"id":236}],[{"start":{"row":59,"column":84},"end":{"row":59,"column":87},"action":"insert","lines":["-->"],"id":237},{"start":{"row":59,"column":16},"end":{"row":59,"column":20},"action":"insert","lines":["<!--"]}],[{"start":{"row":57,"column":12},"end":{"row":61,"column":23},"action":"insert","lines":["<x-collection id=\"{{ $post->id }}\">","            <h2>{{ $post->title }}</h2>","            <img src=\"{{ $post->image }}\">","            <p>{{ $post->body }}</p>","        </x-collection>"],"id":238}],[{"start":{"row":58,"column":11},"end":{"row":58,"column":12},"action":"insert","lines":[" "],"id":239}],[{"start":{"row":58,"column":12},"end":{"row":58,"column":16},"action":"insert","lines":["    "],"id":240}],[{"start":{"row":58,"column":16},"end":{"row":58,"column":20},"action":"insert","lines":["    "],"id":241}],[{"start":{"row":59,"column":12},"end":{"row":59,"column":16},"action":"insert","lines":["    "],"id":242}],[{"start":{"row":59,"column":16},"end":{"row":59,"column":20},"action":"insert","lines":["    "],"id":243}],[{"start":{"row":59,"column":20},"end":{"row":59,"column":24},"action":"insert","lines":["    "],"id":244}],[{"start":{"row":59,"column":20},"end":{"row":59,"column":24},"action":"remove","lines":["    "],"id":245}],[{"start":{"row":60,"column":12},"end":{"row":60,"column":16},"action":"insert","lines":["    "],"id":246}],[{"start":{"row":60,"column":16},"end":{"row":60,"column":20},"action":"insert","lines":["    "],"id":247}],[{"start":{"row":58,"column":20},"end":{"row":58,"column":21},"action":"remove","lines":[" "],"id":248},{"start":{"row":58,"column":16},"end":{"row":58,"column":20},"action":"remove","lines":["    "]}],[{"start":{"row":59,"column":16},"end":{"row":59,"column":20},"action":"remove","lines":["    "],"id":249}],[{"start":{"row":60,"column":16},"end":{"row":60,"column":20},"action":"remove","lines":["    "],"id":250}],[{"start":{"row":61,"column":8},"end":{"row":61,"column":12},"action":"insert","lines":["    "],"id":251}],[{"start":{"row":58,"column":18},"end":{"row":58,"column":19},"action":"remove","lines":["2"],"id":252}],[{"start":{"row":58,"column":18},"end":{"row":58,"column":20},"action":"insert","lines":["  "],"id":253}],[{"start":{"row":58,"column":19},"end":{"row":58,"column":20},"action":"remove","lines":[" "],"id":254}],[{"start":{"row":58,"column":19},"end":{"row":58,"column":20},"action":"insert","lines":["1"],"id":255}],[{"start":{"row":58,"column":19},"end":{"row":58,"column":20},"action":"remove","lines":["1"],"id":256},{"start":{"row":58,"column":18},"end":{"row":58,"column":19},"action":"remove","lines":[" "]}],[{"start":{"row":58,"column":18},"end":{"row":58,"column":19},"action":"insert","lines":["1"],"id":257}],[{"start":{"row":58,"column":41},"end":{"row":58,"column":42},"action":"remove","lines":["2"],"id":258}],[{"start":{"row":58,"column":41},"end":{"row":58,"column":42},"action":"insert","lines":["1"],"id":259}],[{"start":{"row":58,"column":18},"end":{"row":58,"column":19},"action":"remove","lines":["1"],"id":260}],[{"start":{"row":58,"column":18},"end":{"row":58,"column":19},"action":"insert","lines":["2"],"id":261}],[{"start":{"row":58,"column":41},"end":{"row":58,"column":42},"action":"remove","lines":["1"],"id":262}],[{"start":{"row":58,"column":41},"end":{"row":58,"column":42},"action":"insert","lines":["2"],"id":263}],[{"start":{"row":59,"column":41},"end":{"row":59,"column":42},"action":"insert","lines":["s"],"id":264}],[{"start":{"row":59,"column":47},"end":{"row":60,"column":0},"action":"insert","lines":["",""],"id":265},{"start":{"row":60,"column":0},"end":{"row":60,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":60,"column":16},"end":{"row":60,"column":81},"action":"insert","lines":["<img src=\"{{ '/storage/' . $memo['image']}}\" class='w-100 mb-3'/>"],"id":266}],[{"start":{"row":60,"column":55},"end":{"row":60,"column":56},"action":"insert","lines":["s"],"id":267}],[{"start":{"row":60,"column":47},"end":{"row":60,"column":48},"action":"remove","lines":["o"],"id":268},{"start":{"row":60,"column":46},"end":{"row":60,"column":47},"action":"remove","lines":["m"]},{"start":{"row":60,"column":45},"end":{"row":60,"column":46},"action":"remove","lines":["e"]},{"start":{"row":60,"column":44},"end":{"row":60,"column":45},"action":"remove","lines":["m"]}],[{"start":{"row":60,"column":44},"end":{"row":60,"column":45},"action":"insert","lines":["p"],"id":269},{"start":{"row":60,"column":45},"end":{"row":60,"column":46},"action":"insert","lines":["o"]},{"start":{"row":60,"column":46},"end":{"row":60,"column":47},"action":"insert","lines":["s"]},{"start":{"row":60,"column":47},"end":{"row":60,"column":48},"action":"insert","lines":["t"]}],[{"start":{"row":60,"column":73},"end":{"row":60,"column":74},"action":"remove","lines":["0"],"id":270}],[{"start":{"row":64,"column":14},"end":{"row":64,"column":91},"action":"remove","lines":["  <!--<x-collection id=\"{{ $post->id }}\">{{ $post->title }}</x-collection>-->"],"id":271},{"start":{"row":64,"column":13},"end":{"row":64,"column":14},"action":"remove","lines":[" "]},{"start":{"row":64,"column":12},"end":{"row":64,"column":13},"action":"remove","lines":[" "]},{"start":{"row":64,"column":8},"end":{"row":64,"column":12},"action":"remove","lines":["    "]},{"start":{"row":64,"column":4},"end":{"row":64,"column":8},"action":"remove","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":63,"column":12},"end":{"row":64,"column":0},"action":"remove","lines":["",""],"id":272}],[{"start":{"row":52,"column":9},"end":{"row":52,"column":10},"action":"remove","lines":["側"],"id":273},{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"remove","lines":["右"]}],[{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"insert","lines":["下"],"id":274}],[{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"remove","lines":["下"],"id":275}],[{"start":{"row":52,"column":8},"end":{"row":52,"column":9},"action":"insert","lines":["下"],"id":276}],[{"start":{"row":59,"column":47},"end":{"row":59,"column":50},"action":"insert","lines":["-->"],"id":279},{"start":{"row":59,"column":16},"end":{"row":59,"column":20},"action":"insert","lines":["<!--"]}],[{"start":{"row":59,"column":14},"end":{"row":59,"column":54},"action":"remove","lines":["  <!--<img src=\"{{ $post->images }}\">-->"],"id":280},{"start":{"row":59,"column":13},"end":{"row":59,"column":14},"action":"remove","lines":[" "]},{"start":{"row":59,"column":12},"end":{"row":59,"column":13},"action":"remove","lines":[" "]},{"start":{"row":59,"column":8},"end":{"row":59,"column":12},"action":"remove","lines":["    "]},{"start":{"row":59,"column":4},"end":{"row":59,"column":8},"action":"remove","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"remove","lines":["    "]},{"start":{"row":58,"column":43},"end":{"row":59,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":59,"column":78},"end":{"row":59,"column":79},"action":"insert","lines":["　"],"id":282}],[{"start":{"row":59,"column":78},"end":{"row":59,"column":79},"action":"remove","lines":["　"],"id":284}],[{"start":{"row":59,"column":79},"end":{"row":59,"column":80},"action":"insert","lines":["　"],"id":285}],[{"start":{"row":59,"column":80},"end":{"row":59,"column":113},"action":"insert","lines":["style=\"width: 50%; height: auto;\""],"id":286}],[{"start":{"row":59,"column":94},"end":{"row":59,"column":95},"action":"remove","lines":["5"],"id":287},{"start":{"row":59,"column":94},"end":{"row":59,"column":95},"action":"insert","lines":["1"]}],[{"start":{"row":59,"column":78},"end":{"row":59,"column":79},"action":"insert","lines":["　"],"id":288}],[{"start":{"row":59,"column":78},"end":{"row":59,"column":79},"action":"remove","lines":["　"],"id":289}],[{"start":{"row":59,"column":78},"end":{"row":59,"column":79},"action":"insert","lines":[" "],"id":290}],[{"start":{"row":59,"column":79},"end":{"row":59,"column":84},"action":"insert","lines":["w-1/4"],"id":291}],[{"start":{"row":59,"column":86},"end":{"row":59,"column":119},"action":"remove","lines":["style=\"width: 10%; height: auto;\""],"id":292},{"start":{"row":59,"column":85},"end":{"row":59,"column":86},"action":"remove","lines":["　"]}],[{"start":{"row":23,"column":103},"end":{"row":23,"column":104},"action":"insert","lines":[" "],"id":293},{"start":{"row":23,"column":104},"end":{"row":23,"column":105},"action":"insert","lines":["s"]},{"start":{"row":23,"column":105},"end":{"row":23,"column":106},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":105},"end":{"row":23,"column":106},"action":"remove","lines":["t"],"id":294}],[{"start":{"row":23,"column":105},"end":{"row":23,"column":106},"action":"insert","lines":["t"],"id":295},{"start":{"row":23,"column":106},"end":{"row":23,"column":107},"action":"insert","lines":["y"]},{"start":{"row":23,"column":107},"end":{"row":23,"column":108},"action":"insert","lines":["l"]},{"start":{"row":23,"column":108},"end":{"row":23,"column":109},"action":"insert","lines":["e"]},{"start":{"row":23,"column":109},"end":{"row":23,"column":110},"action":"insert","lines":["="]}],[{"start":{"row":23,"column":110},"end":{"row":23,"column":112},"action":"insert","lines":["\"\""],"id":296}],[{"start":{"row":23,"column":111},"end":{"row":23,"column":112},"action":"insert","lines":["h"],"id":297},{"start":{"row":23,"column":112},"end":{"row":23,"column":113},"action":"insert","lines":["5"]}],[{"start":{"row":23,"column":112},"end":{"row":23,"column":113},"action":"remove","lines":["5"],"id":298}],[{"start":{"row":23,"column":112},"end":{"row":23,"column":113},"action":"insert","lines":["1"],"id":299}],[{"start":{"row":23,"column":112},"end":{"row":23,"column":113},"action":"remove","lines":["1"],"id":300},{"start":{"row":23,"column":111},"end":{"row":23,"column":112},"action":"remove","lines":["h"]}],[{"start":{"row":23,"column":111},"end":{"row":23,"column":112},"action":"insert","lines":["b"],"id":301},{"start":{"row":23,"column":112},"end":{"row":23,"column":113},"action":"insert","lines":["a"]}],[{"start":{"row":23,"column":111},"end":{"row":23,"column":113},"action":"remove","lines":["ba"],"id":302},{"start":{"row":23,"column":111},"end":{"row":23,"column":121},"action":"insert","lines":["background"]}],[{"start":{"row":23,"column":121},"end":{"row":23,"column":122},"action":"insert","lines":[" "],"id":303}],[{"start":{"row":23,"column":121},"end":{"row":23,"column":122},"action":"remove","lines":[" "],"id":304}],[{"start":{"row":23,"column":121},"end":{"row":23,"column":122},"action":"insert","lines":[":"],"id":305}],[{"start":{"row":23,"column":122},"end":{"row":23,"column":123},"action":"insert","lines":["r"],"id":306},{"start":{"row":23,"column":123},"end":{"row":23,"column":124},"action":"insert","lines":["e"]},{"start":{"row":23,"column":124},"end":{"row":23,"column":125},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":104},"end":{"row":23,"column":126},"action":"remove","lines":["style=\"background:red\""],"id":307},{"start":{"row":23,"column":103},"end":{"row":23,"column":104},"action":"remove","lines":[" "]}],[{"start":{"row":0,"column":40},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":308}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":55},"action":"insert","lines":["@vite(['resources/css/app.css', 'resources/js/app.js'])"],"id":309}],[{"start":{"row":60,"column":83},"end":{"row":60,"column":84},"action":"remove","lines":["4"],"id":310},{"start":{"row":60,"column":82},"end":{"row":60,"column":83},"action":"remove","lines":["/"]},{"start":{"row":60,"column":81},"end":{"row":60,"column":82},"action":"remove","lines":["1"]},{"start":{"row":60,"column":80},"end":{"row":60,"column":81},"action":"remove","lines":["-"]},{"start":{"row":60,"column":79},"end":{"row":60,"column":80},"action":"remove","lines":["w"]},{"start":{"row":60,"column":78},"end":{"row":60,"column":79},"action":"remove","lines":[" "]}],[{"start":{"row":59,"column":19},"end":{"row":59,"column":20},"action":"insert","lines":[" "],"id":311}],[{"start":{"row":59,"column":20},"end":{"row":59,"column":21},"action":"insert","lines":["s"],"id":312},{"start":{"row":59,"column":21},"end":{"row":59,"column":22},"action":"insert","lines":["t"]},{"start":{"row":59,"column":22},"end":{"row":59,"column":23},"action":"insert","lines":["y"]},{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"insert","lines":["k"]}],[{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"insert","lines":["e"],"id":313}],[{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"remove","lines":["e"],"id":314},{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"remove","lines":["k"]}],[{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"insert","lines":["l"],"id":315},{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"insert","lines":["e"]},{"start":{"row":59,"column":25},"end":{"row":59,"column":26},"action":"insert","lines":["="]}],[{"start":{"row":59,"column":26},"end":{"row":59,"column":27},"action":"insert","lines":["b"],"id":316},{"start":{"row":59,"column":27},"end":{"row":59,"column":28},"action":"insert","lines":["a"]},{"start":{"row":59,"column":28},"end":{"row":59,"column":29},"action":"insert","lines":["c"]}],[{"start":{"row":59,"column":29},"end":{"row":59,"column":30},"action":"insert","lines":["k"],"id":317}],[{"start":{"row":59,"column":30},"end":{"row":59,"column":31},"action":"insert","lines":["g"],"id":318}],[{"start":{"row":59,"column":30},"end":{"row":59,"column":31},"action":"remove","lines":["g"],"id":319},{"start":{"row":59,"column":29},"end":{"row":59,"column":30},"action":"remove","lines":["k"]},{"start":{"row":59,"column":28},"end":{"row":59,"column":29},"action":"remove","lines":["c"]},{"start":{"row":59,"column":27},"end":{"row":59,"column":28},"action":"remove","lines":["a"]},{"start":{"row":59,"column":26},"end":{"row":59,"column":27},"action":"remove","lines":["b"]}],[{"start":{"row":59,"column":26},"end":{"row":59,"column":27},"action":"insert","lines":["b"],"id":320}],[{"start":{"row":59,"column":27},"end":{"row":59,"column":28},"action":"insert","lines":["a"],"id":321},{"start":{"row":59,"column":28},"end":{"row":59,"column":29},"action":"insert","lines":["c"]},{"start":{"row":59,"column":29},"end":{"row":59,"column":30},"action":"insert","lines":["k"]}],[{"start":{"row":59,"column":30},"end":{"row":59,"column":31},"action":"insert","lines":["g"],"id":322},{"start":{"row":59,"column":31},"end":{"row":59,"column":32},"action":"insert","lines":["r"]},{"start":{"row":59,"column":32},"end":{"row":59,"column":33},"action":"insert","lines":["o"]},{"start":{"row":59,"column":33},"end":{"row":59,"column":34},"action":"insert","lines":["u"]},{"start":{"row":59,"column":34},"end":{"row":59,"column":35},"action":"insert","lines":["d"]}],[{"start":{"row":59,"column":35},"end":{"row":59,"column":36},"action":"insert","lines":["x"],"id":323}],[{"start":{"row":59,"column":35},"end":{"row":59,"column":36},"action":"remove","lines":["x"],"id":324}],[{"start":{"row":59,"column":35},"end":{"row":59,"column":36},"action":"insert","lines":["c"],"id":325},{"start":{"row":59,"column":36},"end":{"row":59,"column":37},"action":"insert","lines":["l"]},{"start":{"row":59,"column":37},"end":{"row":59,"column":38},"action":"insert","lines":["o"]},{"start":{"row":59,"column":38},"end":{"row":59,"column":39},"action":"insert","lines":["o"]},{"start":{"row":59,"column":39},"end":{"row":59,"column":40},"action":"insert","lines":["r"]}],[{"start":{"row":59,"column":40},"end":{"row":59,"column":41},"action":"insert","lines":[" "],"id":326},{"start":{"row":59,"column":41},"end":{"row":59,"column":42},"action":"insert","lines":[":"]}],[{"start":{"row":59,"column":42},"end":{"row":59,"column":43},"action":"insert","lines":[" "],"id":327},{"start":{"row":59,"column":43},"end":{"row":59,"column":44},"action":"insert","lines":["r"]},{"start":{"row":59,"column":44},"end":{"row":59,"column":45},"action":"insert","lines":["e"]},{"start":{"row":59,"column":45},"end":{"row":59,"column":46},"action":"insert","lines":["d"]}],[{"start":{"row":59,"column":45},"end":{"row":59,"column":46},"action":"remove","lines":["d"],"id":328},{"start":{"row":59,"column":44},"end":{"row":59,"column":45},"action":"remove","lines":["e"]},{"start":{"row":59,"column":43},"end":{"row":59,"column":44},"action":"remove","lines":["r"]}],[{"start":{"row":59,"column":43},"end":{"row":59,"column":44},"action":"insert","lines":["r"],"id":329}],[{"start":{"row":59,"column":43},"end":{"row":59,"column":44},"action":"remove","lines":["r"],"id":330},{"start":{"row":59,"column":43},"end":{"row":59,"column":46},"action":"insert","lines":["red"]}],[{"start":{"row":59,"column":45},"end":{"row":59,"column":46},"action":"remove","lines":["d"],"id":331},{"start":{"row":59,"column":44},"end":{"row":59,"column":45},"action":"remove","lines":["e"]},{"start":{"row":59,"column":43},"end":{"row":59,"column":44},"action":"remove","lines":["r"]},{"start":{"row":59,"column":42},"end":{"row":59,"column":43},"action":"remove","lines":[" "]},{"start":{"row":59,"column":41},"end":{"row":59,"column":42},"action":"remove","lines":[":"]},{"start":{"row":59,"column":40},"end":{"row":59,"column":41},"action":"remove","lines":[" "]},{"start":{"row":59,"column":39},"end":{"row":59,"column":40},"action":"remove","lines":["r"]},{"start":{"row":59,"column":38},"end":{"row":59,"column":39},"action":"remove","lines":["o"]},{"start":{"row":59,"column":37},"end":{"row":59,"column":38},"action":"remove","lines":["o"]},{"start":{"row":59,"column":36},"end":{"row":59,"column":37},"action":"remove","lines":["l"]},{"start":{"row":59,"column":35},"end":{"row":59,"column":36},"action":"remove","lines":["c"]},{"start":{"row":59,"column":34},"end":{"row":59,"column":35},"action":"remove","lines":["d"]},{"start":{"row":59,"column":33},"end":{"row":59,"column":34},"action":"remove","lines":["u"]},{"start":{"row":59,"column":32},"end":{"row":59,"column":33},"action":"remove","lines":["o"]},{"start":{"row":59,"column":31},"end":{"row":59,"column":32},"action":"remove","lines":["r"]},{"start":{"row":59,"column":30},"end":{"row":59,"column":31},"action":"remove","lines":["g"]},{"start":{"row":59,"column":29},"end":{"row":59,"column":30},"action":"remove","lines":["k"]},{"start":{"row":59,"column":28},"end":{"row":59,"column":29},"action":"remove","lines":["c"]},{"start":{"row":59,"column":27},"end":{"row":59,"column":28},"action":"remove","lines":["a"]}],[{"start":{"row":59,"column":26},"end":{"row":59,"column":27},"action":"remove","lines":["b"],"id":332},{"start":{"row":59,"column":25},"end":{"row":59,"column":26},"action":"remove","lines":["="]},{"start":{"row":59,"column":24},"end":{"row":59,"column":25},"action":"remove","lines":["e"]},{"start":{"row":59,"column":23},"end":{"row":59,"column":24},"action":"remove","lines":["l"]},{"start":{"row":59,"column":22},"end":{"row":59,"column":23},"action":"remove","lines":["y"]},{"start":{"row":59,"column":21},"end":{"row":59,"column":22},"action":"remove","lines":["t"]},{"start":{"row":59,"column":20},"end":{"row":59,"column":21},"action":"remove","lines":["s"]},{"start":{"row":59,"column":19},"end":{"row":59,"column":20},"action":"remove","lines":[" "]}],[{"start":{"row":54,"column":48},"end":{"row":54,"column":49},"action":"insert","lines":["r"],"id":334},{"start":{"row":54,"column":49},"end":{"row":54,"column":50},"action":"insert","lines":["e"]},{"start":{"row":54,"column":50},"end":{"row":54,"column":51},"action":"insert","lines":["d"]}],[{"start":{"row":54,"column":51},"end":{"row":54,"column":52},"action":"remove","lines":["e"],"id":334},{"start":{"row":54,"column":50},"end":{"row":54,"column":51},"action":"remove","lines":["u"]},{"start":{"row":54,"column":49},"end":{"row":54,"column":50},"action":"remove","lines":["l"]},{"start":{"row":54,"column":48},"end":{"row":54,"column":49},"action":"remove","lines":["b"]}]]},"ace":{"folds":[],"scrolltop":1007.5,"scrollleft":7.2,"selection":{"start":{"row":57,"column":38},"end":{"row":57,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":61,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1678560040657}