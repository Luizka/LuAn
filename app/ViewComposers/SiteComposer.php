<?php 
namespace app\ViewComposers;
use illuinate\Contakts\View\View;
class SiteComposer{
	public function compose( View $view){
		
		$test='ok';
		$view->with)('test',$test);
		{{$test}}
	}
}