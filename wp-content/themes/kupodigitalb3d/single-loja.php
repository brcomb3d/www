<?php get_header(); ?>

<?php
global $post;
$store_rascore = getValueCustomPostTypeReview($post->ID, 'ra_score', 'store');
$store_logosvg = getValueCustomPostTypeReview($post->ID, 'logosvg', 'store');
?>
<main id="content">

    <article class="max-w-5xl flex px-4 xl:px-0 pt-24 mx-auto" id="single-loja">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center text-zinc-950 dark:text-white">

            <div class="">
                <h1 class="block text-3xl font-bold sm:text-4xl lg:text-6xl lg:leading-tight ">
                    <?php the_title(); ?>
                </h1>
                <p class="mt-3 text-lg">
                    <?php the_content(); ?>
                </p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-zinc-950 dark:bg-white dark:text-zinc-950 text-white hover:bg-zinc-900 disabled:opacity-50 disabled:pointer-events-none"
                        rel="nofollow" target="_blank"
                        href="<?php echo (getValueCustomPostTypeReview($post->ID, 'url', 'store')); ?>">
                        Acessar agora
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                    <?php /* 
     <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-zinc-950 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
         href="#">
         Cupons
     </a>
     */ ?>
                </div>
                <!-- End Buttons -->


                <!-- Review -->
                <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">


                    <!-- Review -->
                    <div class="py-5">
                        <div class="flex space-x-1">
                            <?php echo (
                                getStarRating($store_rascore)
                            ); ?>
                        </div>

                        <p class="mt-3 text-sm text-zinc-950 dark:text-neutral-200">
                            <span class="font-bold"><?php echo ($store_rascore ? $store_rascore : 0); ?></span>/10 -
                            Índice RA
                        </p>

                        <div class="mt-3">
                            <!-- Logo -->
                            <svg class="h-auto w-20 dark:fill-white fill-zinc-950" viewBox="0 0 140 24" version="1.1"
                                id="svg2" sodipodi:docname="reclameaqui.svg"
                                inkscape:version="1.3.2 (091e20ef0f, 2023-11-25)"
                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                <defs id="defs2" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.13043 8.0083C9.23369 7.24794 9.15178 6.67071 8.88599 6.29228C8.61688 5.91265 8.17061 5.72279 7.55049 5.72279H7.34066L6.73628 10.2936C7.4696 10.2767 8.02704 10.0891 8.40493 9.72192C8.78963 9.35464 9.03296 8.78875 9.13043 8.0083ZM13.4199 10.5215C12.7784 11.3076 11.8892 11.9433 10.7543 12.4161L13.4199 20.9061H7.75784L6.31798 13.493L5.33903 20.9061H0L2.52539 1.74625H8.66962C10.7498 1.74625 12.3153 2.27408 13.3762 3.33425C14.4291 4.39322 14.8407 5.83284 14.603 7.65226C14.4527 8.76847 14.0579 9.72975 13.4199 10.5215ZM21.8339 12.4946C21.9336 11.7365 21.8877 11.1639 21.6993 10.7787C21.5098 10.3991 21.17 10.2127 20.6935 10.2127C20.3177 10.2127 19.988 10.3991 19.7032 10.7719C19.4251 11.1437 19.175 11.7165 18.9609 12.4946H21.8339ZM25.0983 8.76285C25.9473 9.87583 26.2219 11.548 25.9303 13.7827C25.8922 14.0444 25.8699 14.2455 25.8451 14.3847C25.8238 14.5161 25.7958 14.6396 25.7611 14.7531H18.6637L18.6401 14.9384C18.5089 15.9254 18.5267 16.6352 18.6917 17.0653C18.8632 17.4956 19.1974 17.7145 19.7032 17.7145C20.08 17.7145 20.3951 17.5864 20.6608 17.3404C20.9288 17.0946 21.1476 16.716 21.3147 16.2052H25.4C25.0018 17.784 24.2326 19.0216 23.0831 19.928C21.9392 20.8319 20.5554 21.2822 18.9552 21.2822C17.0645 21.2822 15.6896 20.6759 14.8283 19.4574C13.9649 18.2344 13.6835 16.4982 13.9807 14.2455C14.2823 11.9792 15.0246 10.2194 16.2234 8.974C17.4155 7.72074 18.9451 7.09632 20.7954 7.09632C22.8139 7.09632 24.2438 7.65226 25.0983 8.76285ZM33.6603 20.6938C33.2869 20.8948 32.8843 21.0431 32.466 21.1385C32.0466 21.2363 31.5746 21.2822 31.063 21.2822C29.3316 21.2822 28.0555 20.6545 27.2201 19.3888C26.3913 18.1266 26.1199 16.3937 26.4071 14.1893C26.6941 12.0331 27.4364 10.3071 28.6319 9.01897C29.8262 7.72977 31.2818 7.09632 32.984 7.09632C33.454 7.09632 33.8912 7.14231 34.2816 7.22314C34.6774 7.31973 35.0475 7.44673 35.3817 7.63318L34.8389 11.7401C34.6864 11.6401 34.5249 11.566 34.3578 11.5188C34.1873 11.4705 34.0035 11.4491 33.8016 11.4491C33.2981 11.4491 32.8563 11.6918 32.494 12.1814C32.1306 12.6699 31.8907 13.3392 31.7786 14.1893C31.6654 15.0417 31.7213 15.6886 31.9445 16.1186C32.1621 16.5521 32.5523 16.7734 33.1029 16.7734C33.2588 16.7734 33.4315 16.7487 33.6166 16.6981C33.8016 16.6522 33.999 16.5869 34.2098 16.5005L33.6603 20.6938ZM34.8299 20.9061L37.5852 0H42.442L39.689 20.9061H34.8299ZM49.3444 14.1893C49.4699 13.2449 49.4644 12.5227 49.3208 12.0331C49.1828 11.5334 48.9127 11.2874 48.5213 11.2874C48.1355 11.2874 47.8091 11.5334 47.5457 12.0219C47.2821 12.5126 47.0802 13.2358 46.958 14.1893C46.8325 15.1461 46.8346 15.8616 46.968 16.3444C47.1005 16.8228 47.365 17.0653 47.7554 17.0653C48.1568 17.0653 48.4854 16.8205 48.7557 16.3241C49.0292 15.8266 49.2266 15.1169 49.3444 14.1893ZM50.3379 7.46913H55.1948L53.4241 20.9061H48.5705L48.7646 19.4282C48.1982 20.075 47.641 20.5399 47.0859 20.8399C46.5386 21.1363 45.9577 21.2822 45.3577 21.2822C44.0233 21.2822 43.0588 20.6624 42.469 19.4169C41.8758 18.1749 41.7266 16.4309 42.0171 14.1893C42.3176 11.9309 42.9221 10.188 43.8315 8.95372C44.7398 7.71171 45.8725 7.09632 47.2283 7.09632C47.8394 7.09632 48.3766 7.24231 48.852 7.5354C49.3152 7.82848 49.7525 8.29235 50.1462 8.9269L50.3379 7.46913ZM54.8729 20.9061L56.6436 7.46913H61.311L61.0507 9.46367C61.6059 8.69437 62.217 8.12498 62.8787 7.75097C63.5425 7.3872 64.2861 7.20406 65.108 7.20406C65.8761 7.20406 66.4862 7.3883 66.9437 7.76443C67.3958 8.13511 67.685 8.7023 67.8129 9.46367C68.2895 8.69437 68.8469 8.12498 69.4792 7.75097C70.1106 7.3872 70.8429 7.20406 71.6705 7.20406C72.6955 7.20406 73.4334 7.50618 73.892 8.12046C74.3485 8.73151 74.5021 9.63095 74.3462 10.8034L73.0163 20.9061H68.1549L69.1856 13.0831C69.2449 12.6664 69.2057 12.3542 69.0868 12.1522C68.9657 11.95 68.7481 11.8546 68.4453 11.8546C68.165 11.8546 67.9295 11.9647 67.7412 12.2005C67.556 12.4307 67.4327 12.754 67.3766 13.1618L66.3573 20.9061H61.5285L62.5547 13.0831C62.614 12.6664 62.5803 12.3542 62.4603 12.1522C62.337 11.95 62.1195 11.8546 61.8155 11.8546C61.524 11.8546 61.2841 11.9647 61.0877 12.2005C60.8994 12.4307 60.7759 12.754 60.7233 13.1618L59.7073 20.9061H54.8729ZM82.6537 12.4946C82.7523 11.7365 82.7075 11.1639 82.5146 10.7787C82.3273 10.3991 81.9943 10.2127 81.5143 10.2127C81.1375 10.2127 80.809 10.3991 80.5274 10.7719C80.2438 11.1437 79.9937 11.7165 79.7784 12.4946H82.6537ZM85.9191 8.76285C86.7659 9.87583 87.0439 11.548 86.7514 13.7827C86.7177 14.0444 86.6918 14.2455 86.6684 14.3847C86.6481 14.5161 86.6144 14.6396 86.5819 14.7531H79.4835L79.4599 14.9384C79.3298 15.9254 79.3478 16.6352 79.5125 17.0653C79.6819 17.4956 80.0172 17.7145 80.5274 17.7145C80.9043 17.7145 81.216 17.5864 81.4806 17.3404C81.7453 17.0946 81.9673 16.716 82.1355 16.2052H86.2231C85.825 17.784 85.0489 19.0216 83.9018 19.928C82.7568 20.8319 81.3809 21.2822 79.7728 21.2822C77.8831 21.2822 76.5083 20.6759 75.6482 19.4574C74.7837 18.2344 74.5043 16.4982 74.8004 14.2455C75.102 11.9792 75.8432 10.2194 77.0455 8.974C78.232 7.72074 79.7627 7.09632 81.6164 7.09632C83.6315 7.09632 85.0647 7.65226 85.9191 8.76285Z"
                                    id="path1" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M93.9179 14.2196H96.0411L95.9012 7.1177L93.9179 14.2196ZM99.6203 1.74633L101.282 20.9062H96.077L96.0411 18.0885H92.8862L92.1049 20.9062H86.8948L93.605 1.74633H99.6203ZM111.287 11.2134C111.551 9.1998 111.603 7.83539 111.435 7.10756C111.272 6.38213 110.873 6.02048 110.22 6.02048C109.565 6.02048 109.059 6.38434 108.699 7.12222C108.34 7.85668 108.035 9.21897 107.769 11.2134C107.505 13.1977 107.456 14.5578 107.624 15.2912C107.795 16.0233 108.198 16.3938 108.856 16.3938C109.505 16.3938 110.006 16.0322 110.356 15.309C110.709 14.5891 111.023 13.2236 111.287 11.2134ZM115.757 3.97433C116.781 5.70942 117.082 8.16552 116.664 11.3414C116.42 13.1696 116 14.7588 115.401 16.1008C114.807 17.4507 114.016 18.5882 113.037 19.5125L115.076 21.9517L110.532 24.0001L108.831 21.2554C108.771 21.2554 108.679 21.2632 108.55 21.2722C108.425 21.279 108.329 21.2823 108.267 21.2823C105.968 21.2823 104.304 20.4187 103.28 18.6848C102.248 16.9588 101.939 14.5095 102.354 11.3414C102.774 8.17566 103.721 5.72076 105.209 3.98446C106.69 2.24163 108.57 1.37012 110.837 1.37012C113.108 1.37012 114.744 2.24163 115.757 3.97433ZM117.345 14.0547L118.968 1.74633H124.311L122.622 14.5644C122.549 15.1283 122.593 15.5393 122.76 15.8065C122.926 16.0704 123.214 16.2052 123.634 16.2052C124.057 16.2052 124.393 16.0704 124.627 15.8065C124.866 15.5393 125.015 15.1283 125.09 14.5644L126.777 1.74633H132.144L130.523 14.0547C130.197 16.5522 129.423 18.3861 128.209 19.5439C126.992 20.7085 125.252 21.2823 122.963 21.2823C120.693 21.2823 119.107 20.7085 118.205 19.5439C117.306 18.3861 117.018 16.5522 117.345 14.0547ZM131.424 20.9062L133.941 1.74633H139.286L136.762 20.9062H131.424Z"
                                    id="path2" />
                            </svg>
                            <!-- End Logo -->
                        </div>
                    </div>
                    <!-- End Review -->
                </div>
                <!-- End Review -->
            </div>
            <!-- End Col -->

            <div class="relative bg-black dark:bg-white">

                <?php if($store_logosvg):?>
                <div class="svg-store p-20">
                    <?php echo ($store_logosvg); ?>
                </div>
                <?php endif; ?>

                <?php if(!$store_logosvg):?>
                <img class="w-full min-w-96 rounded-md"
                    src="<?php echo (getValueCustomPostTypeReview($post->ID, 'logo', 'store')); ?>" alt="Logo" />
                <?php endif; ?>
                <div
                    class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0">
                </div>

                <!-- SVG-->
                <div class="absolute bottom-0 start-0">
                    <svg class="w-2/3 ms-auto h-auto text-white dark:text-neutral-900" width="630" height="451"
                        viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                        <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                        <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                        <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                        <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                        <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                        <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                        <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                        <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                        <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                        <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                        <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                        <rect x="581" width="49" height="49" fill="currentColor" />
                        <rect x="581" width="49" height="64" fill="currentColor" />
                        <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                        <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                        <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                    </svg>
                </div>
                <!-- End SVG-->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->

    </article>

    <!-- Hero -->

    <div class="w-full">
        <div class="mx-auto">
            <div class="max-w-4xl text-left mx-auto">
                <div class="mt-5 p-10">
                    <p class="text-lg text-zinc-950 dark:text-white">
                        <?php echo (nl2br(getValueCustomPostTypeReview($post->ID, 'description', 'store'))); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->

</main>


<?php get_footer(); ?>