<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'name'  => get('name'),
      'phone' => get('phone'),
      'email' => get('email'),
      'subject' => get('subject'),
      'text'  => get('text')
    );
    $rules = array(
      'name'  => array('required'),
      'email' => array('required', 'email'),
      'subject' => array('required'),
      'text'  => array('required', 'min' => 3, 'max' => 3000),
    );
    $messages = array(
      'name'  => 'Please enter a valid name',
      'phone'  => 'Please enter a valid phone number',
      'email' => 'Please enter a valid email address',
      'subject' => 'Please enter a subject for your message',
      'text'  => 'Please enter a text between 3 and 3000 characters'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'contact@chapters.fr',
        'from'    => $data['email'],
        'subject' => 'New contact request',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('a-propos/thank-you');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};