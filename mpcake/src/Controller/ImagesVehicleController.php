<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * ImagesVehicle Controller
 *
 * @property \App\Model\Table\ImagesVehicleTable $ImagesVehicle
 *
 * @method \App\Model\Entity\ImagesVehicle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagesVehicleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vehicles']
        ];
        $imagesVehicle = $this->paginate($this->ImagesVehicle);

        $this->set(compact('imagesVehicle'));
    }

    /**
     * View method
     *
     * @param string|null $id Images Vehicle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagesVehicle = $this->ImagesVehicle->get($id, [
            'contain' => ['Vehicles']
        ]);

        $this->set('imagesVehicle', $imagesVehicle);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagesVehicle = $this->ImagesVehicle->newEntity();
        if ($this->request->is('post')) {
            $imagesVehicle = $this->ImagesVehicle->patchEntity($imagesVehicle, $this->request->data);
            if ($this->ImagesVehicle->save($imagesVehicle)) {
                $this->Flash->success(__('The {0} has been saved.', 'Images Vehicle'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Images Vehicle'));
            }
        }
        $vehicles = $this->ImagesVehicle->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('imagesVehicle', 'vehicles'));
        $this->set('_serialize', ['imagesVehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Images Vehicle id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagesVehicle = $this->ImagesVehicle->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagesVehicle = $this->ImagesVehicle->patchEntity($imagesVehicle, $this->request->data);
            if ($this->ImagesVehicle->save($imagesVehicle)) {
                $this->Flash->success(__('The {0} has been saved.', 'Images Vehicle'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Images Vehicle'));
            }
        }
        $vehicles = $this->ImagesVehicle->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('imagesVehicle', 'vehicles'));
        $this->set('_serialize', ['imagesVehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Images Vehicle id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagesVehicle = $this->ImagesVehicle->get($id);
        if ($this->ImagesVehicle->delete($imagesVehicle)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Images Vehicle'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Images Vehicle'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
