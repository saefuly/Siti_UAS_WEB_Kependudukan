<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class pdf{
	public function create($html,$filename){
		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$dompdf = new Dompdf($options);
		$context = stream_context_create([
			'ssl' => [
				'verify_peer' => FALSE,
				'verify_peer_name' => FALSE,
				'allow_self_signed' => TRUE
			]
		]);
		$dompdf->setHttpContext($context);
		$dompdf->loadHtml($html);
		$dompdf->render();
		$dompdf->stream($filename.'.pdf');
	}
}

?>