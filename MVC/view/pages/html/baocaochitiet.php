<nav>
        <?php include_once('menu_main/menu.php'); ?>
   </nav>
   <div style="height:70vh;">
   <section style="width:50vw;float:right;height:70vh;">
   <?php 
      $Page = isset($data['Page1']) ? $data['Page1']:"";
      include_once('baocao/'.$Page.'.php');
       ?>
   </section>
   </div>