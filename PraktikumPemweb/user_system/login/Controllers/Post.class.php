<?php 
    class Post extends Controller {

        public function index() {
            //Load model
            $postModel = $this->loadModel('PostModel');

            //Get data from the model
            $posts = $postModel->getAll();

            //Load the view
            $this->loadView('posts', ['posts' => $posts]);
        }

        public function delete() {
            $id = $_POST['id'];

            $postModel = $this->loadModel('PostModel');
            
            $postModel->delete($id);

            header('Location: ?c=Post');
        }

    }