<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

	/*permitir todas as views desse controller*/
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow();
	}

   
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       
    }

}
