<?php 

        require_once 'config/connect.php';

        function showPopulerArticles(){
        
            // panggil global variable connect
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
                                <img src="'.$filename.'" class="card-img-top">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                '.$judul.'
                            </h5>
                            <p class="card-text">
                                '.$deskripsi.'
                            </p>
                            <a href="main.php?page=detail&id='.$id.'" class="btn btn-dark btn-block">Read more</a>
                        </div>
                    </div>
                </div>
                    ';
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
                                <img src="'.$filename.'" class="card-img-top">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                '.$judul.'
                            </h5>
                            <p class="card-text">
                                '.$deskripsi.'
                            </p>
                            <a href="main.php?page=detail&id='.$id.'" class="btn btn-dark btn-block">Read more</a>
                        </div>
                    </div>
                </div>
                    ';
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
                                <img src="'.$filename.'" class="card-img-top">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                '.$judul.'
                            </h5>
                            <p class="card-text">
                                '.$deskripsi.'
                            </p>
                            <a href="main.php?page=detail&id='.$id.'" class="btn btn-dark btn-block">Read more</a>
                        </div>
                    </div>
                </div>
                    ';
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
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">'.$judul.'</h5>
            <p class="badge bg-secondary">Waktu Post:'.$created_time.'</p>
            <hr>
            <img src="'.$filename.'" class="img-thumbnail"   
            >
        </div>
       </div>
       <br>
       <div class="card">
        <div class="card-body">
            <h5 class="card-title">Deskripsi</h5>
            <hr>
            <p>'.$deskripsi.'</p>
        </div>
       </div> 
        ';
 }

 function showPopulerUlasan(){
        
    // panggil global variable connect
    global $connect;
    $resultSlide1 = $connect->query("SELECT * FROM ulasan");
   
    if($resultSlide1->num_rows>0){
        
        while ($row = $resultSlide1->fetch_assoc()) {
            $id = $row['id'];
            $judul = $row['judul'];
            $filename = $row['image'];
            $tanggal = $row['tanggal'];
            
            echo '
            <hr class="text-light">
            <div class="row">
                        <div class="col-md-3">
                            <img src="'.$filename.'" alt="..." class="img-thumbnail">
                        </div>
                        <div class="col mt-4">
                            <a href="main.php?page=detailulasan&id='.$id.'" class="text-warning">'.$judul.'</a>
                            <p class="text-secondary">'.$tanggal.'</p>
                        </div>
                    </div>
            ';
        }
        }
    
    
 }

 function detailUlasan($id){
    global $connect;
    $result = $connect->query("SELECT * FROM ulasan WHERE id='$id'");
    $row = $result->fetch_assoc();

    $judul = $row['judul'];
    $filename = $row['image'];
    $deskripsi = $row['deskripsi'];
    $created_time = $row['tanggal'];
    
    echo '
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">'.$judul.'</h5>
        <p class="badge bg-secondary">Waktu Post:'.$created_time.'</p>
        <hr>
        <img src="'.$filename.'" class="img-fluid"   
        >
    </div>
   </div>
   <br>
   <div class="card">
    <div class="card-body">
        <h5 class="card-title">Deskripsi</h5>
        <hr>
        <p>'.$deskripsi.'</p>
    </div>
   </div> 
    ';
}

 ?>