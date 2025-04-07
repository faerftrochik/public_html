<?php

return array (
  'front-header' => 
  array (
    'navigation' => 
    array (
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => true,
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 15,
          ),
        ),
      ),
    ),
    'logo' => 
    array (
      'props' => 
      array (
        'layoutType' => 'text',
      ),
    ),
    'header-menu' => 
    array (
      'props' => 
      array (
        'hoverEffect' => 
        array (
          'type' => 'none',
          'group' => 
          array (
            'border' => 
            array (
              'transition' => 'effect-borders-grow grow-from-left',
            ),
          ),
        ),
      ),
    ),
    'hero' => 
    array (
      'props' => 
      array (
        'heroSection' => 
        array (
          'layout' => 'textWithMediaOnRight',
        ),
      ),
      'style' => 
      array (
        'descendants' => 
        array (
          'outer' => 
          array (
            'padding' => 
            array (
              'top' => 
              array (
                'value' => 50,
              ),
              'bottom' => 
              array (
                'value' => 50,
              ),
            ),
            'background' => 
            array (
              'overlay' => 
              array (
                'enabled' => false,
              ),
              'type' => 'none',
              'color' => 'rgba(255,255,255,1)',
            ),
          ),
        ),
      ),
      'full_height' => false,
      'hero_column_width' => 50,
    ),
    'buttons' =>
    array (
      'value' => 
      array (
        0 => 
        array (
          'label' => 'Get Started',
        ),
        1 => 
        array (
          'label' => 'Contact Sales',
        ),
      ),
    ),
  ),
  'header' => 
  array (
    'navigation' => 
    array (
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => true,
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 15,
          ),
        ),
      ),
    ),
    'header-menu' => 
    array (
      'props' => 
      array (
        'hoverEffect' => 
        array (
          'type' => 'none',
          'group' => 
          array (
            'border' => 
            array (
              'transition' => 'effect-borders-grow grow-from-left',
            ),
          ),
        ),
      ),
    ),
    'logo' => 
    array (
      'props' => 
      array (
        'layoutType' => 'text',
      ),
    ),
    'hero' => 
    array (
      'style' => 
      array (
        'descendants' => 
        array (
          'outer' => 
          array (
            'padding' => 
            array (
              'top' => 
              array (
                'value' => 50,
              ),
              'bottom' => 
              array (
                'value' => 50,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'blog_show_post_thumb_placeholder' => true,
  'blog_post_thumb_placeholder_color' => 'rgba(209,209,231,1)',
  'blog_posts_per_row' => 2,
  'blog_enable_masonry' => true,
);
