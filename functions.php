<?php 

        require_once 'config/connect.php';

        function showPopulerArticles(){
        
            global $connect;
            $resultSlide1 = $connect->query("SELECT * FROM artikel WHERE slide='1'");
            $resultSlide2 = $connect->query("SELECT * FROM artikel WHERE slide='2'");
            $resultSlide3 = $connect->query("SELECT * FROM artikel WHERE slide='3'");
            
           
            if($resultSlide1->num_rows>0){

                echo '
                    <div class="carousel-item active">
                    <div class="row">
                ';

               
                while ($row = $resultSlide1->fetch_assoc()) {
                    $id = $row['id'];
                    $judul = $row['judul'];
                    $filename = $row['filename'];
                    $deskripsi = $row['deskripsi'];
                    echo '
                    <div class="col-12 col-md-8 col-xl-6 mb-4">
                    <div class="card mr-3">
                        <div class="card-image">
                            <div class="wrap">
                                <img src="'.$filename.'" class="card-img-top"                                                >
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">
                                '.$judul.'
                            </h5>
                            <p class="card-text">'.$deskripsi.'</p>
                            <a href="main.php?page=detail&id='.$id.'" class="btn btn-dark btn-block">Read more</a>
                        </div>
                    </div>
                </div>';
                }
                echo '
                    </div>
                    </div>
                ';
            }
            if($resultSlide2->num_rows>0){

                echo '
                    <div class="carousel-item">
                    <div class="row">
                ';

               
                while ($row = $resultSlide2->fetch_assoc()) {
                    $id = $row['id'];
                    $judul = $row['judul'];
                    $filename = $row['filename'];
                    $deskripsi = $row['deskripsi'];
                    echo '
                    <div class="col-12 col-md-8 col-xl-6 mb-4">
                    <div class="card mr-3">
                        <div class="card-image">
                            <div class="wrap">
                                <img src="'.$filename.'" class="card-img-top" width="300px" height="300px">                                                >
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">
                                '.$judul.'
                            </h5>
                            <p class="card-text">'.$deskripsi.'</p>
                            <a href="main.php?page=detail&id='.$id.'" class="btn btn-dark btn-block">Read more</a>
                            </div>
                    </div>
                </div>';
                }
                echo '
                    </div>
                    </div>
                ';
            }
            if($resultSlide3->num_rows>0){

                echo '
                    <div class="carousel-item">
                    <div class="row">
                ';

               
                while ($row = $resultSlide3->fetch_assoc()) {
                    $id = $row['id'];
                    $judul = $row['judul'];
                    $filename = $row['filename'];
                    $deskripsi = $row['deskripsi'];
                    echo '
                    <div class="col-12 col-md-8 col-xl-6 mb-4">
                    <div class="card mr-3">
                        <div class="card-image">
                            <div class="wrap">
                            <img src="'.$filename.'" class="card-img-top" width="300px" height="300px">                                               >
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">
                                '.$judul.'
                            </h5>
                            <p class="card-text">'.$deskripsi.'</p>
                            <a href="main.php?page=detail&id='.$id.'" class="btn btn-dark btn-block">Read more</a>
                        </div>
                    </div>
                </div>';
                }
                echo '
                    </div>
                    </div>
                ';
            }

            
                
            
         }



function detailArticle($id){
    global $connect;
    $result = $connect->query("SELECT * FROM artikel WHERE id='$id'");
    $row = $result->fetch_assoc();
  
    $judul = $row['judul'];
    $filename = $row['filename'];
    $deskripsi = $row['deskripsi'];
    $created_time = $row['created_time'];


    echo '
    <div class="card card-dark">
    <div class="card-body">
        <h5 class="card-title text-light">
            '.$judul.'
        </h5>
        <hr class="text-light">
        <p class="text-light">Tanggal post : '.$created_time.' </p>
        <div class="card-image text-center">
        <div class="wrap">
            <img src="'.$filename.'" class="img-thumbnail" width="80%">                                                >
         </div>
        </div>
    </div>
</div>
    <div class="card card-dark mt-4">
    <div class="card-body">
        <h5 class="card-title text-light">
            Deskripsi
        </h5>
        <hr class="text-light">
        <p class="text-light">
            '.$deskripsi.'
        </p>
        
    </div>
</div>

';
    


 }