<?php
namespace Opencart\Install\Controller\Common;
/**
 * Class Header
 *
 * @package Opencart\Install\Controller\Common
 */
class Header extends \Opencart\System\Engine\Controller {
	/**
	 * @return string
	 */
	public function index(): string {
		$this->load->language('common/header');
		
		$data['title'] = $this->document->getTitle();
		$data['description'] = $this->document->getDescription();
		$data['base'] = HTTP_SERVER;
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['direction'] = $this->language->get('direction');
		$data['lang'] = $this->language->get('code');

		return $this->load->view('common/header', $data);
	}
}