<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;



use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\Utility\Inflector;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;

class PagesController extends AppController {
    public $paginate = [
            'limit' => 10,
    ];

     public function initialize() {
        parent::initialize();
        $this->loadComponent('Settings');
        $this->loadComponent('Trans');
         $this->Settings->verifylogin($this, "pages");
    }

	public function index() {
	    $this->loadComponent('Document');
        $this->set('doc_comp',$this->Document);
        $this->getAllClient();
	    $this->loadModel('Clients');
        if(isset($_GET['orderflash']))
        $this->Flash->success($this->Trans->getString("flash_orderdraft"));
        $userid=$this->request->session()->read('Profile.id');
		$setting = $this->Settings->get_permission($userid);
        if(isset($setting->client_list) && $setting->client_list==0) {
            $this->set('hideclient',1);
        }
        else
        $this->set('hideclient',0);
		$this->set('client', $this->paginate($this->Clients));
        $this->loadproducts();
        $this->set('forms',  TableRegistry::get('order_products')->find('all'));
        $this->getsubdocument_topblocks($userid);
	}
    
    function contact (){
        
    }

    function loadproducts($VariableName = 'products'){
        $products = TableRegistry::get('product_types')->find('all');
        $this->set($VariableName,  $products);
    }

    function getenabledprovinces($ProductID, $Province = "ALL"){
        $forms = array();
        $items = TableRegistry::get('order_provinces')->find("all")->where(['ProductID' => $ProductID, "Province" => $Province]);
        foreach($items as $item){
            $forms[] = $item->ProductID;
        }
        return implode(",", $forms);
    }

    function org_chart(){
    }
    
    function test(){
        $this->layout = 'blank';
    }
    
    function edit($slug){
        $_POST["languages"] = 'English,French';
        $languages = explode(",", $_POST["languages"]);
        foreach($languages as $language){
            if($language == "English"){ $language = "";}
            $con['title' . $language] = $_POST['title' . $language];
            $con['desc' . $language] = $_POST['desc' . $language];
        }
        $pages = TableRegistry::get("contents");
        $query = $pages->query();
                    $query->update()
                    ->set($con)
                    ->where(['slug'=>$slug])
                    ->execute();
         $this->Flash->success($this->Trans->getString("flash_pagesaved"));
        $this->redirect('/profiles/settings');
    }

    function get_content($slug){
        $content = TableRegistry::get("contents");
        $l =  $content->find()->where(['slug'=>$slug])->first();
        $this->response->body(($l));
        return $this->response;
        die();
    }

    function cms($slug){
    }

    function getsubdocument_topblocks($UserID){
        $table = TableRegistry::get('order_products_topblocks');
        $query = $table->find()->select()->where(['UserID' => $UserID])->order(['ProductID' => 'asc']);
        $products = TableRegistry::get('order_products')->find('all');
        foreach($products as $product){
            $product->TopBlock = 0;
            if(is_object($this->FindIterator($query, "ProductID", $product->number))) {$product->TopBlock = 1;}
        }
        $this->set("theproductlist", $products);
    }

    function FindIterator($ObjectArray, $FieldName, $FieldValue){
        foreach($ObjectArray as $Object){
            if ($Object->$FieldName == $FieldValue){return $Object;}
        }
        return false;
    }

    function getAllClient(){
        $query = TableRegistry::get('Clients')->find('all');
        $this->set('clients', $query);
    }

    function view($slug){
        $content = TableRegistry::get("contents");
        $l =  $content->find()->where(['slug'=>$slug])->first();
        $this->set('content',$l);
    }
    function recent_more(){
        $this->layout = 'blank';
    }
    
    
    function test_email(){
        $this->Mailer->handleevent("test", array("email"=> array('reshma.alee@gmail.com','justdoit_2045@hotmail.com')));
        die('here');
    }
    
}
