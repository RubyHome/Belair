<div class="ibox-content m_top1">
<?php
/* @var $this \ReportController */
/* @var $fileList array */

$this->breadcrumbs = ['Reports' => 'reports',
    'Log files inspection'
];

foreach ($fileList as $key => $file) {
    echo TbHtml::ajaxButton($file, 'getLogFile', [
        'type' => 'POST',
        'data' => ['fileKey' => $file],
        'success' => 'js:function(html){
                        $("#fileContent").html(html);
                        $("#fileContent").scrollTop($("#fileContent").prop("scrollHeight"));
                        $("#btn_' . $key . '").blur();
                    }',
            ], [
        'style' => 'margin-right: 5px;',
        'class' => 'btn btn-primary',
        'id' => "btn_$key"
    ]);
}
?>
</div>
<pre id="fileContent" style="overflow: scroll; width: 100%; max-height: 700px; margin-top: 15px;"></pre>