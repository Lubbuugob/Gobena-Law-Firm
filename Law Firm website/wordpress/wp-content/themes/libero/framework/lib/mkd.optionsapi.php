<?php
if(!function_exists('libero_mikado_add_admin_page')) {
    /**
     * Generates admin page object and adds it to options
     * $attributes array can container:
     *      $slug - slug of the page with which it will be registered in admin, and which will be appended to admin URL
     *      $title - title of the page
     *      $icon - icon that will be added to admin page in options navigation
     *
     * @param $attributes
     *
     * @return bool|LiberoAdminPage
     */
    function libero_mikado_add_admin_page($attributes) {
        $slug = '';
        $title = '';
        $icon = '';

        extract($attributes);

        if(isset($slug) && !empty($title)) {
            $admin_page = new LiberoAdminPage($slug, $title, $icon);
            libero_mikado_framework()->mkdOptions->addAdminPage($slug, $admin_page);

            return $admin_page;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_panel')) {
    /**
     * Generates panel object from given parameters
     * $attributes can container:
     *      $title - title of panel
     *      $name - name of panel with which it will be registered in admin page
     *      $hidden_property - name of option that hides panel
     *      $hidden_value - value of $hidden_property that hides panel
     *      $hidden_values - array of valus of $hidden_property that hides panel
     *      $page - slug of that page to which to add panel
     *
     * @param $attributes
     *
     * @return bool|LiberoPanel
     */
    function libero_mikado_add_admin_panel($attributes) {
        $title           = '';
        $name            = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();
        $page            = '';

        extract($attributes);

        if(isset($page) && !empty($title) && !empty($name) && libero_mikado_framework()->mkdOptions->adminPageExists($page)) {
            $admin_page = libero_mikado_framework()->mkdOptions->getAdminPage($page);

            if(is_object($admin_page)) {
                $panel = new LiberoPanel($title, $name, $hidden_property, $hidden_value, $hidden_values);
                $admin_page->addChild($name, $panel);

                return $panel;
            }
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_container')) {
    /**
     * Generates container object
     * $attributes can contain:
     *      $name - name of the container with which it will be added to parent element
     *      $parent - parent object to which to add container
     *      $hidden_property - name of option that hides container
     *      $hidden_value - value of $hidden_property that hides container
     *      $hidden_values - array of valus of $hidden_property that hides container
     *
     * @param $attributes
     *
     * @return bool|LiberoContainer
     */
    function libero_mikado_add_admin_container($attributes) {
        $name            = '';
        $parent          = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();

        extract($attributes);

        if(!empty($name) && is_object($parent)) {
            $container = new LiberoContainer($name, $hidden_property, $hidden_value, $hidden_values);
            $parent->addChild($name, $container);

            return $container;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_container_no_style')) {
    /**
     * Generates container object
     * $attributes can contain:
     *      $name - name of the container with which it will be added to parent element
     *      $parent - parent object to which to add container
     *      $hidden_property - name of option that hides container
     *      $hidden_value - value of $hidden_property that hides container
     *      $hidden_values - array of valus of $hidden_property that hides container
     *
     * @param $attributes
     *
     * @return bool|LiberoContainerNoStyle
     */
    function libero_mikado_add_admin_container_no_style($attributes) {
        $name            = '';
        $parent          = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();

        extract($attributes);

        if(!empty($name) && is_object($parent)) {
            $container = new LiberoContainerNoStyle($name, $hidden_property, $hidden_value, $hidden_values);
            $parent->addChild($name, $container);

            return $container;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_group')) {
    /**
     * Generates group object
     * $attributes can contain:
     *      $name - name of the group with which it will be added to parent element
     *      $title - title of group
     *      $description - description of group
     *      $parent - parent object to which to add group
     *
     * @param $attributes
     *
     * @return bool|LiberoGroup
     */
    function libero_mikado_add_admin_group($attributes) {
        $name = '';
        $title = '';
        $description = '';
        $parent = '';

        extract($attributes);

        if(!empty($name) && !empty($title) && is_object($parent)) {
            $group = new LiberoGroup($title, $description);
            $parent->addChild($name, $group);

            return $group;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_row')) {
    /**
     * Generates row object
     * $attributes can contain:
     *      $name - name of the group with which it will be added to parent element
     *      $parent - parent object to which to add row
     *      $next - whether row has next row. Used to add bottom margin class
     *
     * @param $attributes
     *
     * @return bool|LiberoRow
     */
    function libero_mikado_add_admin_row($attributes) {
        $parent = '';
        $next   = false;
        $name   = '';

        extract($attributes);

        if(is_object($parent)) {
            $row = new LiberoRow($next);
            $parent->addChild($name, $row);

            return $row;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_field')) {
    /**
     * Generates admin field object
     * $attributes can container:
     *      $type - type of the field to generate
     *      $name - name of the field. This will be name of the option in database
     *      $default_value
     *      $label - title of the option
     *      $description
     *      $options - assoc array of option. Used only for select and radiogroup field types
     *      $args - assoc array of additional parameters. Used for dependency
     *      $hidden_property - name of option that hides field
     *      $hidden_values - array of valus of $hidden_property that hides field
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|LiberoField
     */
    function libero_mikado_add_admin_field($attributes) {
        $type            = '';
        $name            = '';
        $default_value   = '';
        $label           = '';
        $description     = '';
        $options         = array();
        $args            = array();
        $hidden_property = '';
        $hidden_values   = array();
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($type) && !empty($name)) {
            $field = new LiberoField($type, $name, $default_value, $label, $description, $options, $args, $hidden_property, $hidden_values);

            if(is_object($parent)) {
                $parent->addChild($name, $field);

                return $field;
            }
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_section_title')) {
    /**
     * Generates admin title field
     * $attributes can contain:
     *      $parent - parent object to which to add title
     *      $name - name of title with which to add it to the parent
     *      $title - title text
     *
     * @param $attributes
     *
     * @return bool|LiberoTitle
     */
    function libero_mikado_add_admin_section_title($attributes) {
        $parent = '';
        $name = '';
        $title = '';

        extract($attributes);

        if(is_object($parent) && !empty($title) && !empty($name)) {
            $section_title = new LiberoTitle($name, $title);
            $parent->addChild($name, $section_title);

            return $section_title;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_notice')) {
    /**
     * Generates LiberoNotice object from given parameters
     * $attributes array can contain:
     *      $title - title of notice object
     *      $description - description of notice object
     *      $notice - text of notice to display
     *      $hidden_property - name of option that hides notice
     *      $hidden_value - value of $hidden_property that hides notice
     *      $hidden_values - assoc array of values of $hidden_property that hides notice
     *      $name - unique name of notice with which it will be added to it's parent
     *      $parent - object to which to add notice object using addChild method
     *
     * @param $attributes
     *
     * @return bool|LiberoNotice
     */
    function libero_mikado_add_admin_notice($attributes) {
        $title           = '';
        $description     = '';
        $notice          = '';
        $hidden_property = '';
        $hidden_value    = '';
        $hidden_values   = array();
        $parent          = '';
        $name            = '';

        extract($attributes);

        if(is_object($parent) && !empty($title) && !empty($notice) && !empty($name)) {
            $notice_object = new LiberoNotice($title, $description, $notice, $hidden_property, $hidden_value, $hidden_values);
            $parent->addChild($name, $notice_object);

            return $notice_object;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_framework')) {
    /**
     * Function that returns instance of LiberoFramework class
     *
     * @return LiberoFramework
     */
    function libero_mikado_framework() {
        return LiberoFramework::get_instance();
    }
}

if(!function_exists('libero_mikado_options')) {
    /**
     * Returns instance of LiberoOptions class
     *
     * @return LiberoOptions
     */
    function libero_mikado_options() {
        return libero_mikado_framework()->mkdOptions;
    }
}

/**
 * Meta boxes functions
 */
if(!function_exists('libero_mikado_create_meta_box')) {
    /**
     * Adds new meta box
     *
     * @param $attributes
     *
     * @return bool|LiberoMetaBox
     */
    function libero_mikado_create_meta_box($attributes) {
        $scope = array();
        $title = '';
        $hidden_property = '';
        $hidden_values = array();
        $name = '';

        extract($attributes);

        if(!empty($scope) && $title !== '' && $name !== '') {
            $meta_box_obj = new LiberoMetaBox($scope, $title, $hidden_property, $hidden_values, $name);
            libero_mikado_framework()->mkdMetaBoxes->addMetaBox($name, $meta_box_obj);

            return $meta_box_obj;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_create_meta_box_field')) {
    /**
     * Generates meta box field object
     * $attributes can contain:
     *      $type - type of the field to generate
     *      $name - name of the field. This will be name of the option in database
     *      $default_value
     *      $label - title of the option
     *      $description
     *      $options - assoc array of option. Used only for select and radiogroup field types
     *      $args - assoc array of additional parameters. Used for dependency
     *      $hidden_property - name of option that hides field
     *      $hidden_values - array of valus of $hidden_property that hides field
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|LiberoField
     */
    function libero_mikado_create_meta_box_field($attributes) {
        $type            = '';
        $name            = '';
        $default_value   = '';
        $label           = '';
        $description     = '';
        $options         = array();
        $args            = array();
        $hidden_property = '';
        $hidden_values   = array();
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($type) && !empty($name)) {
            $field = new LiberoMetaField($type, $name, $default_value, $label, $description, $options, $args, $hidden_property, $hidden_values);

            if(is_object($parent)) {
                $parent->addChild($name, $field);

                return $field;
            }
        }

        return false;
    }
}


if(!function_exists('libero_mikado_add_multiple_images_field')) {
    /**
     * Generates meta box field object
     * $attributes can contain:
     *      $name - name of the field. This will be name of the option in database
     *      $label - title of the option
     *      $description
     *      $parent - parent object to which to add field
     *
     * @param $attributes
     *
     * @return bool|LiberoField
     */
    function libero_mikado_add_multiple_images_field($attributes) {
        $name            = '';
        $label           = '';
        $description     = '';
        $parent          = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {
            $field = new LiberoMultipleImages($name,$label,$description);

            if(is_object($parent)) {
                $parent->addChild($name, $field);

                return $field;
            }
        }

        return false;
    }
}


if(!function_exists('libero_mikado_get_font_weight_array')) {
    /**
     * Returns array of font weights
     *
     * @param bool $first_empty whether to add empty first member
     * @return array
     */
    function libero_mikado_get_font_weight_array($first_empty = false) {
        $font_weights = array();

        if($first_empty) {
            $font_weights[''] = 'Default';
        }

        $font_weights['100'] = '100';
        $font_weights['200'] = '200';
        $font_weights['300'] = '300';
        $font_weights['400'] = '400';
        $font_weights['500'] = '500';
        $font_weights['600'] = '600';
        $font_weights['700'] = '700';
        $font_weights['800'] = '800';
        $font_weights['900'] = '900';

        return $font_weights;
    }
}

if(!function_exists('libero_mikado_get_text_transform_array')) {
    /**
     * Returns array of text transforms
     *
     * @param bool $first_empty
     * @return array
     */
    function libero_mikado_get_text_transform_array($first_empty = false) {
        $text_transforms = array();

        if($first_empty) {
            $text_transforms[''] = '';
        }

        $text_transforms['none'] = 'None';
        $text_transforms['capitalize'] = 'Capitalize';
        $text_transforms['uppercase'] = 'Uppercase';
        $text_transforms['lowercase'] = 'Lowercase';

        return $text_transforms;
    }
}

if(!function_exists('libero_mikado_get_font_style_array')) {
    /**
     * Returns array of font styles
     *
     * @param bool $first_empty
     * @return array
     */
    function libero_mikado_get_font_style_array($first_empty = false) {
        $font_styles = array(
            'normal' => 'normal',
            'italic' => 'italic'
        );

        return $first_empty ? array_merge(array('' => ''), $font_styles) : $font_styles;
    }
}

if(!function_exists('libero_mikado_get_text_decorations')) {
    /**
     * Returns array of text transforms
     *
     * @param bool $first_empty
     * @return array
     */
    function libero_mikado_get_text_decorations($first_empty = false) {
        $text_decorations = array(
            'none'      => 'none',
            'underline' => 'underline'
        );

        return $first_empty ? array_merge(array('' => ''), $text_decorations) : $text_decorations;
    }
}

if(!function_exists('libero_mikado_is_font_option_valid')) {
    /**
     * Checks if font family option is valid (different that -1)
     *
     * @param $option_name
     *
     * @return bool
     */
    function libero_mikado_is_font_option_valid($option_name) {
        return $option_name !== '-1' &&  $option_name !== '';
    }
}

if(!function_exists('libero_mikado_get_font_option_val')) {
    /**
     * Returns font option value without + so it can be used in css
     *
     * @param $option_val
     *
     * @return mixed
     */
    function libero_mikado_get_font_option_val($option_val) {
        $option_val = str_replace('+', ' ', $option_val);

        return $option_val;
    }
}

if(!function_exists('libero_mikado_add_admin_twitter_button')) {

    /**
     * Generates twitter button field
     *
     * @param $attributes
     *
     * @return bool|ElatedVirtuosoTwitterFramework
     */
    function libero_mikado_add_admin_twitter_button($attributes) {
        $name = '';
        $parent = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {
            $field = new LiberoTwitterFramework();

            if(is_object($parent)) {
                $parent->addChild($name, $field);
            }

            return $field;
        }

        return false;
    }
}

if(!function_exists('libero_mikado_add_admin_instagram_button')) {

    /**
     * Generates instagram button field
     *
     * @param $attributes
     *
     * @return bool|LiberoInstagramFramework
     */
    function libero_mikado_add_admin_instagram_button($attributes) {
        $name = '';
        $parent = '';

        extract($attributes);

        if(!empty($parent) && !empty($name)) {

            $field = new LiberoInstagramFramework();
            
            if(is_object($parent)) {
                $parent->addChild($name, $field);
            }

            return $field;
        }

        return false;
    }
}
