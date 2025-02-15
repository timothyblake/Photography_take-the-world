
<div class="col-12 col-md-6 col-xl-4 col-xxl-3 col-lg-4 ">
    <div class="album-list-item">
        <a class="ali-link" href="<?php the_permalink() ?>">
            <div class="ali-img-wrap">
                <div class="featured-image ">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('homepage_list'); ?> 
                    <?php else:endif; ?>        
                </div>   
            </div>
            <div class="ali-caption">
                <h2 class="ali-title"><?php the_title(); ?></h2>
                <div class="ali-meta"><?php
                    $category = get_the_category();
                    if($category[0]){
                        echo '<a class="catogory-small-box " href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                    }
                ?></div>
            </div>
        </a>
        <a href="#0" class="album-share" title="Share this album" data-toggle="modal" data-target="#modal-45776355">
        </a>

    </div>        
</div>


