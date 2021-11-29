<?php
    $fonts = [
        'zillaslab-light' => 'Zilla Slab Light',
        'zillaslab-lightitalic' => 'Zilla Slab Light Italic',
        'zillaslab-regular' => 'Zilla Slab Regular',
        'zillaslab-regularitalic' => 'Zilla Slab Regular Italic',
        'zillaslab-medium' => 'Zilla Slab Medium',
        'zillaslab-mediumitalic' => 'Zilla Slab Medium Italic',
        'zillaslab-semibold' => 'Zilla Slab SemiBold',
        'zillaslab-semibolditalic' => 'Zilla Slab SemiBold Italic',
        'zillaslab-bold' => 'Zilla Slab Bold',
        'zillaslab-bolditalic' => 'Zilla Slab Bold Italic',
        'zillaslabhighlight-bold' => 'Zilla Slab Highlight Bold',
        'zillaslabhighlight-regular' => 'Zilla Slab Highlight Regular',
    ];

    $selected_font = $args['font'] ?: 'zillaslab-regularitalic';
    $selected_size = $args['size'] ?: 200;
    $text = $args['text'] ?: 'Zilla Slab';
    $text_color = $args['text_color'] ?: '#ffff98';
?>
<div class="col col-lg offset-none offset-lg-none standard-section">

    <div class="text wysiwyg-content">
        <div class="type-controls">
            <div class="select-wrap input">
                <select>
                    <?php foreach($fonts as $key => $name): ?>
                        <option <?php echo ($selected_font == $key ? 'selected' : '') ?> value="<?php echo $key ?>"><?php echo $name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="range-select input">
                <div class="range-wrap">
                <input type="range" value="<?php echo $selected_size ?>" min="1" max="200">
                </div>
                <span class="value"><?php echo $selected_size ?>px</span>
            </div>
        </div>
        <div class="type-output <?php echo $selected_font ?>" style="font-size: <?php echo $selected_size ?>px;">
            <p><span style="color: <?php echo $text_color ?>"><?php echo $text ?></span></p>
        </div>
    </div>
</div>