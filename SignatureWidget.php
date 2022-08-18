<?php

namespace seisvalt\widgets;

/**
 * This is just an example.
 */
class SignatureWidget extends \yii\base\Widget
{
    public $url;
    public $width;
    public $height;
    public $save_png;
    public $save_jpg;
    public $save_svg;
    public $save_server;
    public $clear;
    public $change_color;
    public $undo;
    public $token;
    public $callback;
    public $description;
    private $save_buttons;
    private $action_buttons;

    public function init()
    {
        if ($this->token === null)
            $this->width = '';
        if ($this->width === null)
            $this->width = '300px';
        if ($this->height === null)
            $this->height = '200px';

        if ($this->save_server == true) {
            $this->save_buttons .= '<button type="button" class="button save" data-action="save-server" onclick="saveToServer(\'' . $this->url . '\')">Save in Database</button>';
        }
        if ($this->clear == true) {
            $this->action_buttons .= '<button type="button" class="button clear" data-action="clear">Clear</button>';
        }

        $js = "const token = {$this->token}; const urlCallback = {$this->callback};";
        $this->view->registerJs($js, 2);
        SignatureAsset::register($this->view);

    }

    public function run()
    {
        $signature = '
        <style>
        canvas{
            width: ' . $this->width . ';
            height: ' . $this->height . ';
        }
        </style>
         <div id="signature-pad" class="signature-pad">
            <div class="signature-pad--body">
                <canvas></canvas>
            </div>
            <div class="signature-pad--footer">
                <div class="description">' . $this->description . '</div>

                <div class="signature-pad--actions">
                    <div>
                        ' . $this->action_buttons . '
                    </div>
                    <div>
                    ' . $this->save_buttons . '
                    </div>
                </div>
            </div>
        </div>';
        return $signature;
    }
}
