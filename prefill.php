/**
 * Prefill domain title and URL fields on sign up
 */

<?php 

add_filter('wu_signup_fields_domain', function($fields) {
 
    if (isset($fields['url_preview']) && isset($_GET['new'])) {
 
        $name = esc_attr($_GET['new']);
 
        $signup = WU_Signup();
 
        if (empty($_POST)) {
 
            $signup->results = array('errors' => new WP_Error);
 
            $signup->results = array_merge($signup->results, array(
                'blogname' => $name,
            ));
 
        } // end if;
 
        $fields['url_preview']['content'] = wu_get_template_contents('signup/steps/step-domain-url-preview', array(
            'signup' => $signup,
        ));
 
    } // end if;
 
    foreach (array('blog_title', 'blogname') as $field) {
 
        if (isset($fields[$field]) && isset($_GET['new'])) {
 
            $name = esc_attr($_GET['new']);
 
            if ($field == 'blog_title') {
 
                $name = ucfirst($name);
 
            } // end if;
 
            $fields[$field]['attributes'] = array(
                'value' => $name,
            );
 
        } // end if;
 
    } // end foreach;
 
    return $fields;
 
});
