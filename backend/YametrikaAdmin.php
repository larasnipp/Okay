<?PHP

require_once('api/Okay.php');

class YametrikaAdmin extends Okay
{
 
  public function fetch()
  {

 		if($this->request->method('post') && !empty($_POST))
		{
			$this->settings->yandex_metrika_app_id = $this->request->post('yandex_metrika_app_id');
			$this->settings->yandex_metrika_token = $this->request->post('yandex_metrika_token');
			$this->settings->yandex_metrika_counter_id = $this->request->post('yandex_metrika_counter_id');
			$this->design->assign('message_success', 'saved');
		}

 	return $this->design->fetch('yametrika.tpl');
  }
}