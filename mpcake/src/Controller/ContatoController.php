<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

/**
 * Galerias Controller
 *
 * @property \App\Model\Table\GaleriasTable $Galerias
 *
 * @method \App\Model\Entity\Galeria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
{
    public function beforeFilter(Event $event)
    {
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

         if ($this->request->is('ajax') || $this->request->is('post')) {
            try {
                $data = $this->request->getData()['data'];
                $mensagem = "Nome: {$data['Contato']['nome']}\n";
                $mensagem .= "E-mail: {$data['Contato']['email']}\n";
                $mensagem .= "Telefone: {$data['Contato']['telefone']}\n";
               
                $mensagem .= "MENSAGEM: {$data['Contato']['mensagem']}\n";
                $email = new Email('smtp');
                $Email->from('contato@nuvemdesenvolvimentoweb.com.br', $data['Contato']['nome']);
                #$Email->to('atendimento@vegcertificado.com.br');
               $Email->to('contato@nuvemdesenvolvimentoweb.com.br');
                $Email->replyTo($data['Contato']['email']);
                $Email->subject("Contato - Nuvem");
                $Email->send($mensagem);
                exit("true");
            } catch (Exception $e) {
                exit(debug($e->getMessage()));
            }
 
        }
        $title_for_layout = "Contato";
 
        $this->set(compact('title_for_layout'));
      
    }

}