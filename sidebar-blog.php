<!-- Generic 3 column sidebar for blog pages -->

<div class="col-md-3 sidebar">
        
    <?php if ( ! dynamic_sidebar('blog') ): ?>
    
    echo '<h3>Sidebar</h3> <p>Add content to the blog sidebar widget</p>';

    <?php endif; ?>
    
</div>  