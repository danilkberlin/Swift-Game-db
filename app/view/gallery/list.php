<section id="news" class='my-5'>
    <div class="container-fluid">
        <div class="row d-flex justify-content-end">
            <div class="col-lg-10 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class='title-text-gradient fs-1'>Gallery</h2>
                        <hr class='text-color'>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <?php foreach ($gallery as $item):?>
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
                            <div class="card my-2">
                                <img class="card-img-center w-100" src="<?=$item['foto']?>" style="width: 460px; height: 311px">    
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>