<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CarLists Controller
 *
 * @property \App\Model\Table\CarListsTable $CarLists
 *
 * @method \App\Model\Entity\CarList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarListsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
	   public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }
    public function index()
    {
	
        $this->paginate = [
            'contain' => ['Users','Categories'],
        ];
		$search=[];
		$this->set('placeholder',['Search by  Seller Name , Car Name']);
		if(isset($this->request->query['search'])){  
				$keyword= trim($this->request->query['search']);
				$search[]=['OR'=>['Users.name LIKE' => "%$keyword%",'CarLists.name LIKE' => "%$keyword%"]];
				$this->request->data['search']=$this->request->query['search'];
				$this->set('search',$this->request->query['search']);
				}
			
				
        $carLists = $this->paginate($this->CarLists->find()->where([$search]));
		

        $this->set(compact('carLists'));
    }
	 public function list()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $carLists = $this->paginate($this->CarLists->find()->where(['user_id'=>$this->Auth->user('id')]));

        $this->set(compact('carLists'));
    }

    /**
     * View method
     *
     * @param string|null $id Car List id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carList = $this->CarLists->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('carList', $carList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carList = $this->CarLists->newEntity();
        if ($this->request->is('post')) {
            $carList = $this->CarLists->patchEntity($carList, $this->request->getData());
			$carList->user_id=$this->Auth->user('id');
			if($_FILES['image']['name']!=''){
						$this->loadComponent('UploadImage');
				 		$carList->image=$this->UploadImage->upload('cars',$_FILES['image'],'cars','CarLists');
					 
				 }
            if ($this->CarLists->save($carList)) {
				
                $this->Flash->success(__('The car list has been saved.'));

                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The car list could not be saved. Please, try again.'));
        }
       
		$category = $this->CarLists->Categories->find('list', [
    'keyField' => 'id',
    'valueField' => 'name'
]);
        $this->set(compact('carList','category'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Car List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carList = $this->CarLists->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
			$old=$carList ->image;
            $carList = $this->CarLists->patchEntity($carList, $this->request->getData());
			if($_FILES['image']['name']!=''){
						$this->loadComponent('UploadImage');
				 		$carList->image=$this->UploadImage->upload('cars',$_FILES['image'],'cars','CarLists');
					 
				 }else{
					$carList->image= $old;
				 }
            if ($this->CarLists->save($carList)) {
                $this->Flash->success(__('The car list has been saved.'));

                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The car list could not be saved. Please, try again.'));
        }
       $category = $this->CarLists->Categories->find('list', [
    'keyField' => 'id',
    'valueField' => 'name'
]);
        $this->set(compact('carList','category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Car List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carList = $this->CarLists->get($id);
        if ($this->CarLists->delete($carList)) {
            $this->Flash->success(__('The car list has been deleted.'));
        } else {
            $this->Flash->error(__('The car list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
