<section class='my-5'>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card">
                <div class="card-header">
                    <h3 class='text-center'>Create new poto in gallery</h3>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <form action="/admin/gallery" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="gallery_foto" class="form-label">Upload image</label>
                                    <input type="url" class="form-control" id="gallery_foto" name="gallery_foto" placeholder="Your link">
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <button type="submit" class="btn btn-primary w-100">Publish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>