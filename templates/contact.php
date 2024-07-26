<?php
/**
 * Template Name: Contact
 */
get_header();
?>
    <section>
        <div class="container max-w-[1920px] h-[800px] w-full">
            <div class="w-full h-[800px]">
                <div class="relative bg-cover bg-center w-full h-[800px] overlay overlay-dark" style="background-image: url(<?php echo get_template_directory_uri() . ('/assets/images/contact-banner.jpg')?>)">

                     <div class="h-[800px]">
                        <h1 class="text-white text-[60px] font-roboto font-semibold pt-[100px] text-center">Contact Us</h1>
                            <p class="text-white text-[30px] font-sans pt-[50px] max-w-[1109px] text-center mx-auto">
                                We'd love to hear from you! Whether you have a question about our services, want a cash offer on your property, or just want to say hi, feel free to reach out to us.
                            </p>

                        <div class="flex flex-col text-center pt-[25px]">
                            <div class="container max-w-[550px] mx-auto">
                                <div class="flex text-center justify-center pb-[30px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512" class=""><path fill="#FFD43B" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                    <p class="font-roboto text-white text-[25px] pl-[20px]">(309) 704-0164</p>
                                </div>
                                <div class="flex text-center justify-center pb-[30px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512" class=""><path fill="#FFD43B" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                                    <p class="font-roboto text-white text-[25px] pl-[20px]">217-600-2177</p>
                                </div>
                                <div class="flex text-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512" class=""><path fill="#FFD43B" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                                    <p class="font-roboto text-white text-[25px] pl-[20px]">contact@centrilinvestors.com</p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container max-w-full">
            <div class="bg-[#EAEAEA] h-[1000px]">
                <h1 class="font-roboto font-semibold text-black text-[30px] pt-[54px] text-center">Additional Information</h1>
                <p class="font-sans text-black text-[20px] pt-[30px] pb-[40px] text-center max-w-[997px] mx-auto">If you have any specific questions about selling your house, you can reach out to us directly. We specialize in quick sales for cash and can help you through the entire process with no fees or commissions.</p>
                <div class="container max-w-[1500px] h-[700px]">

                    <div class="grid grid-cols-2 gap-[100px]">
                        <div class="bg-white max-w-[700px] h-[700px] rounded-lg ">
                            <div class="pt-[54px]">
                                <form class="px-[70px]">
                                    <div class="mb-5 max-w-[560px]">
                                        <label for="email" class="block mb-[4.70px] text-[12px] font-roboto text-black ">Full Name</label>
                                        <input type="email" id="email" class="bg-[#D9D9D9] rounded-[12px] border border-[#D9D9D9] block w-full p-2.5 font-roboto text-black text-[15px] pl-[31px] pr-[31px]" placeholder="Enter Full Name" required />
                                    </div>
                                    <div class="mb-5 max-w-[560px]">
                                        <label for="email" class="block mb-[4.70px] text-[12px] font-roboto text-black ">Address</label>
                                        <input type="email" id="email" class="bg-[#D9D9D9] rounded-[12px] border border-[#D9D9D9] block w-full p-2.5 font-roboto text-black text-[15px] pl-[31px] pr-[31px]" placeholder="Enter address" required />
                                    </div>
                                    <div class="mb-5 max-w-[560px]">
                                        <label for="email" class="block mb-[4.70px] text-[12px] font-roboto text-black ">Phone</label>
                                        <input type="email" id="email" class="bg-[#D9D9D9] rounded-[12px] border border-[#D9D9D9] block w-full p-2.5 font-roboto text-black text-[15px] pl-[31px] pr-[31px]" placeholder="Enter Phone Number" required />
                                    </div>
                                    <div class="mb-5 max-w-[560px]">
                                        <label for="email" class="block mb-[4.70px] text-[12px] font-roboto text-black ">Email address</label>
                                        <input type="email" id="email" class="bg-[#D9D9D9] rounded-[12px] border border-[#D9D9D9] block w-full p-2.5 font-roboto text-black text-[15px] pl-[31px] pr-[31px]" placeholder="Enter Email address" required />
                                    </div>
                                    <div class="mb-5 max-w-[560px]">
                                        <label for="message" class="block mb-[4.70px] text-[12px] font-roboto text-black ">Message</label>
                                        <textarea id="message" rows="5" class="block p-2.5 w-full font-roboto bg-[#D9D9D9] rounded-[12px] border border-[#D9D9D9] text-black text-[15px] pt-[13px] pl-[31px] pr-[31px]" placeholder="Write your message"></textarea>
                                    </div>
                                    <button class="rounded-full py-[16px] pl-[20px] pr-[20px] bg-[#3A3A3A] text-white">
                                        <span class="flex justify-center items-center">
                                            <a href="#" class="pr-[62px]">Submit</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="12.5" viewBox="0 0 320 512"><path fill="#ffffff" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="max-w-[700px] h-[700px] ">
                            <h1 class="font-roboto font-semibold text-black text-[30px] pb-[50px]">Our Services Include</h1>
                            <div class="flex flex-col">
                                <div class="">
                                    <div class="flex pl-[30px] pr-[20px] pb-[10px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path fill="#FFD43B" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                                        <p class="font-sans text-black text-[20px] pl-[20px] pb-[10px]">Buying properties in any condition</p>
                                    </div>
                                    <div class="flex pl-[30px] pr-[20px] pb-[10px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path fill="#FFD43B" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                                        <p class="font-sans text-black text-[20px] pl-[20px] pb-[10px]">Providing fair cash offers</p>
                                    </div>
                                    <div class="flex pl-[30px] pr-[20px] pb-[10px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path fill="#FFD43B" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                                        <p class="font-sans text-black text-[20px] pl-[20px] pb-[10px]">Covering all closing costs</p>
                                    </div>
                                    <div class="flex pl-[30px] pr-[20px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><path fill="#FFD43B" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                                        <p class="font-sans text-black text-[20px] pl-[20px]">Flexible closing schedules</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
