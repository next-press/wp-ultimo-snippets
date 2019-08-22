<?php
/**
 * Adds Intercom code to Ultimo's signup.
 *
 * This can also be used to insert other JavaScript integration snippets.
 *
 * INSTRUCTION :
 * You can either replace the entire snippet with your own, or just change your app_id below.
 * To replace the entire intercom code, delete the codes between <!-- INTERCOM CODE STARTS HERE --> and <!-- INTERCOM CODE ENDS HERE --> 
 * then paste your new set of intercom code on the same spot.
 *
 * To change the app_id and leave the rest of the code intact, juse replace the value of APP_ID variable found on line 23
 * 
 *
 * @return void
 */
function wu_add_intercom() { ?>

<!-- INTERCOM CODE STARTS HERE -->

<script>

  var APP_ID = "YOUR_INTERCOM_APP_ID_HERE";

 window.intercomSettings = {
    app_id: APP_ID
  };

</script>

<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/' + APP_ID;var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

<!-- INTERCOM CODE ENDS HERE -->

<?php } // end wu_add_intercom;

add_action('wu_signup_footer', 'wu_add_intercom');
