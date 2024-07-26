<section id="blogs" class="py-[100px]">
    <div class="container max-w-[1500px] w-full">
        <div class="grid grid-cols-4 gap-5">
            <?php for( $i = 0; $i < 14; $i++ ): ?>
                <div class="w-[350px] h-[375px] bg-[#FFFFFF] rounded-[12px] border border-gray-300">
                    <img src="https://picsum.photos/810" alt="" class="h-[150px] w-[350px] object-cover border-solid rounded-t-[12px]">
                    <h2 class="font-roboto text-black text-[25px] font-semibold mt-[20px] ml-[21px] mr-[26px]">Blog Title</h2>
                    <p class="font-sans text-black text-[18px] pt-[15px] pb-[54px] ml-[21px] mr-[26px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>