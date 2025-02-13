<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    
    <!-- SEO최적화 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" /> 
    <meta property="og:locale" content="ko_KR" /> 
    <meta property="og:site_name" content="" /> 
    <meta property="og:url" content="//pawfectwave-team-react.vercel.app"/> 
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="powfectwave" /> 
    <meta property="og:description" content="반려동물의 마지막을 함께하는 반려동물 장례 서비스 플랫폼" /> 
    <meta property="og:image" content="/img/svg/oq.svg" />

    <title>PawpectWave</title>
     <!-- 파비콘 -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/svg/logo.svg" />
    <link rel="apple-touch-icon" href="/img/svg/logo.svg" />
    <link rel="apple-touch-icon-precomposed" href="/img/svg/logo.svg">
    <meta name="msapplication-TileImage" content="" size="270x270" />
    <!-- 폰트 CDN -->
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Dongle&family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="//fastly.jsdelivr.net/gh/projectnoonnu/2412-1@1.0/Ownglyph_corncorn-Rg.woff2">
    <link rel="preconnect" href="//fastly.jsdelivr.net/gh/projectnoonnu/2408-3@1.0/Paperlogy-8ExtraBold.woff2">

    <!-- 리셋 CDN -->
    <link href="//cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- 플러그인 -->
    <link rel="stylesheet"href="//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 


    <link rel="stylesheet" href="/css/common.css">

    <!-- 커스텀 -->
    <link rel="stylesheet" href="/css/eunhye.min.css">
    <link rel="stylesheet" href="/css/soyeong.min.css">
    <link rel="stylesheet" href="/css/hyuna.min.css">
    <link rel="stylesheet" href="/css/juhyun.min.css">

</head>
<body class="overflow-x-hidden">
    <header id="hd" class="py-lg-4 py-4 fixed-top">
      <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <h1 class="order-0 mb-0 ">
          <a href="/" class="logo_container" >
            <img src="/img/svg/logo.svg" alt="" class="logo d-none d-lg-block">
            <span alt="" class="logo  d-lg-none main-primery">
              <svg width="75" height="46" viewBox="0 0 75 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1261_850)">
                <path d="M12.8156 36.3801C15.4639 37.148 18.1582 37.7478 20.882 38.1861C23.5861 38.6211 26.3132 38.9112 29.0469 39.1089C31.4393 39.2836 34.0055 39.3132 36.201 38.1993C37.1527 37.7182 37.9502 37.0228 38.4687 36.0802C38.9248 35.2563 39.1808 34.238 38.892 33.3119C38.5737 32.2903 37.6548 31.6641 36.6375 31.4862C35.4659 31.2785 34.2615 31.4994 33.0965 31.6444C32.7454 31.6872 32.391 31.73 32.0398 31.7762L32.2531 31.9904C32.4008 30.5799 33.1064 29.3078 33.3492 27.917C33.4641 27.2579 33.4706 26.5823 33.277 25.9364C33.0932 25.33 32.7519 24.7829 32.322 24.3248C31.3703 23.3098 30.0478 22.7858 28.7023 22.5452C27.9574 22.4134 27.196 22.3508 26.4412 22.3178C25.8833 22.2914 25.3222 22.3013 24.7676 22.3771C23.5566 22.5386 22.3325 23.0264 21.8304 24.226C21.7845 24.3347 21.8797 24.4599 21.9781 24.4896C22.0995 24.5259 22.1947 24.4468 22.2407 24.3413C22.6345 23.3988 23.6452 22.9967 24.5838 22.8352C25.1121 22.7429 25.6503 22.7232 26.1853 22.7363C26.8547 22.7528 27.5275 22.8023 28.1871 22.8945C29.4866 23.0758 30.7993 23.4779 31.7838 24.3907C32.2105 24.7862 32.5747 25.2674 32.7848 25.8144C33.0046 26.3912 33.0506 27.0107 32.9653 27.6204C32.7618 29.1199 31.984 30.4744 31.8265 31.9871C31.8167 32.0926 31.9348 32.2145 32.0398 32.2013C32.7257 32.1156 33.4116 32.0332 34.0974 31.9476C34.6389 31.8816 35.1837 31.8256 35.7317 31.8322C36.7064 31.8454 37.7697 32.1057 38.298 33.012C38.7443 33.7733 38.6229 34.7356 38.2783 35.5101C37.8747 36.4197 37.1986 37.1381 36.3454 37.6358C34.3009 38.8222 31.8232 38.8551 29.5326 38.7134C26.9007 38.5519 24.2655 38.2718 21.6598 37.8763C19.0476 37.4776 16.4616 36.9437 13.9117 36.245C13.5835 36.156 13.2586 36.0638 12.9305 35.9682C12.6679 35.8924 12.5531 36.3043 12.8156 36.3801Z" fill="#006838"/>
                <path d="M31.1996 39.6922C30.4678 39.6922 29.7327 39.6527 29.0107 39.5999C26.0178 39.3824 23.3333 39.0792 20.8032 38.6706C18.0236 38.2224 15.2899 37.6094 12.6777 36.8514C12.4348 36.7789 12.2543 36.5944 12.192 36.3505C12.1296 36.0967 12.2084 35.8298 12.3922 35.6518C12.5694 35.4804 12.8221 35.4178 13.0649 35.4903C13.3898 35.5826 13.7114 35.6749 14.0396 35.7639C16.491 36.4362 19.0803 36.9799 21.7319 37.3853C24.308 37.7775 26.9432 38.0576 29.562 38.2191C31.8165 38.3575 34.1662 38.3311 36.0992 37.2073C36.8802 36.7525 37.4775 36.0967 37.8286 35.3091C38.1633 34.5544 38.183 33.7898 37.8746 33.2625C37.4348 32.5078 36.4634 32.3397 35.7283 32.3298C35.1836 32.3266 34.6355 32.3826 34.1597 32.4419L32.102 32.6957C31.9019 32.7187 31.7017 32.6462 31.5474 32.4979C31.3932 32.3463 31.3177 32.142 31.3374 31.9377C31.426 31.0973 31.6886 30.3129 31.9412 29.5582C32.171 28.8761 32.3876 28.2301 32.4794 27.5578C32.5582 26.991 32.5057 26.4637 32.3252 25.9957C32.1611 25.564 31.8559 25.1356 31.449 24.7566C30.6745 24.0414 29.585 23.5932 28.1181 23.3856C27.5077 23.2999 26.8513 23.2472 26.172 23.2307C25.5944 23.2142 25.1022 23.2439 24.6657 23.3197C23.947 23.4449 23.0183 23.7547 22.6934 24.5292C22.5425 24.8851 22.1946 25.063 21.8435 24.9642C21.6498 24.9082 21.4825 24.7631 21.3939 24.5786C21.3118 24.4039 21.3053 24.2062 21.3774 24.0348C21.873 22.8517 23.0216 22.1102 24.7051 21.8861C25.2499 21.8136 25.8242 21.7938 26.4641 21.8235C27.3994 21.8663 28.1148 21.9388 28.7875 22.0575C30.4481 22.3508 31.7608 23 32.6796 23.9854C33.1817 24.5226 33.5526 25.1487 33.7462 25.7914C33.9431 26.4472 33.9726 27.1887 33.8315 27.9994C33.7166 28.6684 33.5001 29.3045 33.29 29.9175C33.1456 30.3426 33.0045 30.7545 32.8995 31.1665L33.0308 31.15C33.1981 31.1302 33.3655 31.1072 33.5362 31.0841C34.5699 30.9457 35.6397 30.8073 36.7161 30.9951C38.019 31.2258 39.0035 32.0365 39.3546 33.1603C39.755 34.4489 39.2365 35.6881 38.8919 36.3142C38.3504 37.2963 37.5169 38.0774 36.4142 38.6343C34.7963 39.4516 32.998 39.6856 31.193 39.6856L31.1996 39.6922Z" fill="#006838"/>
                <path d="M12.9262 35.9682C9.1096 34.706 7.72144 30.1515 7.91506 26.4933C8.1415 22.2321 10.1204 18.1884 12.7818 14.9357C15.568 11.5313 19.1254 8.80255 22.942 6.6637C27.2574 4.24473 31.9765 2.4684 36.84 1.55882C41.7494 0.64264 46.8721 0.662414 51.6995 2.0235C55.8148 3.18025 59.592 5.40478 62.6276 8.42355C65.6632 11.4423 67.8291 15.0576 68.7512 19.1441C69.7029 23.3625 69.1122 27.8083 66.8643 31.5224C64.9149 34.7422 61.6464 37.4215 57.7772 37.6325C56.3169 37.7116 54.804 37.4248 53.5963 36.5647C52.264 35.6156 51.5715 34.0666 51.4042 32.4683C51.3418 31.8849 51.3418 31.3082 51.4698 30.7315C51.6109 30.0987 51.8538 29.4989 52.0966 28.8991C52.2016 28.6454 51.7881 28.5333 51.6864 28.7838C51.4239 29.433 51.158 30.0888 51.0235 30.7809C50.9119 31.3675 50.9185 31.9574 50.9874 32.5474C51.0858 33.4108 51.309 34.2578 51.7159 35.0289C52.4281 36.3834 53.6784 37.3392 55.1322 37.7709C58.5386 38.7859 62.2042 37.2436 64.6885 34.907C67.9374 31.852 69.6996 27.3271 69.6307 22.8879C69.5651 18.5905 67.9538 14.438 65.4203 11.004C62.8376 7.50408 59.3328 4.68634 55.375 2.90013C50.8397 0.853559 45.7465 0.217508 40.8141 0.603093C35.6061 1.00845 30.5161 2.51454 25.7905 4.72589C21.6162 6.68018 17.6716 9.23098 14.4063 12.5068C11.3051 15.6179 8.81425 19.4572 7.86912 23.7975C7.42609 25.8309 7.32764 27.917 7.7641 29.9603C8.16775 31.8421 9.02099 33.714 10.4649 35.0191C11.1475 35.6353 11.9417 36.0967 12.8114 36.3834C13.0739 36.4691 13.1855 36.0572 12.9262 35.9715V35.9682Z" fill="#006838"/>
                <path d="M57.3508 38.5816C56.573 38.5816 55.7821 38.4761 54.9912 38.2389C53.3537 37.7511 52.0377 36.6899 51.2796 35.253C50.876 34.4852 50.6134 33.5921 50.4986 32.5968C50.4165 31.8718 50.4297 31.2621 50.5412 30.6787C50.6856 29.9339 50.9744 29.2188 51.2304 28.5893C51.3289 28.3488 51.5422 28.1807 51.7981 28.1477C52.0574 28.1115 52.3167 28.2136 52.4676 28.4114C52.612 28.5992 52.6448 28.8497 52.5497 29.0771C52.3199 29.6472 52.0804 30.2371 51.9458 30.8303C51.8441 31.2884 51.8244 31.7927 51.89 32.4089C52.0607 34.0337 52.7662 35.3651 53.8755 36.156C55.1619 37.0689 56.6879 37.1909 57.7446 37.1348C61.0689 36.9536 64.3178 34.7587 66.4378 31.2588C68.5709 27.7358 69.2207 23.4713 68.2657 19.2463C67.4059 15.4333 65.3319 11.8114 62.2766 8.7696C59.287 5.79367 55.5819 3.62516 51.5619 2.49477C47.1086 1.24244 42.0449 1.08425 36.9255 2.03998C32.2064 2.9199 27.5825 4.62043 23.1784 7.08884C19.0697 9.39246 15.6994 12.1377 13.1561 15.2455C10.2879 18.752 8.59783 22.7561 8.40093 26.5164C8.2073 30.1515 9.57906 34.3402 13.0741 35.4969C13.3169 35.576 13.4941 35.7737 13.5434 36.0242C13.5959 36.2813 13.5105 36.5449 13.3202 36.7163C13.1397 36.8778 12.887 36.9272 12.6507 36.8514C11.7089 36.5383 10.8622 36.0473 10.1271 35.3849C8.37139 33.7997 7.60675 31.6147 7.2753 30.0625C6.85196 28.0917 6.88806 25.9463 7.38032 23.6921C8.26638 19.6352 10.5734 15.6475 14.052 12.1575C17.1368 9.0662 21.0125 6.41324 25.5773 4.27769C30.6607 1.89827 35.7703 0.494341 40.7782 0.10546C46.1438 -0.309786 51.2599 0.497637 55.5787 2.44534C59.6414 4.27769 63.1824 7.13498 65.8176 10.7041C68.5315 14.3787 70.0608 18.7025 70.1232 22.8748C70.1954 27.5611 68.2887 32.1947 65.0267 35.2629C63.1758 37.003 60.3601 38.5816 57.3541 38.5816H57.3508Z" fill="#006838"/>
                <path d="M57.6361 26.7735C57.0749 27.2348 56.9831 28.0489 57.2062 28.7113C57.4687 29.4923 58.1251 29.9867 58.8635 30.2866C59.3032 30.4645 59.7692 30.5733 60.2352 30.6623C60.5043 30.715 60.6192 30.303 60.3501 30.2503C59.6379 30.1119 58.8996 29.9372 58.3023 29.4989C57.7936 29.1265 57.4786 28.5333 57.5245 27.894C57.5475 27.571 57.6886 27.2843 57.938 27.0767C58.0266 27.0042 58.0135 26.8493 57.938 26.7735C57.8494 26.6845 57.7247 26.701 57.6361 26.7735Z" fill="#006838"/>
                <path d="M60.2846 31.1599C60.2387 31.1599 60.1928 31.1566 60.1435 31.1467C59.7005 31.061 59.1787 30.9457 58.6799 30.7447C57.6888 30.3426 57.0193 29.6967 56.7404 28.8695C56.4779 28.0917 56.5566 27.0239 57.3245 26.3912C57.6232 26.1473 58.0301 26.1605 58.2894 26.4274C58.4272 26.5691 58.5027 26.7702 58.4895 26.9745C58.4797 27.1689 58.3944 27.3403 58.2467 27.4589C58.1056 27.5743 58.0235 27.7358 58.0104 27.9269C57.9776 28.3718 58.1942 28.8101 58.588 29.0969C59.1131 29.4792 59.7924 29.634 60.4422 29.7626C60.8228 29.8384 61.0558 30.1844 60.9804 30.57C60.9114 30.9226 60.6194 31.1599 60.2814 31.1599H60.2846Z" fill="#006838"/>
                <path d="M38.6875 28.7179C40.9946 26.9877 43.8628 26.0715 46.7408 26.1176C47.5449 26.1308 48.3456 26.2198 49.1299 26.3846C49.399 26.4406 49.5106 26.0287 49.2448 25.9726C46.3503 25.3629 43.2852 25.7617 40.6205 27.047C39.8657 27.4095 39.147 27.8478 38.4742 28.3521C38.3823 28.4213 38.3364 28.5366 38.3988 28.6454C38.4513 28.7376 38.5989 28.7904 38.6908 28.7212L38.6875 28.7179Z" fill="#006838"/>
                <path d="M38.5858 29.2419C38.5366 29.2419 38.4907 29.2386 38.4414 29.2287C38.2412 29.1858 38.064 29.0573 37.9656 28.8859C37.7884 28.5729 37.8737 28.1807 38.1756 27.9533C38.8713 27.4293 39.6228 26.9745 40.4039 26.5988C43.1901 25.2575 46.3635 24.862 49.3432 25.4882C49.5861 25.5376 49.7797 25.709 49.8519 25.9397C49.9307 26.1836 49.8716 26.4538 49.6977 26.6515C49.527 26.8427 49.2776 26.9251 49.0249 26.8723C48.2734 26.7141 47.5022 26.6285 46.7277 26.6186C43.9317 26.5823 41.1882 27.4622 38.9763 29.1199C38.8648 29.2056 38.7237 29.2485 38.5825 29.2485L38.5858 29.2419Z" fill="#006838"/>
                <path d="M6.83529 20.7788C4.91549 21.3094 3.6586 23.0428 2.78239 24.7302C1.77162 26.6746 1.0398 28.7805 0.701787 30.949C0.367053 33.0977 0.416279 35.3157 1.01683 37.4117C1.54847 39.2737 2.52641 40.9676 3.88832 42.3419C5.18131 43.6469 6.79919 44.662 8.56802 45.1629C9.43768 45.4101 10.35 45.532 11.2557 45.4991C12.1648 45.4661 13.0968 45.3013 13.9205 44.8927C14.7442 44.484 15.4268 43.7985 15.5351 42.8593C15.6467 41.8739 15.0395 40.9478 14.2979 40.3612C13.4315 39.679 12.3387 39.4253 11.2951 39.155C10.7733 39.0199 10.2483 38.8749 9.75272 38.664C9.33266 38.486 8.93229 38.2685 8.55162 38.0181C7.02562 37.0162 5.85078 35.464 5.30273 33.7173C4.61029 31.5125 5.08286 29.2155 5.78186 27.0734C5.96564 26.5131 6.16254 25.9595 6.36272 25.4025C6.45461 25.1421 6.0444 25.0301 5.95251 25.2871C5.16162 27.4919 4.34119 29.812 4.56763 32.1947C4.74156 34.0238 5.56199 35.754 6.80903 37.092C7.42599 37.7544 8.15125 38.318 8.9487 38.7431C9.85773 39.2275 10.8455 39.4615 11.8333 39.7285C12.831 39.9954 13.822 40.3415 14.5145 41.1456C15.0986 41.8212 15.348 42.767 14.8492 43.5613C14.3898 44.2896 13.507 44.6752 12.703 44.8663C11.8464 45.0706 10.9538 45.1102 10.0809 45.0146C8.33174 44.8235 6.66464 44.0622 5.27976 42.9878C3.8555 41.8838 2.69706 40.4271 1.96524 38.7793C1.11856 36.8712 0.833055 34.7356 0.947914 32.6627C1.06606 30.5337 1.60754 28.4279 2.43452 26.467C2.82833 25.531 3.2812 24.6083 3.83909 23.758C4.34776 22.9802 4.96472 22.2453 5.74576 21.7312C6.11988 21.484 6.52352 21.2962 6.95671 21.1775C7.21925 21.105 7.10767 20.6931 6.84185 20.7656L6.83529 20.7788Z" fill="#006838"/>
                <path d="M10.9604 46C10.1236 46 9.2769 45.8781 8.43678 45.6408C6.64169 45.13 4.94834 44.1116 3.54049 42.6912C2.13592 41.2741 1.0989 39.4978 0.544293 37.5501C-0.043131 35.4936 -0.154709 33.2493 0.216123 30.8732C0.550857 28.7179 1.26955 26.5757 2.34923 24.4995C3.5733 22.1464 5.00084 20.7722 6.70733 20.3009C7.08472 20.1954 7.46212 20.4163 7.56713 20.7985C7.67215 21.1808 7.45884 21.5631 7.08144 21.6686C6.71061 21.7707 6.34962 21.9355 6.00833 22.1596C5.38152 22.5716 4.80394 23.1879 4.24605 24.0414C3.76692 24.773 3.32061 25.6332 2.88415 26.6713C2.03419 28.6882 1.54521 30.7183 1.43692 32.7023C1.31877 34.8477 1.65679 36.8844 2.41486 38.5915C3.1073 40.1536 4.20339 41.5411 5.58171 42.6121C6.98627 43.6997 8.55821 44.3654 10.1334 44.5368C10.9867 44.629 11.8137 44.5829 12.5881 44.3983C13.2117 44.25 14.0354 43.9403 14.4325 43.3108C14.8328 42.6747 14.544 41.9497 14.1437 41.4817C13.5759 40.8226 12.7588 40.4996 11.7054 40.2162L11.4034 40.1371C10.5075 39.8998 9.58538 39.656 8.71573 39.1913C7.8789 38.7431 7.11426 38.1532 6.44807 37.4413C5.09601 35.9946 4.25262 34.1523 4.0754 32.2541C3.83584 29.7329 4.71534 27.2876 5.48654 25.1323C5.57514 24.8884 5.77533 24.717 6.02802 24.6709C6.28727 24.6247 6.54653 24.717 6.71061 24.9115C6.86485 25.096 6.90751 25.3465 6.82219 25.5805C6.622 26.1374 6.42838 26.6845 6.24789 27.2348C5.66047 29.031 5.0796 31.3741 5.77204 33.5756C6.28399 35.2036 7.39649 36.6735 8.82074 37.6094C9.18829 37.85 9.56569 38.0543 9.94309 38.2125C10.4157 38.4135 10.9309 38.5519 11.4199 38.6805L11.6069 38.7299C12.6406 38.9968 13.7072 39.2737 14.6031 39.9789C15.6139 40.7765 16.1455 41.8739 16.0274 42.9186C15.9125 43.9205 15.2266 44.8037 14.1404 45.3376C13.3396 45.7331 12.3781 45.9539 11.2787 45.9934C11.1737 45.9967 11.072 46 10.967 46H10.9604Z" fill="#006838"/>
                <path d="M56.7116 17.1305C54.3127 18.7322 52.5373 21.2237 51.7891 24.015C51.6972 24.3644 51.6184 24.717 51.5593 25.0729C51.4937 25.4717 51.4313 25.8968 51.5725 26.289C51.7694 26.8295 52.2583 27.1294 52.8097 27.2052C53.4036 27.2876 54.0239 27.1755 54.5818 26.9679C55.2873 26.701 55.9699 26.3615 56.623 25.9891C58.1457 25.1224 59.5306 24.0085 60.7022 22.7034C60.8859 22.4991 60.584 22.1959 60.4002 22.4002C59.4059 23.5042 58.2671 24.4698 57.0102 25.2575C56.39 25.6497 55.7402 25.9957 55.0708 26.2989C54.5293 26.5428 53.9779 26.7636 53.3807 26.7998C52.9344 26.8262 52.3798 26.7735 52.0943 26.3813C51.9006 26.1143 51.8941 25.7782 51.9269 25.4618C51.9663 25.1125 52.0417 24.7664 52.1238 24.4237C52.4388 23.1055 52.9934 21.8498 53.7384 20.7227C54.5752 19.4539 55.6615 18.3466 56.9282 17.5029C57.1546 17.3513 56.9413 16.9789 56.7116 17.1338V17.1305Z" fill="#006838"/>
                <path d="M53.213 27.7259C53.0522 27.7259 52.8946 27.716 52.7404 27.6929C51.9528 27.5809 51.3555 27.1327 51.1094 26.4571C50.9158 25.9265 51.011 25.3629 51.0733 24.9872C51.1357 24.6181 51.2177 24.2457 51.3129 23.8832C52.0906 20.9864 53.9579 18.373 56.4389 16.7153C56.6456 16.5769 56.9016 16.5571 57.1182 16.6659C57.3479 16.7779 57.4989 17.0119 57.5153 17.2722C57.5317 17.526 57.4135 17.7633 57.2002 17.905C56.009 18.6992 54.9556 19.767 54.1515 20.9864C53.4263 22.0838 52.9078 23.2768 52.6059 24.5325C52.5304 24.8422 52.4582 25.1784 52.4221 25.508C52.3893 25.7914 52.4122 25.966 52.4976 26.0814C52.6616 26.3088 53.1047 26.3154 53.3574 26.2989C53.8988 26.2659 54.4239 26.0451 54.8768 25.8408C55.5233 25.5475 56.1534 25.2081 56.7572 24.8324C57.9682 24.0711 59.0741 23.1384 60.0422 22.0608C60.3014 21.774 60.7281 21.7543 61.0169 22.0146C61.3155 22.2849 61.3417 22.7298 61.0759 23.0264C59.8617 24.3743 58.4473 25.5145 56.8753 26.4109C56.1206 26.8427 55.4281 27.1722 54.7652 27.4227C54.2434 27.6204 53.7184 27.7193 53.2228 27.7193L53.213 27.7259Z" fill="#006838"/>
                <path d="M68.0986 30.659C67.5506 31.9607 68.394 33.3844 69.5885 33.9612C70.2186 34.2644 70.911 34.3171 71.5838 34.1227C72.2565 33.9249 72.8571 33.5064 73.3165 32.9791C73.7858 32.4419 74.1337 31.796 74.324 31.1039C74.557 30.2602 74.5504 29.3671 74.4224 28.5102C74.2879 27.5974 74.0024 26.7141 73.6677 25.8606C73.3493 25.0565 72.9916 24.2655 72.5913 23.4976C71.7905 21.9586 70.8257 20.5085 69.7231 19.1705C69.5885 19.0057 69.4507 18.8442 69.3096 18.6828C69.1291 18.4751 68.8271 18.7783 69.0076 18.986C70.0709 20.2119 71.0128 21.5433 71.8135 22.9572C72.6241 24.3875 73.3461 25.9166 73.7792 27.5084C74.1829 28.9848 74.2813 30.6293 73.497 32.0003C72.8965 33.0516 71.6986 34.0238 70.4122 33.7865C69.1849 33.5624 67.9247 32.1783 68.4727 30.8765C68.5187 30.7677 68.5055 30.6491 68.3972 30.5832C68.3086 30.5305 68.1511 30.5535 68.1052 30.659H68.0986Z" fill="#006838"/>
                <path d="M70.7826 34.7323C70.3002 34.7323 69.8244 34.6236 69.3748 34.4061C68.0227 33.7535 66.9759 32.0596 67.6453 30.4678C67.7175 30.2932 67.8652 30.158 68.0523 30.0987C68.2492 30.0328 68.4723 30.0559 68.643 30.158C68.9547 30.3459 69.0663 30.7183 68.9219 31.0676C68.7348 31.5125 68.8661 31.9278 69.0105 32.1947C69.3026 32.7385 69.913 33.19 70.4971 33.2988C71.5473 33.4899 72.5613 32.6297 73.0667 31.7498C73.6771 30.6853 73.7559 29.2979 73.2997 27.6336C72.9289 26.2725 72.3021 24.8192 71.3832 23.1977C70.5989 21.8103 69.6734 20.5019 68.6364 19.3056C68.469 19.1112 68.4165 18.8508 68.4986 18.607C68.5839 18.3598 68.7906 18.1752 69.04 18.1258C69.2763 18.0797 69.5159 18.1654 69.68 18.3532C69.8211 18.518 69.9622 18.6828 70.1 18.8508C71.2289 20.2185 72.2135 21.7048 73.0273 23.2636C73.431 24.0414 73.8018 24.8521 74.1267 25.6727C74.5402 26.7174 74.7896 27.5941 74.911 28.4312C75.0653 29.4627 75.0259 30.4052 74.7994 31.2291C74.5894 31.9904 74.2054 32.7055 73.6869 33.2988C73.1356 33.9282 72.4563 34.3764 71.7212 34.5906C71.4094 34.6829 71.0944 34.7258 70.7826 34.7258V34.7323Z" fill="#006838"/>
                <path d="M68.263 32.6429C68.473 32.6429 68.473 32.3134 68.263 32.3134C68.053 32.3134 68.053 32.6429 68.263 32.6429Z" fill="#006838"/>
                </g>
                <defs>
                <clipPath id="clip0_1261_850">
                <rect width="75" height="46" fill="white"/>
                </clipPath>
                </defs>
                </svg>                
            </span>
          </a>
        </h1>

        <div class="hamburger-menu d-md-none order-5" id="allMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <div class="topmeun d-flex justify-content-center align-items-center order-1 me-auto ">
          <ul class="d1ul">
            <li class="d1li position-relative text-center"> 
              <a href="" class="d1a d-flex justify-content-center align-items-center">장례절차</a>
                <ul class="d2ul position-absolute text-white p-0 m-0 start-50 translate-middle-x">
                  <li class="d2li">
                    <a href="/page/procedures.php">스톤 장례</a></li>
                  <li class="d2li">
                    <a href="/page/procedures.php">일반 장례</a></li>
                </ul>
            </li>
            <li class="d1li position-relative text-center"> 
              <a href="" class="d1a d-flex justify-content-center align-items-center">장례비용</a>
                <ul class="d2ul position-absolute text-white p-0 m-0 start-50 translate-middle-x">
                  <li class="d2li">
                    <a href="/page/price.php">스톤 장례</a></li>
                  <li class="d2li">
                    <a href="/page/price.php">일반 장례</a></li>
                  
                </ul>
            </li>
            <li class="d1li position-relative text-center"> 
              <a href="" class="d1a d-flex justify-content-center align-items-center">지점안내</a>
                <ul class="d2ul position-absolute text-white p-0 m-0 start-50 translate-middle-x">
                  <li class="d2li">
                    <a href="/page/store.php">지점 및 시설</a></li>
                  <li class="d2li">
                    <a href="/page/way.php">오시는길</a></li>
                </ul>
            </li>
            <li class="d1li position-relative text-center"> 
              <a href="" class="d1a d-flex justify-content-center align-items-center">부가서비스</a>
                <ul class="d2ul position-absolute text-white p-0 m-0 start-50 translate-middle-x">
                  <li class="d2li">
                    <a href="/page/service.phpice.php">운구서비스</a></li>
                  <li class="d2li">
                    <a href="/page/service.phpice.php">비동행 장례서비스</a></li>
                  <li class="d2li">
                    <a href="/page/service.phpice.php">봉안당(산골)</a></li>
                  <li class="d2li">
                    <a href="/page/service.phpice.php">사이버추모관</a></li>
                </ul>
            </li>
            <li class="d1li position-relative text-center"> 
              <a href="" class="d1a d-flex justify-content-center align-items-center">고객지원센터</a>
                <ul class="d2ul position-absolute text-white p-0 m-0 start-50 translate-middle-x">
                  <li class="d2li">
                    <a href="/page/petlose.php">펫로스케어</a></li>
                  <li class="d2li">
                  <a href="/page/petlose.php">보험</a></li>
                  <li class="d2li">
                    <a href="/page/hospital.php">파우펙트&펫 협력병원</a></li>
                  <li class="d2li">
                    <a href="/page/question.php">자주묻는질문</a></li>
                </ul>
            </li>
          </ul>
          <button class="closebtn"><img src="/img/svg/X boxbutton_line.svg" alt=""></button>
        </div>

        <ul class="reservation d-flex justify-content-end align-items-center order-2 mb-0 p-0 ms-auto">
          <li><a href=""><img src="/img/svg/here.svg" alt="" class="here"></a></li>
          <li class="text-nowrap"><a href=""><button class="reservation-button"><img src="/img/svg/calendar.svg" alt="">
            <span>장례 예약</span></button></a>
          </li>
        </ul>
  

    </header>