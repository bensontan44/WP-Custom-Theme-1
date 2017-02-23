<div class="col-md-3 sidebar">
        
    <?php 
    
    if ( ! dynamic_sidebar('side-bar') ) {
    echo '<h3>Sidebar</h3> <p>Add content to the sidebar widget</p>';
    } else{  
        dynamic_sidebar('side-bar');
    }
    
    ?>
    
</div>  