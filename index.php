<?php
///use StaticFabric\StaticFactory;

//use FabricMethod\FileSaveFactory;
//use FabricMethod\MysqlSaveFactory;


/*use AbstractFactory\MysqlDatabaseFactory;
use AbstractFactory\SqliteDatabaseFactory;
use AbstractFactory\DatabaseFactory;

use Builder\MysqlQueryBuilder;
use Builder\SQLQueryBuilder;


//use Prototype\Post;
use Prototype\User;

//use Observer\Blog;
use Observer\SendMailPlugin;
use Observer\ChangeTextPlugin;
use Observer\ChangeTitlePlugin;

use Strategy\DocumentsSave;
use Strategy\ImagesSave;
use Strategy\BaseLogic;

use IteratorPattern\Blog;
use IteratorPattern\Post;

use TemplateMethod\Page;
use TemplateMethod\HomePage;
use TemplateMethod\AboutPage;
*/

/*use NullObject\Db;
use NullObject\User;
use NullObject\UserRepository;


use Mediator\Router;
use Mediator\Data;
use Mediator\App;
use Mediator\Page;
use Mediator\PageHelper;


*/
/*
use Command\User;
use Command\ChatInterface;
use Command\GoOnline;
use Command\GoOffline;*/

// use Facade\Db;
// use Facade\Log;
// use Facade\Mail;
// use Facade\Document;

// use Adapter\WebMoney;
// use Adapter\PaymentAdapter;

// use Composite\Form;
// use Composite\LabelElement;
// use Composite\InputElement;
// use Composite\FieldsetElement;

// use Decorator\BasicPage;
// use Decorator\HomePage;


use Bridge\SimpleSave;
use Bridge\SafeSave;
use Bridge\MysqlDriver;
use Bridge\SqliteDriver;



require "functions.php";
spl_autoload_register('project_autoload');

/*$file = FileSave::getInstance('user-logs');
$file->save(__DIR__);

$file = FileSave::getInstance('system-logs');
$file->save(__DIR__);

$file = FileSave::getInstance('user-logs');
$file->save(__DIR__);

$file = FileSave::getInstance('system-logs');
$file->save(__DIR__);*/

//$obj = StaticFactory::create('\StaticFabric\FactoryClass');
///$obj->save();

//$factory = new MysqlSaveFactory('127.0.0.1','root','','patterns');
//$factory->createSaver()->save("hello world");

/*function queryExecute(DatabaseFactory  $factory) {
    $obj = $factory->query();
    $obj->execute("INSERT INTO `messages`(`text`) VALUES ('test')");
}*/

//queryExecute(new MysqlDatabaseFactory('127.0.0.1','root','','patterns'));
//queryExecute(new SqliteDatabaseFactory('test.txt'));

/*
function queryExecute( SQLQueryBuilder $builder) {
    $query = $builder->
              select(['id','text'])->
              from("messages")->
              where("id",1)->
              getQuery();  

    echo $query;          
}

queryExecute(new MysqlQueryBuilder());
*/


//$user = new User('User');
//$post = new Post($user,'First Post','Hello world');

//$post->addComment('Hello');

//$post2 = clone $post;

//var_dump($post2);
//var_dump($post);

//$blog  = new Blog();
//$blog->title = " Hello world";
//$blog->text = " Some text ";

//$blog->attach(new SendMailPlugin(),"all");
//$blog->attach(new ChangeTextPlugin(),"blog:create");
//$blog->attach(new ChangeTitlePlugin(),"blog:update");

//$blog->update();

//echo $blog->title."<br>";
//echo $blog->text."<br>";

/*$obj = new BaseLogic(new ImagesSave('builder.png'));
$obj->execute();*/

function saveStrategy($strategyCollection) 
{
    foreach($strategyCollection as $item) {
        if($item instanceof \Strategy\IFileSave) {
            $item->save();
        }
    }

    return true;
}

//saveStrategy(array(
  //  new ImagesSave('builder.png'),
  //  new DocumentsSave('patterns.docx')
//));

/*$blog = new Blog();

$blog->addPost(new Post('title','text','author'));
$blog->addPost(new Post('title','text','author'));
$blog->addPost(new Post('title','text','author'));
$blog->addPost(new Post('title','text','author'));
$blog->addPost(new Post('title','text','author'));
$blog->addPost(new Post('title','text','author'));
$blog->addPost(new Post('title','text','author'));

foreach($blog as $post) {
    var_dump($post);
}*/

//$home  = new HomePage();
//$home->setContent();
//$home->output();

//$db = new Db('localhost','root','','patterns');
//$userRepository = new UserRepository($db);
//$user = $userRepository->fetchById(2);


///echo $user->getLogin();

//$router = new Router();
//new PageHelper(new Data(), $router, new Page());

//$router->request();


/*$chat = new ChatInterface();
$user = new User();

$chat->setCommand(new GoOffLIne($user));
$chat->run();
$chat->undo();
$chat->redo();
*/

// $db = new Db('localhost','root','','patterns');
// $log = new Log('logFile.txt');
// $mail = new Mail('admin@admin.com','subject','message','');

// $document = new Document($db, $log, $mail);
// $document->save("new document");


// $form = new WebMoney(['key'=>"asdasdasdas"]);
// $form->getFormPay(100);

// $adapter = new PaymentAdapter(new WebMoney(['key'=>"asdasdasdas"]));
// $adapter->pay(1000);



// $form = new Form();
// $form->addInput(new LabelElement("Label"));
// $form->addInput(new InputElement());

// $fieldset = new FieldsetElement();
// $fieldset->addInput(new LabelElement("Label2"));
// $fieldset->addInput(new InputElement());
// $fieldset->addInput(new LabelElement("Label3"));
// $fieldset->addInput(new InputElement());

// $form->addInput($fieldset);

// echo $form->render();


///$page = new BasicPage('Title');
// echo $page->getTitle();
// echo $page->render();

// $homepage = new HomePage($page);

// echo $homepage->getTitle();
// echo $homepage->render();

$mysqlDriver = new MysqlDriver("localhost", 'root','', 'patterns');
$sqliteDriver = new SqliteDriver("bridge.db");


$simpleSave = new SimpleSave($mysqlDriver, "hello");
$simpleSave->save();

$simpleSave = new SimpleSave($sqliteDriver, "hello");
$simpleSave->save();

$safeSave = new SafeSave($mysqlDriver,"hello", "md5" );
$safeSave->save();

$safeSave = new SafeSave($sqliteDriver,"hello", "md5" );
$safeSave->save();

