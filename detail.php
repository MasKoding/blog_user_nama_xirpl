<?php 
    $id = $_GET['id'];

   
  
    
?>


<div class="container my-5">
    <div class="row d-flex justify-content-between">

        <div class="col-8">
                 <?php detailArticle($id); ?>
        </div>
        <div class="col-md-3">
            <div class="card card-dark">
                <div class="card-body">
                    <h5 class="card-title text-light">Fanpage</h5>
                    <hr>
                    <img src="img/facebook.pnh.png" class="img-thumbnail" width="30px" height="30px">
                    <img src="img/ig.jpeg" class="img-thumbnail" width="30px" height="30px">
                    <img src="img/twitter.png" class="img-thumbnail" width="30px" height="30px">
                </div>
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-8">
        <div class="card card-dark">
                <div class="card-body">
                    <h5 class="card-title text-light">Comment</h5>
                    <hr class="text-light">
                    <div class="row justify-content-around">
                        <div class="col-md-2">
                            <img src="img/steve-job.png"  class="img-circle">
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                                <textarea class="form-control" placeholder="Comment disini gan ..."></textarea>
                           </div>
                           <div class="form-group mt-2 float-right">
                             <button class="btn btn-success">Submit</button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>