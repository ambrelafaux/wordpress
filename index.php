<?php get_header(); ?>

	<div class="single">

<?php
		
	if ( have_posts() ) {
		while ( have_posts() ) {
      
      	$banner_image_de_fond = get_field('banner_image_de_fond');
      	$conf_image = get_field('conf_image');
			
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
			
    	the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    	the_content();
		?>
		
        <div class="banniere" style="background-image: url(<?php echo $banner_image_de_fond['url']; ?>)">
        	<div class="banneriere_cont">
            	<p id="p1"><?php the_field('banner_baseline'); ?></p>
            	<p id="p2"><?php the_field('banner_titre_marron'); ?></p>
            	<p id="p3"><?php the_field('banner_titre_vert'); ?> </p>
            	<input type="button" value="S'incrire aux rencontres"/>
        	</div>
    	</div>
    
    	<div class="conf" id="titre">
       		<p id="p4"><?php the_field('conf_titre'); ?></p>
        	<p id="p5"><?php the_field('conf_texte'); ?></p>
    	</div>
    
    
    	<div class="image"  style="background-image: url(<?php echo $conf_image['url']; ?>)">
   		</div>
    
    <div class="programme"> 
        <p id="p6"><?php the_field('program_title'); ?></p>
    </div>
    
    
  
    
<?php

  }
}
?>
    

</div>

<?php get_footer(); ?>