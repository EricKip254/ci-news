<?php 
namespace App\Controllers;

use CodeIgniter\CodeIgniter;
use App\Models\NewsModel;


class News extends BaseController{

    public function index(){
        // create new instance of NewsModel
        $model = model(NewsModel::class);

        // fetch all
        $data = [
            'news' => $model->getNews(),
            'title' => 'News Archive',
        ];
        
        // return the object views
        return view('templates/header', $data)
                . view('news/index')
                . view('templates/footer');
    }

    // calling a particular item
    public function view($slug = null){
        // $model = new NewsModel(); used when not in use
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);
    }
}
?>