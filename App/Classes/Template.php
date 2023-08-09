<?php

namespace App\Classes;

class Template {

	private function loader() {
		$folderView = realpath(__DIR__ . '/..');
		return new \Twig\Loader\FilesystemLoader([$folderView . '/Views/Site', $folderView . '/Views/Admin']);
	}

	public function init() {
		return new \Twig\Environment($this->loader(), [
			'debug' => true,
			// 'cache' => ''
			'auto_reload' => true,
		]);
	}

}