<?php
class BitrixController{
   function ejecutarWorkflowAPI($template)
{
	$result = CRest::call(
		'bizproc.workflow.start',
		[
			"TEMPLATE_ID" => $template,
			"DOCUMENT_ID" => ["crm", "CCrmDocumentContact", 391],
		]
	);
	return $result;
}
}