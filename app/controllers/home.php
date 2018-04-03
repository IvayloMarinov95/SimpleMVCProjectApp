<?php
class Home extends Controller{
    protected $project;

    public function __construct(){
        $this->project = $this->model('Project');
    }
    public function index(){
        $projects = $this->project->all();
        $this->view('show-projects', ['projects' => $projects]);
    }
    public function create()
    {
        if(isset($_FILES['file'])){
            $file = $_FILES['file']['name'];
            $target =  __DIR__ . "\..\projects\\". $file; 
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
             echo "Image uploaded successfully";
           }
           else{
             echo "Failed to upload image";
           }
          }        
        $this->project->create([
            'name' => $_POST['name'],
            'student_name' => $_POST['student_name'],
            'date' => date("Y-m-d"),
            'document_name' => $file
        ]);
        header("Location: http://localhost/simplemvc/public/home/"); 

    }
    public function add() 
    {
        $this->view('add-project');
    }

    public function info(){
        $project = $this->project->find($_GET['id']);
        $this->view('project-details', ['project' => $project]);
    }
    
    public function edit(){
        $project = $this->project->find($_GET['id']);
        $this->view('edit-project', ['project' => $project]);
    }

    public function update(){
        $project = Project::find($_GET['id'])
                            ->update(['name' => $_POST['name'], 'student_name' => $_POST['student_name']]);
        header("Location: http://localhost/simplemvc/public/home/");
    }

    public function delete(){
        $project = Project::find($_GET['id']);
        $project->delete();
       header("Location: http://localhost/simplemvc/public/home/");
    }
}