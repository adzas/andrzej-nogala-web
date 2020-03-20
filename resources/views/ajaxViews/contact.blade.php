<style>

.header{
    /* margin-left: 500px; */
    opacity: 0;
    transition: all 2s ease-in-out;
}

</style>


<div class="contactSection">
    <div class="row">
        <div class="col-md-12 text-justify">

            <h2 class="header">Jestem na: </h2>
            <h4 class="header">
                <a href="{{ $contact['insta'] }}">Instagramie</a>
            </h4>
            <h4 class="header">
                <a href="{{ $contact['fb'] }}">Facebook'u</a>
            </h4>
            <h2 class="header mt-4">Kontakt: </h2>
            <h4 class="header">
                <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
            </h4>
        </div>
    </div>
</div>


<script>

    $(function(){
        animatedSection();
    })

    function animatedSection() {
        $('.header').each(function(){
            $(this).css({
                /* 'margin-left': '0px', */
                'opacity': 1,
            });
        })
    }

</script>