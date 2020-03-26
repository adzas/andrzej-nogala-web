

<div class="container-fluid">
    <div class="row">
        @foreach ($pictures as $img)
            <div class="col-sm-3 pb-5">
                <img class="pictures" src="{{ $img->getFileLink('../') }}" alt="{{ $img->alt }}" />
            </div>
        @endforeach
    </div>
</div>

<script>
    $(function(){
        $('.container-fluid').css('height', '1000px');
    })
</script>