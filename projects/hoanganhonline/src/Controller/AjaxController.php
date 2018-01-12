<?php

/* 
 * Ajax controller
 */

namespace App\Controller;

use Cake\Mailer\Email;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->autoRender = false;
    }
    
    /**
     * Product detail
     */
    public function sendcontactmail() {
        $data = $this->request->data();
        if (!empty($data['email'])) {
            $email = new Email();
            $email
                ->template('contact', 'default')
                ->viewVars(['content' => $data])
                ->emailFormat('html')
                ->to('info@hoanganhonline.com')
//                ->from('support@hoanganhonline.com')
                ->send();
        }
    }
}