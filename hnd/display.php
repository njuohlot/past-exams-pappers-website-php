<section style="background: url('assets/img/hero-bg.png'); margin-top: 60px">
  <div class="container py-5">
      <h3 class='text-center mb-5 px-3' style='text-decoration: underline;'>Questions</h3>
   <div class="row">
       
<?php
ob_start();
if(isset($_GET['id_specialty'])){
  $id = $_GET['id_specialty'];
  include 'config.php';
  $query = $conn->prepare('SELECT * FROM upload WHERE id_specialty=?');
  $query->execute([$id]);
  while($data=$query->fetch()){?>
<div class="col-md-4 col-sm-4 col-lg-2 mb-4 mb-lg-0">
        <div class="card text-black text-center">
            <a href="http://localhost/gateways/hnd/index.php?page=view&id=<?php echo $data['id']?>">
            <img src="assets/img/pdf.webp"
            class="card-img-top mt-4" alt="Pdfs" style='width: 60px'/>
        </a>
          <div class="card-body">
              <div class="p-3 mx-n3 mb-4">
              <a href="http://localhost/gateways/hnd/index.php?page=view&id=<?php echo $data['id']?>">
                <p class="mb-0 text-center" style='font-size: 12px !important'><?php echo $data['name']?> - <?php echo $data['year']?></p>

              </a>
             
                
              </div>
               <button class='btn btn-secondary text-center'><a href="http://localhost/gateways/hnd/index.php?page=view&id=<?php echo $data['id']?>">Read pdf</a></button>
            </div>      
          </div>
        </div>
 <?php }
  
}else{
  header('Location: http://localhost/gateways/hnd/index.php?page=payment');
  ob_end_flush();

}


?>
   </div> 
  </div>
</section>
<style>
  @media (max-width: 900px) {
  .card {
    width:260px;
    margin: auto;
  }
}
</style>