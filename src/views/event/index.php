<ul>
  

   
            <?php echo $event->getNombre(); ?> 
            <?php echo $event->getNombre_sms(); ?>
            <?php echo $event->getImagen(); ?>
            <?php echo $event->getLugar(); ?>
            <?php echo $event->getFecha(); ?>
            <?php echo $event->getNombre_sms(); ?>


<a href="/Mongosta/event/update/<?=$event->getNombre_sms();?>"> <button> Editar </button> </a>



      
    
</ul>