<div class="container mx-auto flex flex-col justify-center items-center isolate">
    <iframe
        class="z-0 rounded-[36px] lg:w-[1024px] lg:h-[540px] sm:w-[372px] h-[200px]"
        src="{{ $src }}" id="youtube"
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    <button 
        id="playbtn" class="playbtn z-1 rounded-[42px] flex flex-col justify-center items-center 
        px-[19px] py-[18px] w-[83px] h-[84px] absolute bg-[#FFFFFF]">
        <i class="fa-solid fa-play" style="color:#F06623; width: 46px; height:47px"></i>
    </button>
</div>

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