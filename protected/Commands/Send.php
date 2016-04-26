<?php

namespace App\Commands;

use App\Models\SendMail;
use T4\Console\Command;
use T4\Mail\Sender;
use T4\Mvc\View;

class Send
    extends Command
{
    public function actionMail()
    {
        $request = SendMail::find(['order' => '__id DESC', 'limit' => 1]);

        $email = $request->user->email;
        $fullName = $request->user->getFullName();
        $template = $request->nameTemplate . '.html';

        $view = new View('twig', ROOT_PATH_PROTECTED . '/Templates/Mail/');
        $mail = $view->render($template, [
            'title' => $request->paramTitle,
            'name' => $fullName,
            'content' => $request->paramContent
        ]);

        $mailer = new Sender();
        $mailer->sendMail($email, 'Письмо', $mail);
    }
}