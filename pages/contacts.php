<? include(__DIR__ . '/../data/contacts.php'); ?>
<h1>
    <?= $contacts_title ?>
</h1>
<p>
    <?= nl2br($contacts_description) ?>
</p>
<div class="row">
    <div class="col-md-8">
        <div style="margin-bottom: 20px;">
            <? foreach($contacts as $contact): ?>
                <p style="line-height: 30px;">

                    <img src="<?= $contact['image_url'] ?>">

                    <? if($contact['value_type'] ==  'email'): ?>

                        <? $contact_values = array_map(function($value){
                            return sprintf('<a href="mailto:%s">%s</a>', $value, $value);
                        }, $contact['values']) ?>

                        <?= implode(', ', $contact_values) ?>

                    <? elseif($contact['value_type'] == 'skype'): ?>

                        <? $contact_values = array_map(function($value){
                            return sprintf('<a href="skype:%s?chat">%s</a>', $value, $value);
                        }, $contact['values']) ?>

                        <?= implode(', ', $contact_values) ?>

                    <? elseif($contact['value_type'] == 'url'): ?>

                        <? $contact_values = array_map(function($value){

                            $url = $value;
                            if  ( $ret = parse_url($url) ) {

                                if ( !isset($ret["scheme"]) )
                                {
                                    $url = "http://{$url}";
                                }
                            }

                            return sprintf('<a href="%s" target="_blank">%s</a>', $url, $value);

                        }, $contact['values']) ?>

                        <?= implode(', ', $contact_values) ?>

                    <? else: ?>
                        <span>
                    <?= implode(', ', $contact['values'])?>
                </span>
                    <? endif; ?>

                </p>
            <? endforeach; ?>
        </div>
        <h4>
            <?= $work_schedule_title ?>
        </h4>
        <p>
            <?= nl2br($work_schedule) ?>
        </p>
    </div>
    <div class="col-md-4 text-center">
        <img src="<?= $qr_code_url ?>">
    </div>
</div>