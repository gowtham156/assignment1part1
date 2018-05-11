{"filter":false,"title":"MailController.php","tooltip":"/app/Http/Controllers/MailController.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\Http\\Requests;","","class MailController extends Controller","{","    //","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","use Illuminate\\Http\\Request;","use Mail;","","use App\\Http\\Requests;","use App\\Http\\Controllers\\Controller;","","class MailController extends Controller {","   public function basic_email(){","      $data = array('name'=>\"Virat Gandhi\");","   ","      Mail::send(['text'=>'mail'], $data, function($message) {","         $message->to('abc@gmail.com', 'Tutorials Point')->subject","            ('Laravel Basic Testing Mail');","         $message->from('xyz@gmail.com','Virat Gandhi');","      });","      echo \"Basic Email Sent. Check your inbox.\";","   }","   public function html_email(){","      $data = array('name'=>\"Virat Gandhi\");","      Mail::send('mail', $data, function($message) {","         $message->to('abc@gmail.com', 'Tutorials Point')->subject","            ('Laravel HTML Testing Mail');","         $message->from('xyz@gmail.com','Virat Gandhi');","      });","      echo \"HTML Email Sent. Check your inbox.\";","   }","   public function attachment_email(){","      $data = array('name'=>\"Virat Gandhi\");","      Mail::send('mail', $data, function($message) {","         $message->to('abc@gmail.com', 'Tutorials Point')->subject","            ('Laravel Testing Mail with Attachment');","         $message->attach('C:\\laravel-master\\laravel\\public\\uploads\\image.png');","         $message->attach('C:\\laravel-master\\laravel\\public\\uploads\\test.txt');","         $message->from('xyz@gmail.com','Virat Gandhi');","      });","      echo \"Email Sent with attachment. Check your inbox.\";","   }","}"]}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["c"],"id":3},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["b"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["a"]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["g"],"id":4},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["o"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["w"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["t"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["h"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["a"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["m"]}],[{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["i"],"id":5},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["a"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["s"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"insert","lines":["."]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"insert","lines":["s"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"insert","lines":["n"]},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"insert","lines":["r"]}],[{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"insert","lines":["g"],"id":6}]]},"ace":{"folds":[],"scrolltop":114,"scrollleft":0,"selection":{"start":{"row":17,"column":9},"end":{"row":17,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1525263203502,"hash":"d4a67e2b4adf206367fcb24d10d60347e27d6abf"}