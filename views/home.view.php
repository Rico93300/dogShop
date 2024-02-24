<?php
    $title = "Accueil";
    require_once(__DIR__ ."/partials/head.php")
?>


<div class="container">
    <div class="d-flex">
        <img src="/img/chienBanner.png" class="col-lg-12" style="height: 375px;" alt="banner avec un chien">
    </div>

    <div class="d-flex">
        <div class="heigth_tittle bg-warning text-dark"></div>
        <div><h3>NOUVEAUTÉS</h3></div>
        <div class="heigth_tittle bg-warning text-dark"></div>
    </div>

    <div class="d-flex justify-content-between row mt-5 mb-5">
        <div class="card col-lg-4 m-3" style="width: 18rem">
            <div class="rabais position-absolute top-0 start-100 translate-middle">
                <p class="">- 30 %</p>
            </div>

            <img src="img/34191_pla_megapack_pedigree_denta_stix_smallhunde_hs_02_1.jpg" class="card-img-top" alt="..."/>
		    <div class="card-body">
                <h4 class="text-center"></h4>
			    <h5 class="card-title">Pedigree Dentastix <strong> 25€</strong></h5>
            </div>
        </div>

        <div class="card col-lg-4 m-3" style="width: 18rem">
            <img src="img/zqgsfa1536305834110.jpg" class="card-img-top" alt="..."/>
		    <div class="card-body">
                <h4 class="text-center"></h4>
			    <h5 class="card-title">magnifique gilets <strong> 45€</strong></h5>
            </div>
        </div>

        <div class="card col-lg-4 m-3" style="width: 19rem">
            <img src="img/JouetsInteractifsCanin.jpg" style="width: 103%;" class="card-img-top" alt="..."/>
		    <div class="card-body">
                <h4 class="text-center"></h4>
			    <h5 class="card-title">CAROZEN Occupation <strong> 20€</strong></h5>
            </div>

        </div>
    </div>

</div>








<?php require_once(__DIR__."/partials/footer.php") ?>