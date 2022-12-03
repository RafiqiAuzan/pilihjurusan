<div class="fixed bottom-0 w-full">
   <div class="container relative mx-auto gap-y-1">
        <div class="absolute right-0 bottom-8 pb-20">
            <div class="bg-green-600 transition-all hover:bg-green-700 hover:scale-125 text-light-100 h-[4.25rem] w-[4.25rem] rounded-full justify-center items-center flex">
                <a rel="nofollow" href="https://wa.me/6282298881920?text=Hai%20Minju!%20Aku%20ingin%20Bertanya" target="_blank">
                    <i class="text-4xl fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
        <div id="to-top-button" class="absolute right-0 bottom-8">
            <div class="bg-base-800 transition-all hover:bg-base-900 hover:scale-125 text-light-100 h-[4.25rem] w-[4.25rem] rounded-full justify-center items-center flex">
                <button onclick="goToTop()" title="Go To Top">
                    <i class="text-4xl far fa-circle-up"></i>
                </button>
            </div>
        </div>
   </div>
</div>

<script>
    // Start To Top Button
    var toTopButton = document.getElementById("to-top-button");

    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function () {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            toTopButton.classList.remove("hidden");
        } else {
            toTopButton.classList.add("hidden");
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function goToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
// End To Top Button
</script>
