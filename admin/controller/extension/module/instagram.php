<?php
class ControllerExtensionModuleInstagram extends Controller {
	private $error = array();

	public function index() {
		$file = DIR_CATALOG . 'view/javascript/instagram/css/mycustom.css';

		$this->load->language('extension/module/instagram');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addScript('view/javascript/spectrum/spectrum.js');
		$this->document->addStyle('view/javascript/spectrum/spectrum.css');

		$this->document->addStyle('view/javascript/codemirror/theme/ambiance.css');
		$this->document->addStyle('view/javascript/codemirror/addons/show-hint.css');
		$this->document->addStyle('view/javascript/codemirror/lib/codemirror.css');

		$this->document->addScript('view/javascript/codemirror/lib/codemirror.js');
		$this->document->addScript('view/javascript/codemirror/addons/css-hint.js');
		$this->document->addScript('view/javascript/codemirror/addons/show-hint.js');
		$this->document->addScript('view/javascript/codemirror/css.js');

		$this->load->model('setting/setting');
		error_reporting(0);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$css = $this->request->post['module_instagram_style'];
			unset($this->request->post['module_instagram_style']);
			$this->model_setting_setting->editSetting('module_instagram', $this->request->post);

			$handle = fopen($file, 'w+');			

			fwrite($handle, html_entity_decode($css));			

			fclose($handle);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if(isset($this->session->data['success_instagram'])) {
			$data['text_success_clear'] = $this->session->data['success_instagram'];

			unset($this->session->data['success_instagram']);
		}else{
			$data['text_success_clear'] = '';
		}

		if (isset($this->session->data['error_instagram'])) {
			$data['error_warning'] = $this->session->data['error_instagram'];

			unset($this->session->data['error_instagram']);
		} elseif (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}


		if (isset($this->error['instagram_access_token'])) {
			$data['error_access_token'] = $this->error['instagram_access_token'];
		} else {
			$data['error_access_token'] = '';
		}

		if (isset($this->error['instagram_photo_amount'])) {
			$data['error_photo_amount'] = $this->error['instagram_photo_amount'];
		} else {
			$data['error_photo_amount'] = '';
		}	

		if (isset($this->error['instagram_photo_size'])) {
			$data['error_photo_size'] = $this->error['instagram_photo_size'];
		} else {
			$data['error_photo_size'] = '';
		}

		if (isset($this->error['instagram_plugin_slide_show'])) {
			$data['error_slide_show'] = $this->error['instagram_plugin_slide_show'];
		} else {
			$data['error_slide_show'] = '';
		}

		if (isset($this->error['instagram_plugin_slide_scroll'])) {
			$data['error_slide_scroll'] = $this->error['instagram_plugin_slide_scroll'];
		} else {
			$data['error_slide_scroll'] = '';
		}

		if (isset($this->error['instagram_plugin_auto_play_speed'])) {
			$data['error_auto_play_speed'] = $this->error['instagram_plugin_auto_play_speed'];
		} else {
			$data['error_auto_play_speed'] = '';
		}

		if (isset($this->error['instagram_arrow_color'])) {
			$data['error_color'] = $this->error['instagram_arrow_color'];
		} else {
			$data['error_color'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
			);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
			);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'], true)
			);

		$data['action'] = $this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['download'] = $this->url->link('extension/module/instagram/download', 'user_token=' . $this->session->data['user_token'], true);		
		$data['clear'] = $this->url->link('extension/module/instagram/clear', 'user_token=' . $this->session->data['user_token'], true);		
		$data['reset'] = $this->url->link('extension/module/instagram/reset', 'user_token=' . $this->session->data['user_token'], true);	

		if(isset($this->request->post['module_instagram_access_token'])) {
			$data['module_instagram_access_token'] = $this->request->post['module_instagram_access_token'];
		} elseif ($this->config->get('module_instagram_access_token')){
			$data['module_instagram_access_token'] = $this->config->get('module_instagram_access_token');
		} else{
			$data['module_instagram_access_token'] = '';
		}

		if(isset($this->request->post['module_instagram_photo_amount'])){
			$data['module_instagram_photo_amount'] = $this->request->post['module_instagram_photo_amount'];
		} elseif ($this->config->get('module_instagram_photo_amount')) {
			$data['module_instagram_photo_amount'] = $this->config->get('module_instagram_photo_amount');
		} else {
			$data['module_instagram_photo_amount'] = 50;
		}
		
		if(isset($this->request->post['module_instagram_photo_size'])){
			$data['module_instagram_photo_size'] = $this->request->post['module_instagram_photo_size'];
		} elseif ($this->config->get('module_instagram_photo_size')) {
			$data['module_instagram_photo_size'] = $this->config->get('module_instagram_photo_size');
		} else {
			$data['module_instagram_photo_size'] = 320;
		}

		if(isset($this->request->post['module_instagram_plugin_slide_show'])){
			$data['module_instagram_plugin_slide_show'] = $this->request->post['module_instagram_plugin_slide_show'];
		} elseif ($this->config->get('module_instagram_plugin_slide_show')) {
			$data['module_instagram_plugin_slide_show'] = $this->config->get('module_instagram_plugin_slide_show');
		} else {
			$data['module_instagram_plugin_slide_show'] = 4;
		}		

		if(isset($this->request->post['module_instagram_module_name'])){
			$data['module_instagram_module_name'] = $this->request->post['module_instagram_module_name'];
		} elseif ($this->config->get('module_instagram_module_name')) {
			$data['module_instagram_module_name'] = $this->config->get('module_instagram_module_name');
		} else {
			$data['module_instagram_module_name'] = 'Instagram Feed';
		}

		if(isset($this->request->post['module_instagram_plugin_auto_play'])){
			$data['module_instagram_plugin_auto_play'] = $this->request->post['module_instagram_plugin_auto_play'];
		} elseif ($this->config->get('module_instagram_plugin_auto_play')) {
			$data['module_instagram_plugin_auto_play'] = $this->config->get('module_instagram_plugin_auto_play');
		} else {
			$data['module_instagram_plugin_auto_play'] = false;
		}

		if(isset($this->request->post['module_instagram_plugin_auto_play_speed'])){
			$data['module_instagram_plugin_auto_play_speed'] = $this->request->post['module_instagram_plugin_auto_play_speed'];
		} elseif ($this->config->get('module_instagram_plugin_auto_play_speed')) {
			$data['module_instagram_plugin_auto_play_speed'] = $this->config->get('module_instagram_plugin_auto_play_speed');
		} else {
			$data['module_instagram_plugin_auto_play_speed'] = 3000;
		}

		if(isset($this->request->post['module_instagram_plugin_slide_scroll'])){
			$data['module_instagram_plugin_slide_scroll'] = $this->request->post['module_instagram_plugin_slide_scroll'];
		} elseif ($this->config->get('module_instagram_plugin_slide_scroll')) {
			$data['module_instagram_plugin_slide_scroll'] = $this->config->get('module_instagram_plugin_slide_scroll');
		} else {
			$data['module_instagram_plugin_slide_scroll'] = 1;
		}

		if(isset($this->request->post['module_instagram_plugin_arrows'])){
			$data['module_instagram_plugin_arrows'] = $this->request->post['module_instagram_plugin_arrows'];
		} elseif ($this->config->get('module_instagram_plugin_arrows')) {
			$data['module_instagram_plugin_arrows'] = $this->config->get('module_instagram_plugin_arrows');
		} else {
			$data['module_instagram_plugin_arrows'] = false;
		}

		if(isset($this->request->post['module_instagram_plugin_dots'])){
			$data['module_instagram_plugin_dots'] = $this->request->post['module_instagram_plugin_dots'];
		} elseif ($this->config->get('module_instagram_plugin_dots')) {
			$data['module_instagram_plugin_dots'] = $this->config->get('module_instagram_plugin_dots');
		} else {
			$data['module_instagram_plugin_dots'] = false;
		}

		if (isset($this->request->post['module_instagram_arrow_color']) ) {
			$data['module_instagram_arrow_color'] = $this->request->post['module_instagram_arrow_color'];
		} elseif ($this->config->get('module_instagram_arrow_color')) {
			$data['module_instagram_arrow_color'] = $this->config->get('module_instagram_arrow_color');
		}else{
			$data['module_instagram_arrow_color'] = '#2096C3';
		}

		if (isset($this->request->post['module_instagram_hover_heart'])) {
			$data['module_instagram_hover_heart'] = $this->request->post['module_instagram_hover_heart'];
		} else {
			$data['module_instagram_hover_heart'] = $this->config->get('module_instagram_hover_heart');
		}

		if (isset($this->request->post['module_instagram_text_align']) ) {
			$data['module_instagram_text_align'] = $this->request->post['module_instagram_text_align'];
		} elseif ($this->config->get('module_instagram_text_align')) {
			$data['module_instagram_text_align'] = $this->config->get('module_instagram_text_align');
		}else{
			$data['module_instagram_text_align'] = 'left';
		}

		if (isset($this->request->post['module_instagram_status'])) {
			$data['module_instagram_status'] = $this->request->post['module_instagram_status'];
		} elseif ($this->config->get('module_instagram_status')) {			
			$data['module_instagram_status'] = $this->config->get('module_instagram_status');
		} else {
			$data['module_instagram_status'] = 0;
		}

		if (isset($this->request->post['module_instagram_css_name'])) {
			$data['module_instagram_css_name'] = $this->request->post['module_instagram_css_name'];
		} elseif ($this->config->get('module_instagram_css_name')) {
			$data['module_instagram_css_name'] = $this->config->get('module_instagram_css_name');
		} else {
			$data['module_instagram_css_name'] = 'mycustom.css';
		}

		if(isset($this->request->post['module_instagram_style'])){
			$data['module_instagram_style'] = $this->request->post['module_instagram_style'];
		} elseif ( file_exists($file) ) {
			$data['module_instagram_style'] = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
		} else {
			$data['module_instagram_style'] = file_get_contents(DIR_CATALOG . 'view/javascript/instagram/css/custom.css', FILE_USE_INCLUDE_PATH, null);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$data['download'] = $this->url->link('extension/module/instagram/download', 'user_token=' . $this->session->data['user_token'], true);		
		$data['clear'] = $this->url->link('extension/module/instagram/clear', 'user_token=' . $this->session->data['user_token'], true);

		$data['log'] = '';
		$data['log_instagram'] = '';

		$file = DIR_LOGS . 'instagram.log';

		if (file_exists($file)) {
			$size = filesize($file);

			if ($size >= 5242880) {
				$suffix = array(
					'B',
					'KB',
					'MB',
					'GB',
					'TB',
					'PB',
					'EB',
					'ZB',
					'YB'
					);

				$i = 0;

				while (($size / 1024) > 1) {
					$size = $size / 1024;
					$i++;
				}

				$data['error_warning'] = sprintf($this->language->get('error_warning'), basename($file), round(substr($size, 0, strpos($size, '.') + 4), 2) . $suffix[$i]);
			} else {
				$data['log_instagram'] = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
			}
		}

		$this->response->setOutput($this->load->view('extension/module/instagram', $data));		
	}

	public function download() {
		$this->load->language('extension/module/instagram');

		$file = DIR_LOGS . 'instagram.log';		

		if (file_exists($file) && filesize($file) > 0) {
			$this->response->addheader('Pragma: public');
			$this->response->addheader('Expires: 0');
			$this->response->addheader('Content-Description: File Transfer');
			$this->response->addheader('Content-Type: application/octet-stream');
			$this->response->addheader('Content-Disposition: attachment; filename="' . $this->config->get('config_name') . '_' . date('Y-m-d_H-i-s', time()) . '_error.log"');
			$this->response->addheader('Content-Transfer-Encoding: binary');

			$this->response->setOutput(file_get_contents($file, FILE_USE_INCLUDE_PATH, null));
		} else {
			$this->session->data['error_instagram'] = sprintf($this->language->get('error_warning'), basename($file), '0B');

			$this->response->redirect($this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'], true));
		}
	}

	public function clear() {
		$this->load->language('extension/module/instagram');

		if (!$this->user->hasPermission('modify', 'extension/module/instagram')) {
			$this->session->data['error'] = $this->language->get('error_permission');
		} else {
			$file = DIR_LOGS . 'instagram.log';

			$handle = fopen($file, 'w+');

			fclose($handle);

			$this->session->data['success_instagram'] = $this->language->get('text_success');
		}

		$this->response->redirect($this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
	}

	public function reset() {
		$this->load->language('extension/module/instagram');

		$file = DIR_CATALOG . 'view/javascript/instagram/css/mycustom.css';

		if( file_exists( $file )){
			if( unlink($file) ){
				$this->session->data['success_instagram'] = $this->language->get('text_confirm_reset');
			}else {				
				$this->session->data['error_instagram'] = $this->language->get('erro_reset_file');
			}
		} else {
			$this->session->data['error_instagram'] = $this->language->get('erro_reset_blank');
		}
		$this->response->redirect($this->url->link('extension/module/instagram', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/instagram')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['module_instagram_access_token']) {
			$this->error['instagram_access_token'] = $this->language->get('error_access_token');
		}

		if (!is_numeric($this->request->post['module_instagram_photo_amount'])){
			$this->error['instagram_photo_amount'] = $this->language->get('error_photo_amount');
		}

		if (!is_numeric($this->request->post['module_instagram_photo_size'])){
			$this->error['instagram_photo_size'] = $this->language->get('error_photo_size');
		}

		if (!is_numeric($this->request->post['module_instagram_plugin_slide_show'])){
			$this->error['instagram_plugin_slide_show'] = $this->language->get('error_slide_show');
		}

		if (!is_numeric($this->request->post['module_instagram_plugin_slide_scroll'])){
			$this->error['instagram_plugin_slide_scroll'] = $this->language->get('error_slide_scroll');
		}

		if (!is_numeric($this->request->post['module_instagram_plugin_auto_play_speed'])){
			$this->error['instagram_plugin_auto_play_speed'] = $this->language->get('error_auto_play_speed');
		}

		if(!preg_match('/^#([A-Fa-f0-9]{6})$/', $this->request->post['module_instagram_arrow_color'])){
			$this->error['instagram_arrow_color'] = $this->language->get('error_color');
		}

		return !$this->error;
	}
}