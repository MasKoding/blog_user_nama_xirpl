<?php 
    $id = $_GET['id'];   
?>


<div class="container my-5">
    <div class="row d-flex justify-content-between">

        <div class="col-8">
              <?php            
                detailUlasan($id);
              ?>
        </div>
        <?php 
          require_once 'sidebar.php';
        ?>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card card-dark">
                <div class="card-body">
                    <h5 class="card-title text-light">Komentar</h5>
                    <hr class="text-light">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="img/steve-job.png" width="100px"
                             height="100px" class="img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea name="comment" 
                                class="form-control"
                                placeholder="Komen disini gan ..." ></textarea>
                            </div>    
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                               <button type="submit" 
                               class="btn btn-success mt-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>