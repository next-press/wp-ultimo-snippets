<?php
/**
 * Adds Intercom code to Ultimo's signup.
 *
 * This can also be used to insert other JavaScript integration snippets.
 *
 * @author Arindo Duque - NextPress
 * @since 0.0.1
 *
 */

 /**
  * Adds the intercom snippet.
  *
  * You can either replace the entire snippet with your own, or just change your app_id below.
  *
  * @return void
  */
function wu_add_intercom() { ?>

<script>

  var APP_ID = "YOUR_INTERCOM_APP_ID_HERE";

 window.intercomSettings = {
    app_id: APP_ID
  };

</script>

<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/' + APP_ID;var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

<?php } // end wu_add_intercom;

add_action('wu_signup_footer', 'wu_add_intercom');
