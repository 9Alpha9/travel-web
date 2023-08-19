<div class="mt-10 border-t border-gray-300 review__container">
    <span class="inline-block mt-8 text-lg font-semibold">Review Dari Tempat Wisata</span>
    <div class="flex flex-row items-center gap-2 py-6 review__component">
        <div class="text-2xl review__items rate__number">4,7</div>
        <div class="flex-col rate__information__numb">
            <div class="text-xs font-medium review__items review__text">Penilaian dari :</div>
            <div class="text-lg font-bold review__items rating__rate">100 Pelanggan</div>
        </div>
    </div>
    <div
        class="flex flex-row gap-5 p-6 my-10 border border-gray-200 rounded-md review__component__comments comments__container">
        <div class="flex flex-col review__header w-96">
            <div class="flex flex-row gap-4 review__comments__items">
                <figure class="object-cover w-16 h-16 rounded-full">
                    <img src="{{ asset('asset/img/avatar.png') }}" alt="">
                </figure>
                <div class="overflow-hidden font-semibold profileName text-ellipsis whitespace-nowrap w-[10rem]">
                    <h1 class="pt-4 overflow-hidden text-ellipsis">Sophia Rojudhan</h1>
                </div>
            </div>
        </div>
        <div class="review__comments__items">
            <div class="flex flex-row items-center justify-between rateShow">
                <div class="rate">5,0/5</div>
                <div class="font-semibold review__comments__items date__review text-text-primary">Jumat, 20 Feb 2023
                </div>
            </div>
            <div class="review__text py-7">
                <span class="postComment__audience">
                    Saya baru saja mengunjungi tempat wisata ini bersama keluarga, dan kami semua sangat senang.
                    Fasilitas yang disediakan sangat lengkap, mulai dari area bermain anak-anak hingga tempat makan yang
                    lezat. Sangat cocok untuk liburan keluarga.
                </span>
                <span class="block mt-3 replyComment__cta">
                    <button type="submit" class="underline text-gray-950">Reply</button>
                </span>
            </div>

            <div class="w-full bg-gray-200 rounded-md text-gray-950 replyComments__container">
                <div class="flex flex-row gap-5 p-4 m-3 replyComment">
                    <div class="ownerWisata__reply">
                        <div class="flex flex-row gap-4 ownerProfile">
                            <figure class="object-cover w-10 h-10 rounded-full">
                                <img src="{{ asset('asset/img/avatar.png') }}" alt="">
                            </figure>
                            <div class="flex flex-col ownerProfile__status">
                                <span
                                    class="block overflow-hidden ownerName whitespace-nowrap text-ellipsis w-[10rem] font-semibold">Lorna
                                    Fernandez </span>
                                <span class="status">Owner</span>
                            </div>
                        </div>
                    </div>
                    <span class="block replyComments__coment">
                        <textarea name="commentPost" placeholder="Reply" id="commentPost" cols="250" rows="10"
                            class="w-full p-3 rounded-md h-[10rem]" type=hidden></textarea>
                        <div class="mt-3 buttonSend__post">
                            <button type="submit"
                                class="p-2.5 px-10 text-white rounded-md bg-button-add-primary hover:bg-primary-birent-hover duration-150">Reply</button>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-gray-300 postContainer">
        <div class="my-[4rem] postComment__item bg-gray-100 p-5 rounded-md">
            <div class="flex gap-10 postComment">
                <div class="flex flex-row gap-5 profilePictures">
                    <figure class="block object-cover w-16 h-16 rounded-full">
                        <img src="{{ asset('asset/img/avatar.png') }}" alt="" srcset="">
                    </figure>
                    <div class="flex flex-col overflow-hidden profileSelected w-[10rem]">
                        <span class="block w-[10rem] profileName__post overflow-hidden text-ellipsis whitespace-nowrap">
                            <h1 class="overflow-hidden font-bold text-ellipsis">Rhodri Roberson Norris Newman</h1>
                        </span>
                        <span class="text-sm datePost">Jumat, 20 Feb 2023</span>
                    </div>
                </div>
                <div class="w-full commentPost__container">
                    <div class="flex flex-col justify-between postItems__flex">
                        <span class="block commentPost__text">
                            <textarea name="commentPost" placeholder="Tulis ulasan" id="commentPost" cols="250"
                                rows="10" class="w-full p-3 rounded-md h-[10rem]" type=hidden></textarea>
                        </span>
                        <div class="mt-6 postRate__cta">
                            <span class="block">
                                <h1>Ratting Untuk Tempat Wisata Ini:</h1>
                            </span>
                            <div class="flex flex-row items-center justify-between ratePost">
                                <span class="block rattingStars">
                                    <fieldset class="rate">
                                        <input type="radio" id="rating10" name="rating" value="10" /><label
                                            for="rating10" title="5 stars"></label>
                                        <input type="radio" id="rating9" name="rating" value="9" /><label class="half"
                                            for="rating9" title="4 1/2 stars"></label>
                                        <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8"
                                            title="4 stars"></label>
                                        <input type="radio" id="rating7" name="rating" value="7" /><label class="half"
                                            for="rating7" title="3 1/2 stars"></label>
                                        <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6"
                                            title="3 stars"></label>
                                        <input type="radio" id="rating5" name="rating" value="5" /><label class="half"
                                            for="rating5" title="2 1/2 stars"></label>
                                        <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4"
                                            title="2 stars"></label>
                                        <input type="radio" id="rating3" name="rating" value="3" /><label class="half"
                                            for="rating3" title="1 1/2 stars"></label>
                                        <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2"
                                            title="1 star"></label>
                                        <input type="radio" id="rating1" name="rating" value="1" /><label class="half"
                                            for="rating1" title="1/2 star"></label>

                                    </fieldset>
                                </span>
                                <div class="buttonSend__post">
                                    <button type="submit"
                                        class="p-2.5 px-10 text-white rounded-md bg-button-add-primary hover:bg-primary-birent-hover duration-150">Post
                                        Ulasan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>