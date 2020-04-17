
    <div class="row">
        <div class="col-12 mb-4">
            @foreach ($categories as $category)
                <a 
                    class="category" 
                    onclick="changeContent('gallery', '{{ $category->id }}')"  
                    data-id="{{ $category->id }}"
                    href="#"
                    >
                    <span class="<?=isset($tag['id']) && $tag['id'] == $category->id ? 'activ' : '';?>">
                        #{{ $category->name }}, 
                    </span>
                </a>
            @endforeach
                <a 
                    class="category <?=!isset($tag['id']) ? 'activ' : '';?>" 
                    href="#" 
                    onclick="changeContent('gallery')" 
                    >
                    #Wszystkie 
                </a>
        </div>
        @foreach ($pictures as $img)
            <div class="col-sm-4 col-md-3 pb-5 text-center">
                <img 
                    id="img-{{ $img->id }}"
                    class="pictures" 
                    src="{{ $img->getFileLink('../') }}" 
                    alt="{{ $img->alt }}" 
                    data-description="{{ $img->description }}"
                    data-title="{{ $img->name }}"
                    onclick="showModal({{ $img->id }})"
                />
            </div>
        @endforeach
    </div>
