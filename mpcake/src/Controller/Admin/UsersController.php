<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\MailerAwareTrait;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    use MailerAwareTrait;

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','rememberPassword', 'changePassword']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {

                //enviar email depois que os dados forem salvos
                $this->getMailer('User')->send('welcome', [$user]);
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login() {

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function rememberPassword(){
        $user = $this->Users->newEntity();
        if(!empty($this->request->data))
        {
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($user = $this->Users->findByEmail($this->request->data['email'])->toArray())
            {
                $this->getMailer('User')->send('recovery', [$user]);
                $msg = 'Email enviado para sua caixa de email';
                $this->Flash->success($msg);
                return $this->redirect(['action' => 'rememberPassword']);

            } else {
                $msg = 'Email não encontrado';
                $this->Flash->error($msg);
                return $this->redirect(['action' => 'rememberPassword']);
            }
        }
   
    }
    $this->set(compact('user'));
    }

    public function changePassword(){
        $q_hash = $this->request->query('h');
        $q_email = $this->request->query('email');

        $user = $this->Users->newEntity();
        if($this->request->is(['post', 'put']))
        {
            $user = $this->Users->get($this->request->data['id']);
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user))
            {
                $this->Flash->sucess(__('The password has been saved.'));
                return $this->redirect(['action' => 'index']);

            }
            $this->Flash->error(__('The password could not be saved. Please, try again.'));

        }else
        {
            if($user = $this->Users->findByEmail($q_email)->toArray()){
                $hash = substr($user[0]['password'], 0, 25);
                if($hash == $q_hash){
                    $msg = 'Alterar senha do email: '.$q_email;
                    $this->Flash->set($msg);

                }else{
                    $msg = 'Você não tem permissão para alterar essa senha';
                    $this->Flash->set($msg);
                    $this->redirect(array('action' => 'rememberPassword'));
                }

            }
            $this->set('id', $user[0]['id']);
            $this->set(compact('user'));
        }
    }

    public function report(){
        if($this->request->is(['patch', 'post', 'put'])){
            //debug($this->request->data['checkbox']);

            $cat_ids = $this->request->data['checkbox'];

            $users = $this->Users->find('all')->where(['id IN' => $cat_ids]) -> toArray();

            $this->set('users', $users);
            $this->set('_serialize', ['users']);
        }
    }

}
