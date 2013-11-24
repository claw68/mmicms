<?php
	function render_layout($view, $navigation, $data){
		$CI =& get_instance();
		$content = $CI->load->view($view, $data, TRUE);
		$navigation = $CI->load->view('template/navigation', $navigation, TRUE);
		$content_class = new stdClass;
		$content_class->navigation = $navigation;
		$content_class->content = $content;
		$CI->load->view('template/main', $content_class);
	}
	function admin_navigation(){
		$navigation = Array();
		$navigation[] = (object) Array('url' => 'admin/dashboard', 'label' => 'Dashboard');
		$navigation[] = (object) Array('url' => 'admin/contestant', 'label' => 'Contestant');
		$navigation[] = (object) Array('url' => 'admin/criteria', 'label' => 'Criteria');
		$navigation[] = (object) Array('url' => 'admin/event', 'label' => 'Event');
		$navigation[] = (object) Array('url' => 'admin/score', 'label' => 'Score');
		$navigation[] = (object) Array('url' => 'admin/user', 'label' => 'User');
		return $navigation;
	}
?>