<?php
ob_start();
if(isset($_GET['id']) AND isset($_SESSION['user'])){
    $id = $_GET['id'];
?>
<section class='payment'>
    <h2>Choisissez le mode de paiement</h2>
    <h3 class='text-center'>Abonnez-vous pour 2 heures<strong>(500 CFA)</strong> et accédez à tous <br> les questions BTS basé sur vos spécialité</h3>
    <div class='pay'>
        <a href='http://localhost/gateways/bts/index.php?page=display&id_specialty=<?php echo $id;?>'>
          <h1>Orange Money</h1> 
        </a>
        
    </div>
    <div class='pay'>
        <a href='http://localhost/gateways/bts/index.php?page=display&id_specialty=<?php echo $id;?>'>
           <h1>Mobile Money</h1>   
        </a>
       
    </div>
</section>
<style>
    .payment{
        background-image: url('assets/img/hero-bg.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 70px;
        height: 80vh;
    }
     .payment h2{
        font-size: 24px;
        line-height: 2;

     }
      .payment h3{
        font-size: 16px;
        margin-bottom: 50px;


     }

    .pay{
         width: 350px;
         border-radius:10px;
         display: flex;
        justify-content: center;
        align-items: center;
        height: 40px;
         margin: 7px;
         background: #000;
    }
    .pay h1{
        color: #fff;
        font-size: 17px;
        font-weight: 900;
    } 
    .payment h1{
        font-weight: 600;
        
    }      
</style>
<?php } else{
    
    header('Location: http://localhost/gateways/bts/index.php?page=login');
    ob_end_flush();
}