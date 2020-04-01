

    <div class="row">
        <div class="col-12 mb-4">
            @foreach ($categories as $category)
                <a 
                    class="category <?=isset($tag) && $tag == $category->id ? 'activ' : '';?>" 
                    onclick="changeContent('gallery', '{{ $category->id }}')"  
                    data-id="{{ $category->id }}"
                    href="#"
                    >
                    #{{ $category->name }}, 
                </a>
            @endforeach
                <a 
                    class="category <?=!isset($tag) ? 'activ' : '';?>" 
                    href="#" 
                    onclick="changeContent('gallery')" 
                    >
                    #Wszystkie 
                </a>
        </div>
        @foreach ($pictures as $img)
            <div class="col-sm-3 pb-5 text-center">
                <img class="pictures" src="{{ $img->getFileLink('../') }}" alt="{{ $img->alt }}" />
            </div>
        @endforeach
    </div>