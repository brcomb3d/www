<?php get_header(); ?>
<?php
$coupons = (new \Review\Repository\Coupon)->getNoExpired();
?>

<main id="content">
    <!-- Table Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-0 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">

            <!-- Header -->
            <div class="w-full md:px-12 py-4 text-center mb-10">

                <h1 class="mx-auto text-3xl font-bold">
                    Aproveite Ofertas Exclusivas com Nossos Cupons de Desconto!
                </h1>

                <p class="mx-auto text-sm text-gray-600 dark:text-neutral-400">
                    Atualizamos regularmente nossos cupons para garantir que você tenha acesso às ofertas mais recentes
                    e vantajosas.
                </p>
            </div>
            <!-- End Header -->

            <?php
            foreach ($coupons as $coupon) :
                $stringOff = $coupon->getPercentage() ? "{$coupon->getPercentage()}" : "PRO";
                $urlOffer = base64_encode($coupon->getUrl());
                $cupomOffer = base64_encode($coupon->getCode());
                $svgLogo = $coupon->getStore()->getLogoSvg() ? $coupon->getStore()->getLogoSvg() : '<svg class="shrink-0" version="1.1" xmlns="http://www.w3.org/2000/svg"   xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 248.774 248.774"   xml:space="preserve">   <g>  <g> <g>   <path d="M219.179,51.502H29.6C13.277,51.502,0,63.539,0,78.335v92.104c0,14.796,13.277,26.833,29.6,26.833h189.577 c16.318,0,29.597-12.037,29.597-26.833V78.335C248.774,63.539,235.495,51.502,219.179,51.502z M233.557,170.439 c0,6.404-6.455,11.616-14.38,11.616H29.6c-7.931,0-14.383-5.212-14.383-11.616V78.335c0-6.404,6.452-11.616,14.383-11.616 h189.577c7.926,0,14.38,5.212,14.38,11.616V170.439z" />   <rect x="67.622" y="104.742" width="15.217" height="13.097" />   <rect x="67.622" y="157.127" width="15.217" height="13.097" />   <rect x="67.622" y="78.548" width="15.217" height="13.097" />   <rect x="67.622" y="130.936" width="15.217" height="13.094" />   <path d="M152.026,103.507c0-11.874-9.858-21.611-21.616-21.611c-11.874,0-21.613,9.62-21.613,21.611 c0,12.115,9.741,21.613,21.613,21.613C142.168,125.12,152.026,115.503,152.026,103.507z M121.029,103.507 c0-5.225,4.276-9.379,9.379-9.379s9.379,4.157,9.379,9.379c0,5.227-4.276,9.381-9.379,9.381 C125.305,112.888,121.029,108.731,121.029,103.507z" />   <path d="M186.189,124.41c-11.874-0.043-21.651,9.544-21.697,21.537c-0.041,12.11,9.665,21.649,21.542,21.695 c11.76,0.043,21.646-9.546,21.692-21.537C207.767,134.227,197.947,124.45,186.189,124.41z M186.108,155.407 c-5.103,0-9.376-4.162-9.376-9.384c0-5.227,4.276-9.381,9.376-9.381c5.108,0,9.381,4.157,9.381,9.381 C195.492,151.248,191.216,155.407,186.108,155.407z" />   <rect x="109.054" y="117.595"  transform="matrix(0.4696 -0.8829 0.8829 0.4696 -26.7873 205.8196)"  width="97.7" height="15.217" /> </g>  </g>   </g>   </svg>';
                $html = <<<HTML
                    <!-- Card -->
                    <div class="mt-2 p-0 rounded-lg border border-gray-200 bg-white text-black shadow-sm  disabled:opacity-50 disabled:pointer-events-none">
                           
                    <div class="relative flex flex-col md:flex-row md:items-center overflow-hidden md:max-h-40">
                                
                            
                                <div class="md:w-40 md:h-40 w-full bg-lime-400 md:rounded-r-md md:rounded-l-md  rounded-md rounded-b-none rounded-bl-none h-20 mb-4">

                                    <div class="md:h-28 md:w-28 md:p-4 md:mt-6 md:ml-6 md:flex object-center h-32 w-20 ml-24 ">
                                        {$svgLogo}
                                    </div>

                                </div>


                                <div class="min-h-24 justify-center md:w-3/5 w-full md:p-8 md:px-4 px-4">
                                    
                                        <p class="w-full text-neutral-700 mb-3 dark:text-neutral-300 truncate overflow-hidden hs-tooltip hs-tooltip-toggle">
                                            <a href="{$coupon->getLink()}" target="_blank">
                                                {$coupon->getTitle()}
                                            </a>
                                            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible   opacity-0 transition-opacity block relative invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                                            {$coupon->getTitle()}
                                            </span>
                                        </p>
                                        
                                        <p class="select-none mt-1  text-sm text-zinc-950 dark:text-neutral-500 mb-3" >
                                            <span class="hs-tooltip hs-tooltip-toggle px-8 py-2  text-base rounded-lg border border-gray-200 bg-white text-black shadow-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 text-left">
                                                
                                                Cupom {$stringOff}{$coupon->getCodeSecret()}

                                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible   opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                                                    Clique no botão Usar Cupom
                                                </span>
                                            </span>
                                        </p>

                                        <p class="md:mt-1 text-sm mt-6  text-neutral-500 dark:text-neutral-300">
                                            <a href="{$coupon->getStore()->getLink()}" target="_blank">
                                                Loja {$coupon->getStore()->getTitle()}
                                            </a>
                                        </p>
                                        <p class="md:mt-1 mt-4 text-sm text-neutral-500 dark:text-neutral-300">
                                            <a href="{$coupon->getLink()}" target="_blank">
                                                Válido até {$coupon->getEndDate('d/m/Y')}
                                            </a>
                                        </p>
                                </div>

                                <div class="md:w-52 md:h-20 flex align-baseline md:pl-4 relative  right-0 p-4">
                                    <button type="button"
                                        class="w-full group text-center p-2 px-5 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none"
                                        aria-haspopup="dialog" aria-expanded="false" data-hs-overlay="#modal-coupon"
                                        data-coupon-code="{$cupomOffer}"
                                        data-coupon-url="{$urlOffer}"
                                        data-store-name="{$coupon->getStore()->getTitle()}"
                                        onclick="openModal(this)">
                                        Usar Cupom
                                    </button>
                                </div>
                            </div>
                        
                    </div>
                    <span class="mx-16 my-8 block w-full"></span>
                    <!-- End Card -->
                HTML;
                echo $html;
            endforeach;
            ?>


        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->


    <!-- modal -->
    <div id="modal-coupon"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog"
        tabindex="-1" aria-labelledby="modal-coupon-label">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
                <div class="absolute top-2 end-2">
                    <button type="button" id="close-modal"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                        aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>

                <div class="p-4 sm:p-10 text-center overflow-y-auto">
                    <!-- Icon -->
                    <span
                        class="mb-4 inline-flex justify-center items-center size-[46px] rounded-full border-4 border-lime-50 bg-lime-400 text-lime-500 dark:bg-lime-700 dark:border-lime-600 dark:text-lime-100">
                        <svg class="shrink-0 size-9" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 248.774 248.774"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M219.179,51.502H29.6C13.277,51.502,0,63.539,0,78.335v92.104c0,14.796,13.277,26.833,29.6,26.833h189.577
c16.318,0,29.597-12.037,29.597-26.833V78.335C248.774,63.539,235.495,51.502,219.179,51.502z M233.557,170.439
c0,6.404-6.455,11.616-14.38,11.616H29.6c-7.931,0-14.383-5.212-14.383-11.616V78.335c0-6.404,6.452-11.616,14.383-11.616
h189.577c7.926,0,14.38,5.212,14.38,11.616V170.439z" />
                                        <rect x="67.622" y="104.742" width="15.217" height="13.097" />
                                        <rect x="67.622" y="157.127" width="15.217" height="13.097" />
                                        <rect x="67.622" y="78.548" width="15.217" height="13.097" />
                                        <rect x="67.622" y="130.936" width="15.217" height="13.094" />
                                        <path d="M152.026,103.507c0-11.874-9.858-21.611-21.616-21.611c-11.874,0-21.613,9.62-21.613,21.611
c0,12.115,9.741,21.613,21.613,21.613C142.168,125.12,152.026,115.503,152.026,103.507z M121.029,103.507
c0-5.225,4.276-9.379,9.379-9.379s9.379,4.157,9.379,9.379c0,5.227-4.276,9.381-9.379,9.381
C125.305,112.888,121.029,108.731,121.029,103.507z" />
                                        <path d="M186.189,124.41c-11.874-0.043-21.651,9.544-21.697,21.537c-0.041,12.11,9.665,21.649,21.542,21.695
c11.76,0.043,21.646-9.546,21.692-21.537C207.767,134.227,197.947,124.45,186.189,124.41z M186.108,155.407
c-5.103,0-9.376-4.162-9.376-9.384c0-5.227,4.276-9.381,9.376-9.381c5.108,0,9.381,4.157,9.381,9.381
C195.492,151.248,191.216,155.407,186.108,155.407z" />

                                        <rect x="109.054" y="117.595"
                                            transform="matrix(0.4696 -0.8829 0.8829 0.4696 -26.7873 205.8196)"
                                            width="97.7" height="15.217" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <!-- End Icon -->
                    <div class="inline-flex text-left w-full text-xs  text-gray-600">
                        Cupom de Desconto da loja <span class="ml-1" id="store-modal-label"></span>
                    </div>
                    <h3 id="coupon-modal-label"
                        class="mt-0 w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-2xl font-medium rounded-lg border border-gray-200 bg-white text-black shadow-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 ">
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                        Clicando no botão abaixo, o código do cupom será copiado e você será redirecionado
                        para a página da promoção!
                    </p>

                    <div class="mt-6 flex justify-center gap-x-4">
                        <button type="button" id="buttonActiveModal" data-action-activatecoupon=""
                            class="group w-full inline text-center mx-auto  py-2 px-3 bg-lime-400 font-medium text-sm text-black rounded-md focus:outline-none">
                            Ativar Cupom
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->



    <script>
        // open modal
        function openModal(button) {
            const modalId = button.getAttribute('data-hs-overlay');
            const couponCode = button.getAttribute('data-coupon-code');
            const couponUrl = button.getAttribute('data-coupon-url');
            const storeName = button.getAttribute('data-store-name');
            const buttonActiveModal = document.querySelector('#buttonActiveModal');
            document.getElementById('coupon-modal-label').innerText = atob(couponCode);
            document.getElementById('store-modal-label').innerText = storeName;
            buttonActiveModal.setAttribute('onclick', `window.open(atob('${couponUrl}'))`);
        }
        // end open modal

        // close modal
        const closeBtn = document.querySelector('#close-modal');
        closeBtn.addEventListener("click", closeModal);
        function closeModal() {
            const modalId = document.querySelector('#modal-coupon');
            HSOverlay.close(modalId);
        }
        // end close modal

        // close modal
        const buttonActiveModal = document.querySelector('#buttonActiveModal');
        closeBtn.addEventListener("click", goOfferCoupon);
        function goOfferCoupon() {
            const modalId = document.querySelector('#modal-coupon');
            HSOverlay.close(modalId);
        }
        // end close modal


    </script>
</main>

<?php get_footer(); ?>