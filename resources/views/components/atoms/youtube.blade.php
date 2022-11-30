<iframe 
    width="1024px" height="540px" class="z-0 rounded-[36px]"
    src="{{ $src }}" id="youtube"
    title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
</iframe>
<button 
    id="playbtn" class="playbtn z-1 rounded-[42px] flex flex-col items-start 
    px-[19px] py-[18px] w-[83px] h-[84px] absolute bg-[#FFFFFF]">
    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="47" fill="#F06623" class="bi bi-play-fill" viewBox="0 0 16 16">
        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
    </svg>
</button>

<script type="text/javascript">
$(document).ready(function(){
    $(document).on("click",".playbtn", function(e) {
        e.preventDefault();
        $("#youtube")[0].src += "?autoplay=1";
        $("#youtube").show();
        $(".playbtn").hide();
    });
});
</script>